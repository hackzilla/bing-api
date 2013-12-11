<?php

namespace BingAds\CampaignManagement;

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797021(v=MSADS.80).aspx DeleteBusinessesRequest Request Object
 */
final class DeleteBusinessesRequest
{
    /**
     * An array of long values that identifies the businesses to be deleted.
     * @var long[]
     */
    public $BusinessIds;
}
