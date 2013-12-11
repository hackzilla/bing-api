<?php

namespace BingAds\CampaignManagement;

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797140(v=MSADS.80).aspx UpdateBusinessesRequest Request Object
 */
final class UpdateBusinessesRequest
{
    /**
     * An array of Business objects to update.
     * @var Business[]
     */
    public $Businesses;
}
