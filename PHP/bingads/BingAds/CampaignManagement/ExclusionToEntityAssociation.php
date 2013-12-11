<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the association between an entity and an exclusion.
 * @link http://msdn.microsoft.com/en-us/library/jj604418(v=msads.80).aspx ExclusionToEntityAssociation Data Object
 */
final class ExclusionToEntityAssociation
{
    /**
     * The entity to which the exclusions apply.
     * @var Entity
     */
    public $AssociatedEntity;

    /**
     * The exclusion to apply to the entity.
     * @var Exclusion
     */
    public $Exclusion;
}
