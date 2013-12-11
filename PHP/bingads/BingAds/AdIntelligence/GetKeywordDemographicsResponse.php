<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetKeywordDemographics service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336994(v=msads.90).aspx GetKeywordDemographicsResponse Response Object
 */
final class GetKeywordDemographicsResponse
{
    /**
     * An array of KeywordDemographicResult objects. Each object contains the keyword and the percentage of time that users of a certain age and gender searched for the specified keyword.
     * @var KeywordDemographicResult[]
     */
    public $KeywordDemographicResult;
}
