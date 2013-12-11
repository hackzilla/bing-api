<?php

namespace BingAds\CampaignManagement;

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797197(v=MSADS.80).aspx AddBusinessesRequest Request Object
 */
final class AddBusinessesRequest
{
    /**
     * An array of Business objects to add.
     * @var Business[]
     */
    public $Businesses;
}
