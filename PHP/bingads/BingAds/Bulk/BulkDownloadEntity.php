<?php

namespace BingAds\Bulk;

/**
 * Defines the entities that may be downloaded in bulk.
 * @link http://msdn.microsoft.com/en-us/library/dn249982(v=msads.90).aspx BulkDownloadEntity Value Set
 */
final class BulkDownloadEntity
{
    /** Include campaigns in the download data. */
    const Campaigns = 'Campaigns';

    /** Include ad groups in the download data. */
    const AdGroups = 'AdGroups';

    /** Include ads in the download data. */
    const Ads = 'Ads';

    /** Include keywords in the download data. */
    const Keywords = 'Keywords';

    /** Include a campaign's negative keywords in the download data. */
    const CampaignNegativeKeywords = 'CampaignNegativeKeywords';

    /** Include an ad group's negative keywords in the download data. */
    const AdGroupNegativeKeywords = 'AdGroupNegativeKeywords';

    /** Include a campaign's targets in the download data. */
    const CampaignTargets = 'CampaignTargets';

    /** Include an ad group's targets in the download data. */
    const AdGroupTargets = 'AdGroupTargets';

    /** Include a campaign's negative site URLs in the download data. */
    const CampaignNegativeSites = 'CampaignNegativeSites';

    /** Include an ad group's negative site URLs in the download data. */
    const AdGroupNegativeSites = 'AdGroupNegativeSites';

    /** Include site links ad extensions in the download data. Only site links that are associated with a campaign are included in the download. */
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';

    /** Includes a campaign's product ad extensions in the download data. */
    const CampaignProductAdExtensions = 'CampaignProductAdExtensions';

    /** Include location extensions in the download data. */
    const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';

    /** Include call extensions in the download data. */
    const CampaignCallAdExtensions = 'CampaignCallAdExtensions';

    /** Include an ad group's product targets in the download data. */
    const AdGroupProductTargets = 'AdGroupProductTargets';

    /** Include site links ad extensions in the download data. Only site links that are associated with an ad group are included in the download. */
    const AdGroupSiteLinksAdExtensions = 'AdGroupSiteLinksAdExtensions';
}
