<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a fault object that operations return when one or more ads or keywords in your request message fail editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197200(v=msads.90).aspx EditorialApiFaultDetail Data Object
 */
final class EditorialApiFaultDetail extends ApplicationFault
{
    /**
     * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of editorial errors that contains the details that explain why the ad or keyword was disapproved.
     * @var EditorialError[]
     */
    public $EditorialErrors;

    /**
     * An array of operation errors that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}
