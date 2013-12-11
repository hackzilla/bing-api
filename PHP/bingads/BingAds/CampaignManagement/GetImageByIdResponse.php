<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetImageById service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj721612(v=MSADS.80).aspx GetImageByIdResponse Response Object
 */
final class GetImageByIdResponse
{
    /**
     * The specified image or icon from the library. The string is a base64 string.
     * @var string
     */
    public $Data;
}
