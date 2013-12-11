<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a fault object that operations return when one or more ads or keywords in your request message fail editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197200(v=msads.80).aspx EditorialApiFaultDetail Data Object
 */
final class EditorialApiFaultDetail extends ApplicationFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of EditorialError objects that contains the details that explain why the ad or keyword was disapproved.
     * @var EditorialError[]
     */
    public $EditorialErrors;

    /**
     * An array of OperationError objects that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}
