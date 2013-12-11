<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the association between an entity and one or more exclusions.
 * @link http://msdn.microsoft.com/en-us/library/jj604417(v=msads.80).aspx EntityToExclusionsAssociation Data Object
 */
final class EntityToExclusionsAssociation
{
    /**
     * The entity to which the exclusions apply.
     * @var Entity
     */
    public $AssociatedEntity;

    /**
     * The list of exclusions that are applied to the entity.
     * @var Exclusion[]
     */
    public $Exclusions;
}
