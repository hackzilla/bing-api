<?php
// Generated on 8/9/2013 5:26:29 AM

namespace BingAds\CampaignManagement;

/**
 * Defines the possible budget types that you can specify for a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.80).aspx BudgetLimitType Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.80).aspx CampaignStatus Value Set
 */
final class CampaignStatus
{
    /** The campaign is active, which indicates that the campaign's ads can be served. */
    const Active = 'Active';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. This status is set when you call the PauseCampaigns operation. To resume the campaign, call the ResumeCampaigns operation. */
    const Paused = 'Paused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. The service sets this status when the budget is depleted. The service will set the status back to Active when the budget is restored. */
    const BudgetPaused = 'BudgetPaused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. This status results when the user calls the PauseCampaigns operation after the service pauses the campaign because the budget is depleted. To resume the campaign after the budget is restored, call the ResumeCampaigns operation. */
    const BudgetAndManualPaused = 'BudgetAndManualPaused';

    /** The campaign is deleted. This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';
}

/**
 * Defines the ad distribution for the ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.80).aspx AdDistribution Value Set
 */
final class AdDistribution
{
    /** The ad group contains search ads. The ads are displayed on the search network that you specify for the ad group. For more information, see the Network element of AdGroup. */
    const Search = 'Search';

    /** The ad group contains content ads. The text ads are displayed on Microsoft-owned websites, as well as on participating partner websites. */
    const Content = 'Content';
}

/**
 * Defines the bidding model for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796906(v=msads.80).aspx BiddingModel Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.80).aspx Network Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.80).aspx PricingModel Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.80).aspx AdGroupStatus Value Set
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
 * Defines the possible ad rotation types that you can apply to an ad group. For ad groups with more than one ad, these options determine how the ads are rotated into the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.80).aspx AdRotationType Value Set
 */
final class AdRotationType
{
    /** Favor the best performing ads. */
    const OptimizeForClicks = 'OptimizeForClicks';

    /** Rotate ads evenly into the auction. */
    const RotateAdsEvenly = 'RotateAdsEvenly';
}

/**
 * Defines the possible age range values that you can use to target ads to users.
 * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.80).aspx AgeRange Value Set
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
 * Defines the possible percentage values by which you can adjust the base bid. For more information on how to adjust the bid for a satisfied target condition, see Managing Targets.
 * @link http://msdn.microsoft.com/en-us/library/bb671455(v=msads.80).aspx IncrementalBidPercentage Value Set
 */
final class IncrementalBidPercentage
{
    /** Do not Adjust the base bid. */
    const ZeroPercent = 'ZeroPercent';

    /** Adjust the base bid by 10 percent. */
    const TenPercent = 'TenPercent';

    /** Adjust the base bid by 20 percent. */
    const TwentyPercent = 'TwentyPercent';

    /** Adjust the base bid by 30 percent. */
    const ThirtyPercent = 'ThirtyPercent';

    /** Adjust the base bid by 40 percent. */
    const FortyPercent = 'FortyPercent';

    /** Adjust the base bid by 50 percent. */
    const FiftyPercent = 'FiftyPercent';

    /** Adjust the base bid by 60 percent. */
    const SixtyPercent = 'SixtyPercent';

    /** Adjust the base bid by 70 percent. */
    const SeventyPercent = 'SeventyPercent';

    /** Adjust the base bid by 80 percent. */
    const EightyPercent = 'EightyPercent';

    /** Adjust the base bid by 90 percent. */
    const NinetyPercent = 'NinetyPercent';

    /** Adjust the base bid by 100 percent. */
    const OneHundredPercent = 'OneHundredPercent';

    /** Not currently supported. */
    const NegativeTenPercent = 'NegativeTenPercent';

    /** Not currently supported. */
    const NegativeTwentyPercent = 'NegativeTwentyPercent';

    /** Not currently supported. */
    const NegativeThirtyPercent = 'NegativeThirtyPercent';

    /** Not currently supported. */
    const NegativeFortyPercent = 'NegativeFortyPercent';

    /** Not currently supported. */
    const NegativeFiftyPercent = 'NegativeFiftyPercent';

    /** Not currently supported. */
    const NegativeSixtyPercent = 'NegativeSixtyPercent';

    /** Not currently supported. */
    const NegativeSeventyPercent = 'NegativeSeventyPercent';

    /** Not currently supported. */
    const NegativeEightyPercent = 'NegativeEightyPercent';

    /** Not currently supported. */
    const NegativeNinetyPercent = 'NegativeNinetyPercent';

    /** Not currently supported. */
    const NegativeOneHundredPercent = 'NegativeOneHundredPercent';

    /** Not currently supported. */
    const ValueNotSupportedInV8 = 'ValueNotSupportedInV8';
}

/**
 * Defines the day values that you can specify for day of the week targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb671717(v=msads.80).aspx Day Value Set
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
 * Defines the possible device types to target your ads.
 * @link http://msdn.microsoft.com/en-us/library/ff728479(v=msads.80).aspx DeviceType Value Set
 */
final class DeviceType
{
    /** Target ads to smartphones, and specifically any high fidelity mobile device capable of rendering full HTML. */
    const Smartphones = 'Smartphones';

    /** Target ads to computers. */
    const Computers = 'Computers';
}

/**
 * Defines the genders that are available for ad group targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb671519(v=msads.80).aspx GenderType Value Set
 */
final class GenderType
{
    const Male = 'Male';
    const Female = 'Female';
}

/**
 * Defines the time ranges that you can specify for time of the day targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb672093(v=msads.80).aspx HourRange Value Set
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
 * Defines the possible types of entities.
 * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.80).aspx EntityType Value Set
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

    /** For future use. */
    const AdGroupCriterion = 'AdGroupCriterion';
}

/**
 * Defines the possible types of exclusions that you can apply to an entity.
 * @link http://msdn.microsoft.com/en-us/library/jj622173(v=msads.80).aspx ExclusionType Value Set
 */
final class ExclusionType
{
    /** Geographical location exclusion. For example, you would use a location exclusion to exclude a state or metropolitan area from a country target. */
    const Location = 'Location';
}

/**
 * Defines the editorial review status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.80).aspx AdEditorialStatus Value Set
 */
final class AdEditorialStatus
{
    /** The ad passed editorial review. */
    const Active = 'Active';

    /** The ad failed editorial review. To determine the reason why the ad was disapproved and whether it's appealable, call the GetEditorialReasonsByIds operation. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad is undergoing editorial review. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.80).aspx AdStatus Value Set
 */
final class AdStatus
{
    /** The ad is undergoing editorial review or has failed editorial review. To determine which, see AdEditorialStatus. */
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
 * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.80).aspx AdType Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.80).aspx KeywordEditorialStatus Value Set
 */
final class KeywordEditorialStatus
{
    /** The keyword passed editorial review. */
    const Active = 'Active';

    /** The keyword failed editorial review. To determine the reason why the keyword was disapproved and whether it's appealable, call the GetEditorialReasonsByIds operation. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the keyword is undergoing editorial review. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible status values of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.80).aspx KeywordStatus Value Set
 */
final class KeywordStatus
{
    /** The keyword can be used to match user search queries. */
    const Active = 'Active';

    /** The keyword cannot be used to match user search queries until the owner resumes it. */
    const Paused = 'Paused';

    /** This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';

    /** The keyword is undergoing editorial review or has failed editorial review. To determine which, see KeywordEditorialStatus. */
    const Inactive = 'Inactive';
}

/**
 * Defines which of the standard set of icons should be displayed for a business.
 * @link http://msdn.microsoft.com/en-us/library/dd797022(v=msads.80).aspx StandardBusinessIcon Value Set
 */
final class StandardBusinessIcon
{
    /** The icon is used for a movie or video type of business. */
    const MoviesOrVideo = 'MoviesOrVideo';

    /** The icon is used for a pub, bar, or liquor store type of business. */
    const PubOrBarOrLiquor = 'PubOrBarOrLiquor';

    /** The icon is used for a lodging and accommodations type of business. */
    const Accommodations = 'Accommodations';

    /** The icon is used for a restaurant type of business. */
    const RestaurantOrDining = 'RestaurantOrDining';

    /** The icon is used for a caf? or coffee shop type of business. */
    const CafeOrCoffeeShop = 'CafeOrCoffeeShop';

    /** The icon is used for a flower or garden type of business. */
    const FlowersOrGarden = 'FlowersOrGarden';

    /** The icon is used for a car dealer, service, or rental type of business. */
    const CarDealerOrServiceOrRental = 'CarDealerOrServiceOrRental';

    /** The icon is used for a grocery or department store type of business. */
    const GroceryOrDepartmentStore = 'GroceryOrDepartmentStore';

    /** The icon is used for a shopping or boutique type of business. */
    const ShoppingOrBoutique = 'ShoppingOrBoutique';

    /** The icon is used for a housewares, real estate, or home repair type of business. */
    const HousewaresOrRealEstateOrHomeRepair = 'HousewaresOrRealEstateOrHomeRepair';

    /** The icon is used for a phone or phone service provider type of business. */
    const PhonesOrServiceProvider = 'PhonesOrServiceProvider';

    /** The icon is used for a banking or finance type of business. */
    const BankOrFinanceOrCurrencyExchange = 'BankOrFinanceOrCurrencyExchange';

    /** The icon is used for a banking or finance type of business in the United Kingdom. */
    const BankOrFinanceOrCurrencyExchangeUK = 'BankOrFinanceOrCurrencyExchangeUK';

    /** The icon is used for a banking or finance type of business in the European Union. */
    const BankOrFinanceOrCurrencyExchangeEUR = 'BankOrFinanceOrCurrencyExchangeEUR';

    /** The icon is used for a hardware or repair type of business. */
    const HardwareOrRepair = 'HardwareOrRepair';

    /** The icon is used for a hairdresser, barber, or tailor type of business. */
    const HairdresserOrBarberOrTailor = 'HairdresserOrBarberOrTailor';
}

/**
 * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.80).aspx BusinessGeoCodeStatus Value Set
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
 * Defines the payment types accepted by a business.
 * @link http://msdn.microsoft.com/en-us/library/dd797189(v=msads.80).aspx PaymentType Value Set
 */
final class PaymentType
{
    /** The business accepts cash payments. */
    const Cash = 'Cash';

    /** The business accepts American Express cards. */
    const AmericanExpress = 'AmericanExpress';

    /** The business accepts MasterCard cards. */
    const MasterCard = 'MasterCard';

    /** The business accepts Diners Club cards. */
    const DinersClub = 'DinersClub';

    /** The business accepts direct debit payments. */
    const DirectDebit = 'DirectDebit';

    const Visa = 'Visa';

    /** The business accepts traveler's checks. */
    const TravellersCheck = 'TravellersCheck';

    /** The business accepts payments through PayPal. */
    const PayPal = 'PayPal';

    /** The business accepts direct invoices. */
    const Invoice = 'Invoice';

    /** The business accepts cash on delivery payments. */
    const CashOnDelivery = 'CashOnDelivery';

    /** Other payment types. The other payment types are contained in the OtherPaymentTypeDesc element of the Business data object. */
    const Other = 'Other';
}

/**
 * Defines the possible status values of a business object.
 * @link http://msdn.microsoft.com/en-us/library/dd797110(v=msads.80).aspx BusinessStatus Value Set
 */
final class BusinessStatus
{
    /** The business object is complete and will be in effect if assigned to a target. */
    const Active = 'Active';

    /** For future use. */
    const Inactive = 'Inactive';

    /** The service is in the process of determining the coordinates of the business. The business object will not be in effect if assigned to a target until the coordinates are determined. */
    const Pending = 'Pending';
}

/**
 * Defines the status of a website placement bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.80).aspx SitePlacementStatus Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/jj631643(v=msads.80).aspx AppealStatus Value Set
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

/**
 * Defines the possible costs associated with the conversion that you want to track.
 * @link http://msdn.microsoft.com/en-us/library/gg985292(v=msads.80).aspx CostModel Value Set
 */
final class CostModel
{
    /** There are no costs associated with the conversion to capture. */
    const None = 'None';

    /** Capture non-advertising costs associated with the conversion. */
    const NonAdvertising = 'NonAdvertising';

    /** Capture the sales tax associated with the conversion. */
    const Taxed = 'Taxed';

    /** Capture the shipping fees associated with the conversion. */
    const Shipped = 'Shipped';
}

/**
 * Defines the possible values for the number of days in which an assist must occur in order for it to be considered an assist.
 * @link http://msdn.microsoft.com/en-us/library/gg985284(v=msads.80).aspx DaysApplicableForConversion Value Set
 */
final class DaysApplicableForConversion
{
    /** The conversion period is seven days. */
    const Seven = 'Seven';

    /** The conversion period is 15 days. */
    const Fifteen = 'Fifteen';

    /** The conversion period is 30 days. */
    const Thirty = 'Thirty';

    /** The conversion period is 45 days. */
    const FortyFive = 'FortyFive';
}

/**
 * Defines values that determine whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value.
 * @link http://msdn.microsoft.com/en-us/library/gg985274(v=msads.80).aspx RevenueModelType Value Set
 */
final class RevenueModelType
{
    /** The conversion involves a financial transaction with a constant revenue value. */
    const Constant = 'Constant';

    /** The conversion involves a financial transaction but the revenue value may be different for each conversion. */
    const Variable = 'Variable';

    /** The conversion does not involve a financial transaction. For example, you would specify this model in the case where a user completes a survey. */
    const None = 'None';
}

/**
 * Defines the types of steps that you can specify for a goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985287(v=msads.80).aspx StepType Value Set
 */
final class StepType
{
    /** The first webpage that a user lands on after clicking the ad. A goal can have only one step of this type. */
    const Lead = 'Lead';

    /** A webpage on your website that a user navigates to after landing on your landing page. A goal can contain one or more steps of this type. */
    const Browse = 'Browse';

    /** A webpage that shows the user's intent to complete a transaction. For example, a webpage that gathers the visitors payment information. A goal can have one or more steps of this type. */
    const Prospect = 'Prospect';

    /** The webpage that acknowledges that the conversion, such as a product purchase or account signup, occurred. A goal must include a step of this type, and the goal can have only one conversion step. */
    const Conversion = 'Conversion';
}

/**
 * Defines the possible types of analytics that campaigns in an account can use.
 * @link http://msdn.microsoft.com/en-us/library/gg985295(v=msads.80).aspx AnalyticsType Value Set
 */
final class AnalyticsType
{
    /** Enables the collection of analytics data for campaigns in the account. You can collect conversions data, revenue generated by conversions, costs (expenses) associated with conversions, and track site-visitor activity that leads to conversions. */
    const Enabled = 'Enabled';

    /** Disables the collection of analytics data for campaigns in the account. */
    const Disabled = 'Disabled';

    /** Provisioning of new campaign-level conversion tracking scripts is no longer supported. The SetAnalyticsType operation will fail. If you had provisioned this analytics type previously and are still using the corresponding scripts, you can use Disabled and Enabled to toggle off and on the tracking of conversion data. */
    const CampaignLevel = 'CampaignLevel';
}

/**
 * Defines the possible status values of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965510(v=msads.80).aspx MigrationStatus Value Set
 */
final class MigrationStatus
{
    /** The account's data is not being migrated because the customer is not a member of the pilot program associated with the specified migration type. */
    const NotInPilot = 'NotInPilot';

    /** The migration has not started. */
    const NotStarted = 'NotStarted';

    /** The migration process is running. */
    const InProgress = 'InProgress';

    /** The migration process is complete. */
    const Completed = 'Completed';
}

/**
 * Defines the possible status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.80).aspx AdExtensionStatus Value Set
 */
final class AdExtensionStatus
{
    /** The ad extension is active. You can associate an active ad extension with a campaign. */
    const Active = 'Active';

    /** The ad extension is deleted. This status is for internal use only. The Get operations will not include deleted extensions. */
    const Deleted = 'Deleted';
}

/**
 * Defines the possible ad extension types.
 * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.80).aspx AdExtensionsTypeFilter Value Set
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
 * Defines the possible editorial status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134397(v=msads.80).aspx CampaignAdExtensionEditorialStatus Value Set
 */
final class CampaignAdExtensionEditorialStatus
{
    /** The ad extension passed editorial review. */
    const Active = 'Active';

    /** The ad extension failed editorial review. */
    const Disapproved = 'Disapproved';

    /** The ad extension is undergoing editorial review. */
    const Inactive = 'Inactive';

    /** The ad extension is partially approved. The ad extension will serve in the countries where it passed editorial review. */
    const ActiveLimited = 'ActiveLimited';
}

/**
 * Defines the possible values used to filter extensions based on whether they're associated with a campaign.
 * @link http://msdn.microsoft.com/en-us/library/jj923093(v=msads.80).aspx AssociationFilter Value Set
 */
final class AssociationFilter
{
    /** Return all ad extensions in the account. */
    const All = 'All';

    /** Return only those extensions that are associated with one or more campaigns. */
    const Associated = 'Associated';
}

/**
 * Defines the types of media that you can add to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/jj721602(v=msads.80).aspx ImageType Value Set
 */
final class ImageType
{
    /** An image. */
    const Image = 'Image';

    /** An icon. */
    const Icon = 'Icon';
}

/**
 * Defines the possible status values that determine whether to apply the criterion to the ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.80).aspx AdGroupCriterionStatus Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.80).aspx CriterionType Value Set
 */
final class CriterionType
{
    /** The criterion identifies a Bing Merchant Center product filter. */
    const Product = 'Product';
}

/**
 * Defines the possible types of geographical location exclusions that you can apply to a location target.
 * @link http://msdn.microsoft.com/en-us/library/jj604192(v=msads.80).aspx GeoLocationType Value Set
 */
final class GeoLocationType
{
    /** Exclude a country from the location target. */
    const Country = 'Country';

    /** Exclude a state or province from the location target. */
    const SubGeography = 'SubGeography';

    /** Exclude a metropolitan area from the location target. */
    const MetroArea = 'MetroArea';

    /** Exclude a city from the location target. */
    const City = 'City';
}

/**
 * Defines the editorial review status values of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.80).aspx AdGroupCriterionEditorialStatus Value Set
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
 * Defines a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.80).aspx Campaign Data Object
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
     * The status of the campaign. You cannot change the status field directly. If you want to pause or resume the campaign, you must call the PauseCampaigns or ResumeCampaigns operation.
     * @var CampaignStatus
     */
    public $Status;

    /**
     * The time zone where the campaign operates. For possible values, see Campaign Time Zone Values.
     * @var string
     */
    public $TimeZone;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/bb671765(v=msads.80).aspx BatchError Data Object
 */
final class BatchError
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
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/bb671973(v=msads.80).aspx OperationError Data Object
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
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/bb671467(v=msads.80).aspx ApiFaultDetail Data Object
 */
final class ApiFaultDetail extends ApplicationFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dd796873(v=msads.80).aspx AdApiError Data Object
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
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dd797002(v=msads.80).aspx AdApiFaultDetail Data Object
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
 * Defines an object that contains the campaign's list of negative keywords.
 * @link http://msdn.microsoft.com/en-us/library/ee703967(v=msads.80).aspx CampaignNegativeKeywords Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.80).aspx CampaignNegativeSites Data Object
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
 * Defines a bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.80).aspx Bid Data Object
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
 * Represents a date.
 * @link http://msdn.microsoft.com/en-us/library/bb671903(v=msads.80).aspx Date Data Object
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
 * Defines an object that contains a publisher country and determines whether your ads are served on websites in the country.
 * @link http://msdn.microsoft.com/en-us/library/hh299899(v=msads.80).aspx PublisherCountry Data Object
 */
final class PublisherCountry
{
    /**
     * The country code of the country where you want your ads to serve. For possible values, see Publisher Country Values.
     * @var string
     */
    public $Country;

    /**
     * A value that determines whether you want your ads to serve in the specified country. Set to true if you want to your ads served to the publisher websites in the specified country; otherwise, set to false if you do not want your ads served to the specified country.
     * @var boolean
     */
    public $IsOptedIn;
}

/**
 * Defines an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.80).aspx AdGroup Data Object
 */
final class AdGroup
{
    /**
     * Determines whether the ad group contains content ads, search ads, or both.
     * @var AdDistribution
     */
    public $AdDistribution;

    /**
     * Determines whether the ad group bids on keyword matches or site placement matches. The default is Keyword.
     * @var BiddingModel
     */
    public $BiddingModel;

    /**
     * The bid to use when the user's query and the ad group's keywords match by using a broad match comparison. A broad match results when words in the keyword are present in the user's query; however, the order of the words can vary. For more information, see Match Type and Bid Values.
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
     * The system generated identifier of the ad group.
     * @var long
     */
    public $Id;

    /**
     * The language of the ads and keywords in the ad group. For possible values, see Language Values.
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
     * You can specify a pricing model based on cost-per-click (CPC) or cost-per-thousand impressions (CPM).
     * @var PricingModel
     */
    public $PricingModel;

    /**
     * Not supported.
     * @var PublisherCountry[]
     */
    public $PublisherCountries;

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
 * Defines an object that contains the ad group's list of negative keywords.
 * @link http://msdn.microsoft.com/en-us/library/ee703992(v=msads.80).aspx AdGroupNegativeKeywords Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.80).aspx AdGroupNegativeSites Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.80).aspx AdRotation Data Object
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
     * The type of ad rotation to apply to the ad group. For possible values, see AdRotationType.
     * @var AdRotationType
     */
    public $Type;
}

/**
 * Defines an object that specifies the type of ad rotation to apply to the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj219950(v=msads.80).aspx AdGroupAdRotation Data Object
 */
final class AdGroupAdRotation
{
    /**
     * The identifier of the ad group.
     * @var long
     */
    public $AdGroupId;

    /**
     * The type of ad rotation to apply to the ad group. If null, the rotation defaults to OptimizeForClicks.
     * @var AdRotation
     */
    public $AdRotation;
}

/**
 * Defines a specific age target range with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.80).aspx AgeTargetBid Data Object
 */
final class AgeTargetBid
{
    /**
     * The age range to target. For information about how age targeting works compared to other target types, see the Remarks section of the Target data object.
     * @var AgeRange
     */
    public $Age;

    /**
     * The percent amount used to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of age ranges to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.80).aspx AgeTarget Data Object
 */
final class AgeTarget
{
    /**
     * An array of AgeTargetBid objects that specifies the age ranges to target and the bid adjustment percentages to apply to the base bid.
     * @var AgeTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a day of the week to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671920(v=msads.80).aspx DayTargetBid Data Object
 */
final class DayTargetBid
{
    /**
     * The day of the week to target. For example, you can target the ads to run only on Friday and Saturday.
     * @var Day
     */
    public $Day;

    /**
     * The percent amount by which to adjust the base bid if today is the day of the week being targeted.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of days to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671942(v=msads.80).aspx DayTarget Data Object
 */
final class DayTarget
{
    /**
     * An array of DayTargetBid objects that specifies the days of the week to target and the bid adjustment percentages to apply to the base bid.
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
 * Defines a device target that specifies the types of devices to serve your ads on.
 * @link http://msdn.microsoft.com/en-us/library/ff728451(v=msads.80).aspx DeviceTarget Data Object
 */
final class DeviceTarget
{
    /**
     * A list of device types to service your ads on.
     * @var DeviceType[]
     */
    public $Devices;
}

/**
 * Defines a gender to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.80).aspx GenderTargetBid Data Object
 */
final class GenderTargetBid
{
    /**
     * The gender to target. For information about how gender targeting works compared to other target types, see the Remarks section of the Target data object.
     * @var GenderType
     */
    public $Gender;

    /**
     * The percent amount by which to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of genders to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.80).aspx GenderTarget Data Object
 */
final class GenderTarget
{
    /**
     * An array of GenderTargetBid objects that specifies the genders to target and the bid adjustment percentages to apply to the base bid.
     * @var GenderTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a time range to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671597(v=msads.80).aspx HourTargetBid Data Object
 */
final class HourTargetBid
{
    /**
     * The time range to target. For example, you can target the ads to display to users only between the hours of 7:00 AM to 11:00 AM.
     * @var HourRange
     */
    public $Hour;

    /**
     * The percent amount by which to adjust the base bid if the current time is within the range of hours being targeted.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of hour target ranges with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671826(v=msads.80).aspx HourTarget Data Object
 */
final class HourTarget
{
    /**
     * An array of HourTargetBid objects that specifies the times of the day to target and the bid adjustment percentages to apply to the base bid.
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
 * Beginning early Q3 2013, business location targeting will no longer be supported. All of your business targets will be automatically converted to radius targets within the same target object. Please update your application to use radius targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd797235(v=msads.80).aspx BusinessTargetBid Data Object
 */
final class BusinessTargetBid
{
    /**
     * The identifier of the business to target.
     * @var long
     */
    public $BusinessId;

    /**
     * The percent amount used to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The radius, in miles, that specifies the area surrounding the business location to target. The ads will participate in the auction if the user is within the specified radius of the business.
     * @var int
     */
    public $Radius;
}

/**
 * Beginning early Q3 2013, business location targeting will no longer be supported. All of your business targets will be automatically converted to radius targets within the same target object. Please update your application to use radius targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd796980(v=msads.80).aspx BusinessTarget Data Object
 */
final class BusinessTarget
{
    /**
     * An array of BusinessTargetBid objects that specifies the business locations to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var BusinessTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a city to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.80).aspx CityTargetBid Data Object
 */
final class CityTargetBid
{
    /**
     * The city to target.
     * @var string
     */
    public $City;

    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted city.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of cities to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.80).aspx CityTarget Data Object
 */
final class CityTarget
{
    /**
     * An array of CityTargetBid objects that specifies the cities to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var CityTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a country to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.80).aspx CountryTargetBid Data Object
 */
final class CountryTargetBid
{
    /**
     * The country to target.
     * @var string
     */
    public $CountryAndRegion;

    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}

/**
 * Defines a list of countries or regions to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.80).aspx CountryTarget Data Object
 */
final class CountryTarget
{
    /**
     * An array of CountryTargetBid objects that specifies the countries/regions to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var CountryTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a metropolitan area to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.80).aspx MetroAreaTargetBid Data Object
 */
final class MetroAreaTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The metropolitan area to target.
     * @var string
     */
    public $MetroArea;
}

/**
 * Defines a list of metro area targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.80).aspx MetroAreaTarget Data Object
 */
final class MetroAreaTarget
{
    /**
     * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var MetroAreaTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a geographical location to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.80).aspx RadiusTargetBid Data Object
 */
final class RadiusTargetBid
{
    /**
     * For future use.
     * @var long
     */
    public $Id;

    /**
     * The percent amount by which to adjust the base bid if the user is within the specified radius of the geographical location.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

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
 * Defines a list of geographical radius targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.80).aspx RadiusTarget Data Object
 */
final class RadiusTarget
{
    /**
     * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 2,000 radius targets.
     * @var RadiusTargetBid[]
     */
    public $Bids;
}

/**
 * Defines a sub geography, specifically a state or province to target, and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796942(v=msads.80).aspx StateTargetBid Data Object
 */
final class StateTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted sub geography.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The sub geography to target.
     * @var string
     */
    public $State;
}

/**
 * Defines a list of state targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.80).aspx StateTarget Data Object
 */
final class StateTarget
{
    /**
     * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var StateTargetBid[]
     */
    public $Bids;
}

/**
 * Defines the geographical location targets.
 * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.80).aspx LocationTarget Data Object
 */
final class LocationTarget
{
    /**
     * The business locations to target.
     * @var BusinessTarget
     */
    public $BusinessTarget;

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

    /**
     * Determines whether to participate in auctions only when the user is in the locations that you specified or to participate when the user is in any location.
     * @var boolean
     */
    public $TargetAllLocations;
}

/**
 * Defines the types of targeting that you can use to target your ads to users. For example, you can target your ads based on the geographic location of the user, the day of the week, or the time of the day.
 * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.80).aspx Target Data Object
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
     * Targets text ads to serve on smartphones, computers, or both. You should not use this element to specify device targeting. Instead you should use the UpdateDeviceOSTargets operation. For details on device targeting, see Target Devices and Operating Systems.
     * @var DeviceTarget
     */
    public $Device;

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
 * Defines an object that specifies the type of device and operating system to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527701(v=msads.80).aspx DeviceOS Data Object
 */
final class DeviceOS
{
    /**
     * The name of the device to target. The following are the possible device names that you can specify.
     * @var string
     */
    public $DeviceName;

    /**
     * The specific OS of the device to target. To target all operating systems that the device supports, set to null.
     * @var string
     */
    public $OSName;
}

/**
 * Defines an object that contains the list of device types and operating systems to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.80).aspx DeviceOSTarget Data Object
 */
final class DeviceOSTarget
{
    /**
     * A list of DeviceOS objects that contains the devices and operating systems to target.
     * @var DeviceOS[]
     */
    public $DeviceOSList;
}

/**
 * Defines an object that identifies a target in your target library and the list of devices that it targets.
 * @link http://msdn.microsoft.com/en-us/library/hh527726(v=msads.80).aspx TargetAssociation Data Object
 */
final class TargetAssociation
{
    /**
     * The devices and operating systems to target.
     * @var DeviceOSTarget
     */
    public $DeviceOSTarget;

    /**
     * The identifier of the target to apply the device targets to.
     * @var long
     */
    public $Id;
}

/**
 * Defines information about a target in your library.
 * @link http://msdn.microsoft.com/en-us/library/dd796878(v=msads.80).aspx TargetInfo Data Object
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

/**
 * Defines the base object from which all exclusions derive.
 * @link http://msdn.microsoft.com/en-us/library/jj604420(v=msads.80).aspx Exclusion Data Object
 */
class Exclusion
{
    /**
     * The exclusion's ID.
     * @var long
     */
    public $Id;

    /**
     * The exclusion's type. The following are the possible values.
     * @var string
     */
    public $Type;
}

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

/**
 * Defines the base object of an ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.80).aspx Ad Data Object
 */
class Ad
{
    /**
     * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;

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
 * Defines an error object that identifies the ad or keyword with the batch of ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.80).aspx EditorialError Data Object
 */
final class EditorialError
{
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $Appealable;

    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * The text that caused the ad to be disapproved.
     * @var string
     */
    public $DisapprovedText;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * The zero-based index of the ad or keyword within the batch of ads or keywords in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;

    /**
     * The corresponding country or region for the flagged editorial issue.
     * @var string
     */
    public $PublisherCountry;
}

/**
 * Defines a fault object that operations return when one or more ads or keywords in your request message fail editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197200(v=msads.80).aspx EditorialApiFaultDetail Data Object
 */
final class EditorialApiFaultDetail extends ApplicationFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of EditorialError objects that contains the details that explain why the ad or keyword was disapproved.
     * @var EditorialError[]
     */
    public $EditorialErrors;

    /**
     * An array of OperationError objects that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.80).aspx Keyword Data Object
 */
final class Keyword
{
    /**
     * The bid to use when the user's query and the keyword match by using a broad match comparison. A broad match results when words in the keyword or phrase are present in the user's query; however, the word order can vary. For more information, see Match Type and Bid Values.
     * @var Bid
     */
    public $BroadMatchBid;

    /**
     * The bid to use when the keywords that the service extracts from the content page matches the keyword by using an exact match comparison. An exact match results when all of the words in the keyword or phrase exactly match the user's query.
     * @var Bid
     */
    public $ContentMatchBid;

    /**
     * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The bid to use when the user's query and the keyword match by using an exact match comparison. An exact match results when all of the words in the keyword or phrase exactly match the user's query.
     * @var Bid
     */
    public $ExactMatchBid;

    /**
     * The system-generated identifier of the keyword.
     * @var long
     */
    public $Id;

    /**
     * Not supported. If you add or update the list of negative keywords, the call will not fail; however, the negative keywords will be ignored. To add negative keywords at the ad group and campaign levels, call the SetNegativeKeywordsToAdGroups and SetNegativeKeywordsToCampaigns operations.
     * @var string[]
     */
    public $NegativeKeywords;

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
     * The bid value to use when the user's query and the keyword match by using a phrase match. A phrase match results when all of the words in the keyword or phrase are present in the user's query and are in the same order.
     * @var Bid
     */
    public $PhraseMatchBid;

    /**
     * The keyword's status. When you add a keyword, you can set the keyword's status to Active or Paused. By default, the status is set to Active.
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
 * Defines an object that specifies the destination URL to use in an ad if the specified keyword matches the user's search query.
 * @link http://msdn.microsoft.com/en-us/library/jj643315(v=msads.80).aspx KeywordDestinationUrl Data Object
 */
final class KeywordDestinationUrl
{
    /**
     * The destination URL to use in an ad if the specified keyword matches the user's search query. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The identifier of the keyword.
     * @var long
     */
    public $KeywordId;
}

/**
 * Defines an icon for a business.
 * @link http://msdn.microsoft.com/en-us/library/dd797192(v=msads.80).aspx BusinessImageIcon Data Object
 */
final class BusinessImageIcon
{
    /**
     * Not used. This element must be null.
     * @var long
     */
    public $CustomIconAssetId;

    /**
     * The predefined business icon to display in Bing Maps.
     * @var StandardBusinessIcon
     */
    public $StandardBusinessIcon;
}

/**
 * Defines a time value.
 * @link http://msdn.microsoft.com/en-us/library/dd797171(v=msads.80).aspx TimeOfTheDay Data Object
 */
final class TimeOfTheDay
{
    /**
     * The hour.
     * @var short
     */
    public $Hour;

    /**
     * The minutes.
     * @var short
     */
    public $Minute;
}

/**
 * Defines a time interval for a day, such as the opening and closing time of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796784(v=msads.80).aspx DayTimeInterval Data Object
 */
final class DayTimeInterval
{
    /**
     * The beginning time.
     * @var TimeOfTheDay
     */
    public $Begin;

    /**
     * The ending time.
     * @var TimeOfTheDay
     */
    public $End;
}

/**
 * Defines the hours of operation of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796949(v=msads.80).aspx HoursOfOperation Data Object
 */
final class HoursOfOperation
{
    /**
     * The day of the week that these hours apply to.
     * @var Day
     */
    public $Day;

    /**
     * The first block of time that the business is open.
     * @var DayTimeInterval
     */
    public $openTime1;

    /**
     * The second block of time that the business is open.
     * @var DayTimeInterval
     */
    public $openTime2;
}

/**
 * Defines a business location for business location targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd797093(v=msads.80).aspx Business Data Object
 */
final class Business
{
    /**
     * The first line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $AddressLine1;

    /**
     * The second line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $AddressLine2;

    /**
     * The business icon to display in Bing Maps.
     * @var BusinessImageIcon
     */
    public $BusinessImageIcon;

    /**
     * The city where the business is located. The city can contain a maximum of 35 characters.
     * @var string
     */
    public $City;

    /**
     * The country/region where the business is located. The country/region can contain a maximum of two characters.
     * @var string
     */
    public $CountryOrRegion;

    /**
     * The description of the business, which can contain a maximum of 1,024 characters.
     * @var string
     */
    public $Description;

    /**
     * The email address of the business. The email address can contain a maximum of 200 characters.
     * @var string
     */
    public $Email;

    /**
     * A status value that indicates whether the business' latitude and longitude values have been determined.
     * @var BusinessGeoCodeStatus
     */
    public $GeoCodeStatus;

    /**
     * The days and hours that the business is open.
     * @var HoursOfOperation[]
     */
    public $HrsOfOperation;

    /**
     * A system-generated identifier of the business object.
     * @var long
     */
    public $Id;

    /**
     * A value that determines whether the business is open 24 hours a day.
     * @var boolean
     */
    public $IsOpen24Hours;

    /**
     * The latitude of the business location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude of the business location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the business, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Name;

    /**
     * An additional form of payment that the business accepts that is not included in the Payment element.
     * @var string
     */
    public $OtherPaymentTypeDesc;

    /**
     * The forms of payment that the business accepts. For possible values, see PaymentType.
     * @var PaymentType[]
     */
    public $Payment;

    /**
     * The phone number of the business. The phone number can contain a maximum of 20 characters.
     * @var string
     */
    public $Phone;

    /**
     * The state, province, or territory where the business is located. This element can contain a maximum of 50 characters.
     * @var string
     */
    public $StateOrProvince;

    /**
     * The status of the business object.
     * @var BusinessStatus
     */
    public $Status;

    /**
     * The URL of the business's website. The URL can contain a maximum of 2,048 characters.
     * @var string
     */
    public $URL;

    /**
     * The ZIP Code or Postal Code of the business location. This element can contain a maximum of 10 characters.
     * @var string
     */
    public $ZipOrPostalCode;
}

/**
 * Defines an object that contains a subset of the business location details.
 * @link http://msdn.microsoft.com/en-us/library/dd797138(v=msads.80).aspx BusinessInfo Data Object
 */
final class BusinessInfo
{
    /**
     * The identifier of the business.
     * @var long
     */
    public $Id;

    /**
     * The name of the business.
     * @var string
     */
    public $Name;
}

/**
 * Defines a website placement bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.80).aspx SitePlacement Data Object
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
     * The identifier of the publisher website where you want to display your text ads. To get the identifier, call the GetPlacementDetailsForUrls operation.
     * @var long
     */
    public $PlacementId;

    /**
     * The status of this site placement bid. When you add a site placement bid, its status is Active. To pause or resume the bid, you must call the PauseSitePlacements or ResumeSitePlacements operation.
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
 * Defines the minimum and maximum impressions per day for a website.
 * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.80).aspx ImpressionsPerDayRange Data Object
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

/**
 * Defines dimension information for media on a website.
 * @link http://msdn.microsoft.com/en-us/library/dd796881(v=msads.80).aspx Dimension Data Object
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
 * Defines media type information for a website.
 * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.80).aspx MediaType Data Object
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
 * Defines the size and type of media that the publisher website supports for ad placements.
 * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.80).aspx PlacementDetail Data Object
 */
final class PlacementDetail
{
    /**
     * Not supported.
     * @var ImpressionsPerDayRange
     */
    public $ImpressionsRangePerDay;

    /**
     * The URL of the publisher's website. This is the same URL that you passed to the GetPlacementDetailsForUrls operation.
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
 * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.80).aspx EditorialReason Data Object
 */
final class EditorialReason
{
    /**
     * The component of the ad or keyword that failed editorial review.
     * @var AdComponent
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
 * @link http://msdn.microsoft.com/en-us/library/ff728504(v=msads.80).aspx EditorialReasonCollection Data Object
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
     * An array of EditorialReason objects that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @var EditorialReason[]
     */
    public $Reasons;
}

/**
 * Defines an object that specifies the type of revenue model that the conversion uses. The object also includes a constant revenue value for conversions that use the constant revenue model.
 * @link http://msdn.microsoft.com/en-us/library/gg985265(v=msads.80).aspx RevenueModel Data Object
 */
final class RevenueModel
{
    /**
     * The revenue value associated with the conversion. Set this element only if Type is set to Constant.
     * @var double
     */
    public $ConstantRevenueValue;

    /**
     * Determines whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value.
     * @var RevenueModelType
     */
    public $Type;
}

/**
 * Defines a step of a campaign analytics goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985293(v=msads.80).aspx Step Data Object
 */
final class Step
{
    /**
     * The system generated identifier of the step.
     * @var long
     */
    public $Id;

    /**
     * The name of the step. The name must contain a minimum of one character and can contain a maximum of 1,200 characters. The name must be unique among the other step names of the goal.
     * @var string
     */
    public $Name;

    /**
     * The position of this step in relationship to the other steps of the goal.
     * @var int
     */
    public $PositionNumber;

    /**
     * The script that the service generates for this step. For details about how to add the script to your webpage, see Campaign Analytics Scripts.
     * @var string
     */
    public $Script;

    /**
     * The type of step. For example, the conversion step or the lead step. For possible values, see StepType.
     * @var StepType
     */
    public $Type;
}

/**
 * Defines a Campaign Analytics goal and the steps that make up the goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985285(v=msads.80).aspx Goal Data Object
 */
final class Goal
{
    /**
     * The costs associated with the conversion. For example, you can include the sales tax and shipping fees with the conversion data. You can specify one or more costs to track.
     * @var CostModel
     */
    public $CostModel;

    /**
     * The number of days in which an assist must occur in order for it to be considered an assist.
     * @var DaysApplicableForConversion
     */
    public $DaysApplicableForConversion;

    /**
     * The system-generated identifier of the goal.
     * @var long
     */
    public $Id;

    /**
     * The name of the goal. The name must be unique among all goals specified for the account. The name must contain a minimum of one character and can contain a maximum of 1,200 characters.
     * @var string
     */
    public $Name;

    /**
     * Determines whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value. If the revenue is fixed, the object contains the fixed revenue value.
     * @var RevenueModel
     */
    public $RevenueModel;

    /**
     * The list of steps that make up the goal. A goal can contain a maximum of six steps. At a minimum, you must include a conversion step.
     * @var Step[]
     */
    public $Steps;

    /**
     * For internal use only.
     * @var int
     */
    public $YEventId;
}

/**
 * Defines an object that contains the identifier of a goal that was added and the identifiers of each step in the goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985280(v=msads.80).aspx GoalResult Data Object
 */
final class GoalResult
{
    /**
     * The identifier of the Campaign Analytics goal that you added.
     * @var long
     */
    public $GoalId;

    /**
     * The identifiers of the steps that make up the goal. The identifiers are in the same order as you specified them in the request.
     * @var long[]
     */
    public $StepIds;
}

/**
 * Defines an error object that identifies the goal within the batch of goals in the request message that caused the operation to fail, as well as the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/gg985421(v=msads.80).aspx GoalError Data Object
 */
final class GoalError
{
    /**
     * An array of BatchError objects that identifies the goal that failed and the reason for the failure. The Index element of the BatchError object identifies the goal that failed.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * The zero-based index of the goal in the request to which the step errors apply.
     * @var int
     */
    public $Index;

    /**
     * An array of BatchError objects that identifies the step within the goal that failed, and the reason for the failure. The Index element of the BatchError object identifies the step that failed.
     * @var BatchError[]
     */
    public $StepErrors;
}

/**
 * Defines a fault object for campaign analytics operations that process batch input.
 * @link http://msdn.microsoft.com/en-us/library/gg985422(v=msads.80).aspx AnalyticsApiFaultDetail Data Object
 */
final class AnalyticsApiFaultDetail extends ApplicationFault
{
    /**
     * An array of GoalError objects that identify the goals within a batch of goals that caused the operation to fail. Each object contains the details that explain why the goal caused the failure.
     * @var GoalError[]
     */
    public $GoalErrors;

    /**
     * An array of OperationError objects that contains the details that explain why the service operation failed when the error is not related to a specific goal in the batch of goals.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines an object that contains the identifier of an account and the type of analytics that campaigns in the account use.
 * @link http://msdn.microsoft.com/en-us/library/gg985268(v=msads.80).aspx AccountAnalyticsType Data Object
 */
final class AccountAnalyticsType
{
    /**
     * The identifier of the account to which the analytics type applies.
     * @var long
     */
    public $AccountId;

    /**
     * Determines the type of analytics that campaigns in the account use. For possible values, see the AnalyticsType value set.
     * @var AnalyticsType
     */
    public $Type;
}

/**
 * This version of call ad extensions will no longer be supported beginning early Q3 2013. If you implemented this version, you must migrate your application to use version 2 of call ad extensions by early Q3 2013. For information about working with version 2 of call ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527703(v=msads.80).aspx PhoneExtension Data Object
 */
final class PhoneExtension
{
    /**
     * The country to which the phone number applies. Possible values are:
     * @var string
     */
    public $Country;

    /**
     * Determines whether the phone number in this object is the only clickable item in the ad (does not apply to the phone number specified in the business target). If true, the display URL link in the ad is disabled if the ad is displayed on a hi-fi mobile device.
     * @var boolean
     */
    public $EnableClickToCallOnly;

    /**
     * Determines whether to override the phone number specified in the business target with the phone number specified in the Phone element. To override the phone number in the business target, set this element to true.
     * @var boolean
     */
    public $EnablePhoneExtension;

    /**
     * The phone number to use in place of the phone number specified in the business target. The phone number can contain a maximum of 20 characters.
     * @var string
     */
    public $Phone;
}

/**
 * This version of AdExtension will no longer be supported beginning early Q3 2013. If you implemented this version, you must migrate your application to use location ad extensions. For information about implementing location ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.80).aspx AdExtension Data Object
 */
final class AdExtension
{
    /**
     * The identifier of the campaign to which the address and phone preferences apply.
     * @var long
     */
    public $CampaignId;

    /**
     * Determines whether to include the address and phone number of the business in the text ad. To include the business' address and phone number in the text ad, set to true; otherwise, set to false.
     * @var boolean
     */
    public $EnableLocationExtension;

    /**
     * The phone number to include in the text ad. If EnableLocationExtension is set to true, this phone number overrides the phone number specified in the business object.
     * @var PhoneExtension
     */
    public $PhoneExtension;
}

/**
 * Defines an object that contains information about the progress of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965512(v=msads.80).aspx MigrationStatusInfo Data Object
 */
final class MigrationStatusInfo
{
    /**
     * The type of migration.
     * @var string
     */
    public $MigrationType;

    /**
     * The date and time, in Coordinated Universal Time (UTC), when the migration started.
     * @var dateTime
     */
    public $StartTimeInUtc;

    /**
     * The status of the migration process. For possible values, see MigrationStatus.
     * @var MigrationStatus
     */
    public $Status;
}

/**
 * Defines an object that identifies the account being migrated, as well as the status of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965511(v=msads.80).aspx AccountMigrationStatusesInfo Data Object
 */
final class AccountMigrationStatusesInfo
{
    /**
     * The identifier of the account being migrated.
     * @var long
     */
    public $AccountId;

    /**
     * An array of MigrationStatusInfo objects. The array contains a status object for each migration type specified in the GetAccountMigrationStatusesRequest request. Each status object identifies the migration type, the time that the migration process began, and the status of the migration.
     * @var MigrationStatusInfo[]
     */
    public $MigrationStatusInfo;
}

/**
 * Defines the base object of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134407(v=msads.80).aspx AdExtension2 Data Object
 */
class AdExtension2
{
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
 * Defines an object that identifies an ad extension revision.
 * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.80).aspx AdExtensionIdentity Data Object
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
 * Defines an object that identifies a campaign, one of its ad extensions, and the editorial status of the extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134402(v=msads.80).aspx CampaignAdExtension Data Object
 */
final class CampaignAdExtension
{
    /**
     * An ad extension. Use the Type element to determine the extension's type.
     * @var AdExtension2
     */
    public $AdExtension;

    /**
     * The identifier of the campaign that contains the ad extension.
     * @var long
     */
    public $CampaignId;

    /**
     * The editorial status of the ad extension. The status is determined in the context of the campaign.
     * @var CampaignAdExtensionEditorialStatus
     */
    public $EditorialStatus;
}

/**
 * Defines a collection of ad extensions that are associated with a campaign.
 * @link http://msdn.microsoft.com/en-us/library/jj134383(v=msads.80).aspx CampaignAdExtensionCollection Data Object
 */
final class CampaignAdExtensionCollection
{
    /**
     * A list of CampaignAdExtension objects. Each object identifies the campaign, the ad extension associated with it, and the extension's editorial status.
     * @var CampaignAdExtension[]
     */
    public $CampaignAdExtensions;
}

/**
 * Defines an association between a campaign and an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134375(v=msads.80).aspx AdExtensionIdToCampaignIdAssociation Data Object
 */
final class AdExtensionIdToCampaignIdAssociation
{
    /**
     * The identifier of the ad extension to associate with the campaign.
     * @var long
     */
    public $AdExtensionId;

    /**
     * The identifier of the campaign to associate with the ad extension.
     * @var long
     */
    public $CampaignId;
}

/**
 * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/jj134398(v=msads.80).aspx AdExtensionEditorialReason Data Object
 */
final class AdExtensionEditorialReason
{
    /**
     * The component of the ad extension that failed editorial review. The following are the possible values.
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
 * @link http://msdn.microsoft.com/en-us/library/jj134393(v=msads.80).aspx AdExtensionEditorialReasonCollection Data Object
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
 * Defines the base object of media.
 * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.80).aspx Media Data Object
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
 * Defines the base object of a criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.80).aspx Criterion Data Object
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
 * Defines the base class of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.80).aspx AdGroupCriterion Data Object
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
 * Defines a Bing Merchant Center store.
 * @link http://msdn.microsoft.com/en-us/library/dn307652(v=msads.80).aspx BMCStore Data Object
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
 * Defines a mobile ad. A mobile ad is displayed to a user when the ad is viewed on a low-fi mobile device.
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.80).aspx MobileAd Data Object
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
 * Defines a product ad.
 * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.80).aspx ProductAd Data Object
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
 * Defines a text ad.
 * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.80).aspx TextAd Data Object
 */
final class TextAd extends Ad
{
    /**
     * The URL of the webpage to take the user to when they click the ad. The URL can contain a maximum of 1,024 characters.
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
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dd796870(v=msads.80).aspx ApplicationFault Data Object
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
 * Defines the geographical location to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604416(v=msads.80).aspx ExcludedGeoLocation Data Object
 */
final class ExcludedGeoLocation
{
    /**
     * The location code that identifies the geographical location to exclude. For example, to exclude the state of California in the U.S., set LocationName to 'US-CA'.
     * @var string
     */
    public $LocationName;

    /**
     * The location's type. For possible values, see GeoLocationType.
     * @var GeoLocationType
     */
    public $LocationType;
}

/**
 * Defines a geographical location and the area surrounding it to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604415(v=msads.80).aspx ExcludedRadiusLocation Data Object
 */
final class ExcludedRadiusLocation
{
    /**
     * For future use.
     * @var long
     */
    public $Id;

    /**
     * The latitude, in degrees, of the geographical location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude, in degrees, of the geographical location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the geographical location being excluded. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $Name;

    /**
     * The radius, in miles, that specifies the area surrounding the geographical location to exclude.
     * @var int
     */
    public $Radius;
}

/**
 * Defines a radius location target that identifies a geographical location to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604419(v=msads.80).aspx ExcludedRadiusTarget Data Object
 */
final class ExcludedRadiusTarget
{
    /**
     * The geographical location and area surrounding the location to exclude.
     * @var ExcludedRadiusLocation[]
     */
    public $ExcludedRadiusLocations;
}

/**
 * Defines the location exclusions to apply to a target entity.
 * @link http://msdn.microsoft.com/en-us/library/jj636731(v=msads.80).aspx LocationExclusion Data Object
 */
final class LocationExclusion extends Exclusion
{
    /**
     * A list of geographical locations to exclude. You can specify a maximum of 255 targets.
     * @var ExcludedGeoLocation[]
     */
    public $ExcludedGeoTargets;

    /**
     * For future use.
     * @var ExcludedRadiusTarget
     */
    public $ExcludedRadiusTarget;
}

/**
 * Defines a postal address.
 * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.80).aspx Address Data Object
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
 * Defines an object that contains the longitude and latitude coordinates of a geographical location.
 * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.80).aspx GeoPoint Data Object
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
 * Available for members of the Location Ad Extension v2 pilot program.
 * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.80).aspx LocationAdExtension Data Object
 */
final class LocationAdExtension extends AdExtension2
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
 * Available for members of the Call Ad Extension v2 pilot program. Call ad extensions are available in the US and UK markets.
 * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.80).aspx CallAdExtension Data Object
 */
final class CallAdExtension extends AdExtension2
{
    /**
     * The country code where the phone number is registered. The country code must contain a 2 character country code.
     * @var string
     */
    public $CountryCode;

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
 * Defines a site link to include in an ad. The link should take the user to content in your website that is relevant in the context of the ad.
 * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.80).aspx SiteLink Data Object
 */
final class SiteLink
{
    /**
     * The URL of the webpage that users are taken to when they click the site link. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The site-link text displayed in the ad. The text can contain a maximum of 35 characters.
     * @var string
     */
    public $DisplayText;
}

/**
 * Defines an ad extension that specifies one or more site links to add to a text ad. You may associate a site links ad extension with one or more campaigns; however, a campaign can be associated with only one site links ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.80).aspx SiteLinksAdExtension Data Object
 */
final class SiteLinksAdExtension extends AdExtension2
{
    /**
     * A list of SiteLink objects. Each object contains a link to a webpage on your website. You can specify a maximum of 10 site links. The search engine determines which links to include in the ad.
     * @var SiteLink[]
     */
    public $SiteLinks;
}

/**
 * Defines a condition that determines whether a product is selected.
 * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.80).aspx ProductCondition Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj721704(v=msads.80).aspx ProductConditionCollection Data Object
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
 * Available for members of the Product Ads pilot program.
 * @link http://msdn.microsoft.com/en-us/library/jj721706(v=msads.80).aspx ProductAdExtension Data Object
 */
final class ProductAdExtension extends AdExtension2
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
 * Defines an image object that can be added to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.80).aspx Image Data Object
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
 * Defines a product criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj689539(v=msads.80).aspx Product Data Object
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
 * Defines a base class for criterion bids.
 * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.80).aspx CriterionBid Data Object
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
 * Defines the conditions that determine whether product ads in the ad group get served. If the conditions are met, the specified bid is used in the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.80).aspx BiddableAdGroupCriterion Data Object
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
 * Defines the monetary bid to use in the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.80).aspx FixedBid Data Object
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
 * Adds one or more campaigns to the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671986(v=MSADS.80).aspx AddCampaignsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671986(v=MSADS.80).aspx AddCampaignsResponse Response Object
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
 * Gets all the campaigns that exist within a specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb672097(v=MSADS.80).aspx GetCampaignsByAccountIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb672097(v=MSADS.80).aspx GetCampaignsByAccountIdResponse Response Object
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
 * Gets the specified campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671550(v=MSADS.80).aspx GetCampaignsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671550(v=MSADS.80).aspx GetCampaignsByIdsResponse Response Object
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
 * Pauses one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/bb672095(v=MSADS.80).aspx PauseCampaignsRequest Request Object
 */
final class PauseCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns that will be paused.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers that identifies the campaigns that will be paused.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the PauseCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672095(v=MSADS.80).aspx PauseCampaignsResponse Response Object
 */
final class PauseCampaignsResponse
{
}

/**
 * Resumes one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/bb671532(v=MSADS.80).aspx ResumeCampaignsRequest Request Object
 */
final class ResumeCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers that identifies the campaigns to resume.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the ResumeCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671532(v=MSADS.80).aspx ResumeCampaignsResponse Response Object
 */
final class ResumeCampaignsResponse
{
}

/**
 * Deletes one or more campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671864(v=MSADS.80).aspx DeleteCampaignsRequest Request Object
 */
final class DeleteCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 campaign identifiers to delete. After deleting a campaign, you cannot access the object by using any Get operation, such as GetCampaignsByIds.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the DeleteCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671864(v=MSADS.80).aspx DeleteCampaignsResponse Response Object
 */
final class DeleteCampaignsResponse
{
}

/**
 * Updates one or more campaigns of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671561(v=MSADS.80).aspx UpdateCampaignsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671561(v=MSADS.80).aspx UpdateCampaignsResponse Response Object
 */
final class UpdateCampaignsResponse
{
}

/**
 * Gets the negative keywords of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/ee703979(v=MSADS.80).aspx GetNegativeKeywordsByCampaignIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703979(v=MSADS.80).aspx GetNegativeKeywordsByCampaignIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703964(v=MSADS.80).aspx SetNegativeKeywordsToCampaignsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703964(v=MSADS.80).aspx SetNegativeKeywordsToCampaignsResponse Response Object
 */
final class SetNegativeKeywordsToCampaignsResponse
{
}

/**
 * Gets the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/hh300114(v=MSADS.80).aspx GetNegativeSitesByCampaignIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh300114(v=MSADS.80).aspx GetNegativeSitesByCampaignIdsResponse Response Object
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
 * Set the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/hh300115(v=MSADS.80).aspx SetNegativeSitesToCampaignsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh300115(v=MSADS.80).aspx SetNegativeSitesToCampaignsResponse Response Object
 */
final class SetNegativeSitesToCampaignsResponse
{
}

/**
 * Adds new ad groups to a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671739(v=MSADS.80).aspx AddAdGroupsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671739(v=MSADS.80).aspx AddAdGroupsResponse Response Object
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
 * Deletes one or more ad groups from a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671757(v=MSADS.80).aspx DeleteAdGroupsRequest Request Object
 */
final class DeleteAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be deleted.
     * @var long
     */
    public $CampaignId;

    /**
     * A maximum of 1,000 ad group identifiers to delete. After deleting an ad group, you cannot access the object by using any Get operation, such as GetAdGroupsByIds.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the DeleteAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671757(v=MSADS.80).aspx DeleteAdGroupsResponse Response Object
 */
final class DeleteAdGroupsResponse
{
}

/**
 * Gets the specified ad groups that exist within a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671579(v=MSADS.80).aspx GetAdGroupsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671579(v=MSADS.80).aspx GetAdGroupsByIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671869(v=MSADS.80).aspx GetAdGroupsByCampaignIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671869(v=MSADS.80).aspx GetAdGroupsByCampaignIdResponse Response Object
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
 * Pauses one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/bb671983(v=MSADS.80).aspx PauseAdGroupsRequest Request Object
 */
final class PauseAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups that will be paused.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers that specifies the ad groups that will be paused.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the PauseAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671983(v=MSADS.80).aspx PauseAdGroupsResponse Response Object
 */
final class PauseAdGroupsResponse
{
}

/**
 * Resumes one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/bb671682(v=MSADS.80).aspx ResumeAdGroupsRequest Request Object
 */
final class ResumeAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be resumed.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers that identifies the ad groups that will be resumed.
     * @var long[]
     */
    public $AdGroupIds;
}

/**
 * Response object for the ResumeAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671682(v=MSADS.80).aspx ResumeAdGroupsResponse Response Object
 */
final class ResumeAdGroupsResponse
{
}

/**
 * Submits an ad group for editorial review.
 * @link http://msdn.microsoft.com/en-us/library/bb671674(v=MSADS.80).aspx SubmitAdGroupForApprovalRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671674(v=MSADS.80).aspx SubmitAdGroupForApprovalResponse Response Object
 */
final class SubmitAdGroupForApprovalResponse
{
}

/**
 * Updates the specified ad groups in a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671535(v=MSADS.80).aspx UpdateAdGroupsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671535(v=MSADS.80).aspx UpdateAdGroupsResponse Response Object
 */
final class UpdateAdGroupsResponse
{
}

/**
 * Gets the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/ee703980(v=MSADS.80).aspx GetNegativeKeywordsByAdGroupIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703980(v=MSADS.80).aspx GetNegativeKeywordsByAdGroupIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703986(v=MSADS.80).aspx SetNegativeKeywordsToAdGroupsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/ee703986(v=MSADS.80).aspx SetNegativeKeywordsToAdGroupsResponse Response Object
 */
final class SetNegativeKeywordsToAdGroupsResponse
{
}

/**
 * Gets the negative site URLs of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/hh299897(v=MSADS.80).aspx GetNegativeSitesByAdGroupIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh299897(v=MSADS.80).aspx GetNegativeSitesByAdGroupIdsResponse Response Object
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
 * Set the negative site URLs of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/hh299885(v=MSADS.80).aspx SetNegativeSitesToAdGroupsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh299885(v=MSADS.80).aspx SetNegativeSitesToAdGroupsResponse Response Object
 */
final class SetNegativeSitesToAdGroupsResponse
{
}

/**
 * Gets the ad rotation type applied to the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/jj219948(v=MSADS.80).aspx GetAdRotationByAdGroupIdsRequest Request Object
 */
final class GetAdRotationByAdGroupIdsRequest
{
    /**
     * The identifiers of the ad groups whose ad rotation type you want to get. The maximum number of identifiers that you can specify is 1,000.
     * @var long[]
     */
    public $AdGroupIds;

    /**
     * The identifier of the campaign that owns the specified ad groups.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the GetAdRotationByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj219948(v=MSADS.80).aspx GetAdRotationByAdGroupIdsResponse Response Object
 */
final class GetAdRotationByAdGroupIdsResponse
{
    /**
     * An array of AdRotation objects that identify the type of ad rotation that is applied to the ad group. The items in the array correspond directly to the ad groups specified in the request. If an ad group ID in the request is not valid, the corresponding item this array is null.
     * @var AdRotation[]
     */
    public $AdRotationByAdGroupIds;
}

/**
 * Sets the type of ad rotation to apply to the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/jj219951(v=MSADS.80).aspx SetAdRotationToAdGroupsRequest Request Object
 */
final class SetAdRotationToAdGroupsRequest
{
    /**
     * An array of AdGroupAdRotation objects. Each object identifies an ad group and the type of ad rotation to apply to it. The list must contain unique ad group IDs. The maximum number of objects that you can specify is 1,000.
     * @var AdGroupAdRotation[]
     */
    public $AdGroupAdRotations;

    /**
     * The identifier of the campaign that owns the specified ad groups.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the SetAdRotationToAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj219951(v=MSADS.80).aspx SetAdRotationToAdGroupsResponse Response Object
 */
final class SetAdRotationToAdGroupsResponse
{
}

/**
 * Adds target information to the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671572(v=MSADS.80).aspx AddTargetRequest Request Object
 */
final class AddTargetRequest
{
    /**
     * The identifier of the ad group that the Target object will be added to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The Target object that contains the target information for the ad group.
     * @var Target
     */
    public $Target;
}

/**
 * Response object for the AddTarget service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671572(v=MSADS.80).aspx AddTargetResponse Response Object
 */
final class AddTargetResponse
{
    /**
     * The identifier of the target that was added.
     * @var long
     */
    public $TargetId;
}

/**
 * Deletes the target within the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672024(v=MSADS.80).aspx DeleteTargetRequest Request Object
 */
final class DeleteTargetRequest
{
    /**
     * The identifier of the ad group that contains the target that will be deleted.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the DeleteTarget service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672024(v=MSADS.80).aspx DeleteTargetResponse Response Object
 */
final class DeleteTargetResponse
{
}

/**
 * Gets target information for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672058(v=MSADS.80).aspx GetTargetByAdGroupIdRequest Request Object
 */
final class GetTargetByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that contains the targets that you want to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}

/**
 * Response object for the GetTargetByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672058(v=MSADS.80).aspx GetTargetByAdGroupIdResponse Response Object
 */
final class GetTargetByAdGroupIdResponse
{
    /**
     * A Target object that contains the target information that has been retrieved.
     * @var Target
     */
    public $Target;
}

/**
 * Updates the target information for the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671653(v=MSADS.80).aspx UpdateTargetRequest Request Object
 */
final class UpdateTargetRequest
{
    /**
     * The identifier of the ad group whose target information will be updated.
     * @var long
     */
    public $AdGroupId;

    /**
     * A Target object that contains the new target information. The Id element of this object identifies the target to update.
     * @var Target
     */
    public $Target;
}

/**
 * Response object for the UpdateTarget service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671653(v=MSADS.80).aspx UpdateTargetResponse Response Object
 */
final class UpdateTargetResponse
{
}

/**
 * Adds targets to your target library.
 * @link http://msdn.microsoft.com/en-us/library/dd796810(v=MSADS.80).aspx AddTargetsToLibraryRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796810(v=MSADS.80).aspx AddTargetsToLibraryResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797025(v=MSADS.80).aspx UpdateTargetsInLibraryRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797025(v=MSADS.80).aspx UpdateTargetsInLibraryResponse Response Object
 */
final class UpdateTargetsInLibraryResponse
{
}

/**
 * Updates the target object with a list of devices to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527724(v=MSADS.80).aspx UpdateDeviceOSTargetsRequest Request Object
 */
final class UpdateDeviceOSTargetsRequest
{
    /**
     * A list of TargetAssociation objects that contains the identifier of the target to update with the specified devices.
     * @var TargetAssociation[]
     */
    public $TargetAssociations;
}

/**
 * Response object for the UpdateDeviceOSTargets service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527724(v=MSADS.80).aspx UpdateDeviceOSTargetsResponse Response Object
 */
final class UpdateDeviceOSTargetsResponse
{
}

/**
 * Removes targets from your target library.
 * @link http://msdn.microsoft.com/en-us/library/dd797104(v=MSADS.80).aspx DeleteTargetsFromLibraryRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797104(v=MSADS.80).aspx DeleteTargetsFromLibraryResponse Response Object
 */
final class DeleteTargetsFromLibraryResponse
{
}

/**
 * Gets information about all of the targets in your target library.
 * @link http://msdn.microsoft.com/en-us/library/dd797147(v=MSADS.80).aspx GetTargetsInfoFromLibraryRequest Request Object
 */
final class GetTargetsInfoFromLibraryRequest
{
}

/**
 * Response object for the GetTargetsInfoFromLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797147(v=MSADS.80).aspx GetTargetsInfoFromLibraryResponse Response Object
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
 * Gets detailed information about the specified targets.
 * @link http://msdn.microsoft.com/en-us/library/dd797079(v=MSADS.80).aspx GetTargetsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797079(v=MSADS.80).aspx GetTargetsByIdsResponse Response Object
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
 * Gets the devices that the specified targets target.
 * @link http://msdn.microsoft.com/en-us/library/hh527725(v=MSADS.80).aspx GetDeviceOSTargetsByIdsRequest Request Object
 */
final class GetDeviceOSTargetsByIdsRequest
{
    /**
     * A list of identifiers of the targets to get. The targets should target devices.
     * @var long[]
     */
    public $TargetIds;
}

/**
 * Response object for the GetDeviceOSTargetsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527725(v=MSADS.80).aspx GetDeviceOSTargetsByIdsResponse Response Object
 */
final class GetDeviceOSTargetsByIdsResponse
{
    /**
     * A list of TargetAssociation objects that contains the identifier of the target and the list of devices that it targets. If the target does not target devices, the DeviceOSTarget element is null.
     * @var TargetAssociation[]
     */
    public $TargetAssociations;
}

/**
 * Associates the specified target with the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797121(v=MSADS.80).aspx SetTargetToAdGroupRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797121(v=MSADS.80).aspx SetTargetToAdGroupResponse Response Object
 */
final class SetTargetToAdGroupResponse
{
}

/**
 * Removes the target association for the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797074(v=MSADS.80).aspx DeleteTargetFromAdGroupRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797074(v=MSADS.80).aspx DeleteTargetFromAdGroupResponse Response Object
 */
final class DeleteTargetFromAdGroupResponse
{
}

/**
 * Gets detailed information about the targets that are associated with the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dd797233(v=MSADS.80).aspx GetTargetsByAdGroupIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797233(v=MSADS.80).aspx GetTargetsByAdGroupIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797240(v=MSADS.80).aspx SetTargetToCampaignRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797240(v=MSADS.80).aspx SetTargetToCampaignResponse Response Object
 */
final class SetTargetToCampaignResponse
{
}

/**
 * Removes the target association for the specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dd796894(v=MSADS.80).aspx DeleteTargetFromCampaignRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796894(v=MSADS.80).aspx DeleteTargetFromCampaignResponse Response Object
 */
final class DeleteTargetFromCampaignResponse
{
}

/**
 * Gets detailed information about the targets that are associated with the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dd796993(v=MSADS.80).aspx GetTargetsByCampaignIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796993(v=MSADS.80).aspx GetTargetsByCampaignIdsResponse Response Object
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
 * Gets the specified exclusions from the specified list of entities.
 * @link http://msdn.microsoft.com/en-us/library/jj622434(v=MSADS.80).aspx GetExclusionsByAssociatedEntityIdsRequest Request Object
 */
final class GetExclusionsByAssociatedEntityIdsRequest
{
    /**
     * A list of entities to get the exclusions from. You can specify a maximum of 255 entities.
     * @var Entity[]
     */
    public $Entities;

    /**
     * The types of exclusions to get from the specified entities. You can specify one or more exclusion types.
     * @var ExclusionType
     */
    public $ExclusionType;

    /**
     * The version of the location codes to return if the exclusion contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}

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

/**
 * Response object for the SetExclusionsToAssociatedEntities service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj622487(v=MSADS.80).aspx SetExclusionsToAssociatedEntitiesResponse Response Object
 */
final class SetExclusionsToAssociatedEntitiesResponse
{
}

/**
 * Adds one or more ads to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672045(v=MSADS.80).aspx AddAdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb672045(v=MSADS.80).aspx AddAdsResponse Response Object
 */
final class AddAdsResponse
{
    /**
     * An array of long values that represents the identifiers for the ads that were added.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Deletes one or more ads from an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671870(v=MSADS.80).aspx DeleteAdsRequest Request Object
 */
final class DeleteAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * The IDs of the ads to delete. You can specify a maximum of 50 IDs. After deleting an ad, you cannot access the object using any Get operation, such as GetAdsByIds.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Response object for the DeleteAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671870(v=MSADS.80).aspx DeleteAdsResponse Response Object
 */
final class DeleteAdsResponse
{
}

/**
 * Gets the ads that belong to the specified ad group and have the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dd797118(v=MSADS.80).aspx GetAdsByEditorialStatusRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797118(v=MSADS.80).aspx GetAdsByEditorialStatusResponse Response Object
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
 * Gets the specified ads from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671475(v=MSADS.80).aspx GetAdsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671475(v=MSADS.80).aspx GetAdsByIdsResponse Response Object
 */
final class GetAdsByIdsResponse
{
    /**
     * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request. If an ad does not exist, the corresponding element of the array is set to NULL.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Gets ads that are associated with an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671542(v=MSADS.80).aspx GetAdsByAdGroupIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671542(v=MSADS.80).aspx GetAdsByAdGroupIdResponse Response Object
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
 * Updates one or more ads within the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671471(v=MSADS.80).aspx UpdateAdsRequest Request Object
 */
final class UpdateAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to update.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of ads to update. You can update a maximum of 50 ads.
     * @var Ad[]
     */
    public $Ads;
}

/**
 * Response object for the UpdateAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671471(v=MSADS.80).aspx UpdateAdsResponse Response Object
 */
final class UpdateAdsResponse
{
}

/**
 * Pauses one or more ads.
 * @link http://msdn.microsoft.com/en-us/library/cc936608(v=MSADS.80).aspx PauseAdsRequest Request Object
 */
final class PauseAdsRequest
{
    /**
     * The identifier of the ad group that contains the ads that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that specifies the ads that will be paused.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Response object for the PauseAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/cc936608(v=MSADS.80).aspx PauseAdsResponse Response Object
 */
final class PauseAdsResponse
{
}

/**
 * Resumes one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/cc936611(v=MSADS.80).aspx ResumeAdsRequest Request Object
 */
final class ResumeAdsRequest
{
    /**
     * The identifier of the ad group that contains the ads to be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that specifies the ads to be resumed.
     * @var long[]
     */
    public $AdIds;
}

/**
 * Response object for the ResumeAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/cc936611(v=MSADS.80).aspx ResumeAdsResponse Response Object
 */
final class ResumeAdsResponse
{
}

/**
 * Adds one or more keywords to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671996(v=MSADS.80).aspx AddKeywordsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671996(v=MSADS.80).aspx AddKeywordsResponse Response Object
 */
final class AddKeywordsResponse
{
    /**
     * An array of long values that represents the keyword identifiers for the keywords that were added.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Deletes one or more keywords in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671744(v=MSADS.80).aspx DeleteKeywordsRequest Request Object
 */
final class DeleteKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 keywords identifiers to delete. After deleting a keyword, you cannot access the object by using any Get operation, such as GetKeywordsByIds.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the DeleteKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671744(v=MSADS.80).aspx DeleteKeywordsResponse Response Object
 */
final class DeleteKeywordsResponse
{
}

/**
 * Gets the keywords with the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dd797091(v=MSADS.80).aspx GetKeywordsByEditorialStatusRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797091(v=MSADS.80).aspx GetKeywordsByEditorialStatusResponse Response Object
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
 * Gets the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671809(v=MSADS.80).aspx GetKeywordsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671809(v=MSADS.80).aspx GetKeywordsByIdsResponse Response Object
 */
final class GetKeywordsByIdsResponse
{
    /**
     * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request. If a keyword does not exist, the corresponding element of the array is set to NULL.
     * @var Keyword[]
     */
    public $Keywords;
}

/**
 * Gets the keywords for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671693(v=MSADS.80).aspx GetKeywordsByAdGroupIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671693(v=MSADS.80).aspx GetKeywordsByAdGroupIdResponse Response Object
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
 * Pauses one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671504(v=MSADS.80).aspx PauseKeywordsRequest Request Object
 */
final class PauseKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the keywords that will be paused.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the PauseKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671504(v=MSADS.80).aspx PauseKeywordsResponse Response Object
 */
final class PauseKeywordsResponse
{
}

/**
 * Resumes one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671976(v=MSADS.80).aspx ResumeKeywordsRequest Request Object
 */
final class ResumeKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the keywords be resumed.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the ResumeKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671976(v=MSADS.80).aspx ResumeKeywordsResponse Response Object
 */
final class ResumeKeywordsResponse
{
}

/**
 * Updates the keywords within a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671664(v=MSADS.80).aspx UpdateKeywordsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671664(v=MSADS.80).aspx UpdateKeywordsResponse Response Object
 */
final class UpdateKeywordsResponse
{
}

/**
 * Sets the destination URL that an ad uses if the specified keyword matches the user's search query.
 * @link http://msdn.microsoft.com/en-us/library/jj643313(v=MSADS.80).aspx SetDestinationUrlToKeywordsRequest Request Object
 */
final class SetDestinationUrlToKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keyword.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of KeywordDestinationUrl objects. Each object specifies the destination URL to use in an ad if the specified keyword matches the user's search query. The list must contain unique keyword identifiers. You can specify a maximum of 1,000 objects.
     * @var KeywordDestinationUrl[]
     */
    public $KeywordDestinationUrls;
}

/**
 * Response object for the SetDestinationUrlToKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj643313(v=MSADS.80).aspx SetDestinationUrlToKeywordsResponse Response Object
 */
final class SetDestinationUrlToKeywordsResponse
{
}

/**
 * Gets the destination URL of one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/jj643308(v=MSADS.80).aspx GetDestinationUrlByKeywordIdsRequest Request Object
 */
final class GetDestinationUrlByKeywordIdsRequest
{
    /**
     * The identifier of the ad group that contains the keywords.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of unique keyword identifiers. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $KeywordIds;
}

/**
 * Response object for the GetDestinationUrlByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj643308(v=MSADS.80).aspx GetDestinationUrlByKeywordIdsResponse Response Object
 */
final class GetDestinationUrlByKeywordIdsResponse
{
    /**
     * A list of destination URLs that correspond directly to the keyword identifiers specified in the request. An item is null if the keyword did not specify a destination URL.
     * @var string[]
     */
    public $DestinationUrls;
}

/**
 * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/jj631653(v=MSADS.80).aspx AppealEditorialRejectionsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj631653(v=MSADS.80).aspx AppealEditorialRejectionsResponse Response Object
 */
final class AppealEditorialRejectionsResponse
{
}

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797197(v=MSADS.80).aspx AddBusinessesRequest Request Object
 */
final class AddBusinessesRequest
{
    /**
     * An array of Business objects to add.
     * @var Business[]
     */
    public $Businesses;
}

/**
 * Response object for the AddBusinesses service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797197(v=MSADS.80).aspx AddBusinessesResponse Response Object
 */
final class AddBusinessesResponse
{
    /**
     * An array of identifiers of the businesses that were added. The order of the identifiers is the same as that of the businesses in the request.
     * @var long[]
     */
    public $BusinessIds;
}

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797140(v=MSADS.80).aspx UpdateBusinessesRequest Request Object
 */
final class UpdateBusinessesRequest
{
    /**
     * An array of Business objects to update.
     * @var Business[]
     */
    public $Businesses;
}

/**
 * Response object for the UpdateBusinesses service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797140(v=MSADS.80).aspx UpdateBusinessesResponse Response Object
 */
final class UpdateBusinessesResponse
{
}

/**
 * Beginning early Q3 2013, this operation will no longer be supported.
 * @link http://msdn.microsoft.com/en-us/library/dd797021(v=MSADS.80).aspx DeleteBusinessesRequest Request Object
 */
final class DeleteBusinessesRequest
{
    /**
     * An array of long values that identifies the businesses to be deleted.
     * @var long[]
     */
    public $BusinessIds;
}

/**
 * Response object for the DeleteBusinesses service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797021(v=MSADS.80).aspx DeleteBusinessesResponse Response Object
 */
final class DeleteBusinessesResponse
{
}

/**
 * Gets a subset of the business location information for all businesses that belong to the customer.
 * @link http://msdn.microsoft.com/en-us/library/dd796964(v=MSADS.80).aspx GetBusinessesInfoRequest Request Object
 */
final class GetBusinessesInfoRequest
{
}

/**
 * Response object for the GetBusinessesInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796964(v=MSADS.80).aspx GetBusinessesInfoResponse Response Object
 */
final class GetBusinessesInfoResponse
{
    /**
     * An array of BusinessInfo objects that were retrieved. The objects are in order of ID.
     * @var BusinessInfo[]
     */
    public $BusinessesInfo;
}

/**
 * Gets the business location objects of the specified businesses.
 * @link http://msdn.microsoft.com/en-us/library/dd797150(v=MSADS.80).aspx GetBusinessesByIdsRequest Request Object
 */
final class GetBusinessesByIdsRequest
{
    /**
     * @var long[]
     */
    public $BusinessIds;
}

/**
 * Response object for the GetBusinessesByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797150(v=MSADS.80).aspx GetBusinessesByIdsResponse Response Object
 */
final class GetBusinessesByIdsResponse
{
    /**
     * An array of Business objects that were retrieved.
     * @var Business[]
     */
    public $Businesses;
}

/**
 * Adds one or more website placement bids to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796809(v=MSADS.80).aspx AddSitePlacementsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796809(v=MSADS.80).aspx AddSitePlacementsResponse Response Object
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
 * Deletes one or more site placement bids from an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796968(v=MSADS.80).aspx DeleteSitePlacementsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796968(v=MSADS.80).aspx DeleteSitePlacementsResponse Response Object
 */
final class DeleteSitePlacementsResponse
{
}

/**
 * Gets the specified website placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796904(v=MSADS.80).aspx GetSitePlacementsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796904(v=MSADS.80).aspx GetSitePlacementsByIdsResponse Response Object
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
 * Gets all the website placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797116(v=MSADS.80).aspx GetSitePlacementsByAdGroupIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd797116(v=MSADS.80).aspx GetSitePlacementsByAdGroupIdResponse Response Object
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
 * Pauses one or more website placement bids in the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797162(v=MSADS.80).aspx PauseSitePlacementsRequest Request Object
 */
final class PauseSitePlacementsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids that will be paused.
     * @var long[]
     */
    public $SitePlacementIds;
}

/**
 * Response object for the PauseSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797162(v=MSADS.80).aspx PauseSitePlacementsResponse Response Object
 */
final class PauseSitePlacementsResponse
{
}

/**
 * Resumes one or more website placements in the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796924(v=MSADS.80).aspx ResumeSitePlacementsRequest Request Object
 */
final class ResumeSitePlacementsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids that will be resumed.
     * @var long[]
     */
    public $SitePlacementIds;
}

/**
 * Response object for the ResumeSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796924(v=MSADS.80).aspx ResumeSitePlacementsResponse Response Object
 */
final class ResumeSitePlacementsResponse
{
}

/**
 * Updates one or more website placement bids in an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796868(v=MSADS.80).aspx UpdateSitePlacementsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796868(v=MSADS.80).aspx UpdateSitePlacementsResponse Response Object
 */
final class UpdateSitePlacementsResponse
{
}

/**
 * Gets details about the sizes and types of media that the specified publisher websites support.
 * @link http://msdn.microsoft.com/en-us/library/dd796802(v=MSADS.80).aspx GetPlacementDetailsForUrlsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dd796802(v=MSADS.80).aspx GetPlacementDetailsForUrlsResponse Response Object
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
 * Normalizes a list of keyword or negative keyword strings.
 * @link http://msdn.microsoft.com/en-us/library/ff728531(v=MSADS.80).aspx GetNormalizedStringsRequest Request Object
 */
final class GetNormalizedStringsRequest
{
    /**
     * An array of keyword or negative keyword strings that you want to normalize. The array can have a maximum of 1,000 strings, and each string can have a maximum of 100 characters.
     * @var string[]
     */
    public $Strings;

    /**
     * The language to use to normalize the strings. The language determines the rules that the service uses to normalize the strings. The language that you specify and the language of the strings to be normalized must be the same. For possible values, see Language Values.
     * @var string
     */
    public $Language;

    /**
     * A Boolean value that determines whether to remove noise words from the keyword. To remove noise words, set to true. The default is true.
     * @var boolean
     */
    public $RemoveNoise;
}

/**
 * Response object for the GetNormalizedStrings service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728531(v=MSADS.80).aspx GetNormalizedStringsResponse Response Object
 */
final class GetNormalizedStringsResponse
{
    /**
     * An array of normalized strings. The items in this array correspond directly to the items in the Strings array that you specified in the request message.
     * @var string[]
     */
    public $NormalizedStrings;
}

/**
 * Gets the reasons why the specified keywords failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/ff728472(v=MSADS.80).aspx GetKeywordEditorialReasonsByIdsRequest Request Object
 */
final class GetKeywordEditorialReasonsByIdsRequest
{
    /**
     * An array of identifiers that identifies keywords that failed editorial review. The array can have a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The identifier of the account that contains the keywords.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetKeywordEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728472(v=MSADS.80).aspx GetKeywordEditorialReasonsByIdsResponse Response Object
 */
final class GetKeywordEditorialReasonsByIdsResponse
{
    /**
     * A collection of keywords that failed editorial review and the reason for the failure.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}

/**
 * Gets the reasons why the specified ads failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/ff728460(v=MSADS.80).aspx GetAdEditorialReasonsByIdsRequest Request Object
 */
final class GetAdEditorialReasonsByIdsRequest
{
    /**
     * An array of identifiers of the ads that failed editorial review. The array is can have a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $AdIds;

    /**
     * The identifier of the account that contains the ads.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetAdEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728460(v=MSADS.80).aspx GetAdEditorialReasonsByIdsResponse Response Object
 */
final class GetAdEditorialReasonsByIdsResponse
{
    /**
     * A collection of ads that failed editorial review and the reason for the failure.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 * @link http://msdn.microsoft.com/en-us/library/jj631647(v=MSADS.80).aspx GetEditorialReasonsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj631647(v=MSADS.80).aspx GetEditorialReasonsByIdsResponse Response Object
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
 * Adds one or more Campaign Analytics goals that campaigns in the account can use to track user activity and conversions.
 * @link http://msdn.microsoft.com/en-us/library/gg985272(v=MSADS.80).aspx AddGoalsRequest Request Object
 */
final class AddGoalsRequest
{
    /**
     * The identifier of the account to which you want to add the analytics goals.
     * @var long
     */
    public $AccountId;

    /**
     * The goals to add to the account. You can add a maximum of six unique goals to an account.
     * @var Goal[]
     */
    public $Goals;
}

/**
 * Response object for the AddGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985272(v=MSADS.80).aspx AddGoalsResponse Response Object
 */
final class AddGoalsResponse
{
    /**
     * An array of GoalResult objects. Each object contains the identifier of the goal that was added and the identifiers of the steps that make up the goal.
     * @var GoalResult[]
     */
    public $GoalResults;
}

/**
 * Updates the specified goals in the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985282(v=MSADS.80).aspx UpdateGoalsRequest Request Object
 */
final class UpdateGoalsRequest
{
    /**
     * The identifier of the account whose goals you want to update.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Goal objects that contains the goals to update. The operation updates only those fields that are not NULL.
     * @var Goal[]
     */
    public $Goals;
}

/**
 * Response object for the UpdateGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985282(v=MSADS.80).aspx UpdateGoalsResponse Response Object
 */
final class UpdateGoalsResponse
{
    /**
     * An array of GoalResult objects. Each object contains the identifier of the goal that was updated and the identifiers of the steps that make up the goal.
     * @var GoalResult[]
     */
    public $GoalResults;
}

/**
 * Gets the Campaign Analytics goals that are defined for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985273(v=MSADS.80).aspx GetGoalsRequest Request Object
 */
final class GetGoalsRequest
{
    /**
     * The identifier of the account whose Campaign Analytics goals you want to get.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985273(v=MSADS.80).aspx GetGoalsResponse Response Object
 */
final class GetGoalsResponse
{
    /**
     * An array of Goal objects. Each object contains the details of the goal, such as the steps that make up the goal and the revenue model.
     * @var Goal[]
     */
    public $Goals;
}

/**
 * Deletes the specified goals from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985266(v=MSADS.80).aspx DeleteGoalsRequest Request Object
 */
final class DeleteGoalsRequest
{
    /**
     * The identifier of the account that contains the goals to delete.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the goals to delete.
     * @var long[]
     */
    public $GoalIds;
}

/**
 * Response object for the DeleteGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985266(v=MSADS.80).aspx DeleteGoalsResponse Response Object
 */
final class DeleteGoalsResponse
{
}

/**
 * Sets the type of analytics that campaigns in the specified accounts use.
 * @link http://msdn.microsoft.com/en-us/library/gg985279(v=MSADS.80).aspx SetAnalyticsTypeRequest Request Object
 */
final class SetAnalyticsTypeRequest
{
    /**
     * An array of AccountAnalyticsType objects that contains the identifier of an account and the type of analytics that campaigns in the account use.
     * @var AccountAnalyticsType[]
     */
    public $AccountAnalyticsTypes;
}

/**
 * Response object for the SetAnalyticsType service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985279(v=MSADS.80).aspx SetAnalyticsTypeResponse Response Object
 */
final class SetAnalyticsTypeResponse
{
}

/**
 * Gets the type of analytics that is set for the specified accounts.
 * @link http://msdn.microsoft.com/en-us/library/gg985290(v=MSADS.80).aspx GetAnalyticsTypeRequest Request Object
 */
final class GetAnalyticsTypeRequest
{
    /**
     * An array of identifiers of the accounts for which you want to determine the type of analytics used.
     * @var long[]
     */
    public $AccountIds;
}

/**
 * Response object for the GetAnalyticsType service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985290(v=MSADS.80).aspx GetAnalyticsTypeResponse Response Object
 */
final class GetAnalyticsTypeResponse
{
    /**
     * An array of AnalyticsType values. The items in the array are in the same order as the account identifiers that you specified in the request. The type determines the type of analytics that campaigns in the accounts use.
     * @var AnalyticsType[]
     */
    public $Types;
}

/**
 * This version of ad extensions will no longer be supported beginning early Q3 2013. If you implemented this feature, you must migrate your application to use version 2 of ad extensions by early Q3 2013. For information about implementing version 2 of ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527711(v=MSADS.80).aspx GetCampaignAdExtensionsRequest Request Object
 */
final class GetCampaignAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of identifiers of the campaigns whose address and phone preferences you want to get. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;
}

/**
 * Response object for the GetCampaignAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527711(v=MSADS.80).aspx GetCampaignAdExtensionsResponse Response Object
 */
final class GetCampaignAdExtensionsResponse
{
    /**
     * A list of AdExtension objects that contains the campaign's preferences for whether to include the business' address and phone number in its text ads.
     * @var AdExtension[]
     */
    public $AdExtensions;
}

/**
 * This version of ad extensions will no longer be supported beginning early Q3 2013. If you implemented this feature, you must migrate your application to use version 2 of ad extensions. For information about implementing version 2 of ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527709(v=MSADS.80).aspx SetCampaignAdExtensionsRequest Request Object
 */
final class SetCampaignAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtension objects that contains the campaign's preferences for whether to include the business' address and phone information in text ads. You can specify a maximum of 100 extension objects, and the list must not contain duplicate campaigns.
     * @var AdExtension[]
     */
    public $AdExtensions;
}

/**
 * Response object for the SetCampaignAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527709(v=MSADS.80).aspx SetCampaignAdExtensionsResponse Response Object
 */
final class SetCampaignAdExtensionsResponse
{
}

/**
 * Gets the status of one or more data migration processes being run for the specified accounts.
 * @link http://msdn.microsoft.com/en-us/library/hh965529(v=MSADS.80).aspx GetAccountMigrationStatusesRequest Request Object
 */
final class GetAccountMigrationStatusesRequest
{
    /**
     * An array of identifiers of the accounts being migrated. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * The type of migration for which you want to get status.
     * @var string
     */
    public $MigrationType;
}

/**
 * Response object for the GetAccountMigrationStatuses service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh965529(v=MSADS.80).aspx GetAccountMigrationStatusesResponse Response Object
 */
final class GetAccountMigrationStatusesResponse
{
    /**
     * An array of AccountMigrationStatusesInfo objects. Each object identifies the account and the status of each specified migration type.
     * @var AccountMigrationStatusesInfo[]
     */
    public $MigrationStatuses;
}

/**
 * Adds one or more ad extensions to an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj134406(v=MSADS.80).aspx AddAdExtensionsRequest Request Object
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
     * @var AdExtension2[]
     */
    public $AdExtensions;
}

/**
 * Response object for the AddAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134406(v=MSADS.80).aspx AddAdExtensionsResponse Response Object
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
 * Delete one or more ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj134404(v=MSADS.80).aspx DeleteAdExtensionsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj134404(v=MSADS.80).aspx DeleteAdExtensionsResponse Response Object
 */
final class DeleteAdExtensionsResponse
{
}

/**
 * Gets the specified types of ad extensions associated to the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134405(v=MSADS.80).aspx GetAdExtensionsByCampaignIdsRequest Request Object
 */
final class GetAdExtensionsByCampaignIdsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaigns that contain the ad extensions to get. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;

    /**
     * The types of ad extensions to get from the campaign.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}

/**
 * Response object for the GetAdExtensionsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134405(v=MSADS.80).aspx GetAdExtensionsByCampaignIdsResponse Response Object
 */
final class GetAdExtensionsByCampaignIdsResponse
{
    /**
     * A list of CampaignAdExtensionCollection objects. Each collection contains a CampaignAdExtension object for each ad extension type that matches the ad extension filter in the request.
     * @var CampaignAdExtensionCollection[]
     */
    public $CampaignAdExtensionCollection;
}

/**
 * Gets the specified ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj134376(v=MSADS.80).aspx GetAdExtensionsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj134376(v=MSADS.80).aspx GetAdExtensionsByIdsResponse Response Object
 */
final class GetAdExtensionsByIdsResponse
{
    /**
     * A list of AdExtension2 objects. The list corresponds directly to the list of identifiers in the request. If an ad extension ID in the request is not valid or the extension is not of the type specified, the corresponding item in this list is null.
     * @var AdExtension2[]
     */
    public $AdExtensions;
}

/**
 * Gets the reasons why the specified ad extensions failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/jj134401(v=MSADS.80).aspx GetAdExtensionsEditorialReasonsByCampaignIdsRequest Request Object
 */
final class GetAdExtensionsEditorialReasonsByCampaignIdsRequest
{
    /**
     * The identifier of the account that owns the ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of ad extension to campaign associations. You can specify a maximum of 100 associations.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;

    /**
     * The type of ad extensions specified in the list of ad extension to campaign associations.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}

/**
 * Response object for the GetAdExtensionsEditorialReasonsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134401(v=MSADS.80).aspx GetAdExtensionsEditorialReasonsByCampaignIdsResponse Response Object
 */
final class GetAdExtensionsEditorialReasonsByCampaignIdsResponse
{
    /**
     * A collection of ad extensions that failed editorial review and the reason for the failure.
     * @var AdExtensionEditorialReasonCollection[]
     */
    public $EditorialReasons;
}

/**
 * Associates one or more ad extensions with one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134390(v=MSADS.80).aspx SetAdExtensionsToCampaignsRequest Request Object
 */
final class SetAdExtensionsToCampaignsRequest
{
    /**
     * The identifier of the account that owns the campaigns and ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtensionIdToCampaignIdAssociation objects. Each object associates an ad extension with a campaign. You can specify a maximum of 100 associations.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;
}

/**
 * Response object for the SetAdExtensionsToCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134390(v=MSADS.80).aspx SetAdExtensionsToCampaignsResponse Response Object
 */
final class SetAdExtensionsToCampaignsResponse
{
}

/**
 * Disassociates one or more ad extensions from one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134377(v=MSADS.80).aspx DeleteAdExtensionsFromCampaignsRequest Request Object
 */
final class DeleteAdExtensionsFromCampaignsRequest
{
    /**
     * The identifier of the account that owns the extensions and campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtensionIdToCampaignIdAssociation objects. You can specify a maximum of 100 objects. Each object identifies a campaign and the extension to disassociate from the campaign.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;
}

/**
 * Response object for the DeleteAdExtensionsFromCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134377(v=MSADS.80).aspx DeleteAdExtensionsFromCampaignsResponse Response Object
 */
final class DeleteAdExtensionsFromCampaignsResponse
{
}

/**
 * Gets the ad extensions from the specified account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj923090(v=MSADS.80).aspx GetAdExtensionIdsByAccountIdRequest Request Object
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
     * A value that filters the extensions based on whether they're associated with a campaign. For possible values, see AssociationFilter.
     * @var AssociationFilter
     */
    public $AssociationFilter;
}

/**
 * Response object for the GetAdExtensionIdsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj923090(v=MSADS.80).aspx GetAdExtensionIdsByAccountIdResponse Response Object
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
 * Updates one or more ad extensions within an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn151774(v=MSADS.80).aspx UpdateAdExtensionsRequest Request Object
 */
final class UpdateAdExtensionsRequest
{
    /**
     * The identifier of the account which contains the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions (of any type) to update within the account. You can specify a maximum of 100 extensions per call.
     * @var AdExtension2[]
     */
    public $AdExtensions;
}

/**
 * Response object for the UpdateAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn151774(v=MSADS.80).aspx UpdateAdExtensionsResponse Response Object
 */
final class UpdateAdExtensionsResponse
{
}

/**
 * Adds an image or icon to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/jj721608(v=MSADS.80).aspx AddImageRequest Request Object
 */
final class AddImageRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * A base64 string that represents the image or icon to add to the library. The base64 string can contain a maximum of 102,400 characters.
     * @var string
     */
    public $Data;

    /**
     * The type of media to add to the library. For possible values, see ImageType.
     * @var ImageType
     */
    public $Type;
}

/**
 * Response object for the AddImage service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj721608(v=MSADS.80).aspx AddImageResponse Response Object
 */
final class AddImageResponse
{
    /**
     * The identifier of the image or icon that you added to the library. You use the identifier to set the appropriate media ID field in the LocationAdExtension object.
     * @var long
     */
    public $MediaId;
}

/**
 * Gets the specified image or icon from an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/jj721612(v=MSADS.80).aspx GetImageByIdRequest Request Object
 */
final class GetImageByIdRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the image or icon to get.
     * @var long
     */
    public $MediaId;
}

/**
 * Response object for the GetImageById service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj721612(v=MSADS.80).aspx GetImageByIdResponse Response Object
 */
final class GetImageByIdResponse
{
    /**
     * The specified image or icon from the library. The string is a base64 string.
     * @var string
     */
    public $Data;
}

/**
 * Adds the specified media to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn151761(v=MSADS.80).aspx AddMediaRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn151761(v=MSADS.80).aspx AddMediaResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn151767(v=MSADS.80).aspx GetMediaByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn151767(v=MSADS.80).aspx GetMediaByIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj739471(v=MSADS.80).aspx GetAdGroupCriterionsByIdsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj739471(v=MSADS.80).aspx GetAdGroupCriterionsByIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj739473(v=MSADS.80).aspx GetAdGroupCriterionsByAdGroupIdRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj739473(v=MSADS.80).aspx GetAdGroupCriterionsByAdGroupIdResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj689547(v=MSADS.80).aspx AddAdGroupCriterionsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj689547(v=MSADS.80).aspx AddAdGroupCriterionsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn151775(v=MSADS.80).aspx UpdateAdGroupCriterionsRequest Request Object
 */
final class UpdateAdGroupCriterionsRequest
{
    /**
     * The identifier of the account that owns the criterions to update.
     * @var long
     */
    public $AccountId;

    /**
     * The list of criterions to update. You can specify a maximum of 1,000 criterions.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}

/**
 * Response object for the UpdateAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn151775(v=MSADS.80).aspx UpdateAdGroupCriterionsResponse Response Object
 */
final class UpdateAdGroupCriterionsResponse
{
}

/**
 * Deletes the specified ad group criterions.
 * @link http://msdn.microsoft.com/en-us/library/jj739465(v=MSADS.80).aspx DeleteAdGroupCriterionsRequest Request Object
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
     * @var long
     */
    public $AdGroupId;
}

/**
 * Response object for the DeleteAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj739465(v=MSADS.80).aspx DeleteAdGroupCriterionsResponse Response Object
 */
final class DeleteAdGroupCriterionsResponse
{
}

/**
 * Gets the Bing Merchant Center stores for the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn307651(v=MSADS.80).aspx GetBMCStoresByCustomerIdRequest Request Object
 */
final class GetBMCStoresByCustomerIdRequest
{
}

/**
 * Response object for the GetBMCStoresByCustomerId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn307651(v=MSADS.80).aspx GetBMCStoresByCustomerIdResponse Response Object
 */
final class GetBMCStoresByCustomerIdResponse
{
    /**
     * @var BMCStore[]
     */
    public $BMCStores;
}


?>
