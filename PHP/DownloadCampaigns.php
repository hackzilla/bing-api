<?php

// Copyright 2013 Microsoft Corporation

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

//    http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// The downloadId argument is optional. Set downloadId to the ID of a download
// request that did not finish.

// Command line usage:
// php.exe DownloadCampaigns [downloadId]
//

// Include the BingAds\Bulk namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=296529
include 'bingads\BulkClasses.php';

// Specify the BingAds\Bulk objects that will be used.
use BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest;
use BingAds\Bulk\AdditionalEntity;
use BingAds\Bulk\CampaignScope;
use BingAds\Bulk\GetDownloadStatusRequest;
use Bingads\Bulk\DownloadStatus;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = <CustomerIdGoesHere>;
$AccountId = <AccountIdGoesHere>;
$CampaignIds = array ( "<CommaSeperatedCampaignIdsGoHere>" );

// Bulk WSDL

$wsdl = "https://adcenterapi.microsoft.com/Api/Advertiser/v8/campaignmanagement/bulkService.svc?wsdl";


// Specify the file to download the campaigns to. Because the file is
// compressed use the .zip file extension.

$DownloadPath = "c:\\bulk\\campaigns.zip";

// The full path to the previously unzipped download file.
// This file is used to access the last sync time.

$PreviousDownloadPath = "C:\\bulk\\campaigns\\accounts.xml";

// Confirm that the download folder exist; otherwise, exit.

$length = strrpos($DownloadPath, '\\');
$folder = substr($DownloadPath, 0, $length);

if (!is_dir($folder))
{
    printf("The output folder, %s, does not exist.\nEnsure that the " .
        "folder exists and try again.", $folder);
    return;
}

try
{
    // See Usage for argument values.

    $proxy = new ClientProxy($UserName, $Password, $DeveloperToken, $AccountId, $CustomerId, $wsdl);

    if (!isset($argv[1])) // Request a new download
    {
        $downloadId = RequestDownload($PreviousDownloadPath, $proxy->GetAccountId(), $CampaignIds, $proxy);
    }
    else // User passed in the ID of an existing download request.
    {
        $downloadId = $argv[1];
    }

    if ($downloadId != null)
    {
        printf("Download ID: %s\n", $downloadId);

        $response = GetDownloadUrl($downloadId, $proxy);

        if ($response != null)
        {
            if (DownloadStatus::Success == $response->Status)
            {
                DownloadFile($response->DownloadUrl, $DownloadPath);
                printf("The zipped file was written to %s.\nYou will " .
                    "need to uncompress it in order to read it.\n",
                    $DownloadPath);
            }
            else  // Pending
            {
                printf("The request is taking longer than expected.\n " .
                    "Save the report ID (%s) and try again later.\n",
                    $downloadId);
            }
        }
    }
}
catch (SoapFault $e)
{
    print $e->getMessage()."\n\n";
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Request the download. Use the ID that the request returns to
// check for the completion of the download.

function RequestDownload($previousDownloadPath, $accountId, $campaignIds, $proxy)
{
    try
    {
        // Set the request information.
        $request = new DownloadCampaignsByCampaignIdsRequest();
        $request->LastSyncTimeInUTC = GetLastSyncTime($previousDownloadPath);

        $request->AdditionalEntities = array (
            AdditionalEntity::AdGroupNegativeKeywords,
            AdditionalEntity::AdGroupTargets,
            AdditionalEntity::CampaignNegativeKeywords,
            AdditionalEntity::CampaignTargets
        );

        $request->Campaigns = array();

        // The campaigns must all belong to the same account.

        foreach ($campaignIds as $id)
        {
            $scope = new CampaignScope();
            $scope->CampaignId = $id;
            $scope->ParentAccountId = $accountId;
            $request->Campaigns[] = $scope;
        }

        $response = $proxy->GetService()->DownloadCampaignsByCampaignIds($request);
		
		return ($response != null) ? $response->DownloadRequestId : null;
    }
    catch (SoapFault $e)
    {
        // Bulk service operations can throw AdApiFaultDetail.
        if (isset($e->detail->AdApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
                    ? $e->detail->AdApiFaultDetail->Errors->AdApiError
                    : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

            // If the AdApiError array is not null, the following are examples of error codes that may be found.
            foreach ($errors as $error)
            {
                print "AdApiError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    case 0:    // InternalError
                        break;
                    case 105:  // InvalidCredentials
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // Bulk service operations can throw ApiFaultDetail.
        elseif (isset($e->detail->ApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            // If the BatchError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->ApiFaultDetail->BatchErrors))
            {
                $errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
                        ? $e->detail->ApiFaultDetail->BatchErrors->BatchError
                        : array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

                foreach ($errors as $error)
                {
                    printf("BatchError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                            break;
                        case 1100:  // CampaignServiceInvalidCampaignId
                            break;
                        case 3203:  // CampaignServiceCampaignsContainsMultipleAccounts
                            break;
                        default:
                            print "Please see MSDN documentation for more details about the error code output above.\n";
                            break;
                    }
                }
            }

            // If the OperationError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->ApiFaultDetail->OperationErrors))
            {
                $errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
                        ? $e->detail->ApiFaultDetail->OperationErrors->OperationError
                        : array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

                foreach ($errors as $error)
                {
                    print "OperationError\n";
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                            break;
                        case 106:   // UserIsNotAuthorized
                            break;
                        case 1113:  // CampaignServiceCampaignsArrayShouldNotBeNullOrEmpty
                            break;
                        default:
                            print "Please see MSDN documentation for more details about the error code output above.\n";
                            break;
                    }
                }
            }
        }

        else
        {
            print $e->getCode()." ".$e->getMessage()."\n\n";

            // Output the last request/response.

            print "\nLast SOAP request/response:\n";
            print $proxy->GetWsdl() . "\n";
            print $proxy->GetService()->__getLastRequest()."\n";
            print $proxy->GetService()->__getLastResponse()."\n";
        }

        throw new Exception("", 0, $e);
    }
}


// Check the status of the download request. The guidance of how often to poll
// for status is from every five to 15 minutes depending on the amount
// of data being requested. For smaller downloads, you can poll every couple
// of minutes. You should stop polling and try again later if the request
// is taking longer than an hour.

function GetDownloadUrl($downloadId, $proxy)
{
    $request = new GetDownloadStatusRequest();
    $response = null; // GetDownloadStatusResponse
    $waitTime = 60 * 1; // Wait for 1 to 2 minutes for small downloads.

    try
    {
        // Set the request information.

        $request->DownloadRequestId = $downloadId;

        // Poll for status up to 12 times (or up to one hour).
        // If the call succeeds, stop polling. If the call or
        // download fails, the call throws a fault.

        for ($i = 0; $i < 12; $i++)
        {
            sleep($waitTime);

            $response = $proxy->GetService()->GetDownloadStatus($request);

            if (DownloadStatus::Success == $response->Status)
            {
                break;
            }
        }
    }
    catch (SoapFault $e)
    {
        // Bulk service operations can throw AdApiFaultDetail.
        if (isset($e->detail->AdApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
                    ? $e->detail->AdApiFaultDetail->Errors->AdApiError
                    : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

            // If the AdApiError array is not null, the following are examples of error codes that may be found.
            foreach ($errors as $error)
            {
                print "AdApiError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    case 0:    // InternalError
                        break;
                    case 105:  // InvalidCredentials
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // Bulk service operations can throw ApiFaultDetail.
        elseif (isset($e->detail->ApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            // If the BatchError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->ApiFaultDetail->BatchErrors))
            {
                $errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
                        ? $e->detail->ApiFaultDetail->BatchErrors->BatchError
                        : array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

                foreach ($errors as $error)
                {
                    printf("BatchError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                            break;
                        default:
                            print "Please see MSDN documentation for more details about the error code output above.\n";
                            break;
                    }
                }
            }

            // If the OperationError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->ApiFaultDetail->OperationErrors))
            {
                $errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
                        ? $e->detail->ApiFaultDetail->OperationErrors->OperationError
                        : array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

                foreach ($errors as $error)
                {
                    print "OperationError\n";
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                            break;
                        case 106:   // UserIsNotAuthorized
                            break;
                        case 3205:  // CampaignServiceInvalidDownloadRequestId
                            break;
                        case 3603:  // CampaignServiceFullSyncRequired
                            break;
                        default:
                            print "Please see MSDN documentation for more details about the error code output above.\n";
                            break;
                    }
                }
            }
        }

        else
        {
            print $e->getCode()." ".$e->getMessage()."\n\n";

            // Output the last request/response.

            print "\nLast SOAP request/response:\n";
            print $proxy->GetWsdl() . "\n";
            print $proxy->GetService()->__getLastRequest()."\n";
            print $proxy->GetService()->__getLastResponse()."\n";
        }

        throw new Exception("", 0, $e);
    }

    return $response;
}

// Using the URL that the GetDownloadStatus operation returned,
// send an HTTP request to get the download data and write it to the specified
// ZIP file.

function DownloadFile($downloadUrl, $downloadPath)
{
    if (!$reader = fopen($downloadUrl, 'rb'))
    {
        throw new Exception("Failed to open URL " . $downloadUrl . ".");
    }

    if (!$writer = fopen($downloadPath, 'wb'))
    {
        fclose($reader);
        throw new Exception("Failed to create ZIP file " . $downloadPath . ".");
    }

    $bufferSize = 100 * 1024;

    while (!feof($reader))
    {
        if (false === ($buffer = fread($reader, $bufferSize)))
        {
            fclose($reader);
            fclose($writer);
            throw new Exception("Read operation from URL failed.");
        }

        if (fwrite($writer, $buffer) === false)
        {
            fclose($reader);
            fclose($writer);
            throw new Exception ("Write operation to ZIP file failed.");
        }
    }

    fclose($reader);
    fflush($writer);
    fclose($writer);
}

// Get the time stamp of the last download from the previous
// download file. The SyncTime node contains the time stamp.

function GetLastSyncTime($previousDownloadPath)
{
    $lastSyncTime = null;

    if (is_file($previousDownloadPath))
    {
        $reader = XMLReader::open($previousDownloadPath);

        try
        {
            while ($reader->read())
            {
                if ($reader->nodeType == XMLReader::ELEMENT &&
                    $reader->localName === "SyncTime")
                {
                    // Get to the text node to read the time stamp.

                    while ($reader->read() && $reader->nodeType != XMLReader::TEXT)
                    {
                        ;
                    }

                    $lastSyncTime = $reader->value;

                    break;
                }
            }

            $reader->close();
            $reader = null;

            if (null  == $lastSyncTime)
            {
                throw new Exception("SyncTime not found in download file " . path . ".");
            }
        }
        catch (Exception $e)
        {
            if (isset($reader))
            {
                $reader->close();
            }
            throw $e;
        }
    }

    return $lastSyncTime;
}


// Callbacks referenced in the SoapClient options.

// Converts long types found in SOAP responses to string types in PHP.

function from_long_xml($xmlFragmentString)
{
    return (string)strip_tags($xmlFragmentString);
}

// Converts PHP string types to long types in SOAP requests.

function to_long_xml($longVal)
{
    return '<long>' . $longVal . '</long>';
}


// Define the proxy class for the provided Bing Ads service. 
 
Class ClientProxy 
{ 
    private $username; 
    private $password; 
    private $developerToken; 
    private $wsdlUrl; 
    private $accountId; 
    private $customerId; 
    private $service; 
    private $namespace; 
 
    public function __construct($username, $password, $token, $accountId, $customerId, $wsdl) 
    { 
        $this->username = $username; 
        $this->password = $password; 
        $this->developerToken = $token; 
        $this->accountId = $accountId; 
        $this->customerId = $customerId; 
        $this->wsdlUrl = $wsdl; 
        $this->service = $this->GetProxy($wsdl); 
    } 
 
    public function GetAccountId() { return $this->accountId; } 
    public function GetCustomerId() { return $this->customerId; } 
    public function GetService() { return $this->service; } 
    public function GetNamespace() { return $this->namespace; } 
    public function GetWsdl() { return $this->wsdlUrl; } 
 
    // This function gets the namespace from the WSDL, so you do 
    // not have to hardcode it in the client. 
 
    private function GetServiceNamespace($url) 
    { 
        $doc = new DOMDocument; 
        $doc->Load($url); 
 
        $xpath = new DOMXPath($doc); 
        $query = "/*/@targetNamespace"; 
 
        $attrs = $xpath->query($query); 
 
        // The query will return only one node in the node list. 
 
        foreach($attrs as $attr) 
        { 
            $namespace = $attr->value; 
        } 
 
        return $namespace; 
    } 
 
    private function GetProxy($wsdl) 
    { 
        $this->namespace = $this->GetServiceNamespace($wsdl); 
 
        // Define the SOAP headers. Customer ID is required 
        // to get editorial reasons. 
 
        $headers = array(); 
 
        $headers[] = new SoapHeader( 
            $this->namespace, 
            'CustomerAccountId', 
            $this->accountId 
            ); 
 
        $headers[] = new SoapHeader( 
            $this->namespace, 
            'CustomerId', 
            $this->customerId 
            ); 
 
        $headers[] = new SoapHeader( 
            $this->namespace, 
            'DeveloperToken', 
            $this->developerToken 
            ); 
 
        $headers[] = new SoapHeader( 
            $this->namespace, 
            'UserName', 
            $this->username 
            ); 
 
        $headers[] = new SoapHeader( 
            $this->namespace, 
            'Password', 
            $this->password 
            ); 
 
        // By default, PHP does not return single item arrays as an array type. 
        // To force PHP to always return an array for an array type in the 
        // response, specify the SOAP_SINGLE_ELEMENT_ARRAYS feature. 
 
        $options = array( 
            'trace' => TRUE, 
            'exceptions' => TRUE, 
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS, 
 
            // Map long type to string type. For details, see 
            // from_long_xml and to_long_xml callbacks. 
 
            'typemap' => array( 
                array( 
                'type_ns' => 'http://www.w3.org/2001/XMLSchema', 
                'type_name' => 'long', 
                'to_xml' => 'to_long_xml', 
                'from_xml' => 'from_long_xml' 
                ), 
            ) 
        ); 
 
        $proxy = @new SOAPClient($this->wsdlUrl, $options); 
 
        $proxy->__setSoapHeaders($headers); 
 
        return $proxy; 
    } 
} 
 
?>