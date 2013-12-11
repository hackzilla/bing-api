<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the entity to which the exclusion applies.
 * @link http://msdn.microsoft.com/en-us/library/jj604421(v=msads.80).aspx Entity Data Object
 */
final class Entity
{
    /**
     * The entity's type. For possible values, see EntityType.
     * @var EntityType
     */
    public $EntityType;

    /**
     * The entity's ID.
     * @var long
     */
    public $Id;
}
