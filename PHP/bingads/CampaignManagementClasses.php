<?php
// Generated on 10/23/2013 5:21:58 AM

namespace BingAds\CampaignManagement;

/**
 * Defines the possible budget types that you can specify for a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.90).aspx BudgetLimitType Value Set
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent in a couple of days, weeks, or not at all. */
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

    /** A daily budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent within a couple of minutes, hours, or not at all. */
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

    /** A daily budget that is spread throughout the day. */
    const DailyBudgetStandard = 'DailyBudgetStandard';
}

/**
 * Defines the possible status values of a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.90).aspx CampaignStatus Value Set
 */
final class CampaignStatus
{
    /** The campaign is active, which indicates that the campaign's ads can be served. */
    const Active = 'Active';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. */
    const Paused = 'Paused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. The service sets this status when the budget is depleted. The service will set the status back to Active when the budget is restored. */
    const BudgetPaused = 'BudgetPaused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. This status results when a user sets the campaign status to paused after the service pauses the campaign because the budget is depleted. */
    const BudgetAndManualPaused = 'BudgetAndManualPaused';

    /** The campaign is deleted. This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';
}

/**
 * Defines the ad distribution for the ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.90).aspx AdDistribution Value Set
 */
final class AdDistribution
{
    /** The ad group contains search ads. The ads are displayed on the search network that you specify for the ad group. For more information, see the Network element of AdGroup. */
    const Search = 'Search';

    /** The ad group contains content ads. The text ads are displayed on Microsoft-owned websites, as well as on participating partner websites. */
    const Content = 'Content';
}

/**
 * Defines the possible ad rotation types that you can apply to an ad group. For ad groups with more than one ad, these options determine how the ads are rotated into the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.90).aspx AdRotationType Value Set
 */
final class AdRotationType
{
    /** Favor the best performing ads. */
    const OptimizeForClicks = 'OptimizeForClicks';

    /** Rotate ads evenly into the auction. */
    const RotateAdsEvenly = 'RotateAdsEvenly';
}

/**
 * Defines the bidding model for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796906(v=msads.90).aspx BiddingModel Value Set
 */
final class BiddingModel
{
    /** The ad group bidding is keyword-based. */
    const Keyword = 'Keyword';

    /** The ad group bidding is website-placement-based. */
    const SitePlacement = 'SitePlacement';
}

/**
 * Defines the possible search networks on which an ad can display.
 * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.90).aspx Network Value Set
 */
final class Network
{
    /** Display ads on owned and operated networks, as well as syndicated search networks. */
    const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

    /** Display ads on only owned and operated networks. */
    const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

    /** Display ads on only syndicated search networks. */
    const SyndicatedSearchOnly = 'SyndicatedSearchOnly';
}

/**
 * Defines the pricing model for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.90).aspx PricingModel Value Set
 */
final class PricingModel
{
    /** The pricing model is cost-per-click (CPC). */
    const Cpc = 'Cpc';

    /** The pricing model is cost per thousand-impressions (CPM). */
    const Cpm = 'Cpm';
}

/**
 * Defines the possible status values of an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.90).aspx AdGroupStatus Value Set
 */
final class AdGroupStatus
{
    /** The ad group is new. Ads and keywords that you add in this state are not subject to editorial review. */
    const Draft = 'Draft';

    /** The ad group is active, which indicates that the ad group's ads can be served. */
    const Active = 'Active';

    /** The ad group is paused, which indicates that the ad group's ads will not serve. Ads and keywords that you add in this state are subject to editorial review. */
    const Paused = 'Paused';

    /** The ad group expired. This status is set if you specify an end date for the ad group and the end date passes. */
    const Deleted = 'Deleted';
}

/**
 * Defines the possible age range values that you can use to target ads to users.
 * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.90).aspx AgeRange Value Set
 */
final class AgeRange
{
    /** Users from the ages of 18 through 24 years. */
    const EighteenToTwentyFive = 'EighteenToTwentyFive';

    /** Users from the ages of 25 through 34 years. */
    const TwentyFiveToThirtyFive = 'TwentyFiveToThirtyFive';

    /** Users from the ages of 35 through 49 years. */
    const ThirtyFiveToFifty = 'ThirtyFiveToFifty';

    /** Users from the ages of 50 through 64 years. */
    const FiftyToSixtyFive = 'FiftyToSixtyFive';

    /** Users 65 years of age and older. */
    const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
}

/**
 * Defines the day values that you can specify for day of the week targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb671717(v=msads.90).aspx Day Value Set
 */
final class Day
{
    const Sunday = 'Sunday';
    const Monday = 'Monday';
    const Tuesday = 'Tuesday';
    const Wednesday = 'Wednesday';
    const Thursday = 'Thursday';
    const Friday = 'Friday';
    const Saturday = 'Saturday';
}

/**
 * Defines the genders that are available for ad group or campaign targeting.The GenderType enumeration is the data type for the Gender element of the GenderTargetBid object.
 * @link http://msdn.microsoft.com/en-us/library/bb671519(v=msads.90).aspx GenderType Value Set
 */
final class GenderType
{
    const Male = 'Male';
    const Female = 'Female';
}

/**
 * Defines the time ranges that you can specify for time of the day targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb672093(v=msads.90).aspx HourRange Value Set
 */
final class HourRange
{
    /** Hours from 3:00 A.M. through 7:00 A.M. */
    const ThreeAMToSevenAM = 'ThreeAMToSevenAM';

    /** Hours from 7:00 A.M. through 11:00 A.M. */
    const SevenAMToElevenAM = 'SevenAMToElevenAM';

    /** Hours from 11:00 A.M. through 2:00 P.M. */
    const ElevenAMToTwoPM = 'ElevenAMToTwoPM';

    /** Hours from 2:00 P.M. through 6:00 P.M. */
    const TwoPMToSixPM = 'TwoPMToSixPM';

    /** Hours from 6:00 P.M. through 11:00 P.M. */
    const SixPMToElevenPM = 'SixPMToElevenPM';

    /** Hours from 11:00 P.M. through 3:00 A.M. */
    const ElevenPMToThreeAM = 'ElevenPMToThreeAM';
}

/**
 * Defines the editorial review status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.90).aspx AdEditorialStatus Value Set
 */
final class AdEditorialStatus
{
    /** The ad passed editorial review. */
    const Active = 'Active';

    /** The ad failed editorial review. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad is undergoing editorial review. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.90).aspx AdStatus Value Set
 */
final class AdStatus
{
    /** The ad is undergoing editorial review or has failed editorial review. To determine the ad editorial status, see AdEditorialStatus. */
    const Inactive = 'Inactive';

    /** The ad can be served. */
    const Active = 'Active';

    /** The ad will not serve until the owner resumes it. */
    const Paused = 'Paused';

    /** This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';
}

/**
 * Defines the type of ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.90).aspx AdType Value Set
 */
final class AdType
{
    /** The ad is a text ad. For more information, see TextAd Data Object. */
    const Text = 'Text';

    /** Not used. */
    const Image = 'Image';

    /** The ad is a mobile ad. For more information, see MobileAd Data Object. */
    const Mobile = 'Mobile';

    /** Not used. */
    const RichSearch = 'RichSearch';

    /** The ad is a product ad. For more information, see ProductAd Data Object. */
    const Product = 'Product';
}

/**
 * Defines the editorial review status values of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.90).aspx KeywordEditorialStatus Value Set
 */
final class KeywordEditorialStatus
{
    /** The keyword passed editorial review. */
    const Active = 'Active';

    /** The keyword failed editorial review. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the keyword is undergoing editorial review. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible match types for a keyword bid.
 * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.90).aspx MatchType Value Set
 */
final class MatchType
{
    /** The keyword match type is Exact. */
    const Exact = 'Exact';

    /** The keyword match type is Phrase. */
    const Phrase = 'Phrase';

    /** The keyword match type is Broad. */
    const Broad = 'Broad';

    /** The keyword match type is Content. */
    const Content = 'Content';
}

/**
 * Defines the possible status values of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.90).aspx KeywordStatus Value Set
 */
final class KeywordStatus
{
    /** The keyword can be used to match user search queries. */
    const Active = 'Active';

    /** The keyword cannot be used to match user search queries until the owner resumes it. */
    const Paused = 'Paused';

    /** This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';

    /** The keyword is undergoing editorial review or has failed editorial review. To determine the keyword editorial status, see KeywordEditorialStatus. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible types of entities.
 * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.90).aspx EntityType Value Set
 */
final class EntityType
{
    /** The entity is a Campaign object. */
    const Campaign = 'Campaign';

    /** The entity is an AdGroup object. */
    const AdGroup = 'AdGroup';

    /** The entity is a Target object. */
    const Target = 'Target';

    /** The entity is an Ad object or an object that derives from it, such as the TextAd object. */
    const Ad = 'Ad';

    /** The entity is a Keyword object. */
    const Keyword = 'Keyword';

    /** For future use. */
    const AdExtension = 'AdExtension';

    const AdGroupCriterion = 'AdGroupCriterion';
}

/**
 * Defines the status of a website placement bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.90).aspx SitePlacementStatus Value Set
 */
final class SitePlacementStatus
{
    /** The website placement bid is active. */
    const Active = 'Active';

    /** The website placement bid is paused. */
    const Paused = 'Paused';

    /** The website placement bid is deleted. */
    const Deleted = 'Deleted';

    /** The website placement bid is inactive */
    const Inactive = 'Inactive';
}

/**
 * Defines the values that you use to determine whether an editorial rejection is appealable.
 * @link http://msdn.microsoft.com/en-us/library/jj631643(v=msads.90).aspx AppealStatus Value Set
 */
final class AppealStatus
{
    /** The editorial rejection is appealable. */
    const Appealable = 'Appealable';

    /** The editorial rejection is appealable and an appeal has been submitted. */
    const AppealPending = 'AppealPending';

    /** The editorial rejection is not appealable. */
    const NotAppealable = 'NotAppealable';
}

/**
 * Defines the possible status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.90).aspx AdExtensionStatus Value Set
 */
final class AdExtensionStatus
{
    /** The ad extension is active. You can associate an active ad extension with a campaign or ad group. */
    const Active = 'Active';

    /** The ad extension is deleted. This status is for internal use only. The Get operations will not include deleted extensions. */
    const Deleted = 'Deleted';
}

/**
 * Defines the possible ad extension types.
 * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.90).aspx AdExtensionsTypeFilter Value Set
 */
final class AdExtensionsTypeFilter
{
    /** An ad extension that contains one or more site links to include in an ad. For more information, see SiteLinksAdExtension Data Object. */
    const SiteLinksAdExtension = 'SiteLinksAdExtension';

    /** An ad extension that contains the address and phone number of the business to include an ad. For more information, see LocationAdExtension Data Object. */
    const LocationAdExtension = 'LocationAdExtension';

    /** An ad extension that contains a phone number to include in the ad and whether it's the only clickable item in an ad. For more information, see CallAdExtension Data Object. */
    const CallAdExtension = 'CallAdExtension';

    /** An ad extension that identifies a Bing Merchant Center store that contains the products that you want to advertise. The delivery engine generates the ad's contents based on the product details that it finds in the Bing Merchant Center store. For more information, see ProductAdExtension Data Object. */
    const ProductsAdExtension = 'ProductsAdExtension';
}

/**
 * Defines the entity type or types associated with an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.90).aspx AssociationType Value Set
 */
final class AssociationType
{
    /** Specifies ad extension associations with campaigns. */
    const Campaign = 'Campaign';

    /** Specifies ad extension associations with ad groups. */
    const AdGroup = 'AdGroup';
}

/**
 * Defines the editorial review status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/dn249989(v=msads.90).aspx AdExtensionEditorialStatus Value Set
 */
final class AdExtensionEditorialStatus
{
    /** The ad extension passed editorial review. */
    const Active = 'Active';

    /** The ad extension failed editorial review. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad extension is undergoing editorial review. */
    const Inactive = 'Inactive';

    /** The ad extension passed editorial review in one or more markets, and one or more elements of the ad extension is undergoing editorial review in another market. For example the ad extension passed editorial review for Canada and is still pending review in the United States. */
    const ActiveLimited = 'ActiveLimited';
}

/**
 * Defines the possible status values that determine whether to apply the criterion to the ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.90).aspx AdGroupCriterionStatus Value Set
 */
final class AdGroupCriterionStatus
{
    /** Apply the criterion to the ad group. */
    const Active = 'Active';

    /** Do not apply the criterion to the ad group. */
    const Paused = 'Paused';

    /** The criterion was deleted. Note that the Get operations will not return deleted objects. */
    const Deleted = 'Deleted';
}

/**
 * Defines the possible types of criterions.
 * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.90).aspx CriterionType Value Set
 */
final class CriterionType
{
    /** The criterion identifies a Bing Merchant Center product filter. */
    const Product = 'Product';
}

/**
 * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.90).aspx BusinessGeoCodeStatus Value Set
 */
final class BusinessGeoCodeStatus
{
    /** In the process of determining the latitude and longitude of the business. */
    const Pending = 'Pending';

    /** Successfully determined the latitude and longitude of the business. */
    const Complete = 'Complete';

    /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
    const Invalid = 'Invalid';

    /** Unable to determine the latitude and longitude of the business. */
    const Failed = 'Failed';
}

/**
 * Defines the editorial review status values of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.90).aspx AdGroupCriterionEditorialStatus Value Set
 */
final class AdGroupCriterionEditorialStatus
{
    /** The criterion passed editorial review. */
    const Active = 'Active';

    /** The criterion failed editorial review. */
    const Disapproved = 'Disapproved';

    /** The criterion is undergoing editorial review. */
    const Inactive = 'Inactive';
}

/**
 * Defines the base object of an ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.90).aspx Ad Data Object
 */
class Ad
{
    /**
     * This element determines whether the preference is for text ads to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

    /**
     * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system generated identifier of the ad.
     * @var long
     */
    public $Id;

    /**
     * The status of the ad.
     * @var AdStatus
     */
    public $Status;

    /**
     * The type of the ad. For more information, see Remarks.
     * @var AdType
     */
    public $Type;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dd796873(v=msads.90).aspx AdApiError Data Object
 */
final class AdApiError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that contains additional details about the error. This string can be empty.
     * @var string
     */
    public $Detail;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dd796870(v=msads.90).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     * @var string
     */
    public $TrackingId;
}

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dd797002(v=msads.90).aspx AdApiFaultDetail Data Object
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     * @var AdApiError[]
     */
    public $Errors;
}

/**
 * Defines a postal address.
 * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.90).aspx Address Data Object
 */
final class Address
{
    /**
     * The name of the city where the street address is located. The name can contain a maximum of 80 characters.
     * @var string
     */
    public $CityName;

    /**
     * The country where the street address is located. The country code must contain a 2 character country code. For a list of possible country codes that you can specify, see Publisher Country.
     * @var string
     */
    public $CountryCode;

    /**
     * The postal or zip code. The postal code can contain a maximum of 80 characters.
     * @var string
     */
    public $PostalCode;

    /**
     * A code that identifies the state or province where the street address is located. For example, WA. The code can contain a maximum of 50 characters.
     * @var string
     */
    public $ProvinceCode;

    /**
     * The name of the state or province where the street address is located. For example, Washington. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $ProvinceName;

    /**
     * The first line of the address. The first line can contain a maximum of 80 characters
     * @var string
     */
    public $StreetAddress;

    /**
     * The second line of the address. The second line can contain a maximum of 80 characters
     * @var string
     */
    public $StreetAddress2;
}

/**
 * Defines the base object of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.90).aspx AdExtension Data Object
 */
class AdExtension
{
    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the ad extension.
     * @var long
     */
    public $Id;

    /**
     * The status of the ad extension.
     * @var AdExtensionStatus
     */
    public $Status;

    /**
     * The type of ad extension. For more information, see Remarks.
     * @var string
     */
    public $Type;

    /**
     * The number of times the contents of the ad extension has been updated. The version is set to 1 when you add the extension and is incremented each time it's revised.
     * @var int
     */
    public $Version;
}

/**
 * Defines an object that associates an ad extension and its editorial status to a supported entity, for example ad group or campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn250012(v=msads.90).aspx AdExtensionAssociation Data Object
 */
final class AdExtensionAssociation
{
    /**
     * The ad extension associated with a supported entity.
     * @var AdExtension
     */
    public $AdExtension;

    /**
     * The type of entity associated with the ad extension.
     * @var AssociationType
     */
    public $AssociationType;

    /**
     * The editorial status of the ad extension.
     * @var AdExtensionEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The identifier of an entity associated with the ad extension.
     * @var long
     */
    public $EntityId;
}

/**
 * Defines an array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn250010(v=msads.90).aspx AdExtensionAssociationCollection Data Object
 */
final class AdExtensionAssociationCollection
{
    /**
     * An array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     * @var AdExtensionAssociation[]
     */
    public $AdExtensionAssociations;
}

/**
 * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/jj134398(v=msads.90).aspx AdExtensionEditorialReason Data Object
 */
final class AdExtensionEditorialReason
{
    /**
     * The component of the ad extension that failed editorial review.
     * @var string
     */
    public $Location;

    /**
     * The list of publisher countries whose editorial guidelines do not allow the specified term.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * A code that identifies the reason for the failure. For a list of possible reason codes, see Editorial Failure Reason Codes.
     * @var int
     */
    public $ReasonCode;

    /**
     * The term that failed editorial review.
     * @var string
     */
    public $Term;
}

/**
 * Defines a collection of ad extensions that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/jj134393(v=msads.90).aspx AdExtensionEditorialReasonCollection Data Object
 */
final class AdExtensionEditorialReasonCollection
{
    /**
     * The identifier of the ad extension that failed editorial review.
     * @var long
     */
    public $AdExtensionId;

    /**
     * A list of AdExtensionEditorialReason objects that identify the component of an ad extension that failed editorial review, and the reason for the failure.
     * @var AdExtensionEditorialReason[]
     */
    public $Reasons;
}

/**
 * Defines an object that identifies an ad extension revision.
 * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.90).aspx AdExtensionIdentity Data Object
 */
final class AdExtensionIdentity
{
    /**
     * The system-generated identifier of the ad extension.
     * @var long
     */
    public $Id;

    /**
     * The number of times the contents of the ad extension has been updated. The version is set to 1 when you add the extension and is incremented each time it's revised.
     * @var int
     */
    public $Version;
}

/**
 * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn249980(v=msads.90).aspx AdExtensionIdToEntityIdAssociation Data Object
 */
final class AdExtensionIdToEntityIdAssociation
{
    /**
     * The system-generated identifier of the ad extension.
     * @var long
     */
    public $AdExtensionId;

    /**
     * The identifier of an entity associated with the ad extension.
     * @var long
     */
    public $EntityId;
}

/**
 * Defines an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.90).aspx AdGroup Data Object
 */
final class AdGroup
{
    /**
     * Determines whether the ad group contains content ads, search ads, or both.
     * @var AdDistribution
     */
    public $AdDistribution;

    /**
     * Determines the ad rotation type.
     * @var AdRotation
     */
    public $AdRotation;

    /**
     * Determines whether the ad group bids on keyword matches or site placement matches. The default is Keyword.
     * @var BiddingModel
     */
    public $BiddingModel;

    /**
     * The bid to use when the user's query and the ad group's keywords match by using a broad match comparison. A broad match results when words in the keyword are present in the user's query; however, the order of the words can vary.
     * @var Bid
     */
    public $BroadMatchBid;

    /**
     * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query.
     * @var Bid
     */
    public $ContentMatchBid;

    /**
     * The date that the ads in the ad group will expire. If you do not specify an end date, the ads will not expire.
     * @var Date
     */
    public $EndDate;

    /**
     * The bid to use when the user's query and the ad group's keywords match by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query.
     * @var Bid
     */
    public $ExactMatchBid;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system generated identifier of the ad group.
     * @var long
     */
    public $Id;

    /**
     * The language of the ads and keywords in the ad group. For possible values, see Ad Copy Languages.
     * @var string
     */
    public $Language;

    /**
     * The name of the ad group. The name must be unique among all active ad groups within the campaign. The name can contain a maximum of 128 characters.
     * @var string
     */
    public $Name;

    /**
     * The search networks where you want your ads to display. The default is OwnedAndOperatedAndSyndicatedSearch.
     * @var Network
     */
    public $Network;

    /**
     * The bid value to use when the user's query and the ad group's keywords match by using a phrase match. A phrase match results when all of the words in the keyword are present in the user's query, and are in the same order.
     * @var Bid
     */
    public $PhraseMatchBid;

    /**
     * You can specify a pricing model based on cost per click (CPC) or cost per 1000 impressions (CPM).
     * @var PricingModel
     */
    public $PricingModel;

    /**
     * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
     * @var Date
     */
    public $StartDate;

    /**
     * The status of the ad group.
     * @var AdGroupStatus
     */
    public $Status;
}

/**
 * Defines the base class of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.90).aspx AdGroupCriterion Data Object
 */
class AdGroupCriterion
{
    /**
     * The identifier of the ad group to apply the criterion to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The criterion to apply to the ad group. The criterion determines (along with campaign and ad group targets) whether ads in the ad group are served.
     * @var Criterion
     */
    public $Criterion;

    /**
     * The system-generated identifier that identifies this ad group criterion.
     * @var long
     */
    public $Id;

    /**
     * A status value that determines whether to apply the criterion to the ad group.
     * @var AdGroupCriterionStatus
     */
    public $Status;

    /**
     * The type of ad group criterion. For more information, see Remarks.
     * @var string
     */
    public $Type;
}

/**
 * Defines an object that contains the ad group's list of negative keywords.
 * @link http://msdn.microsoft.com/en-us/library/ee703992(v=msads.90).aspx AdGroupNegativeKeywords Data Object
 */
final class AdGroupNegativeKeywords
{
    /**
     * The identifier of the ad group that the negative keywords belong to.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of negative keywords that prevents the service from serving an ad if the user's search query contains one of the negative keywords.
     * @var string[]
     */
    public $NegativeKeywords;
}

/**
 * Defines an object that contains the negative site URLs of an ad group.
 * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.90).aspx AdGroupNegativeSites Data Object
 */
final class AdGroupNegativeSites
{
    /**
     * The identifier of the ad group to which the negative site URLs belong.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of URLs of the websites on which you do not want your ads displayed. You can specify a maximum of 2,000 URLs. Each URL must specify the domain name and can specify one subdomain name and a maximum of two directories.
     * @var string[]
     */
    public $NegativeSites;
}

/**
 * Defines an object that specifies the type of ad rotation to apply to the ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.90).aspx AdRotation Data Object
 */
final class AdRotation
{
    /**
     * For future use only. Must be null.
     * @var dateTime
     */
    public $EndDate;

    /**
     * For future use only. Must be null.
     * @var dateTime
     */
    public $StartDate;

    /**
     * The type of ad rotation to apply to the ad group..
     * @var AdRotationType
     */
    public $Type;
}

/**
 * Defines a list of age ranges to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.90).aspx AgeTarget Data Object
 */
final class AgeTarget
{
    /**
     * An array of of age ranges to target with bid adjustments.
     * @var AgeTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific age target range with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.90).aspx AgeTargetBid Data Object
 */
final class AgeTargetBid
{
    /**
     * The age range to target.
     * @var AgeRange
     */
    public $Age;

    /**
     * The percent amount used to adjust the base bid.
     * @var int
     */
    public $BidAdjustment;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/bb671467(v=msads.90).aspx ApiFaultDetail Data Object
 */
final class ApiFaultDetail extends ApplicationFault
{
    /**
     * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of operation errors that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/bb671765(v=msads.90).aspx BatchError Data Object
 */
class BatchError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the batch error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;

    /**
     * Reserved for future use.
     * @var string
     */
    public $Type;
}

/**
 * Defines a bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.90).aspx Bid Data Object
 */
final class Bid
{
    /**
     * The bid value.
     * @var double
     */
    public $Amount;
}

/**
 * Defines the conditions that determine whether product ads in the ad group get served. If the conditions are met, the specified bid is used in the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.90).aspx BiddableAdGroupCriterion Data Object
 */
final class BiddableAdGroupCriterion extends AdGroupCriterion
{
    /**
     * The bid to use in the auction.
     * @var CriterionBid
     */
    public $CriterionBid;

    /**
     * The URL of the webpage that the user is taken to when they click the ad. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The criterion's editorial review status. The status indicates whether the criterion is pending review, has been approved, or has been disapproved.
     * @var AdGroupCriterionEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The string to use as the substitution value if DestinationUrl contains {Param1: default}.
     * @var string
     */
    public $Param1;

    /**
     * The string to use as the substitution value if destination URL contains {Param2: default}.
     * @var string
     */
    public $Param2;

    /**
     * The string to use as the substitution value if destination URL contains {Param3: default}.
     * @var string
     */
    public $Param3;
}

/**
 * Defines a Bing Merchant Center store.Elements of this object are defined in the Bing Merchant Center store, and read-only in Bing Ads. Values of elements do not restrict Bing Ads features. For example, a product ad extension may be added whether the IsActive element is set to true or false.
 * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.90).aspx BMCStore Data Object
 */
final class BMCStore
{
    /**
     * Value will be true if the store has a catalog of items, and otherwise the value is false.
     * @var boolean
     */
    public $HasCatalog;

    /**
     * The unique identifier for the Bing Merchant Center store.
     * @var long
     */
    public $Id;

    /**
     * Value will be true if the store is active, and otherwise the value is false.
     * @var boolean
     */
    public $IsActive;

    /**
     * Value will be true if the store is enabled for product ads in Bing Ads, and otherwise the value is false.
     * @var boolean
     */
    public $IsProductAdsEnabled;

    /**
     * Defines the name of the store as defined in the Bing Merchant Center.
     * @var string
     */
    public $Name;
}

/**
 * Available for members of the Call Ad Extension v2 pilot program. Call ad extensions are available in the US and UK markets.Defines an object that specifies a click-to-call phone number to include in a text ad.The CallAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.90).aspx CallAdExtension Data Object
 */
final class CallAdExtension extends AdExtension
{
    /**
     * The country code where the phone number is registered. The country code must contain a 2 character country code. For a list of possible country codes that you can specify, see Publisher Country.
     * @var string
     */
    public $CountryCode;

    /**
     * This element determines whether the preference is for the click to call phone number to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

    /**
     * A Boolean value that determines whether the phone number is the only clickable item in the ad. If true and the ad is displayed on a hi-fi mobile device, all otherwise clickable items such as addresses, the display URL, and site links will be disabled.
     * @var boolean
     */
    public $IsCallOnly;

    /**
     * A Boolean value that determines whether call tracking is enabled for the call ad extension.
     * @var boolean
     */
    public $IsCallTrackingEnabled;

    /**
     * The phone number to include in the ad. The phone number is clickable on hi-fi mobile devices.
     * @var string
     */
    public $PhoneNumber;

    /**
     * A Boolean value that determines whether a toll-free tracking number should be created for call tracking. This element can only be set if IsCallTrackingEnabled is also true.
     * @var boolean
     */
    public $RequireTollFreeTrackingNumber;
}

/**
 * Defines a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.90).aspx Campaign Data Object
 */
final class Campaign
{
    /**
     * The budget type determines whether the campaign uses a daily budget or a monthly budget, and how the budget is spent. For possible values, see BudgetLimitType.
     * @var BudgetLimitType
     */
    public $BudgetType;

    /**
     * Conversion tracking is no longer supported at the campaign level. If you set this element, the value is ignored.
     * @var boolean
     */
    public $ConversionTrackingEnabled;

    /**
     * The amount to spend daily on the campaign. You must set the daily budget amount if BudgetType is set to DailyBudgetAccelerated or DailyBudgetStandard.
     * @var double
     */
    public $DailyBudget;

    /**
     * Determines whether daylight-saving time is enabled.
     * @var boolean
     */
    public $DaylightSaving;

    /**
     * The description of the campaign. The description can contain a maximum of 1,000 characters.
     * @var string
     */
    public $Description;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the campaign.
     * @var long
     */
    public $Id;

    /**
     * The monthly budget of the campaign. You must specify a monthly budget only if BudgetType is set to MonthlyBudgetSpendUntilDepleted.
     * @var double
     */
    public $MonthlyBudget;

    /**
     * The name of the campaign. The name must be unique among all active or paused campaigns within the account. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * The status of the campaign.
     * @var CampaignStatus
     */
    public $Status;

    /**
     * The time zone where the campaign operates. For possible values, see Time Zones.
     * @var string
     */
    public $TimeZone;
}

/**
 * Defines an object that contains the campaign's list of negative keywords.
 * @link http://msdn.microsoft.com/en-us/library/ee703967(v=msads.90).aspx CampaignNegativeKeywords Data Object
 */
final class CampaignNegativeKeywords
{
    /**
     * The identifier of the campaign that the negative keywords belong to.
     * @var long
     */
    public $CampaignId;

    /**
     * A list of negative keywords that prevent the service from serving an ad if the user's query contains one of the negative keywords.
     * @var string[]
     */
    public $NegativeKeywords;
}

/**
 * Defines an object that contains the negative site URLs of a campaign.
 * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.90).aspx CampaignNegativeSites Data Object
 */
final class CampaignNegativeSites
{
    /**
     * The identifier of the campaign to which the negative site URLs belong.
     * @var long
     */
    public $CampaignId;

    /**
     * A list of URLs of the websites on which you do not want your ads displayed. You can specify a maximum of 2,000 URLs. Each URL must specify the domain name, and can specify one subdomain name and a maximum of two directories.
     * @var string[]
     */
    public $NegativeSites;
}

/**
 * Defines a list of cities to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.90).aspx CityTarget Data Object
 */
final class CityTarget
{
    /**
     * An array of cities to target with bid adjustments. You can specify a maximum of 255 bids.
     * @var CityTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific city target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.90).aspx CityTargetBid Data Object
 */
final class CityTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted city.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The city to target.
     * @var string
     */
    public $City;

    /**
     * Set this element to true if you want to exclude the location from targeting.
     * @var boolean
     */
    public $IsExcluded;
}

/**
 * Defines a list of countries or regions to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.90).aspx CountryTarget Data Object
 */
final class CountryTarget
{
    /**
     * An array of countries or regions to target with bid adjustments. You can specify a maximum of 255 bids.
     * @var CountryTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific country or region target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.90).aspx CountryTargetBid Data Object
 */
final class CountryTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The country to target.
     * @var string
     */
    public $CountryAndRegion;

    /**
     * Set this element to true if you want to exclude the location from targeting.
     * @var boolean
     */
    public $IsExcluded;
}

/**
 * Defines the base object of a criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.90).aspx Criterion Data Object
 */
class Criterion
{
    /**
     * The type of criterion. For more information, see Remarks.
     * @var string
     */
    public $Type;
}

/**
 * Defines a base class for criterion bids.
 * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.90).aspx CriterionBid Data Object
 */
class CriterionBid
{
    /**
     * The type of criterion bid. For more information, see Remarks.
     * @var string
     */
    public $Type;
}

/**
 * Represents a date.
 * @link http://msdn.microsoft.com/en-us/library/bb671903(v=msads.90).aspx Date Data Object
 */
final class Date
{
    /**
     * Specifies the day of the month.
     * @var int
     */
    public $Day;

    /**
     * Specifies the month.
     * @var int
     */
    public $Month;

    /**
     * Specifies the year.
     * @var int
     */
    public $Year;
}

/**
 * Defines a list of days to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671942(v=msads.90).aspx DayTarget Data Object
 */
final class DayTarget
{
    /**
     * An array of days to target with bid adjustments.
     * @var DayTargetBid[]
     */
    public $Bids;

    /**
     * Determines whether to participate in auctions only on the days of the week that you specified or to participate on all days of the week.
     * @var boolean
     */
    public $TargetAllDays;
}

/**
 * Defines a specific day target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671920(v=msads.90).aspx DayTargetBid Data Object
 */
final class DayTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if today is the day of the week being targeted.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The day of the week to target. For example, you can target the ads to run only on Friday or Saturday.
     * @var Day
     */
    public $Day;
}

/**
 * Defines a list of devices to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.90).aspx DeviceOSTarget Data Object
 */
final class DeviceOSTarget
{
    /**
     * An array of devices to target with bid adjustments.
     * @var DeviceOSTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific device target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.90).aspx DeviceOSTargetBid Data Object
 */
final class DeviceOSTargetBid
{
    /**
     * The percent amount by which to adjust the base bid for the specified device target.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The name of the device to target. The following are the possible device names that you can specify.
     * @var string
     */
    public $DeviceName;

    /**
     * The specific operating system (OS) of the device to target. To target all operating systems that the device supports, set to null. The following are the possible smartphone operating systems that you can target.
     * @var string[]
     */
    public $OSNames;
}

/**
 * Defines dimension information for media on a website.
 * @link http://msdn.microsoft.com/en-us/library/dd796881(v=msads.90).aspx Dimension Data Object
 */
final class Dimension
{
    /**
     * The height.
     * @var int
     */
    public $Height;

    /**
     * The width.
     * @var int
     */
    public $Width;
}

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

/**
 * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.90).aspx EditorialError Data Object
 */
final class EditorialError extends BatchError
{
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $Appealable;

    /**
     * The text that caused the entity to be disapproved.
     * @var string
     */
    public $DisapprovedText;

    /**
     * The element or property of the entity that caused the entity to be disapproved.
     * @var string
     */
    public $Location;

    /**
     * The corresponding country or region for the flagged editorial issue.
     * @var string
     */
    public $PublisherCountry;

    /**
     * A numeric code that identifies the error. For more information, see Bing Ads Editorial Failure Reason Codes.
     * @var int
     */
    public $ReasonCode;
}

/**
 * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.90).aspx EditorialReason Data Object
 */
final class EditorialReason
{
    /**
     * The component of the ad or keyword that failed editorial review.
     * @var string
     */
    public $Location;

    /**
     * A list of countries where the ad or keyword failed editorial review. The string contains the country's two character country code.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * A code that identifies the reason for the failure. For a list of possible reason codes, see Editorial Failure Reason Codes.
     * @var int
     */
    public $ReasonCode;

    /**
     * The term that failed editorial review.
     * @var string
     */
    public $Term;
}

/**
 * Defines a collection of ads or keywords that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/ff728504(v=msads.90).aspx EditorialReasonCollection Data Object
 */
final class EditorialReasonCollection
{
    /**
     * An identifier that identifies the ad or keyword that failed editorial review.
     * @var long
     */
    public $AdOrKeywordId;

    /**
     * A value that determines whether you can appeal the issues found by the editorial review.
     * @var AppealStatus
     */
    public $AppealStatus;

    /**
     * An array of editorial reasons that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @var EditorialReason[]
     */
    public $Reasons;
}

/**
 * Defines the monetary bid to use in the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.90).aspx FixedBid Data Object
 */
final class FixedBid extends CriterionBid
{
    /**
     * The amount to bid in the auction. For information about setting the bid amount, see Remarks.
     * @var Bid
     */
    public $Bid;
}

/**
 * Defines a list of genders to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.90).aspx GenderTarget Data Object
 */
final class GenderTarget
{
    /**
     * An array of genders to target with bid adjustments.
     * @var GenderTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific gender target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.90).aspx GenderTargetBid Data Object
 */
final class GenderTargetBid
{
    /**
     * The percent amount by which to adjust the base bid.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The gender to target.
     * @var GenderType
     */
    public $Gender;
}

/**
 * Defines an object that contains the longitude and latitude coordinates of a geographical location.
 * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.90).aspx GeoPoint Data Object
 */
final class GeoPoint
{
    /**
     * The latitude specified in micro degrees. The latitude must be greater than or equal to -85000000 and less than or equal to +85000000.
     * @var int
     */
    public $LatitudeInMicroDegrees;

    /**
     * The longitude specified in micro degrees. The longitude must be greater than or equal to -180000000 and less than or equal to +180000000.
     * @var int
     */
    public $LongitudeInMicroDegrees;
}

/**
 * Defines a list of hour target ranges with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671826(v=msads.90).aspx HourTarget Data Object
 */
final class HourTarget
{
    /**
     * An array of HourTargetBid objects that specifies the times of the day to target and the incremental bid percentages to apply to the base bid.
     * @var HourTargetBid[]
     */
    public $Bids;

    /**
     * Determines whether to participate in auctions only during the times of the day that you specified or to participate at all times of the day.
     * @var boolean
     */
    public $TargetAllHours;
}

/**
 * Defines a specific hour target range with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671597(v=msads.90).aspx HourTargetBid Data Object
 */
final class HourTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the current time is within the range of hours being targeted.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The time range to target. For example, you can target the ads to display to users only between the hours of 7:00 AM to 11:00 AM.
     * @var HourRange
     */
    public $Hour;
}

/**
 * Defines the base object of media.
 * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.90).aspx Media Data Object
 */
class Media
{
    /**
     * The system generated identifier of the media.
     * @var long
     */
    public $Id;

    /**
     * This read-only element is the name of the subclass. For example, when retrieving an Image object, the MediaType is Image.
     * @var string
     */
    public $MediaType;

    /**
     * The type of media to add to the library. The accepted values are Image and Icon.
     * @var string
     */
    public $Type;
}

/**
 * Defines an image object that can be added to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.90).aspx Image Data Object
 */
final class Image extends Media
{
    /**
     * A base64 string that represents the image or icon to add to the library. The base64 string can contain a maximum of 102,400 characters.
     * @var string
     */
    public $Data;
}

/**
 * Defines the minimum and maximum impressions per day for a website.
 * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.90).aspx ImpressionsPerDayRange Data Object
 */
final class ImpressionsPerDayRange
{
    /**
     * The maximum number of impressions per day for the website.
     * @var int
     */
    public $Maximum;

    /**
     * The minimum number of impressions per day for the website.
     * @var int
     */
    public $Minimum;
}

final class KeyValuePairOfstringstring
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;
}

/**
 * Defines a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.90).aspx Keyword Data Object
 */
final class Keyword
{
    /**
     * The bid to use when the user's query and the keyword match.
     * @var Bid
     */
    public $Bid;

    /**
     * The URL of the webpage to take the user to when they click the ad. The keyword's destination URL is used if specified; otherwise, the ad's destination URL is used.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the keyword.
     * @var long
     */
    public $Id;

    /**
     * The type of match to compare the keyword and the user's search query.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1:default} dynamic substitution string.
     * @var string
     */
    public $Param1;

    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2:default} dynamic substitution string.
     * @var string
     */
    public $Param2;

    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3:default} dynamic substitution string.
     * @var string
     */
    public $Param3;

    /**
     * The keyword's status. By default, the status is set to Active.
     * @var KeywordStatus
     */
    public $Status;

    /**
     * The keyword text. The text can contain a maximum of 100 characters. You should specify the keyword in the locale of the Language value that you specified for the ad group to which the keyword belongs.
     * @var string
     */
    public $Text;
}

/**
 * Defines an ad extension that specifies a business' address and phone number to include in a text ad.The LocationAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.90).aspx LocationAdExtension Data Object
 */
final class LocationAdExtension extends AdExtension
{
    /**
     * The business' address.
     * @var Address
     */
    public $Address;

    /**
     * The name of the business. The name can contain a maximum of 80 characters.
     * @var string
     */
    public $CompanyName;

    /**
     * A status value that indicates whether the business' latitude and longitude coordinates have been determined.
     * @var BusinessGeoCodeStatus
     */
    public $GeoCodeStatus;

    /**
     * The latitude and longitude coordinates of the specified Address element. The coordinates are used to mark the business' location on Bing Maps when the user clicks the address on the ad. If the specified coordinates are not within the range of valid values, the service determines the coordinates based on the address.
     * @var GeoPoint
     */
    public $GeoPoint;

    /**
     * The identifier of an icon used to mark the business' location on Bing Maps. You can specify the identifier of a predefined icon or a custom icon that you added by calling the AddMedia operation. The size of a custom icon can be up to 26x26.
     * @var long
     */
    public $IconMediaId;

    /**
     * The identifier of the image to include in the ad. You must specify the identifier of the image that you added to the image library by calling the AddMedia operation.
     * @var long
     */
    public $ImageMediaId;

    /**
     * The business' phone number to include in the ad. The phone number is clickable on hi-fi mobile devices.
     * @var string
     */
    public $PhoneNumber;
}

/**
 * Defines an object that can contain different types geographical targets, for example lists of city and state targets.To download an XML document that contains the DMA? location targeting codes, click here, and then right-click on DMAGeoLocations and select Download.
 * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.90).aspx LocationTarget Data Object
 */
final class LocationTarget
{
    /**
     * The cities to target.
     * @var CityTarget
     */
    public $CityTarget;

    /**
     * The countries/regions to target.
     * @var CountryTarget
     */
    public $CountryTarget;

    /**
     * Determines whether the user must be physically located in the targeted location in order for the ad to display. If true, the user must be physically present in the targeted location. The default is false.
     * @var boolean
     */
    public $HasPhysicalIntent;

    /**
     * The metropolitan areas to target.
     * @var MetroAreaTarget
     */
    public $MetroAreaTarget;

    /**
     * The geographical locations to target.
     * @var RadiusTarget
     */
    public $RadiusTarget;

    /**
     * The states, provinces, or territories to target.
     * @var StateTarget
     */
    public $StateTarget;
}

/**
 * Defines media type information for a website.
 * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.90).aspx MediaType Data Object
 */
final class MediaType
{
    /**
     * The media dimensions.
     * @var Dimension[]
     */
    public $Dimensions;

    /**
     * The name of the media type.
     * @var string
     */
    public $Name;
}

/**
 * Defines a list of metro area targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.90).aspx MetroAreaTarget Data Object
 */
final class MetroAreaTarget
{
    /**
     * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the incremental bid percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var MetroAreaTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a metropolitan area to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.90).aspx MetroAreaTargetBid Data Object
 */
final class MetroAreaTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
     * @var int
     */
    public $BidAdjustment;

    /**
     * Set this element to true if you want to exclude the location from targeting.
     * @var boolean
     */
    public $IsExcluded;

    /**
     * The metropolitan area to target.
     * @var string
     */
    public $MetroArea;
}

/**
 * Defines a mobile ad. A mobile ad is displayed to a user when the ad is viewed on a low-fi mobile device.
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.90).aspx MobileAd Data Object
 */
final class MobileAd extends Ad
{
    /**
     * The name of the business being advertised. The name can contain a maximum of 20 characters.
     * @var string
     */
    public $BusinessName;

    /**
     * The URL of the webpage to take the user to when they click the ad.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The URL to display in the ad.
     * @var string
     */
    public $DisplayUrl;

    /**
     * The phone number to dial when the user clicks the ad. The phone number can contain a maximum of 20 characters. For more information about phone number validation, see Remarks.
     * @var string
     */
    public $PhoneNumber;

    /**
     * The ad copy. The copy must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Text;

    /**
     * The title of the ad. The title must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Title;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/bb671973(v=msads.90).aspx OperationError Data Object
 */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines the size and type of media that the publisher website supports for ad placements.
 * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.90).aspx PlacementDetail Data Object
 */
final class PlacementDetail
{
    /**
     * Not supported.
     * @var ImpressionsPerDayRange
     */
    public $ImpressionsRangePerDay;

    /**
     * The URL of the publisher's website.
     * @var string
     */
    public $PathName;

    /**
     * The identifier of the publisher.
     * @var long
     */
    public $PlacementId;

    /**
     * An array of MediaType objects that contains the size and type of media that the publisher website supports.
     * @var MediaType[]
     */
    public $SupportedMediaTypes;
}

/**
 * Defines a product criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj689539(v=msads.90).aspx Product Data Object
 */
final class Product extends Criterion
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad. You can specify a maximum of 3 conditions and each condition must specify a unique operand. For a product to be served, it must meet all conditions.
     * @var ProductCondition[]
     */
    public $Conditions;
}

/**
 * Defines a product ad.Available for members of the Product Ads pilot program.
 * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.90).aspx ProductAd Data Object
 */
final class ProductAd extends Ad
{
    /**
     * The promotional text to display in a product ad. The text can contain a maximum of 45 characters. If you do not want to add promotional text to the product ads, set PromotionalText to null or an empty string.
     * @var string
     */
    public $PromotionalText;
}

/**
 * Defines a product ad extension. The extension identifies a Bing Merchant Center store that contains the products that you want to advertise.Available for members of the Product Ads pilot program.The ProductAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721706(v=msads.90).aspx ProductAdExtension Data Object
 */
final class ProductAdExtension extends AdExtension
{
    /**
     * The display name of the extension. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * The list of products from the Bing Merchant Center store to advertise.
     * @var ProductConditionCollection[]
     */
    public $ProductSelection;

    /**
     * The identifier of the Bing Merchant Center store contains the products to advertise.
     * @var long
     */
    public $StoreId;

    /**
     * The name of the store that StoreId identifies.
     * @var string
     */
    public $StoreName;
}

/**
 * Defines a condition that determines whether a product is selected.
 * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.90).aspx ProductCondition Data Object
 */
final class ProductCondition
{
    /**
     * The condition's attribute value.
     * @var string
     */
    public $Attribute;

    /**
     * The condition's operand. The operands implicitly include the equal operator. For example, read Brand as Brand=.
     * @var string
     */
    public $Operand;
}

/**
 * Defines the conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
 * @link http://msdn.microsoft.com/en-us/library/jj721704(v=msads.90).aspx ProductConditionCollection Data Object
 */
final class ProductConditionCollection
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad. You can specify a maximum of 8 conditions and each condition must specify a unique operand. For a product to be served, it must meet all conditions.
     * @var ProductCondition[]
     */
    public $Conditions;
}

/**
 * Defines a list of geographical radius targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.90).aspx RadiusTarget Data Object
 */
final class RadiusTarget
{
    /**
     * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the incremental bid percentages to apply to the base bid. You can specify a maximum of 2,000 radius targets.
     * @var RadiusTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a specific geographical radius target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.90).aspx RadiusTargetBid Data Object
 */
final class RadiusTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
     * @var int
     */
    public $BidAdjustment;

    /**
     * Reserved for future use.
     * @var long
     */
    public $Id;

    /**
     * Reserved for future use.
     * @var boolean
     */
    public $IsExcluded;

    /**
     * The latitude, in degrees, of the target location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude, in degrees, of the target location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the geographical location being targeted. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $Name;

    /**
     * The radius, in miles, that specifies the area surrounding the geographical location to target.
     * @var int
     */
    public $Radius;
}

/**
 * Defines a site link to include in an ad. The link should take the user to content in your website that is relevant in the context of the ad.
 * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.90).aspx SiteLink Data Object
 */
final class SiteLink
{
    /**
     * The URL of the webpage that users are taken to when they click the site link. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * This element determines whether the preference is for site links to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

    /**
     * The site-link text displayed in the ad. The text can contain a maximum of 35 characters.
     * @var string
     */
    public $DisplayText;
}

/**
 * Defines an ad extension that specifies one or more site links to add to a text ad.The SiteLinksAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.90).aspx SiteLinksAdExtension Data Object
 */
final class SiteLinksAdExtension extends AdExtension
{
    /**
     * A list of site links. Each object contains a link to a webpage on your website. You can specify a maximum of 10 site links. The search engine determines which links to include in the ad.
     * @var SiteLink[]
     */
    public $SiteLinks;
}

/**
 * Defines a website placement bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.90).aspx SitePlacement Data Object
 */
final class SitePlacement
{
    /**
     * The bid for text ad space on the specified publisher's website. This bid overrides the default content match bid of the ad group. To use the default ad group bid value when you add this bid, set this element to null.
     * @var Bid
     */
    public $Bid;

    /**
     * A system-generated identifier that identifies this object.
     * @var long
     */
    public $Id;

    /**
     * The identifier of the publisher website where you want to display your text ads.
     * @var long
     */
    public $PlacementId;

    /**
     * The status of this site placement bid. When you add a site placement bid, its status is Active by default.
     * @var SitePlacementStatus
     */
    public $Status;

    /**
     * The URL of the website where you want your text ads to display. The Url can contain a maximum of 256 characters.
     * @var string
     */
    public $Url;
}

/**
 * Defines a list of state targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.90).aspx StateTarget Data Object
 */
final class StateTarget
{
    /**
     * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the incremental bid percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var StateTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a sub geography, specifically a state or province to target, and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796942(v=msads.90).aspx StateTargetBid Data Object
 */
final class StateTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted sub geography.
     * @var int
     */
    public $BidAdjustment;

    /**
     * Set this element to true if you want to exclude the location from targeting.
     * @var boolean
     */
    public $IsExcluded;

    /**
     * The sub geography to target.
     * @var string
     */
    public $State;
}

/**
 * Defines the types of targeting that you can use to target your ads to users. For example, you can target your ads based on the geographic location of the user, the day of the week, or the time of the day.The target object must specify at least one target type.
 * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.90).aspx Target Data Object
 */
final class Target
{
    /**
     * Targets ads to users within one or more age ranges.
     * @var AgeTarget
     */
    public $Age;

    /**
     * Targets ads to run on specific days of the week.
     * @var DayTarget
     */
    public $Day;

    /**
     * Targets ads to serve on specific devices.
     * @var DeviceOSTarget
     */
    public $DeviceOS;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * Targets ads to men only or women only.
     * @var GenderTarget
     */
    public $Gender;

    /**
     * Targets ads to run at specific times of the day.
     * @var HourTarget
     */
    public $Hour;

    /**
     * A system-generated identifier that identifies this target object.
     * @var long
     */
    public $Id;

    /**
     * Determines whether the target library contains this target object.
     * @var boolean
     */
    public $IsLibraryTarget;

    /**
     * Targets ads to users within a specific location; for example, users within a certain radius of your business or within a specific state.
     * @var LocationTarget
     */
    public $Location;

    /**
     * The name of the target. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $Name;
}

/**
 * Defines information about a target in your library.
 * @link http://msdn.microsoft.com/en-us/library/dd796878(v=msads.90).aspx TargetInfo Data Object
 */
final class TargetInfo
{
    /**
     * The identifier of the target.
     * @var long
     */
    public $Id;

    /**
     * The name of the target.
     * @var string
     */
    public $Name;
}

/**
 * Defines a text ad.
 * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.90).aspx TextAd Data Object
 */
final class TextAd extends Ad
{
    /**
     * The URL of the webpage to take the user to when they click the ad.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The URL to display in the ad.
     * @var string
     */
    public $DisplayUrl;

    /**
     * The ad copy. The copy must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Text;

    /**
     * The title of the ad. The title must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Title;
}

/**
 * Adds one or more campaigns to the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaignsRequest Request Object
 */
final class AddCampaignsRequest
{
    /**
     * The identifier of the account to add the campaigns to.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Campaign objects to add to the specified account.
     * @var Campaign[]
     */
    public $Campaigns;
}

/**
 * Response object for the AddCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaignsResponse Response Object
 */
final class AddCampaignsResponse
{
    /**
     * An array of long values that represents the identifiers for the campaigns that were added.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Retrieves all the campaigns that exist within a specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.90).aspx GetCampaignsByAccountIdRequest Request Object
 */
final class GetCampaignsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetCampaignsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.90).aspx GetCampaignsByAccountIdResponse Response Object
 */
final class GetCampaignsByAccountIdResponse
{
    /**
     * An array of Campaign objects that represents the campaigns that were retrieved. If no campaigns exist, an empty array is returned.
     * @var Campaign[]
     */
    public $Campaigns;
}

/**
 * Retrieves the specified campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.90).aspx GetCampaignsByIdsRequest Request Object
 */
final class GetCampaignsByIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 identifiers of the campaigns to get from the specified account.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the GetCampaignsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.90).aspx GetCampaignsByIdsResponse Response Object
 */
final class GetCampaignsByIdsResponse
{
    /**
     * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request. If a campaign does not exist, the corresponding element of the array is set to NULL.
     * @var Campaign[]
     */
    public $Campaigns;
}

/**
 * Deletes one or more campaigns in a specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.90).aspx DeleteCampaignsRequest Request Object
 */
final class DeleteCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 campaign identifiers to delete.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the DeleteCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.90).aspx DeleteCampaignsResponse Response Object
 */
final class DeleteCampaignsResponse
{
}

/**
 * Updates specified campaigns in a specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.90).aspx UpdateCampaignsRequest Request Object
 */
final class UpdateCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaign to update.
     * @var long
     */
    public $AccountId;

    /**
     * An array that can contain a maximum of 100 Campaign objects to update.
     * @var Campaign[]
     */
    public $Campaigns;
}

/**
 * Response object for the UpdateCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.90).aspx UpdateCampaignsResponse Response Object
 */
final class UpdateCampaignsResponse
{
}

/**
 * Retrieves the negative keywords of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIdsRequest Request Object
 */
final class GetNegativeKeywordsByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers of the campaigns that contain the negative keywords that you want to get.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the GetNegativeKeywordsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIdsResponse Response Object
 */
final class GetNegativeKeywordsByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeKeywords objects that contains the negative keywords of the specified campaigns.
     * @var CampaignNegativeKeywords[]
     */
    public $CampaignNegativeKeywords;
}

/**
 * Sets the negative keywords of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn236316(v=msads.90).aspx SetNegativeKeywordsToCampaignsRequest Request Object
 */
final class SetNegativeKeywordsToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of CampaignNegativeKeywords objects that identify the campaigns to update with the specified negative keywords.
     * @var CampaignNegativeKeywords[]
     */
    public $CampaignNegativeKeywords;
}

/**
 * Response object for the SetNegativeKeywordsToCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236316(v=msads.90).aspx SetNegativeKeywordsToCampaignsResponse Response Object
 */
final class SetNegativeKeywordsToCampaignsResponse
{
}

/**
 * Gets the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.90).aspx GetNegativeSitesByCampaignIdsRequest Request Object
 */
final class GetNegativeSitesByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the GetNegativeSitesByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.90).aspx GetNegativeSitesByCampaignIdsResponse Response Object
 */
final class GetNegativeSitesByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeSites objects that contain the negative site URLs of the specified campaigns.
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}

/**
 * Sets the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.90).aspx SetNegativeSitesToCampaignsRequest Request Object
 */
final class SetNegativeSitesToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}

/**
 * Response object for the SetNegativeSitesToCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.90).aspx SetNegativeSitesToCampaignsResponse Response Object
 */
final class SetNegativeSitesToCampaignsResponse
{
}

/**
 * Adds new ad groups to a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.90).aspx AddAdGroupsRequest Request Object
 */
final class AddAdGroupsRequest
{
    /**
     * The identifier of the campaign to add the ad groups to.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroup objects to add to the specified campaign.
     * @var AdGroup[]
     */
    public $AdGroups;
}

/**
 * Response object for the AddAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.90).aspx AddAdGroupsResponse Response Object
 */
final class AddAdGroupsResponse
{
    /**
     * An array of long values that represents the identifiers for the ad groups that were added.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Deletes one or more ad groups in a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.90).aspx DeleteAdGroupsRequest Request Object
 */
final class DeleteAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be deleted.
     * @var long
     */
    public $CampaignId;

    /**
     * A maximum of 1,000 ad group identifiers to delete.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the DeleteAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.90).aspx DeleteAdGroupsResponse Response Object
 */
final class DeleteAdGroupsResponse
{
}

/**
 * Gets the specified ad groups that exist within a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.90).aspx GetAdGroupsByIdsRequest Request Object
 */
final class GetAdGroupsByIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     * @var long
     */
    public $CampaignId;

    /**
     * A maximum of 1,000 identifiers of the ad groups to get.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the GetAdGroupsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.90).aspx GetAdGroupsByIdsResponse Response Object
 */
final class GetAdGroupsByIdsResponse
{
    /**
     * An array of AdGroup objects that corresponds directly to the ad group identifiers that you specified in the request. If an ad group does not exist, the corresponding element of the array is set to NULL.
     * @var AdGroup[]
     */
    public $AdGroups;
}

/**
 * Gets the ad groups that exist within a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.90).aspx GetAdGroupsByCampaignIdRequest Request Object
 */
final class GetAdGroupsByCampaignIdRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the GetAdGroupsByCampaignId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.90).aspx GetAdGroupsByCampaignIdResponse Response Object
 */
final class GetAdGroupsByCampaignIdResponse
{
    /**
     * An array of AdGroup objects that represents the retrieved ad groups. If the specified campaign contains no ad groups, an empty array is returned.
     * @var AdGroup[]
     */
    public $AdGroups;
}

/**
 * Submits an ad group for editorial review.
 * @link http://msdn.microsoft.com/en-us/library/dn277516(v=msads.90).aspx SubmitAdGroupForApprovalRequest Request Object
 */
final class SubmitAdGroupForApprovalRequest
{
    /**
     * The identifier of the ad group that is being submitted for editorial review.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the SubmitAdGroupForApproval service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277516(v=msads.90).aspx SubmitAdGroupForApprovalResponse Response Object
 */
final class SubmitAdGroupForApprovalResponse
{
}

/**
 * Updates the specified ad groups in a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.90).aspx UpdateAdGroupsRequest Request Object
 */
final class UpdateAdGroupsRequest
{
    /**
     * The identifier of the campaign that owns the ad groups to update.
     * @var long
     */
    public $CampaignId;

    /**
     * An array that can contain a maximum of 1,000 AdGroup objects to update.
     * @var AdGroup[]
     */
    public $AdGroups;
}

/**
 * Response object for the UpdateAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.90).aspx UpdateAdGroupsResponse Response Object
 */
final class UpdateAdGroupsResponse
{
}

/**
 * Retrieves the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn277514(v=msads.90).aspx GetNegativeKeywordsByAdGroupIdsRequest Request Object
 */
final class GetNegativeKeywordsByAdGroupIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers of the ad groups that contain the negative keywords that you want to get.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the GetNegativeKeywordsByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277514(v=msads.90).aspx GetNegativeKeywordsByAdGroupIdsResponse Response Object
 */
final class GetNegativeKeywordsByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeKeywords objects that contains the negative keywords of the specified ad groups.
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}

/**
 * Sets the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn236312(v=msads.90).aspx SetNegativeKeywordsToAdGroupsRequest Request Object
 */
final class SetNegativeKeywordsToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroupNegativeKeywords objects that identify the ad groups to update with the specified negative keywords.
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}

/**
 * Response object for the SetNegativeKeywordsToAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236312(v=msads.90).aspx SetNegativeKeywordsToAdGroupsResponse Response Object
 */
final class SetNegativeKeywordsToAdGroupsResponse
{
}

/**
 * Gets the negative site URLs of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.90).aspx GetNegativeSitesByAdGroupIdsRequest Request Object
 */
final class GetNegativeSitesByAdGroupIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers of the ad groups that contain the negative site URLs that you want to get.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the GetNegativeSitesByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.90).aspx GetNegativeSitesByAdGroupIdsResponse Response Object
 */
final class GetNegativeSitesByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeSites objects that contains the negative site URLs of the specified ad groups.
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}

/**
 * Sets the negative site URLs of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.90).aspx SetNegativeSitesToAdGroupsRequest Request Object
 */
final class SetNegativeSitesToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}

/**
 * Response object for the SetNegativeSitesToAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.90).aspx SetNegativeSitesToAdGroupsResponse Response Object
 */
final class SetNegativeSitesToAdGroupsResponse
{
}

/**
 * Adds targets to your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.90).aspx AddTargetsToLibraryRequest Request Object
 */
final class AddTargetsToLibraryRequest
{
    /**
     * An array of Target objects to add to the target library.
     * @var Target[]
     */
    public $Targets;
}

/**
 * Response object for the AddTargetsToLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.90).aspx AddTargetsToLibraryResponse Response Object
 */
final class AddTargetsToLibraryResponse
{
    /**
     * An array of long values that contains the identifiers of the targets that were added to your target library.
     * @var long[]
     */
    public $TargetIds;
}

/**
 * Updates targets in your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.90).aspx UpdateTargetsInLibraryRequest Request Object
 */
final class UpdateTargetsInLibraryRequest
{
    /**
     * An array of Target objects that contains the updated target information.
     * @var Target[]
     */
    public $Targets;
}

/**
 * Response object for the UpdateTargetsInLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.90).aspx UpdateTargetsInLibraryResponse Response Object
 */
final class UpdateTargetsInLibraryResponse
{
}

/**
 * Removes targets from your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.90).aspx DeleteTargetsFromLibraryRequest Request Object
 */
final class DeleteTargetsFromLibraryRequest
{
    /**
     * An array of long values that specifies the identifiers of the targets to remove from the target library.
     * @var long[]
     */
    public $TargetIds;
}

/**
 * Response object for the DeleteTargetsFromLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.90).aspx DeleteTargetsFromLibraryResponse Response Object
 */
final class DeleteTargetsFromLibraryResponse
{
}

/**
 * Retrieves detailed information about all the targets in your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.90).aspx GetTargetsInfoFromLibraryRequest Request Object
 */
final class GetTargetsInfoFromLibraryRequest
{
}

/**
 * Response object for the GetTargetsInfoFromLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.90).aspx GetTargetsInfoFromLibraryResponse Response Object
 */
final class GetTargetsInfoFromLibraryResponse
{
    /**
     * An array of TargetInfo objects that contain information about the targets in your library.
     * @var TargetInfo[]
     */
    public $TargetsInfo;
}

/**
 * Retrieves detailed information about the specified targets.
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.90).aspx GetTargetsByIdsRequest Request Object
 */
final class GetTargetsByIdsRequest
{
    /**
     * A list of identifiers of the targets to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $TargetIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}

/**
 * Response object for the GetTargetsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.90).aspx GetTargetsByIdsResponse Response Object
 */
final class GetTargetsByIdsResponse
{
    /**
     * An array of Target objects that contains information about the specified targets.
     * @var Target[]
     */
    public $Targets;
}

/**
 * Associates the specified target with the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.90).aspx SetTargetToAdGroupRequest Request Object
 */
final class SetTargetToAdGroupRequest
{
    /**
     * The identifier of the ad group to associate with the target.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the target to associate with the ad group.
     * @var long
     */
    public $TargetId;
}

/**
 * Response object for the SetTargetToAdGroup service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.90).aspx SetTargetToAdGroupResponse Response Object
 */
final class SetTargetToAdGroupResponse
{
}

/**
 * Removes the specified target association for the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.90).aspx DeleteTargetFromAdGroupRequest Request Object
 */
final class DeleteTargetFromAdGroupRequest
{
    /**
     * The identifier of the ad group from which to remove the target association.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the DeleteTargetFromAdGroup service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.90).aspx DeleteTargetFromAdGroupResponse Response Object
 */
final class DeleteTargetFromAdGroupResponse
{
}

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIdsRequest Request Object
 */
final class GetTargetsByAdGroupIdsRequest
{
    /**
     * A list of identifiers of the ad groups that contain the targets that you want to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdGroupIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}

/**
 * Response object for the GetTargetsByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIdsResponse Response Object
 */
final class GetTargetsByAdGroupIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of ad group identifiers in the request. If the ad group does not contain a reference to a target object, the corresponding target element in the array is NULL.
     * @var Target[]
     */
    public $Targets;
}

/**
 * Associates the specified target with the specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.90).aspx SetTargetToCampaignRequest Request Object
 */
final class SetTargetToCampaignRequest
{
    /**
     * The identifier of the campaign to associate with the target.
     * @var long
     */
    public $CampaignId;

    /**
     * The identifier of the target to associate with the campaign.
     * @var long
     */
    public $TargetId;
}

/**
 * Response object for the SetTargetToCampaign service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.90).aspx SetTargetToCampaignResponse Response Object
 */
final class SetTargetToCampaignResponse
{
}

/**
 * Removes the target association for the specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.90).aspx DeleteTargetFromCampaignRequest Request Object
 */
final class DeleteTargetFromCampaignRequest
{
    /**
     * The identifier of the campaign from which to remove the target association.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the DeleteTargetFromCampaign service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.90).aspx DeleteTargetFromCampaignResponse Response Object
 */
final class DeleteTargetFromCampaignResponse
{
}

/**
 * Retrieves detailed information about the targets that are associated with the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.90).aspx GetTargetsByCampaignIdsRequest Request Object
 */
final class GetTargetsByCampaignIdsRequest
{
    /**
     * A list of identifiers of the campaigns that contain the targets that you want to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}

/**
 * Response object for the GetTargetsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.90).aspx GetTargetsByCampaignIdsResponse Response Object
 */
final class GetTargetsByCampaignIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of campaign identifiers in the request. If the campaign does not contain a reference to a target object, the corresponding target element in the array is NULL.
     * @var Target[]
     */
    public $Targets;
}

/**
 * Adds one or more ads to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.90).aspx AddAdsRequest Request Object
 */
final class AddAdsRequest
{
    /**
     * The identifier of the ad group to add the ads to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of ads to add to the specified ad group. The maximum number of ads that you can add to an ad group is 50.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Response object for the AddAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.90).aspx AddAdsResponse Response Object
 */
final class AddAdsResponse
{
    /**
     * A list of long values that represents the identifiers for the ads that were added.
     * @var long[]
     */
    public $AdIds;

    /**
     * An array of BatchError objects that contain details for any ads that were not successfully added.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Deletes one or more ads in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAdsRequest Request Object
 */
final class DeleteAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * The IDs of the ads to delete. You can specify a maximum of 50 IDs.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Response object for the DeleteAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAdsResponse Response Object
 */
final class DeleteAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully deleted.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.90).aspx GetAdsByEditorialStatusRequest Request Object
 */
final class GetAdsByEditorialStatusRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     * @var long
     */
    public $AdGroupId;

    /**
     * The AdEditorialStatus value that specifies the review status that the ads must have to be returned.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;
}

/**
 * Response object for the GetAdsByEditorialStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.90).aspx GetAdsByEditorialStatusResponse Response Object
 */
final class GetAdsByEditorialStatusResponse
{
    /**
     * An array of Ad objects that represents the ads that have been retrieved. If the ad group doesn't contain ads that meet the criteria, this array is empty.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Retrieves the specified ads from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.90).aspx GetAdsByIdsRequest Request Object
 */
final class GetAdsByIdsRequest
{
    /**
     * The identifier of the ad group that contains the ads to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 20 identifiers of the ads to get.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Response object for the GetAdsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.90).aspx GetAdsByIdsResponse Response Object
 */
final class GetAdsByIdsResponse
{
    /**
     * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request. If an ad does not exist, the corresponding element of the array is set to NULL.
     * @var Ad[]
     */
    public $Ads;

    /**
     * An array of BatchError objects that contain details for any ads that were not successfully retrieved.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Retrieves the ads that are associated with an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.90).aspx GetAdsByAdGroupIdRequest Request Object
 */
final class GetAdsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the GetAdsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.90).aspx GetAdsByAdGroupIdResponse Response Object
 */
final class GetAdsByAdGroupIdResponse
{
    /**
     * An array of Ad objects that represents the ads that have been retrieved. If the ad group doesn't contain ads, this array is empty.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Updates the specified ads within a particular ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.90).aspx UpdateAdsRequest Request Object
 */
final class UpdateAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to update.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of ads to update. You may update a maximum of 50 ads.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Response object for the UpdateAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.90).aspx UpdateAdsResponse Response Object
 */
final class UpdateAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully updated.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Adds one or more keywords to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.90).aspx AddKeywordsRequest Request Object
 */
final class AddKeywordsRequest
{
    /**
     * The identifier of the ad group to add the keywords to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of Keyword objects to add to the specified ad group.
     * @var Keyword[]
     */
    public $Keywords;
}

/**
 * Response object for the AddKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.90).aspx AddKeywordsResponse Response Object
 */
final class AddKeywordsResponse
{
    /**
     * An list of long values that represents the keyword identifiers for the keywords that were added.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully added.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Deletes one or more keywords in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.90).aspx DeleteKeywordsRequest Request Object
 */
final class DeleteKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 keywords identifiers to delete.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the DeleteKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.90).aspx DeleteKeywordsResponse Response Object
 */
final class DeleteKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully deleted.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Retrieves the keywords with the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.90).aspx GetKeywordsByEditorialStatusRequest Request Object
 */
final class GetKeywordsByEditorialStatusRequest
{
    /**
     * The identifier of the ad group that contains the keywords to retrieve.
     * @var long
     */
    public $AdGroupId;

    /**
     * The review status of the keywords to retrieve.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;
}

/**
 * Response object for the GetKeywordsByEditorialStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.90).aspx GetKeywordsByEditorialStatusResponse Response Object
 */
final class GetKeywordsByEditorialStatusResponse
{
    /**
     * An array of Keyword objects that contains information about the keywords that were retrieved.
     * @var Keyword[]
     */
    public $Keywords;
}

/**
 * Retrieves the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.90).aspx GetKeywordsByIdsRequest Request Object
 */
final class GetKeywordsByIdsRequest
{
    /**
     * The identifier of the ad group whose keywords you want to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 identifiers of the keywords to get.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the GetKeywordsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.90).aspx GetKeywordsByIdsResponse Response Object
 */
final class GetKeywordsByIdsResponse
{
    /**
     * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request. If a keyword does not exist, the corresponding element of the array is set to NULL.
     * @var Keyword[]
     */
    public $Keywords;

    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully retrieved.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Retrieves the keywords for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.90).aspx GetKeywordsByAdGroupIdRequest Request Object
 */
final class GetKeywordsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that keywords are returned for.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the GetKeywordsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.90).aspx GetKeywordsByAdGroupIdResponse Response Object
 */
final class GetKeywordsByAdGroupIdResponse
{
    /**
     * An array of Keyword objects that represents the retrieved keywords. If no keywords exist, an empty array is returned.
     * @var Keyword[]
     */
    public $Keywords;
}

/**
 * Updates the keywords within a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywordsRequest Request Object
 */
final class UpdateKeywordsRequest
{
    /**
     * The identifier of the ad group whose keywords will be updated.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of Keyword objects that contains the updated keyword information. The Id element of each of these objects identifies the keyword to update.
     * @var Keyword[]
     */
    public $Keywords;
}

/**
 * Response object for the UpdateKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywordsResponse Response Object
 */
final class UpdateKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully updated.
     * @var BatchError[]
     */
    public $PartialErrors;
}

/**
 * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.90).aspx AppealEditorialRejectionsRequest Request Object
 */
final class AppealEditorialRejectionsRequest
{
    /**
     * A list of unique identifiers of the ads or keywords that failed editorial review. The list must include all ads or all keywords - the list cannot include a mix ads and keywords. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $EntityIds;

    /**
     * The type of entities that the entity list contains.
     * @var EntityType
     */
    public $EntityType;

    /**
     * The justification for the appeal. The string can contain a maximum of 1,000 characters. The justification applies to all of the specified entities.
     * @var string
     */
    public $JustificationText;
}

/**
 * Response object for the AppealEditorialRejections service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.90).aspx AppealEditorialRejectionsResponse Response Object
 */
final class AppealEditorialRejectionsResponse
{
}

/**
 * Adds one or more website placement bids to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.90).aspx AddSitePlacementsRequest Request Object
 */
final class AddSitePlacementsRequest
{
    /**
     * The identifier of the ad group to add the site placement bids to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of SitePlacement objects that contains the site placement bids to add.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}

/**
 * Response object for the AddSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.90).aspx AddSitePlacementsResponse Response Object
 */
final class AddSitePlacementsResponse
{
    /**
     * The identifiers of the website placement bids that were added.
     * @var long[]
     */
    public $SitePlacementIds;
}

/**
 * Deletes one or more website-placement bids from an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.90).aspx DeleteSitePlacementsRequest Request Object
 */
final class DeleteSitePlacementsRequest
{
    /**
     * The identifier of the ad group from which to delete the website placement bids.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of long values that specifies the site placement bids to be removed.
     * @var long[]
     */
    public $SitePlacementIds;
}

/**
 * Response object for the DeleteSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.90).aspx DeleteSitePlacementsResponse Response Object
 */
final class DeleteSitePlacementsResponse
{
}

/**
 * Retrieves the specified website-placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.90).aspx GetSitePlacementsByIdsRequest Request Object
 */
final class GetSitePlacementsByIdsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids to be retrieved.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids to be retrieved.
     * @var long[]
     */
    public $SitePlacementIds;
}

/**
 * Response object for the GetSitePlacementsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.90).aspx GetSitePlacementsByIdsResponse Response Object
 */
final class GetSitePlacementsByIdsResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved. If no website placements are retrieved, this array is empty.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}

/**
 * Retrieves all the website-placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.90).aspx GetSitePlacementsByAdGroupIdRequest Request Object
 */
final class GetSitePlacementsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be retrieved.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the GetSitePlacementsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.90).aspx GetSitePlacementsByAdGroupIdResponse Response Object
 */
final class GetSitePlacementsByAdGroupIdResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved. If no website placements are retrieved, this array is empty.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}

/**
 * Updates one or more website-placement bids in an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.90).aspx UpdateSitePlacementsRequest Request Object
 */
final class UpdateSitePlacementsRequest
{
    /**
     * The identifier of the ad group that the placement bids to be updated belong to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of SitePlacement objects that contains the updated website placement bid information.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}

/**
 * Response object for the UpdateSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.90).aspx UpdateSitePlacementsResponse Response Object
 */
final class UpdateSitePlacementsResponse
{
}

/**
 * Retrieves placement information for the specified URLs.
 * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.90).aspx GetPlacementDetailsForUrlsRequest Request Object
 */
final class GetPlacementDetailsForUrlsRequest
{
    /**
     * An array of URLs from the publisher websites where you want to display your text ads.
     * @var string[]
     */
    public $Urls;
}

/**
 * Response object for the GetPlacementDetailsForUrls service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.90).aspx GetPlacementDetailsForUrlsResponse Response Object
 */
final class GetPlacementDetailsForUrlsResponse
{
    /**
     * A two-dimensional array of PlacementDetail objects that contains the identifier of the publisher website and the types and sizes of media that the publisher supports.
     * @var PlacementDetail[]
     */
    public $PlacementDetails;
}

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.90).aspx GetEditorialReasonsByIdsRequest Request Object
 */
final class GetEditorialReasonsByIdsRequest
{
    /**
     * The identifier of the account that contains the specified entities.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identifies the ads or keywords that failed editorial review. The list must include all ads or all keywords - the list cannot include a mix ads and keywords. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $EntityIds;

    /**
     * The type of entities that the entity list contains.
     * @var EntityType
     */
    public $EntityType;
}

/**
 * Response object for the GetEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.90).aspx GetEditorialReasonsByIdsResponse Response Object
 */
final class GetEditorialReasonsByIdsResponse
{
    /**
     * A collection of ads or keywords that failed editorial review. The object identifies the reason for the failure and whether it is appealable.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}

/**
 * Adds one or more ad extensions to an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.90).aspx AddAdExtensionsRequest Request Object
 */
final class AddAdExtensionsRequest
{
    /**
     * The identifier of the account to add the extensions to.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions of any type to add to the account. You can specify a maximum of 100 extensions per call.
     * @var AdExtension[]
     */
    public $AdExtensions;
}

/**
 * Response object for the AddAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.90).aspx AddAdExtensionsResponse Response Object
 */
final class AddAdExtensionsResponse
{
    /**
     * The identities of the extensions that were added. The list corresponds directly to the list of extensions specified in the request.
     * @var AdExtensionIdentity[]
     */
    public $AdExtensionIdentities;
}

/**
 * Gets the specified ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.90).aspx GetAdExtensionsByIdsRequest Request Object
 */
final class GetAdExtensionsByIdsRequest
{
    /**
     * The identifier of the account that owns the ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of ad extension identifiers. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdExtensionIds;

    /**
     * The types of ad extensions that the list of identifiers contains.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}

/**
 * Response object for the GetAdExtensionsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.90).aspx GetAdExtensionsByIdsResponse Response Object
 */
final class GetAdExtensionsByIdsResponse
{
    /**
     * A list of AdExtension objects. The list corresponds directly to the list of identifiers in the request. If an ad extension ID in the request is not valid or the extension is not of the type specified, the corresponding item in this list is null.
     * @var AdExtension[]
     */
    public $AdExtensions;
}

/**
 * Updates one or more ad extensions within an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.90).aspx UpdateAdExtensionsRequest Request Object
 */
final class UpdateAdExtensionsRequest
{
    /**
     * The identifier of the account which contains the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions of any type, to update within the account. You may specify a maximum of 100 extensions per call.
     * @var AdExtension[]
     */
    public $AdExtensions;
}

/**
 * Response object for the UpdateAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.90).aspx UpdateAdExtensionsResponse Response Object
 */
final class UpdateAdExtensionsResponse
{
}

/**
 * Deletes one or more ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.90).aspx DeleteAdExtensionsRequest Request Object
 */
final class DeleteAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the extensions to delete. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdExtensionIds;
}

/**
 * Response object for the DeleteAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.90).aspx DeleteAdExtensionsResponse Response Object
 */
final class DeleteAdExtensionsResponse
{
}

/**
 * Gets editorial rejection reasons for the respective ad extension and entity associations.
 * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.90).aspx GetAdExtensionsEditorialReasonsRequest Request Object
 */
final class GetAdExtensionsEditorialReasonsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions and corresponding entity associations to get.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;

    /**
     * Filters the returned associations by entity type.
     * @var AssociationType
     */
    public $AssociationType;
}

/**
 * Response object for the GetAdExtensionsEditorialReasons service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.90).aspx GetAdExtensionsEditorialReasonsResponse Response Object
 */
final class GetAdExtensionsEditorialReasonsResponse
{
    /**
     * The collection of ad extension editorial reasons.
     * @var AdExtensionEditorialReasonCollection[]
     */
    public $EditorialReasons;
}

/**
 *  Associates the specified ad extensions with the respective campaigns or ad groups.Currently only site links ad extensions may be associated with ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.90).aspx SetAdExtensionsAssociationsRequest Request Object
 */
final class SetAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions to associate with campaigns or ad groups. You may either specify a list of associations for campaigns, or specify a list of associations for ad groups per service call. Specify the entity type with the AssociationType element.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;

    /**
     * The type of all entities specified in the AdExtensionIdToEntityIdAssociations list.
     * @var AssociationType
     */
    public $AssociationType;
}

/**
 * Response object for the SetAdExtensionsAssociations service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.90).aspx SetAdExtensionsAssociationsResponse Response Object
 */
final class SetAdExtensionsAssociationsResponse
{
}

/**
 * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.90).aspx GetAdExtensionsAssociationsRequest Request Object
 */
final class GetAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * Filters the returned associations by ad extension type.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;

    /**
     * Filters the returned associations by entity type.
     * @var AssociationType
     */
    public $AssociationType;

    /**
     * The list of entity identifiers by which you may request the respective ad extension associations.
     * @var long[]
     */
    public $EntityIds;
}

/**
 * Response object for the GetAdExtensionsAssociations service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.90).aspx GetAdExtensionsAssociationsResponse Response Object
 */
final class GetAdExtensionsAssociationsResponse
{
    /**
     * An array of ad extension association collections.
     * @var AdExtensionAssociationCollection[]
     */
    public $AdExtensionAssociationCollection;
}

/**
 * Removes the specified association from the respective campaigns or ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.90).aspx DeleteAdExtensionsAssociationsRequest Request Object
 */
final class DeleteAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions that are associated with campaigns or ad groups before calling this operation.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;

    /**
     * The entity type or types associated with an ad extension.
     * @var AssociationType
     */
    public $AssociationType;
}

/**
 * Response object for the DeleteAdExtensionsAssociations service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.90).aspx DeleteAdExtensionsAssociationsResponse Response Object
 */
final class DeleteAdExtensionsAssociationsResponse
{
}

/**
 * Gets the ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.90).aspx GetAdExtensionIdsByAccountIdRequest Request Object
 */
final class GetAdExtensionIdsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the ad extensions to get.
     * @var long
     */
    public $AccountId;

    /**
     * The types of ad extensions to get from the account. You can specify one or more types. For possible values, see AdExtensionsTypeFilter.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;

    /**
     * A value that filters the extensions based on whether they're associated with a specific entity type. For possible values, see AssociationType.
     * @var AssociationType
     */
    public $AssociationType;
}

/**
 * Response object for the GetAdExtensionIdsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.90).aspx GetAdExtensionIdsByAccountIdResponse Response Object
 */
final class GetAdExtensionIdsByAccountIdResponse
{
    /**
     * A list of ad extension IDs. To get the extension, call the GetAdExtensionsByIds operation.
     * @var long[]
     */
    public $AdExtensionIds;
}

/**
 * Adds the specified media to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.90).aspx AddMediaRequest Request Object
 */
final class AddMediaRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Media to add to the account's media library.
     * @var Media[]
     */
    public $Media;
}

/**
 * Response object for the AddMedia service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.90).aspx AddMediaResponse Response Object
 */
final class AddMediaResponse
{
    /**
     * The identifiers of the media that you added to the library. You use the identifier to set the appropriate media ID field in the LocationAdExtension object.
     * @var long[]
     */
    public $MediaIds;
}

/**
 * Gets the specified media from an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.90).aspx GetMediaByIdsRequest Request Object
 */
final class GetMediaByIdsRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the media to get.
     * @var long[]
     */
    public $MediaIds;
}

/**
 * Response object for the GetMediaByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.90).aspx GetMediaByIdsResponse Response Object
 */
final class GetMediaByIdsResponse
{
    /**
     * The specified media from the library.
     * @var Media[]
     */
    public $Media;
}

/**
 * Gets the specified criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.90).aspx GetAdGroupCriterionsByIdsRequest Request Object
 */
final class GetAdGroupCriterionsByIdsRequest
{
    /**
     * The identifier of the account that owns the criterions to get.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identify the criterions to get. You can specify a maximum of 1,000 IDs.
     * @var long[]
     */
    public $AdGroupCriterionIds;
}

/**
 * Response object for the GetAdGroupCriterionsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.90).aspx GetAdGroupCriterionsByIdsResponse Response Object
 */
final class GetAdGroupCriterionsByIdsResponse
{
    /**
     * The list of criterions that correspond directly to the identifiers specified in the request. If an identifier in the list is not valid, the corresponding item in the response is set to null.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}

/**
 * Gets the specified types of criterions from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277517(v=msads.90).aspx GetAdGroupCriterionsByAdGroupIdRequest Request Object
 */
final class GetAdGroupCriterionsByAdGroupIdRequest
{
    /**
     * The identifier of the account that owns the ad group.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the ad group that contains the criterions to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * The types of criterions to get from the ad group. You can specify one or more types.
     * @var CriterionType
     */
    public $CriterionTypeFilter;
}

/**
 * Response object for the GetAdGroupCriterionsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277517(v=msads.90).aspx GetAdGroupCriterionsByAdGroupIdResponse Response Object
 */
final class GetAdGroupCriterionsByAdGroupIdResponse
{
    /**
     * The list of criterions that you requested. If the ad group does not contain the specified types of criterion, the list is empty.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}

/**
 * Adds one or more ad group criterions that determine whether ads in the ad group get served.
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.90).aspx AddAdGroupCriterionsRequest Request Object
 */
final class AddAdGroupCriterionsRequest
{
    /**
     * The identifier of the account to add the criterions to.
     * @var long
     */
    public $AccountId;

    /**
     * A list of criterions that determine whether ads in the ad group are served.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}

/**
 * Response object for the AddAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.90).aspx AddAdGroupCriterionsResponse Response Object
 */
final class AddAdGroupCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added. The list of identifiers corresponds directly to the list of criterion in the request.
     * @var long[]
     */
    public $AdGroupCriterionIds;
}

/**
 * Updates one or more ad group criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.90).aspx UpdateAdGroupCriterionsRequest Request Object
 */
final class UpdateAdGroupCriterionsRequest
{
    /**
     * The identifier of the account that owns the criterions to update.
     * @var long
     */
    public $AccountId;

    /**
     * The list of criterions to update. You may specify a maximum of 1,000 criterions.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}

/**
 * Response object for the UpdateAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.90).aspx UpdateAdGroupCriterionsResponse Response Object
 */
final class UpdateAdGroupCriterionsResponse
{
}

/**
 * Deletes the specified ad group criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.90).aspx DeleteAdGroupCriterionsRequest Request Object
 */
final class DeleteAdGroupCriterionsRequest
{
    /**
     * The identifier of the account that owns the criterion to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identify the criterion to delete. You can specify a maximum on 1,000 identifiers per call.
     * @var long[]
     */
    public $AdGroupCriterionIds;

    /**
     * The identifier of the ad group that owns the criterion to delete.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the DeleteAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.90).aspx DeleteAdGroupCriterionsResponse Response Object
 */
final class DeleteAdGroupCriterionsResponse
{
}

/**
 * Gets the Bing Merchant Center stores for the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.90).aspx GetBMCStoresByCustomerIdRequest Request Object
 */
final class GetBMCStoresByCustomerIdRequest
{
}

/**
 * Response object for the GetBMCStoresByCustomerId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.90).aspx GetBMCStoresByCustomerIdResponse Response Object
 */
final class GetBMCStoresByCustomerIdResponse
{
    /**
     * The list of Bing Merchant Center stores for the specified customer.
     * @var BMCStore[]
     */
    public $BMCStores;
}


?>
