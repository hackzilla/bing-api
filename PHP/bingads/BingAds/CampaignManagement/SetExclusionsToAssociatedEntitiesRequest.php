<?php

namespace BingAds\CampaignManagement;

/**
 * Applies the specified exclusions to the specified list of entities.
 * @link http://msdn.microsoft.com/en-us/library/jj622487(v=MSADS.80).aspx SetExclusionsToAssociatedEntitiesRequest Request Object
 */
final class SetExclusionsToAssociatedEntitiesRequest
{
    /**
     * A list of ExclusionToEntityAssociation objects. Each object identifies an entity and the exclusion to apply to the entity.
     * @var ExclusionToEntityAssociation[]
     */
    public $ExclusionToEntityAssociations;
}
