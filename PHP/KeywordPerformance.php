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

// Include the BingAds\Reporting namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=296529
include 'bingads\ReportingClasses.php';

// Specify the BingAds\Reporting objects that will be used.
use BingAds\Reporting\SubmitGenerateReportRequest;
use BingAds\Reporting\KeywordPerformanceReportRequest;
use BingAds\Reporting\ReportFormat;
use BingAds\Reporting\ReportAggregation;
use BingAds\Reporting\AccountThroughAdGroupReportScope;
use BingAds\Reporting\CampaignReportScope;
use BingAds\Reporting\ReportTime;
use BingAds\Reporting\ReportTimePeriod;
use BingAds\Reporting\KeywordPerformanceReportFilter;
use BingAds\Reporting\DeviceTypeReportFilter;
use BingAds\Reporting\KeywordPerformanceReportColumn;
use BingAds\Reporting\PollGenerateReportRequest;
use BingAds\Reporting\ReportRequestStatusType;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$AccountId = <AccountIdGoesHere>;
$AccountIdScope = "<AccountIdGoesHere>";
$CampaignIdScope = "<CampaignIdGoesHere>";


// Reporting WSDL.

$wsdl = "https://adcenterapi.microsoft.com/Api/Advertiser/v8/Reporting/ReportingService.svc?wsdl";


// Specify the file to download the report to. Because the file is
// compressed use the .zip file extension.

$DownloadPath = "c:\\reports\\keywordperf.zip";

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
    $proxy = new ClientProxy($UserName, $Password, $DeveloperToken, $AccountId, $wsdl);

    if (!isset($argv[1])) // Request a new report
    {
        $report = GetRequestData($AccountIdScope, $CampaignIdScope, $proxy);
        $reportId = RequestReport($report, $proxy);
    }
    else  // User passed in the ID of an existing report to download
    {
        $reportId = $argv[1];
    }

    if (null != $reportId)
    {
        printf("Report ID: %s\n", $reportId);

        $response = GetDownloadUrl($reportId, $proxy);

        if (null != $response)
        {
             if (ReportRequestStatusType::Success == $response->Status)
             {
                 DownloadReport($response->ReportDownloadUrl, $DownloadPath);
                 printf("The zipped file was written to %s.\nYou will " .
                     "need to uncompress it in order to read it.\n",
                     $DownloadPath);
             }
             else if (ReportRequestStatusType::Error == $response->Status)
             {
                 printf("The request failed. Try requesting the report " .
                     "later.\nIf the request continues to fail, contact support.\n");
             }
             else  // Pending
             {
                 printf("The request is taking longer than expected.\n " .
                     "Save the report ID (%s) and try again later.\n",
                     $reportId);
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

// Specify the parameters of the keyword performance report request.

function GetRequestData($accountIdScope, $campaignIdScope, $proxy)
{
    $report = new KeywordPerformanceReportRequest();

    $report->Format = ReportFormat::Xml;
    $report->ReportName = 'My Keyword Performance Report';
    $report->ReturnOnlyCompleteData = true;
    $report->Aggregation = ReportAggregation::Daily;

    $report->Scope = new AccountThroughAdGroupReportScope();
    $report->Scope->AccountIds = null;
    $report->Scope->AdGroups = null;
    $report->Scope->Campaigns = array ();
    $campaignScope = new CampaignReportScope();
    $campaignScope->CampaignId = $campaignIdScope;
    $campaignScope->ParentAccountId = $accountIdScope;
    $report->Scope->Campaigns[] = $campaignScope;
//    $campaignScope = new CampaignReportScope();  // Add another campaign scope.
//    $campaignScope->CampaignId = <campaignidgoeshere>;
//    $campaignScope->ParentAccountId = <accountidgoeshere>;
//    $report->Scope->Campaigns[] = $campaignScope;

    $report->Time = new ReportTime();
    $report->Time->PredefinedTime = ReportTimePeriod::Yesterday;
  
//  You may either use a custom date range or predefined time.
//    $report->Time->CustomDateRangeStart = new Date();
//    $report->Time->CustomDateRangeStart->Month = 2;
//    $report->Time->CustomDateRangeStart->Day = 1;
//    $report->Time->CustomDateRangeStart->Year = 2012;
//    $report->Time->CustomDateRangeEnd = new Date();
//    $report->Time->CustomDateRangeEnd->Month = 2;
//    $report->Time->CustomDateRangeEnd->Day = 15;
//    $report->Time->CustomDateRangeEnd->Year = 2012;

    $report->Filter = new KeywordPerformanceReportFilter();
    $report->Filter->DeviceType = array (
        DeviceTypeReportFilter::Computer,
        DeviceTypeReportFilter::SmartPhone
    );

    $report->Columns = array (
        KeywordPerformanceReportColumn::TimePeriod,
        KeywordPerformanceReportColumn::AccountId,
        KeywordPerformanceReportColumn::CampaignId,
        KeywordPerformanceReportColumn::Keyword,
        KeywordPerformanceReportColumn::KeywordId,
        KeywordPerformanceReportColumn::DeviceType,
        KeywordPerformanceReportColumn::BidMatchType,
        KeywordPerformanceReportColumn::Clicks,
        KeywordPerformanceReportColumn::Impressions,
        KeywordPerformanceReportColumn::Ctr,
        KeywordPerformanceReportColumn::AverageCpc,
        KeywordPerformanceReportColumn::Spend,
        KeywordPerformanceReportColumn::QualityScore
    );

    $encoded = new SoapVar($report, SOAP_ENC_OBJECT, 'KeywordPerformanceReportRequest', $proxy->GetNamespace());

    return $encoded;
}

// Request the report. Use the ID that the request returns to
// check for the completion of the report.

function RequestReport($report, $proxy)
{
  try
  {
    // Set the request information.
    $request = new SubmitGenerateReportRequest();
    $request->ReportRequest = $report;

    return $proxy->GetService()->SubmitGenerateReport($request)->ReportRequestId;
  }
  catch (SoapFault $e)
  {
    // Ad Intelligence service operations can throw AdApiFaultDetail.
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

    // Ad Intelligence service operations can throw ApiFaultDetail.
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
            case 2004:  // ReportingServiceNoCompleteDataAvaliable
              break;
            case 2007:  // ReportingServiceInvalidReportAggregation
              break;
            case 2008:  // ReportingServiceInvalidReportTimeSelection
              break;
            case 2009:  // ReportingServiceInvalidCustomDateRangeStart
              break;
            case 2010:  // ReportingServiceInvalidCustomDateRangeEnd
              break;
            case 2011:  // ReportingServiceEndDateBeforeStartDate
              break;
            case 2015:  // ReportingServiceRequiredColumnsNotSelected
              break;
            case 2016:  // ReportingServiceDuplicateColumns
              break;
            case 2017:  // ReportingServiceNoMeasureSelected
              break;
            case 2028:  // ReportingServiceInvalidAccountThruAdGroupReportScope
              break;
            case 2034:  // ReportingServiceInvalidTimePeriodColumnForSummaryReport
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

// Check the status of the report request. The guidance of how often to poll
// for status is from every five to 15 minutes depending on the amount
// of data being requested. For smaller reports, you can poll every couple
// of minutes. You should stop polling and try again later if the request
// is taking longer than an hour.

function GetDownloadUrl($reportId, $proxy)
{
    $response = null; // PollGenerateReportResponse
    $waitTime = 60 * 1; // Poll at 1 to 2 minute intervals for small reports.

    try
    {
        // Set the request information.
        $request = new PollGenerateReportRequest();
        $request->ReportRequestId = $reportId;

        // Poll for status up to 12 times (or up to one hour).
        // If the call succeeds or fails, stop polling.

        for ($i = 0; $i < 12; $i++)
        {
             sleep($waitTime);

             $response = $proxy->GetService()->PollGenerateReport($request);

             if (ReportRequestStatusType::Success == $response->ReportRequestStatus->Status ||
                 ReportRequestStatusType::Error == $response->ReportRequestStatus->Status)
             {
                 break;
             }
        }
    }
    catch (SoapFault $e)
  {
    // Ad Intelligence service operations can throw AdApiFaultDetail.
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

    // Ad Intelligence service operations can throw ApiFaultDetail.
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
            case 2100:  // ReportingServiceInvalidReportId
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

  return ($response != null) ? $response->ReportRequestStatus : null;
}

// Using the URL that the PollGenerateReport operation returned,
// send an HTTP request to get the report and write it to the specified
// ZIP file.

function DownloadReport($reportDownloadUrl, $downloadPath)
{
    if (!$reader = fopen($reportDownloadUrl, 'rb'))
    {
        throw new Exception("Failed to open URL " . $reportDownloadUrl . ".");
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
             $exception = new Exception("Write operation to ZIP file failed.");
        }
    }

    fclose($reader);
    fflush($writer);
    fclose($writer);
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