<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetExclusionsByAssociatedEntityIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj622434(v=MSADS.80).aspx GetExclusionsByAssociatedEntityIdsResponse Response Object
 */
final class GetExclusionsByAssociatedEntityIdsResponse
{
    /**
     * A list of EntityToExclusionsAssociation objects. Each object identifies the entity and the requested exclusions that apply to the entity.
     * @var EntityToExclusionsAssociation[]
     */
    public $EntityToExclusionsAssociations;
}
