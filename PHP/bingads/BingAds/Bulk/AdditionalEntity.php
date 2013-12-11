<?php

namespace BingAds\Bulk;

/**
 * Defines the additional entities that you can include in bulk service requests.
 * @link http://msdn.microsoft.com/en-us/library/jj134986(v=msads.80).aspx AdditionalEntity Value Set
 */
final class AdditionalEntity
{
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

    /** Include the editorial rejection reasons of an ad in the download data. */
    const AdEditorialRejectionReasons = 'AdEditorialRejectionReasons';

    /** Include the editorial rejection reasons of a keyword in the download data. */
    const KeywordEditorialRejectionReasons = 'KeywordEditorialRejectionReasons';

    /** Include site links ad extensions in the download data. Only site links that are associated with a campaign are included in the download. */
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';

    /** Include a campaign's product ad extensions in the download data. */
    const CampaignProductAdExtensions = 'CampaignProductAdExtensions';

    /** Include location extensions in the download data. */
    const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';

    /** Include call extensions in the download data. */
    const CampaignCallAdExtensions = 'CampaignCallAdExtensions';

    /** Include an ad group's product targets in the download data. */
    const AdGroupProductTargets = 'AdGroupProductTargets';

    /** Reserved for future use. */
    const ProductTargetEditorialRejectionReasons = 'ProductTargetEditorialRejectionReasons';
}
