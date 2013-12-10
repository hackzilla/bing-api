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

// Include the BingAds\Optimizer namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=296529
include 'bingads\OptimizerClasses.php';

// Specify the BingAds\Optimizer objects that will be used.
use BingAds\Optimizer\GetBudgetOpportunitiesRequest;
use BingAds\Optimizer\ErrorCodes;
use BingAds\Optimizer\ApplyOpportunitiesRequest;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$AccountId = <AccountIdGoesHere>;


// Optimizer WSDL

$wsdl = "https://adcenterapi.microsoft.com/Api/Advertiser/v8/Optimizer/OptimizerService.svc?wsdl";


try
{
    // See Usage for argument values.

    $proxy = new ClientProxy($UserName, $Password, $DeveloperToken, $AccountId, $wsdl);

    // Get the budget opportunities which have not expired for the specified account.

    $opportunities = GetBudgetOpportunities($AccountId, $proxy);
	
	if (empty($opportunities->Opportunity))
	{
		print "There are not any budget opportunities for the specified account.\n";
	}
	else
	{
	    $opportunityKeys = array();

        foreach ($opportunities as $opportunity)
        {
    	    // Add the first 10,000 opportunity keys to an array

    	    if ($opportunity != null && sizeof($opportunityKeys) < 10000)
    	    {
    		    printf("OpportunityKey: %s", $opportunity->OpportunityKey);
    		    $opportunityKeys[] = $opportunity->OpportunityKey;
    	    }
        }

        // Apply the suggested budget opportunities.
        ApplyOpportunities($accountId, $opportunityKeys, $proxy);
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


// Gets the budget opportunities which have not expired for the specified account.

function GetBudgetOpportunities($accountId, $proxy)
{
	// Specify the request information.

	$request = new GetBudgetOpportunitiesRequest();
	$request->AccountId = $accountId;

	try
	{
		return $proxy->GetService()->GetBudgetOpportunities($request)->Opportunities;
	}
	catch (SoapFault $e)
	{
		// Optimizer service operations can throw AdApiFaultDetail.
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

		// Optimizer service operations can throw ApiFaultDetail.
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
						case ErrorCodes::InternalError:
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
						case ErrorCodes::InternalError:
                            break;
                        case ErrorCodes::UserIsNotAuthorized:
                            break;
                        case ErrorCodes::InvalidAccountId:
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

// Gets the budget opportunities which have not expired for the specified account.

function ApplyOpportunities($accountId, $opportunityKeys, $proxy)
{
	// Specify the request information.

	$request = new ApplyOpportunitiesRequest();
	$request->AccountId = $accountId;
	$request->OpportunityKeys = $opportunityKeys;

	try
	{
		$proxy->GetService()->ApplyOpportunities($request);
	}
	catch (SoapFault $e)
	{
		// Optimizer service operations can throw AdApiFaultDetail.
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

		// Optimizer service operations can throw ApiFaultDetail.
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
						case ErrorCodes::InternalError:
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
						case ErrorCodes::InternalError:
							break;
						case ErrorCodes::UserIsNotAuthorized:
							break;
						case ErrorCodes::InvalidAccountId:
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

// Define the proxy class for the provided Bing Ads service. 
 
Class ClientProxy 
{ 
    private $username; 
    private $password; 
    private $developerToken; 
    private $wsdlUrl; 
    private $accountId; 
    private $service; 
    private $namespace; 
 
    public function __construct($username, $password, $token, $accountId, $wsdl) 
    { 
        $this->username = $username; 
        $this->password = $password; 
        $this->developerToken = $token; 
        $this->accountId = $accountId; 
        $this->wsdlUrl = $wsdl; 
        $this->service = $this->GetProxy($wsdl); 
    } 
 
    public function GetAccountId() { return $this->accountId; } 
    public function GetService() { return $this->service; } 
    public function GetNamespace() { return $this->namespace; } 
 
    // This function gets the namespace from the WSDL, so you do 
    // not have to hardcode it in the client. 
 
    private function GetNamespaceForService($url) 
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
        $this->namespace = $this->GetNamespaceForService($wsdl); 
 
        // Define the SOAP headers. 
 
        $headers = array(); 
 
        $headers[] = new SoapHeader( 
                $this->namespace, 
                'CustomerAccountId', 
                $this->accountId 
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
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS 
        ); 
 
        $proxy = new SOAPClient($this->wsdlUrl, $options); 
 
        $proxy->__setSoapHeaders($headers); 
 
        return $proxy; 
    } 
} 
 
?>