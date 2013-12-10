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

// Include the BingAds\CampaignManagement namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=296529
include 'bingads\CampaignManagementClasses.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\CampaignManagement\AddKeywordsRequest;
use BingAds\CampaignManagement\Keyword;
use BingAds\CampaignManagement\Bid;
use BingAds\CampaignManagement\SetDestinationUrlToKeywordsRequest;
use BingAds\CampaignManagement\KeywordDestinationUrl;
use BingAds\CampaignManagement\GetKeywordsByIdsRequest;
use BingAds\CampaignManagement\GetDestinationUrlByKeywordIdsRequest;
use BingAds\CampaignManagement\KeywordEditorialStatus;

// Disable WSDL caching.
ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = <CustomerIdGoesHere>;
$AccountId = <AccountIdGoesHere>;
$AdGroupId = <AdGroupIdGoesHere>;


// Campaign Management WSDL.
$wsdl = "https://adcenterapi.microsoft.com/Api/Advertiser/v8/CampaignManagement/CampaignManagementService.svc?wsdl";

$keywordIds = null;
$destinationUrl = "http://AlpineSkiHouse.com/GloveSale/";

try
{
    $proxy = new ClientProxy($UserName, $Password, $DeveloperToken, $AccountId, $CustomerId, $wsdl);
    $keywordIds = AddKeywords($AdGroupId, $proxy);
    SetKeywordDestinationURL($AdGroupId, $keywordIds, $destinationUrl, $proxy);
    PrintKeywords($AccountId, $AdGroupId, $keywordIds, $proxy);
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

// Add keywords to the specified ad group.

function AddKeywords($adGroupId, $proxy)
{
    $request = new AddKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Keywords = array();

    // Specify the keywords.

    $keyword = new Keyword();
    $keyword->ExactMatchBid = new Bid();
    $keyword->ExactMatchBid->Amount = .47;
    $keyword->Param2 = "10% Off";
    $keyword->Text = "Brand-B Gloves pen3m1365m1";
    $request->Keywords[] = $keyword;

    $keyword = new Keyword();
    $keyword->BroadMatchBid = new Bid();
    $keyword->BroadMatchBid->Amount = null; // Use the ad group's default bid value
    $keyword->Param2 = "10% Off";
    $keyword->Text = "Brand-B Gloves pen3m1365m1";
    $request->Keywords[] = $keyword;

    try
    {
        return $proxy->GetService()->AddKeywords($request)->KeywordIds->long;;
    }
    catch (SoapFault $e)
    {
        // Campaign Management service operations can throw AdApiFaultDetail.
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
                    case 117:  // CallRateExceeded
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // Campaign Management service operations can throw ApiFaultDetail.
        elseif (isset($e->detail->EditorialApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            // If the BatchError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
                ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
                : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

                foreach ($errors as $error)
                {
                    printf("BatchError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                          break;
                        case 1515:  // CampaignServiceBidAmountsLessThanFloorPrice
                          break;
                        case 1516:  // CampaignServiceBidAmountsGreaterThanCeilingPrice
                           break;
                        case 1541:  // CampaignServiceMultipleKeywordBidTypesNotAllowed
                           break;
                        case 1542:  // CampaignServiceKeywordAndMatchTypeCombinationAlreadyExists
                           break;
                        case 1543:  // CampaignServiceKeywordBidRequired
                           break;
                        case 1544:  // CampaignServiceKeywordZeroBidAmountNotAllowed
                           break;
                        default:
                           print "Please see MSDN documentation for more details about the error code output above.\n";
                           break;
                    }
                }
            }

            // If the EditorialError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
                ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
                : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

                foreach ($errors as $error)
                {
                    printf("EditorialError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                    printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

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
            if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
                ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
                : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

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
                        case 1102:  // CampaignServiceInvalidAccountId
                            break;
                        case 1030:  // CampaignServiceAccountIdHasToBeSpecified
                            break;
                        case 1201:  // CampaignServiceInvalidAdGroupId
                            break;
                        case 1505:  // CampaignServiceKeywordsArrayShouldNotBeNullOrEmpty
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

// Specify the keyword's destination URL. The keyword's destination URL
// overrides the destination URL specified at the ad level. Using the
// keyword's destination URL is preferred to using Keyword.Param1.

function SetKeywordDestinationURL($adGroupId, $keywordIds, $destinationUrl, $proxy)
{
    // Set the request information.
    $request = new SetDestinationUrlToKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->KeywordDestinationUrls = array();

    // Loop through the list of keyword IDs and build
    // the keyword destination URL objects.

    foreach ($keywordIds as $id)
    {
        $keywordUrl = new KeywordDestinationUrl();
        $keywordUrl->DestinationUrl = $destinationUrl;
        $keywordUrl->KeywordId = $id;
        $request->KeywordDestinationUrls[] = $keywordUrl;
    }

    try
    {
        $proxy->GetService()->SetDestinationUrlToKeywords($request);
    }
    catch (SoapFault $e)
    {
        // Campaign Management service operations can throw AdApiFaultDetail.
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

        // Campaign Management service operations can throw ApiFaultDetail.
        elseif (isset($e->detail->EditorialApiFaultDetail))
        {
            // Log this fault.

            print "The operation failed with the following faults:\n";

            // If the BatchError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
                ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
                : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

                foreach ($errors as $error)
                {
                    printf("BatchError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                    switch ($error->Code)
                    {
                        case 0:     // InternalError
                            break;
                        case 1501:  // CampaignServiceInvalidKeywordId
                            break;
                        case 1502:  // CampaignServiceDuplicateInKeywordIds
                            break;
                        case 1534:  // CampaignServiceUpdateKeywordEmpty
                            break;
                        default:
                            print "Please see MSDN documentation for more details about the error code output above.\n";
                            break;
                    }
                }
            }

            // If the EditorialError array is not null, the following are examples of error codes that may be found.
            if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
                ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
                : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

                foreach ($errors as $error)
                {
                    printf("EditorialError at Index: %d\n", $error->Index);
                    printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                    printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

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
            if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
            {
                $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
                ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
                : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

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
                        case 1102:  // CampaignServiceInvalidAccountId
                            break;
                        case 1030:  // CampaignServiceAccountIdHasToBeSpecified
                            break;
                        case 1201:  // CampaignServiceInvalidAdGroupId
                            break;
                        case 1549:  // CampaignServiceKeywordDestinationUrlsArrayShouldNotBeNullOrEmpty
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

// Print the details of the keywords that were added.

function PrintKeywords($accountId, $adGroupId, $keywordIds, $proxy)
{
    $request = new GetKeywordsByIdsRequest();
    $editorialCollection = null;
    $bid = 0.0;

    // Set the request information.

    $request->AdGroupId = $adGroupId;
    $request->KeywordIds = $keywordIds;

    try
    {
        $response = $proxy->GetService()->GetKeywordsByIds($request);

        $keywordCount = count($response->Keywords->Keyword);

        for ($i = 0; $i < $keywordCount; $i++)
        {
            $keyword = $response->Keywords->Keyword[$i];

            if ($keyword != null)
            {
                print("Keyword: " . $keyword->Text . "\n");
                print("Id: " . $keyword->Id . "\n");

                list($type, $bid) = GetBidType($keyword);

                print("Match type: " . $type . "\n");

                // GetBidType sets the bid to 0.0 if the match type's
                // bid amount is set to null. Using 0.0 to indicate that
                // the ad group's default bid for that match type is being used.

                if ($bid > 0.0)
                {
                    print("Bid: " . $bid . "\n");
                }
                else
                {
                    print("Bid: Ad group default bid\n");
                }

                print("Destination URL: " . GetKeywordDestinationURL($AdGroupId, $keyword->Id, $proxy) . "\n");
                print("Status: " . $keyword->Status . "\n");
                printf("Editorial Status: %s\n",
                    ($keyword->EditorialStatus == KeywordEditorialStatus::Inactive) ?
                        "Under review" : $keyword->EditorialStatus
                    );

                // If the keyword failed editorial review, find out why and which
                // publisher countries were affected.

                if ($keyword->EditorialStatus == KeywordEditorialStatus::Disapproved)
                {
                    $editorialCollection = GetEditorialReasons(
                        $accountId,
                        array($keyword->Id),
                        EntityType::Keyword,
                        $proxy);

                    print("  Appeal status: " . $editorialCollection->EditorialReasonCollection[0]->AppealStatus . "\n");

                    foreach ($editorialCollection->EditorialReasonCollection[0]->Reasons->EditorialReason as $editorialReason)
                    {
                        print("  Reason code: " . $editorialReason->ReasonCode . "\n");
                        print("  Term : " . $editorialReason->Term . "\n");
                        print("  Location : " . $editorialReason->Location . "\n");
                        print("  Publisher countries: ");

                        $j = 1;
                        $countryCount = count($editorialReason->PublisherCountries->string);
                        foreach ($editorialReason->PublisherCountries->string as $country)
                        {
                            printf("%s%s", $country, ($j++ < $countryCount) ? ", " : "\n");
                        }
                    }
                }

                print("\n");
            }
            else
            {
                printf("Keyword %s is not valid.\n", $keywordIds[$i]);
            }
        }
    }
    catch (SoapFault $e)
    {
        // Campaign Management service operations can throw AdApiFaultDetail.
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

        // Campaign Management service operations can throw ApiFaultDetail.
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
                        case 1102:  // CampaignServiceInvalidAccountId
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

// Get the keyword's destination URL.

function GetKeywordDestinationURL($adGroupId, $keywordId, $proxy)
{
    // Set the request information.
    $request = new GetDestinationUrlByKeywordIdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->KeywordIds = array($keywordId);

    try
    {
        // Because we requested the destination URL of a single keyword
        // return only the first item.
        
        return $proxy->GetService()->GetDestinationUrlByKeywordIds($request)->DestinationUrls->string[0];
    }
    catch (SoapFault $e)
    {
        // Campaign Management service operations can throw AdApiFaultDetail.
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

        // Campaign Management service operations can throw ApiFaultDetail.
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
                        case 1102:  // CampaignServiceInvalidAccountId
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


// A keyword object can specify only one match-type bid value.
// Figure out which bid is set and return the match type and
// bid value.

// If the bid Amount is null, that indicates that the ad group's
// bid value is used. To catch this case in the calling method,
// we're setting the bid to 0.0 (which is not a valid bid value).

function GetBidType($keyword)
{
    $bidType = null;
    $bid = 0.0;

    if (null != $keyword->ExactMatchBid)
    {
        $bidType = "Exact";
        $bid = ($keyword->ExactMatchBid->Amount == null) ? 0.0 : $keyword->ExactMatchBid->Amount;
    }
    else if ($keyword->PhraseMatchBid != null)
    {
        $bidType = "Phrase";
        $bid = ($keyword->PhraseMatchBid->Amount == null) ? 0.0 : $keyword->PhraseMatchBid->Amount;
    }
    else if ($keyword->BroadMatchBid != null)
    {
        $bidType = "Broad";
        $bid = ($keyword->BroadMatchBid->Amount == null) ? 0.0 : $keyword->BroadMatchBid->Amount;
    }
    else
    {
        $bidType = "Content";
        $bid = ($keyword->ContentMatchBid->Amount == null) ? 0.0 : $keyword->ContentMatchBid->Amount;
    }

    return array($bidType, $bid);
}

// Gets the reasons why the specified keyword failed editorial review.

function GetEditorialReasons($accountId, $keywordIds, $entityType, $proxy)
{
    // Set the request information.
    $request = new GetEditorialReasonsByIdsRequest();
    $request->AccountId = $accountId;
    $request->EntityIds = $keywordIds;
    $request->EntityType = EntityType::Keyword;

    try
    {
        return $proxy->GetService()->GetEditorialReasonsByIds($request)->EditorialReasons;
    }
    catch (SoapFault $e)
    {
        // Campaign Management service operations can throw AdApiFaultDetail.
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

        // Campaign Management service operations can throw ApiFaultDetail.
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
                        case 212:   // CampaignServiceEntityTypeNotSupported
                            break;
                        case 1029:  // CampaignServiceCustomerIdHasToBeSpecified
                            break;
                        case 1030:  // CampaignServiceAccountIdHasToBeSpecified
                            break;
                        case 1102:  // CampaignServiceInvalidAccountId
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
 
    private function GetServiceNamespace($url) 
    { 
        $doc = new DOMDocument; 
        $doc->Load($url); 
        $xpath = new DOMXPath($doc); 
        $query = "/*/@targetNamespace"; 
        $attrs = $xpath->query($query); 
 
        foreach($attrs as $attr) 
        { 
            $namespace = $attr->value; 
        } 
        return $namespace; 
    } 
 
    private function GetProxy($wsdl) 
    { 
        $this->namespace = $this->GetServiceNamespace($wsdl); 
 
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
 
        $options = array( 
            'trace' => TRUE, 
            'exceptions' => TRUE, 
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS, 
 
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