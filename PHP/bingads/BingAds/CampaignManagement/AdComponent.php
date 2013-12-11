<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible components of an ad or keyword that can fail editorial review.
 * @link http://msdn.microsoft.com/en-us/library/ff728510(v=msads.80).aspx AdComponent Value Set
 */
final class AdComponent
{
    /** Could not determine the component that failed. */
    const Unknown = 'Unknown';

    /** The Text field of the keyword failed editorial review. */
    const Keyword = 'Keyword';

    /** The Param1 field of the keyword failed editorial review. */
    const KeywordParam1 = 'KeywordParam1';

    /** The Param2 field of the keyword failed editorial review. */
    const KeywordParam2 = 'KeywordParam2';

    /** The Param3 field of the keyword failed editorial review. */
    const KeywordParam3 = 'KeywordParam3';

    /** The combined word count of the title and description of a text ad is fewer than six words or the combined word count of the title and description of a mobile ad is fewer than three words. */
    const AdTitleDescription = 'AdTitleDescription';

    /** The title of the ad failed editorial review. */
    const AdTitle = 'AdTitle';

    /** The text of the ad failed editorial review. */
    const AdDescription = 'AdDescription';

    /** The display URL of the ad failed editorial review. */
    const DisplayUrl = 'DisplayUrl';

    /** The destination URL of the ad failed editorial review. */
    const DestinationUrl = 'DestinationUrl';

    /** The landing page to which the destination URL of the ad resolves after all the redirects occur failed editorial review. */
    const LandingUrl = 'LandingUrl';

    /** The domain to which the destination URL of an ad resolves to is not allowed. */
    const SiteDomain = 'SiteDomain';

    /** The name of the business of a mobile ad failed the editorial review. */
    const BusinessName = 'BusinessName';

    /** The phone number of a mobile ad failed editorial review. */
    const PhoneNumber = 'PhoneNumber';

    /** The CashBackTextParam value is no longer supported. */
    const CashbackTextParam = 'CashbackTextParam';

    /** Not used at this time. */
    const AltText = 'AltText';

    /** Not used at this time. */
    const Audio = 'Audio';

    /** Not used at this time. */
    const Video = 'Video';

    /** Not used at this time. */
    const Flash = 'Flash';

    /** Not used at this time. */
    const CAsset = 'CAsset';

    /** Not used at this time. */
    const Image = 'Image';

    /** The landing page failed editorial review. */
    const Destination = 'Destination';

    /** Not used at this time. */
    const Asset = 'Asset';

    /** Not used at this time. */
    const Ad = 'Ad';

    /** Not used at this time. */
    const Order = 'Order';

    /** The Text field of the keyword failed editorial review. */
    const BiddingKeyword = 'BiddingKeyword';

    /** Not used at this time. */
    const Association = 'Association';

    /** Not used at this time. */
    const Script = 'Script';

    const SiteLinkDestinationUrl = 'SiteLinkDestinationUrl';

    const SiteLinkDisplayText = 'SiteLinkDisplayText';

    const BusinessImage = 'BusinessImage';

    const MapIcon = 'MapIcon';

    const AddressLine1 = 'AddressLine1';

    const AddressLine2 = 'AddressLine2';

    const LocationExtensionBusinessName = 'LocationExtensionBusinessName';

    const Country = 'Country';
}
