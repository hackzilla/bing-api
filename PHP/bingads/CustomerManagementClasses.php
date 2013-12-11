<?php
// Generated on 10/23/2013 5:21:56 AM

namespace BingAds\CustomerManagement;

/**
 * Defines the possible status values of an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728394(v=msads.90).aspx AccountLifeCycleStatus Value Set
 */
final class AccountLifeCycleStatus
{
    /** The account is in a draft state. When you add an account, the system sets the status to Draft. After the system validates the payment instrument, the status changes to Active. You cannot add another account while the customer has an account in the Draft state. */
    const Draft = 'Draft';

    /** The account is active, which means that the account and its campaigns can be managed and its ads served. */
    const Active = 'Active';

    /** The account is inactive, which means that the system deleted the account. */
    const Inactive = 'Inactive';

    /** For internal use only. You may update the account and its campaigns while the account is in the paused state. */
    const Pause = 'Pause';

    /** For internal use only. You may update the account and its campaigns while the account is in the pending state. */
    const Pending = 'Pending';
}

/**
 * Defines the possible application types.
 * @link http://msdn.microsoft.com/en-us/library/ee704168(v=msads.90).aspx ApplicationType Value Set
 */
final class ApplicationType
{
    /** An advertiser application. */
    const Advertiser = 'Advertiser';
}

/**
 * Defines the possible account types.
 * @link http://msdn.microsoft.com/en-us/library/ff728392(v=msads.90).aspx AccountType Value Set
 */
final class AccountType
{
    /** An advertiser account. */
    const Advertiser = 'Advertiser';
}

/**
 * Defines a selection of currency values.
 * @link http://msdn.microsoft.com/en-us/library/bb671938(v=msads.90).aspx CurrencyType Value Set
 */
final class CurrencyType
{
    const AlgerianDinar = 'AlgerianDinar';
    const ArgentinePeso = 'ArgentinePeso';
    const ArmenianDram = 'ArmenianDram';
    const AustralianDollar = 'AustralianDollar';
    const AzerbaijanianManat = 'AzerbaijanianManat';
    const BahrainiDinar = 'BahrainiDinar';
    const Baht = 'Baht';
    const Balboa = 'Balboa';
    const BelarussianRuble = 'BelarussianRuble';
    const BelizeDollar = 'BelizeDollar';
    const Bolivar = 'Bolivar';
    const Boliviano = 'Boliviano';
    const BrazilianReal = 'BrazilianReal';
    const BruneiDollar = 'BruneiDollar';
    const CanadianDollar = 'CanadianDollar';
    const ChileanPeso = 'ChileanPeso';
    const ColombianPeso = 'ColombianPeso';
    const CordobaOro = 'CordobaOro';
    const CostaRicanColon = 'CostaRicanColon';
    const Croatiankuna = 'Croatiankuna';
    const CzechKoruna = 'CzechKoruna';
    const DanishKrone = 'DanishKrone';
    const Denar = 'Denar';
    const DominicanPeso = 'DominicanPeso';
    const Dong = 'Dong';
    const EgyptianPound = 'EgyptianPound';
    const Euro = 'Euro';
    const Forint = 'Forint';
    const Guarani = 'Guarani';
    const HongKongDollar = 'HongKongDollar';
    const Hryvnia = 'Hryvnia';
    const IcelandKrona = 'IcelandKrona';
    const IndianRupee = 'IndianRupee';
    const IranianRial = 'IranianRial';
    const IraqiDinar = 'IraqiDinar';
    const JamaicanDollar = 'JamaicanDollar';
    const JapaneseYen = 'JapaneseYen';
    const JordanianDinar = 'JordanianDinar';
    const KenyanShilling = 'KenyanShilling';
    const Kroon = 'Kroon';
    const KuwaitiDinar = 'KuwaitiDinar';
    const Lari = 'Lari';
    const LatvianLats = 'LatvianLats';
    const LebanesePound = 'LebanesePound';
    const Lek = 'Lek';
    const Lempira = 'Lempira';
    const Leu = 'Leu';
    const Lev = 'Lev';
    const LibyanDinar = 'LibyanDinar';
    const LithuanianLitus = 'LithuanianLitus';
    const MalaysianRinggit = 'MalaysianRinggit';
    const MexicanPeso = 'MexicanPeso';
    const MoroccanDirham = 'MoroccanDirham';
    const NewIsraeliSheqel = 'NewIsraeliSheqel';
    const NewTaiwanDollar = 'NewTaiwanDollar';
    const NewZealandDollar = 'NewZealandDollar';
    const NorwegianKrone = 'NorwegianKrone';
    const NuevoSol = 'NuevoSol';
    const PakistanRupee = 'PakistanRupee';
    const Pataca = 'Pataca';
    const PesoUruguayo = 'PesoUruguayo';
    const PhilippinePeso = 'PhilippinePeso';
    const QatariRial = 'QatariRial';
    const Quetzal = 'Quetzal';
    const RialOmani = 'RialOmani';
    const Rufiyaa = 'Rufiyaa';
    const Rupiah = 'Rupiah';
    const RussianRuble = 'RussianRuble';
    const SaudiRiyal = 'SaudiRiyal';
    const SingaporeDollar = 'SingaporeDollar';
    const SlovakKoruna = 'SlovakKoruna';
    const Som = 'Som';
    const SouthAfricanRand = 'SouthAfricanRand';
    const SwedishKrona = 'SwedishKrona';
    const SwissFranc = 'SwissFranc';
    const SyrianPound = 'SyrianPound';
    const Tenge = 'Tenge';
    const Tolar = 'Tolar';
    const TrinidadandTobagoDollar = 'TrinidadandTobagoDollar';
    const Tugrik = 'Tugrik';
    const TunisianDinar = 'TunisianDinar';
    const TurkishLira = 'TurkishLira';
    const UAEDirham = 'UAEDirham';
    const UKPound = 'UKPound';
    const USDollar = 'USDollar';
    const UzbekistanSum = 'UzbekistanSum';
    const Won = 'Won';
    const YemeniRial = 'YemeniRial';
    const YuanRenminbi = 'YuanRenminbi';
    const YugoslavianNewDinar = 'YugoslavianNewDinar';
    const ZimbabweDollar = 'ZimbabweDollar';
    const Zloty = 'Zloty';
}

/**
 * Defines the possible financial status values of an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728399(v=msads.90).aspx AccountFinancialStatus Value Set
 */
final class AccountFinancialStatus
{
    /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
    const Proposed = 'Proposed';

    /** Not used. */
    const PendingCreditCheck = 'PendingCreditCheck';

    /** The account is in good standing. */
    const ClearFinancialStatus = 'ClearFinancialStatus';

    /** Not used. */
    const SoldToOnly = 'SoldToOnly';

    /** Not used. */
    const CreditWarning = 'CreditWarning';

    /** For an advertiser account, this status indicates that the account is past due. The service will not deliver the account's ads until the account is settled. For a credit card account, this status indicates that the card has been declined three times. */
    const Hold = 'Hold';

    /** The account is past due; however, collection is no longer being pursued. When this status is set, the Status element of Account data object will be set to Inactive. */
    const WriteOff = 'WriteOff';

    /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. The service continues to deliver the account's ads. */
    const TaxOnHold = 'TaxOnHold';

    /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. The service continues to deliver the account's ads. */
    const UserHold = 'UserHold';
}

/**
 * Defines a selection of language values.
 * @link http://msdn.microsoft.com/en-us/library/bb672074(v=msads.90).aspx LanguageType Value Set
 */
final class LanguageType
{
    const Danish = 'Danish';
    const Dutch = 'Dutch';
    const English = 'English';
    const Finnish = 'Finnish';
    const French = 'French';
    const German = 'German';
    const Italian = 'Italian';
    const Japanese = 'Japanese';
    const Norwegian = 'Norwegian';
    const Portuguese = 'Portuguese';
    const Swedish = 'Swedish';
    const Spanish = 'Spanish';
    const Arabic = 'Arabic';
    const Hebrew = 'Hebrew';
    const Korean = 'Korean';
    const Russian = 'Russian';
    const TraditionalChinese = 'TraditionalChinese';
    const SimplifiedChinese = 'SimplifiedChinese';
}

/**
 * The value set defines a broad selection of languages; however, not all languages are supported. For a list of supported languages, see Ad Languages.Defines the possible payment methods of an account.
 * @link http://msdn.microsoft.com/en-us/library/ee704164(v=msads.90).aspx PaymentMethodType Value Set
 */
final class PaymentMethodType
{
    /** The payments are made with a credit card. */
    const CreditCard = 'CreditCard';

    /** An invoice is sent to the customer requesting payment. */
    const Invoice = 'Invoice';

    /** The payments are made with a check. Not supported. */
    const Check = 'Check';

    /** The payments are made with an electronic funds transfer. Not supported. */
    const ElectronicFundsTransfer = 'ElectronicFundsTransfer';
}

/**
 * Defines the possible time zones for the customer management service.
 * @link http://msdn.microsoft.com/en-us/library/dn451293(v=msads.90).aspx TimeZoneType Value Set
 */
final class TimeZoneType
{
    const AbuDhabiMuscat = 'AbuDhabiMuscat';
    const Adelaide = 'Adelaide';
    const Alaska = 'Alaska';
    const AlmatyNovosibirsk = 'AlmatyNovosibirsk';
    const AmsterdamBerlinBernRomeStockholmVienna = 'AmsterdamBerlinBernRomeStockholmVienna';
    const Arizona = 'Arizona';
    const AstanaDhaka = 'AstanaDhaka';
    const AthensBuckarestIstanbul = 'AthensBuckarestIstanbul';
    const AtlanticTimeCanada = 'AtlanticTimeCanada';
    const AucklandWellington = 'AucklandWellington';
    const Azores = 'Azores';
    const Baghdad = 'Baghdad';
    const BakuTbilisiYerevan = 'BakuTbilisiYerevan';
    const BangkokHanoiJakarta = 'BangkokHanoiJakarta';
    const BeijingChongqingHongKongUrumqi = 'BeijingChongqingHongKongUrumqi';
    const BelgradeBratislavaBudapestLjubljanaPrague = 'BelgradeBratislavaBudapestLjubljanaPrague';
    const BogotaLimaQuito = 'BogotaLimaQuito';
    const Brasilia = 'Brasilia';
    const Brisbane = 'Brisbane';
    const BrusselsCopenhagenMadridParis = 'BrusselsCopenhagenMadridParis';
    const Bucharest = 'Bucharest';
    const BuenosAiresGeorgetown = 'BuenosAiresGeorgetown';
    const Cairo = 'Cairo';
    const CanberraMelbourneSydney = 'CanberraMelbourneSydney';
    const CapeVerdeIsland = 'CapeVerdeIsland';
    const CaracasLaPaz = 'CaracasLaPaz';
    const CasablancaMonrovia = 'CasablancaMonrovia';
    const CentralAmerica = 'CentralAmerica';
    const CentralTimeUSCanada = 'CentralTimeUSCanada';
    const ChennaiKolkataMumbaiNewDelhi = 'ChennaiKolkataMumbaiNewDelhi';
    const ChihuahuaLaPazMazatlan = 'ChihuahuaLaPazMazatlan';
    const Darwin = 'Darwin';
    const EasternTimeUSCanada = 'EasternTimeUSCanada';
    const Ekaterinburg = 'Ekaterinburg';
    const FijiKamchatkaMarshallIsland = 'FijiKamchatkaMarshallIsland';
    const Greenland = 'Greenland';
    const GreenwichMeanTimeDublinEdinburghLisbonLondon = 'GreenwichMeanTimeDublinEdinburghLisbonLondon';
    const GuadalajaraMexicoCityMonterrey = 'GuadalajaraMexicoCityMonterrey';
    const GuamPortMoresby = 'GuamPortMoresby';
    const HararePretoria = 'HararePretoria';
    const Hawaii = 'Hawaii';
    const HelsinkiKyivRigaSofiaTallinnVilnius = 'HelsinkiKyivRigaSofiaTallinnVilnius';
    const Hobart = 'Hobart';
    const IndianaEast = 'IndianaEast';
    const InternationalDatelineWest = 'InternationalDatelineWest';
    const IrkutskUlaanBataar = 'IrkutskUlaanBataar';
    const IslamabadKarachiTashkent = 'IslamabadKarachiTashkent';
    const Jerusalem = 'Jerusalem';
    const Kabul = 'Kabul';
    const Kathmandu = 'Kathmandu';
    const Krasnoyarsk = 'Krasnoyarsk';
    const KualaLumpurSingapore = 'KualaLumpurSingapore';
    const KuwaitRiyadh = 'KuwaitRiyadh';
    const MagadanSolomonIslandNewCaledonia = 'MagadanSolomonIslandNewCaledonia';
    const MidAtlantic = 'MidAtlantic';
    const MidwayIslandAndSamoa = 'MidwayIslandAndSamoa';
    const MoscowStPetersburgVolgograd = 'MoscowStPetersburgVolgograd';
    const MountainTimeUSCanada = 'MountainTimeUSCanada';
    const Nairobi = 'Nairobi';
    const Newfoundland = 'Newfoundland';
    const Nukualofa = 'Nukualofa';
    const OsakaSapporoTokyo = 'OsakaSapporoTokyo';
    const PacificTimeUSCanadaTijuana = 'PacificTimeUSCanadaTijuana';
    const Perth = 'Perth';
    const Rangoon = 'Rangoon';
    const Santiago = 'Santiago';
    const SarajevoSkopjeWarsawZagreb = 'SarajevoSkopjeWarsawZagreb';
    const Saskatchewan = 'Saskatchewan';
    const Seoul = 'Seoul';
    const SriJayawardenepura = 'SriJayawardenepura';
    const Taipei = 'Taipei';
    const Tehran = 'Tehran';
    const Vladivostok = 'Vladivostok';
    const WestCentralAfrica = 'WestCentralAfrica';
    const Yakutsk = 'Yakutsk';
}

/**
 * Defines the possible financial status values of a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728435(v=msads.90).aspx CustomerFinancialStatus Value Set
 */
final class CustomerFinancialStatus
{
    /** Not used. */
    const ProposalsOnly = 'ProposalsOnly';

    /** The customer is undergoing a credit check as part of the customer sign-up process. The service will not deliver the customer's ads until the credit check is complete. This status applies only to premium customers. */
    const PendingCreditCheck = 'PendingCreditCheck';

    /** The customer is in good standing. */
    const ClearFinancialStatus = 'ClearFinancialStatus';

    /** The customer is considered to be a credit risk. You cannot set the BillToCustomerId element of the Account data object to a customer that has this status. This status applies only to premium customers. */
    const SoldToOnly = 'SoldToOnly';

    /** One of the customer's accounts is past due. */
    const CreditHold = 'CreditHold';

    /** Not used. */
    const CreditWarning = 'CreditWarning';
}

/**
 * Defines the possible industry segments in which a customer operates.
 * @link http://msdn.microsoft.com/en-us/library/bb671992(v=msads.90).aspx Industry Value Set
 */
final class Industry
{
    /** Not applicable. */
    const NA = 'NA';

    /** The advertising agency sales house industry. */
    const AgencySalesHouse = 'AgencySalesHouse';

    /** The automotive industry. */
    const Automotive = 'Automotive';

    /** The consumer packaged goods industry. */
    const ConsumerPackagedGoods = 'ConsumerPackagedGoods';

    /** The education industry. */
    const Education = 'Education';

    /** The entertainment industry. */
    const Entertainment = 'Entertainment';

    /** The financial services industry. */
    const FinancialServices = 'FinancialServices';

    /** The food services industry. */
    const FoodServices = 'FoodServices';

    /** The gaming industry. */
    const Gaming = 'Gaming';

    /** The government, non-profit, or political industry. */
    const GovernmentNonprofitPolitical = 'GovernmentNonprofitPolitical';

    /** The healthcare industry. */
    const Healthcare = 'Healthcare';

    /** This value is reserved for internal use. */
    const Internal = 'Internal';

    /** The publishing and web media industry. */
    const PublishingAndWebMedia = 'PublishingAndWebMedia';

    /** The real estate industry. */
    const RealEstate = 'RealEstate';

    /** The retail industry. */
    const Retail = 'Retail';

    /** The services industry. */
    const Services = 'Services';

    /** The technology industry. */
    const Technology = 'Technology';

    /** The telecommunications industry. */
    const Telecommunications = 'Telecommunications';

    /** The travel and hospitality industry. */
    const TravelHospitality = 'TravelHospitality';

    /** An industry that is not listed. */
    const Other = 'Other';

    const Pharmaceuticals = 'Pharmaceuticals';
}

/**
 * For internal use only.
 * @link http://msdn.microsoft.com/en-us/library/ff728418(v=msads.90).aspx ServiceLevel Value Set
 */
final class ServiceLevel
{
    /** For internal use only. */
    const SelfServe = 'SelfServe';

    /** For internal use only. */
    const SelfServeTrusted = 'SelfServeTrusted';

    /** For internal use only. */
    const Premium = 'Premium';

    /** For internal use only. */
    const Internal = 'Internal';

    /** For internal use only. */
    const Select = 'Select';
}

/**
 * Defines the possible status values of a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728419(v=msads.90).aspx CustomerLifeCycleStatus Value Set
 */
final class CustomerLifeCycleStatus
{
    /** The customer is active. */
    const Active = 'Active';

    /** The customer is inactive, which means that the customer was deleted. */
    const Inactive = 'Inactive';
}

/**
 * Defines the possible formats of the body of an email message.
 * @link http://msdn.microsoft.com/en-us/library/bb671705(v=msads.90).aspx EmailFormat Value Set
 */
final class EmailFormat
{
    const Html = 'Html';
    const Text = 'Text';
}

/**
 * Defines a selection of locale values.
 * @link http://msdn.microsoft.com/en-us/library/bb671785(v=msads.90).aspx LCID Value Set
 */
final class LCID
{
    /** Arabic (Saudi Arabia) */
    const ArabicSaudiArabia = 'ArabicSaudiArabia';

    const ArabicAlgeria = 'ArabicAlgeria';

    const ArabicBahrain = 'ArabicBahrain';

    const ArabicEgypt = 'ArabicEgypt';

    const ArabicIraq = 'ArabicIraq';

    const ArabicJordan = 'ArabicJordan';

    const ArabicKuwait = 'ArabicKuwait';

    const ArabicLebanon = 'ArabicLebanon';

    const ArabicLibya = 'ArabicLibya';

    const ArabicMorocco = 'ArabicMorocco';

    const ArabicOman = 'ArabicOman';

    const ArabicQatar = 'ArabicQatar';

    const ArabicTunisia = 'ArabicTunisia';

    const ArabicUnitedArabEmirates = 'ArabicUnitedArabEmirates';

    const ArabicYemen = 'ArabicYemen';

    /** Chinese (Taiwan) */
    const ChineseTaiwan = 'ChineseTaiwan';

    /** Danish (Denmark) */
    const DanishDenmark = 'DanishDenmark';

    /** German (Germany) */
    const GermanGermany = 'GermanGermany';

    /** English (United States) */
    const EnglishUS = 'EnglishUS';

    /** Spanish (Spain) */
    const SpanishSpain = 'SpanishSpain';

    /** Finnish (Finland) */
    const FinnishFinland = 'FinnishFinland';

    /** French (France) */
    const FrenchFrance = 'FrenchFrance';

    /** Hebrew (Israel) */
    const HebrewIsrael = 'HebrewIsrael';

    /** Italian (Italy) */
    const ItalianItaly = 'ItalianItaly';

    /** Korean (Korea) */
    const KoreanKorea = 'KoreanKorea';

    /** Dutch (Netherlands) */
    const DutchNetherlands = 'DutchNetherlands';

    /** Norwegian (Norway) */
    const NorwegianNorway = 'NorwegianNorway';

    const PortugueseBrazil = 'PortugueseBrazil';

    /** Russian (Russia) */
    const RussianRussia = 'RussianRussia';

    /** Swedish (Sweden) */
    const SwedishSweden = 'SwedishSweden';

    /** English (Thailand) */
    const EnglishThailand = 'EnglishThailand';

    /** English (Indonesia) */
    const EnglishIndonesia = 'EnglishIndonesia';

    /** English (Vietnam) */
    const EnglishVietnam = 'EnglishVietnam';

    /** German (Switzerland) */
    const GermanSwitzerland = 'GermanSwitzerland';

    /** English (United Kingdom) */
    const EnglishUK = 'EnglishUK';

    /** Spanish (Mexico) */
    const SpanishMexico = 'SpanishMexico';

    /** Chinese (Hong Kong) */
    const ChineseHongKong = 'ChineseHongKong';

    /** German (Austria) */
    const GermanAustria = 'GermanAustria';

    /** English (Australia) */
    const EnglishAustralia = 'EnglishAustralia';

    /** French (Canada) */
    const FrenchCanada = 'FrenchCanada';

    /** English (Canada) */
    const EnglishCanada = 'EnglishCanada';

    /** English (New Zealand) */
    const EnglishNewZealand = 'EnglishNewZealand';

    const EnglishIreland = 'EnglishIreland';

    /** Spanish (Venezuela) */
    const SpanishVenezuela = 'SpanishVenezuela';

    /** Spanish (Colombia) */
    const SpanishColombia = 'SpanishColombia';

    /** Spanish (Peru) */
    const SpanishPeru = 'SpanishPeru';

    /** Spanish (Argentina) */
    const SpanishArgentina = 'SpanishArgentina';

    /** English (Philippines) */
    const EnglishPhilippines = 'EnglishPhilippines';

    /** Spanish (Chile) */
    const SpanishChile = 'SpanishChile';

    /** English (India) */
    const EnglishIndia = 'EnglishIndia';

    /** English (Malaysia) */
    const EnglishMalaysia = 'EnglishMalaysia';

    /** English (Singapore) */
    const EnglishSingapore = 'EnglishSingapore';
}

/**
 * Defines the possible secret questions that users can choose from to help them recall their password.
 * @link http://msdn.microsoft.com/en-us/library/bb671980(v=msads.90).aspx SecretQuestion Value Set
 */
final class SecretQuestion
{
    /** Do not specify this value. If you specify this value, adding or updating the user will fail. */
    const None = 'None';

    /** The name of your favorite pet. */
    const FavoritePetsName = 'FavoritePetsName';

    /** The title of your favorite movie. */
    const FavoriteMovie = 'FavoriteMovie';

    /** An anniversary date. */
    const Anniversary = 'Anniversary';

    /** The middle name of your father. */
    const FatherMiddleName = 'FatherMiddleName';

    /** The middle name of your spouse. */
    const SpouseMiddleName = 'SpouseMiddleName';

    /** The middle name of your first child. */
    const FirstChildMiddleName = 'FirstChildMiddleName';

    /** The name of the high school that you attended. */
    const HighSchoolName = 'HighSchoolName';

    /** The name of your favorite teacher. */
    const FavoriteTeacherName = 'FavoriteTeacherName';

    /** The name of your favorite sports team. */
    const FavoriteSportsTeam = 'FavoriteSportsTeam';
}

/**
 * Defines the possible status values of a user.
 * @link http://msdn.microsoft.com/en-us/library/ee704179(v=msads.90).aspx UserLifeCycleStatus Value Set
 */
final class UserLifeCycleStatus
{
    /** The user is a new user who has not been activated. The user is sent notification about how to activate the account. After the user activates the account, the status changes to Active. */
    const Pending = 'Pending';

    /** The user is active. */
    const Active = 'Active';

    /** The user was disabled by the system. */
    const Inactive = 'Inactive';

    /** The user was deleted by using the DeleteUser operation. */
    const Deleted = 'Deleted';
}

final class PredicateOperator
{
    const Equals = 'Equals';
    const NotEquals = 'NotEquals';
    const Contains = 'Contains';
}

/**
 * Defines the field order of results for the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452058(v=msads.90).aspx OrderByField Value Set
 */
final class OrderByField
{
    const Id = 'Id';
    const Name = 'Name';
    const Number = 'Number';
}

/**
 * Defines the ascending or descending sort order of results for the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452061(v=msads.90).aspx SortOrder Value Set
 */
final class SortOrder
{
    const Ascending = 'Ascending';
    const Descending = 'Descending';
}

final class TaxType
{
    const Personal = 'Personal';
    const Business = 'Business';
}

/**
 * Defines an account. This is the base object from which the advertising and publishing accounts derive.
 * @link http://msdn.microsoft.com/en-us/library/bb671588(v=msads.90).aspx Account Data Object
 */
class Account
{
    /**
     * The type of the account. For example, whether the account is an advertiser or publisher account.
     * @var AccountType
     */
    public $AccountType;

    /**
     * The identifier of the customer that is billed for the charges that the account generates. This is either the reseller that manages this account on behalf of the owner or the identifier of the customer that owns the account.
     * @var long
     */
    public $BillToCustomerId;

    /**
     * The code that identifies the country/region in which the account operates. The service uses the country/region information for billing purposes.
     * @var string
     */
    public $CountryCode;

    /**
     * The type of currency that is used to settle the account. The service uses the currency information for billing purposes.
     * @var CurrencyType
     */
    public $CurrencyType;

    /**
     * The financial status of the account. For example, the status can indicate whether the account is in good standing or is past due.
     * @var AccountFinancialStatus
     */
    public $AccountFinancialStatus;

    /**
     * The system generated identifier of the account.
     * @var long
     */
    public $Id;

    /**
     * The language used to render the invoice (if you use an invoice as your payment method).
     * @var LanguageType
     */
    public $Language;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The identifier of the last user to update the account's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that the account was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The name of the account. The name can contain a maximum of 100 characters and must be unique within the customer.
     * @var string
     */
    public $Name;

    /**
     * The system generated account number that is used to identify the account in the Bing Ads web application. The account number has the form xxxxxxxx, where xxxxxxxx is a series of any eight alphanumeric characters.
     * @var string
     */
    public $Number;

    /**
     * The identifier of the customer that owns the account.
     * @var long
     */
    public $ParentCustomerId;

    /**
     * The identifier of the payment instrument to use to settle the account.
     * @var long
     */
    public $PaymentMethodId;

    /**
     * The type of payment instrument to use to settle the account. You do not have to set this value because the type is determined by the payment instrument that you specify in the PaymentMethodId element.
     * @var PaymentMethodType
     */
    public $PaymentMethodType;

    /**
     * The identifier of the account manager who is primarily responsible for managing this account.
     * @var long
     */
    public $PrimaryUserId;

    /**
     * The status of the account. You cannot set the status of the account.
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;

    /**
     * The time-stamp value that the system uses internally to reconcile updates when you call the UpdateAccount or DeleteAccount operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * The default time-zone value to use for campaigns in this account.
     * @var TimeZoneType
     */
    public $TimeZone;

    /**
     * A flag value that indicates who paused the account. The following are the possible values:
     * @var unsignedByte
     */
    public $PauseReason;
}

/**
 * Defines an account identification object that contains information that identifies an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728414(v=msads.90).aspx AccountInfo Data Object
 */
final class AccountInfo
{
    /**
     * The system generated identifier of the account.
     * @var long
     */
    public $Id;

    /**
     * The name of the account.
     * @var string
     */
    public $Name;

    /**
     * The account number.
     * @var string
     */
    public $Number;

    /**
     * The status of the account.
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;

    /**
     * A flag value that indicates who paused the account. The following are the possible values:
     * @var unsignedByte
     */
    public $PauseReason;
}

/**
 * Defines an object that contains information that identifies an account and the customer that manages or owns the account.
 * @link http://msdn.microsoft.com/en-us/library/hh420973(v=msads.90).aspx AccountInfoWithCustomerData Data Object
 */
final class AccountInfoWithCustomerData
{
    /**
     * The system generated identifier of the customer that manages or owns the account (see Remarks).
     * @var long
     */
    public $CustomerId;

    /**
     * The name of the customer that manages or owns the account.
     * @var string
     */
    public $CustomerName;

    /**
     * The system generated identifier of the account.
     * @var long
     */
    public $AccountId;

    /**
     * The name of the account.
     * @var string
     */
    public $AccountName;

    /**
     * The system generated account number that is used to identify the account in the Bing Ads web application. The account number has the form X nnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $AccountNumber;

    /**
     * The status of the account.
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;

    /**
     * A flag value that indicates who paused the account. The following are the possible values:
     * @var unsignedByte
     */
    public $PauseReason;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169116(v=msads.90).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169113(v=msads.90).aspx ApplicationFault Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169115(v=msads.90).aspx AdApiFaultDetail Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/bb671505(v=msads.90).aspx Address Data Object
 */
final class Address
{
    /**
     * The city, which can contain a maximum of 35 characters.
     * @var string
     */
    public $City;

    /**
     * The country/region code. For possible values, see Geographical Location Codes.
     * @var string
     */
    public $CountryCode;

    /**
     * The system generated identifier of the address object.
     * @var long
     */
    public $Id;

    /**
     * The first line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line1;

    /**
     * The second line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line2;

    /**
     * The third line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line3;

    /**
     * The fourth line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line4;

    /**
     * The Postal or ZIP Code, which can contain a maximum of 10 characters.
     * @var string
     */
    public $PostalCode;

    /**
     * The state or province. This element is required for countries that define sub geographies, but should be set to null for countries that do not define sub geographies, such as Singapore.
     * @var string
     */
    public $StateOrProvince;

    /**
     * @var base64Binary
     */
    public $TimeStamp;
}

/**
 * Defines an advertiser account.
 * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.90).aspx AdvertiserAccount Data Object
 */
final class AdvertiserAccount extends Account
{
    /**
     * The name of the person to contact regarding this account. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $AgencyContactName;

    /**
     * The identifier of the agency that manages an account on behalf of the owner of that account.
     * @var long
     */
    public $AgencyCustomerId;

    /**
     * The identifier of the third party that is responsible for a sales lead.
     * @var long
     */
    public $SalesHouseCustomerId;

    /**
     * For internal use only.
     * @var string
     */
    public $TaxId;

    /**
     * For internal use only.
     */
    public $TaxType;

    /**
     * The identifier of a backup payment instrument to use to settle the account. When signing up a customer, set this element to NULL. The service picks up the payment method identifier associated with the reseller's invoice automatically.
     * @var long
     */
    public $BackUpPaymentInstrumentId;

    /**
     * A customer specified amount for settling against the selected payment instrument.
     * @var decimal
     */
    public $BillingThresholdAmount;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169117(v=msads.90).aspx ApiFault Data Object
 */
final class ApiFault extends ApplicationFault
{
    /**
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines the contact information for a user.
 * @link http://msdn.microsoft.com/en-us/library/bb671639(v=msads.90).aspx ContactInfo Data Object
 */
final class ContactInfo
{
    /**
     * The address of the user.
     * @var Address
     */
    public $Address;

    /**
     * A value that determines whether the user should be contacted by telephone. If true, the telephone number specified in the Phone1 element is used to contact the user.
     * @var boolean
     */
    public $ContactByPhone;

    /**
     * A value that determines whether the user should be contacted by postal mail. If true, correspondence is sent to the address specified in the Address element.
     * @var boolean
     */
    public $ContactByPostalMail;

    /**
     * The email address of the user. The address can contain a maximum of 100 characters.
     * @var string
     */
    public $Email;

    /**
     * The format of the body of an email message to use when correspondence is sent to the user (this does not apply to the activation notification email message).
     * @var EmailFormat
     */
    public $EmailFormat;

    /**
     * The fax telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Fax;

    /**
     * The home telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $HomePhone;

    /**
     * The system generated identifier of the object.
     * @var long
     */
    public $Id;

    /**
     * The mobile telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Mobile;

    /**
     * The primary telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Phone1;

    /**
     * An alternate telephone number for the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Phone2;
}

/**
 * Defines a customer.
 * @link http://msdn.microsoft.com/en-us/library/bb671875(v=msads.90).aspx Customer Data Object
 */
final class Customer
{
    /**
     * The customer's business address.
     * @var Address
     */
    public $CustomerAddress;

    /**
     * The financial status of the customer. For example, the status indicates whether the customer is in good standing or one or more of the accounts are past due.
     * @var CustomerFinancialStatus
     */
    public $CustomerFinancialStatus;

    /**
     * The system generated customer identifier.
     * @var long
     */
    public $Id;

    /**
     * The primary business segment of the customer (for example, automotive, food, or entertainment).
     * @var Industry
     */
    public $Industry;

    /**
     * The identifier of the last user to update the customer's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that the customer information was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The primary country where the customer operates. For possible values, see Geographical Location Codes.
     * @var string
     */
    public $MarketCountry;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The primary language that the customer uses.
     * @var LanguageType
     */
    public $MarketLanguage;

    /**
     * The name of the customer. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * For internal use only.
     * @var ServiceLevel
     */
    public $ServiceLevel;

    /**
     * The status of the customer. When you create the customer, the status is set to Active. You cannot change the status.
     * @var CustomerLifeCycleStatus
     */
    public $CustomerLifeCycleStatus;

    /**
     * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateCustomer or DeleteCustomer operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * A system-generated customer number that is used in the Bing Ads web application. The customer number is of the form, C nnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $Number;
}

/**
 * Defines a customer identification object that contains information that identifies a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.90).aspx CustomerInfo Data Object
 */
final class CustomerInfo
{
    /**
     * The system generated identifier of the customer.
     * @var long
     */
    public $Id;

    /**
     * The name of the customer.
     * @var string
     */
    public $Name;
}

/**
 * Defines a date range object.
 * @link http://msdn.microsoft.com/en-us/library/dn452056(v=msads.90).aspx DateRange Data Object
 */
final class DateRange
{
    /**
     * The minimum date.
     * @var string
     */
    public $MinDate;

    /**
     * The maximum date.
     * @var string
     */
    public $MaxDate;
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169112(v=msads.90).aspx OperationError Data Object
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
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines an order for the list of customers returned using the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452057(v=msads.90).aspx OrderBy Data Object
 */
final class OrderBy
{
    /**
     * Determines the field to order the results. For example order the results by Name.
     * @var OrderByField
     */
    public $Field;

    /**
     * Determines whether the results are ascending or descending.
     * @var SortOrder
     */
    public $Order;
}

/**
 * Defines a paging object.
 * @link http://msdn.microsoft.com/en-us/library/dn452059(v=msads.90).aspx Paging Data Object
 */
final class Paging
{
    /**
     * The results page index.
     * @var int
     */
    public $Index;

    /**
     * The page size and the number of results to return in the specified page.
     * @var int
     */
    public $Size;
}

/**
 * Defines the name of a user.
 * @link http://msdn.microsoft.com/en-us/library/ff728429(v=msads.90).aspx PersonName Data Object
 */
final class PersonName
{
    /**
     * The first name of the user. The first name is limited to 100 characters.
     * @var string
     */
    public $FirstName;

    /**
     * The last name of the user. The last name is limited to 100 characters.
     * @var string
     */
    public $LastName;

    /**
     * The middle initial of the user. The middle initial is limited to one character.
     * @var string
     */
    public $MiddleInitial;
}

final class PilotFeature
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var string[]
     */
    public $Countries;
}

/**
 * Defines a predicate for the list of customers requested using the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452060(v=msads.90).aspx Predicate Data Object
 */
final class Predicate
{
    /**
     * The account or customer element used to filter the results of the SearchCustomers operation.
     * @var string
     */
    public $Field;

    /**
     * Defines the relationship between the field and the value.
     */
    public $Operator;

    /**
     * The string to search in the specified field.
     * @var string
     */
    public $Value;
}

/**
 * Defines a user.
 * @link http://msdn.microsoft.com/en-us/library/bb671824(v=msads.90).aspx User Data Object
 */
final class User
{
    /**
     * The user's contact information.
     * @var ContactInfo
     */
    public $ContactInfo;

    /**
     * Confirms that the customer to whom this user belongs is an advertiser.
     * @var ApplicationType
     */
    public $CustomerAppScope;

    /**
     * The identifier of the customer to whom this user belongs.
     * @var long
     */
    public $CustomerId;

    /**
     * The system generated identifier of the user.
     * @var long
     */
    public $Id;

    /**
     * The user's job title. The title can contain a maximum of 50 characters.
     * @var string
     */
    public $JobTitle;

    /**
     * The identifier of the last user to update the user's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that that the user information was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The locale to use when sending correspondence to the user by email or postal mail. The default is EnglishUS.
     * @var LCID
     */
    public $Lcid;

    /**
     * The name of the user.
     * @var PersonName
     */
    public $Name;

    /**
     * The user's Bing Ads managed sign-in password.
     * @var string
     */
    public $Password;

    /**
     * The answer to the secret question that is specified in the SecretQuestion element. The answer must contain a minimum of five characters and a maximum of 64 characters.
     * @var string
     */
    public $SecretAnswer;

    /**
     * A question from a list of predefined questions that the user selects to use as his or her secret question. The SecretAnswer element contains the user's answer to the question. The secret question and answer are used to validate the user in case the user forgets his or her password, and requests it.
     * @var SecretQuestion
     */
    public $SecretQuestion;

    /**
     * The status of the user.
     * @var UserLifeCycleStatus
     */
    public $UserLifeCycleStatus;

    /**
     * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateUser or DeleteUser operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * The user's Bing Ads managed sign-in user name. The name is case-insensitive.
     * @var string
     */
    public $UserName;

    /**
     * If true, the user can be authenticated using a Microsoft Account. For more information, see Managing User Authentication with OAuth.
     * @var boolean
     */
    public $IsMigratedToMicrosoftAccount;
}

/**
 * Defines a user identification object that contains information that identifies a user.
 * @link http://msdn.microsoft.com/en-us/library/ff728438(v=msads.90).aspx UserInfo Data Object
 */
final class UserInfo
{
    /**
     * The system generated identifier of the user.
     * @var long
     */
    public $Id;

    /**
     * The logon user name of the user.
     * @var string
     */
    public $UserName;
}

/**
 * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfoRequest Request Object
 */
final class GetAccountsInfoRequest
{
    /**
     * The identifier of the customer who owns the accounts to get. If not set, the user's credentials are used to determine the customer.
     * @var long
     */
    public $CustomerId;

    /**
     * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers. To return all accounts (those that belong to the customer and those that the customer manages), set this element to false; otherwise, set to true to return account information for only the specified customer. The default is false.
     * @var boolean
     */
    public $OnlyParentAccounts;
}

/**
 * Response object for the GetAccountsInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfoResponse Response Object
 */
final class GetAccountsInfoResponse
{
    /**
     * An array of AccountInfo objects that identifies the list of accounts that the customer owns.
     * @var AccountInfo[]
     */
    public $AccountsInfo;
}

/**
 * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
 * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccountsRequest Request Object
 */
final class FindAccountsRequest
{
    /**
     * The identifier of the customer whose accounts you want to get.
     * @var long
     */
    public $CustomerId;

    /**
     * The criteria to use to filter the list of accounts. You can specify either an account name or an account number. If your filter value is of the form, X nnnnn, where nnnnn is a series of digits, the operation filters by account number.
     * @var string
     */
    public $AccountFilter;

    /**
     * A nonzero positive integer that specifies the number of accounts to return in the result. You must specify a value from 1 through 5,000.
     * @var int
     */
    public $TopN;

    /**
     * A value that determines whether to return advertiser accounts or publisher accounts. If you do not specify the scope, the list may include both types of accounts.
     * @var ApplicationType
     */
    public $ApplicationScope;
}

/**
 * Response object for the FindAccounts service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccountsResponse Response Object
 */
final class FindAccountsResponse
{
    /**
     * A list of AccountInfo objects of the accounts that match the specified filter criteria.
     * @var AccountInfo[]
     */
    public $AccountsInfo;
}

final class AddAccountRequest
{
    /**
     * @var Account
     */
    public $Account;
}

final class AddAccountResponse
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string
     */
    public $AccountNumber;

    /**
     * @var dateTime
     */
    public $CreateTime;
}

/**
 * Updates the details of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn451286(v=msads.90).aspx UpdateAccountRequest Request Object
 */
final class UpdateAccountRequest
{
    /**
     * An AdvertiserAccount object that contains the updated account information.
     * @var Account
     */
    public $Account;
}

/**
 * Response object for the UpdateAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451286(v=msads.90).aspx UpdateAccountResponse Response Object
 */
final class UpdateAccountResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

/**
 * Gets the details of a customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomerRequest Request Object
 */
final class GetCustomerRequest
{
    /**
     * The identifier of the customer whose information you want to get.
     * @var long
     */
    public $CustomerId;
}

/**
 * Response object for the GetCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomerResponse Response Object
 */
final class GetCustomerResponse
{
    /**
     * A Customer object that contains information about the customer.
     * @var Customer
     */
    public $Customer;
}

/**
 * Updates the details of the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomerRequest Request Object
 */
final class UpdateCustomerRequest
{
    /**
     * A customer object that contains the updated customer information.
     * @var Customer
     */
    public $Customer;
}

/**
 * Response object for the UpdateCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomerResponse Response Object
 */
final class UpdateCustomerResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

/**
 * Signs up a customer with Bing Ads.
 * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomerRequest Request Object
 */
final class SignupCustomerRequest
{
    /**
     * A Customer object that specifies the details of the customer that you are adding.
     * @var Customer
     */
    public $Customer;

    /**
     * An Account object that specifies the details of the customer's primary account.
     * @var Account
     */
    public $Account;

    /**
     * The customer identifier of the reseller that will manage this customer.
     * @var long
     */
    public $ParentCustomerId;

    /**
     * Determines whether the customer is an advertiser or publisher. The default is Advertiser.
     * @var ApplicationType
     */
    public $ApplicationScope;
}

/**
 * Response object for the SignupCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomerResponse Response Object
 */
final class SignupCustomerResponse
{
    /**
     * @var long
     */
    public $CustomerId;

    /**
     * @var string
     */
    public $CustomerNumber;

    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string
     */
    public $AccountNumber;

    /**
     * @var dateTime
     */
    public $CreateTime;
}

/**
 * Gets the details of an account.
 * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccountRequest Request Object
 */
final class GetAccountRequest
{
    /**
     * The identifier of the account to get.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccountResponse Response Object
 */
final class GetAccountResponse
{
    /**
     * An account object that contains information about the account, such as payment method, account type, and parent customer.
     * @var Account
     */
    public $Account;
}

/**
 * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.The list that this operation returns is based on the customers that the user that you specify in the UserName header element of the request, has access to. If the user is a member of the reseller's user group, the list will contain all customers that the reseller has signed up or a subset of customers if the user is limited to a subset of customers by a user role.
 * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfoRequest Request Object
 */
final class GetCustomersInfoRequest
{
    /**
     * A partial or full name of the customers that you want to get. The operation includes the customer in the result if the customer's name begins with the specified filter name. If you do not want to filter by customer name, set this element to an empty string.
     * @var string
     */
    public $CustomerNameFilter;

    /**
     * A nonzero positive integer that specifies the number of customers to return in the result.
     * @var int
     */
    public $TopN;

    /**
     * A value that determines whether to return results for advertising customers or publishing customers. If you do not specify the scope, the list may include both types of customers.
     * @var ApplicationType
     */
    public $ApplicationScope;
}

/**
 * Response object for the GetCustomersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfoResponse Response Object
 */
final class GetCustomersInfoResponse
{
    /**
     * An array of CustomerInfo objects that identifies the list of customers that meet the filter criteria.
     * @var CustomerInfo[]
     */
    public $CustomersInfo;
}

/**
 * Deletes an account.After deleting the account it will be searchable and show as inactive in the Bing Ads web application. You may or may not choose to surface inactive accounts in your application.
 * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccountRequest Request Object
 */
final class DeleteAccountRequest
{
    /**
     * The identifier of the account to delete.
     * @var long
     */
    public $AccountId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetAccount operation to get the time-stamp value. The delete operation fails if the account object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}

/**
 * Response object for the DeleteAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccountResponse Response Object
 */
final class DeleteAccountResponse
{
}

/**
 * Deletes a customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomerRequest Request Object
 */
final class DeleteCustomerRequest
{
    /**
     * The identifier of the customer to delete.
     * @var long
     */
    public $CustomerId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetCustomer operation to get the time-stamp value. The delete operation fails if the customer object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}

/**
 * Response object for the DeleteCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomerResponse Response Object
 */
final class DeleteCustomerResponse
{
}

/**
 * Updates the details of the specified user.
 * @link http://msdn.microsoft.com/en-us/library/dn451277(v=msads.90).aspx UpdateUserRequest Request Object
 */
final class UpdateUserRequest
{
    /**
     * The user object that contains the updated user information.
     * @var User
     */
    public $User;
}

/**
 * Response object for the UpdateUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451277(v=msads.90).aspx UpdateUserResponse Response Object
 */
final class UpdateUserResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

/**
 * Updates the roles of the specified user.
 * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.90).aspx UpdateUserRolesRequest Request Object
 */
final class UpdateUserRolesRequest
{
    /**
     * The identifier of the customer to which the user belongs.
     * @var long
     */
    public $CustomerId;

    /**
     * The identifier of the user whose role you want to update.
     * @var long
     */
    public $UserId;

    /**
     * The identifier of the role to which the values specified in the NewAccounts or NewCustomers element applies to, if set.
     * @var int
     */
    public $NewRoleId;

    /**
     * @var long[]
     */
    public $NewAccountIds;

    /**
     * @var long[]
     */
    public $NewCustomerIds;

    /**
     * The identifier of the role to which the values specified in the DeleteAccounts or DeleteCustomers element applies, if set. You also use this element if you are changing the role of the user from an account role to a customer role, or from a customer role to an account role.
     * @var int
     */
    public $DeleteRoleId;

    /**
     * @var long[]
     */
    public $DeleteAccountIds;

    /**
     * @var long[]
     */
    public $DeleteCustomerIds;
}

/**
 * Response object for the UpdateUserRoles service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.90).aspx UpdateUserRolesResponse Response Object
 */
final class UpdateUserRolesResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

/**
 * Gets the details of a user.
 * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUserRequest Request Object
 */
final class GetUserRequest
{
    /**
     * The identifier of the user to get.
     * @var long
     */
    public $UserId;
}

/**
 * Response object for the GetUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUserResponse Response Object
 */
final class GetUserResponse
{
    /**
     * A user object that contains information about the user.
     * @var User
     */
    public $User;

    /**
     * An array of roles that determines the permissions that the user has to manage the customer or account data. To determine whether a role is an account role or customer role, see UserRole. A user can have account roles or customer roles, but not both. Any role that the operation returns that is not documented in the UserRole value set is considered for internal use only.
     * @var int[]
     */
    public $Roles;

    /**
     * An array of identifiers of the accounts to which the user has access permissions. If the Roles element contains an account role and the Accounts element contains a 0 (zero)-length array, it indicates that the user has access permissions to all of the customer's accounts.
     * @var long[]
     */
    public $Accounts;

    /**
     * An array of identifiers of the customers to which the user has access permissions. If the Roles element contains a customer role and the Customers element contains a 0 (zero)-length array, it indicates that the user has access permissions to all customers.
     * @var long[]
     */
    public $Customers;
}

final class GetCurrentUserRequest
{
}

final class GetCurrentUserResponse
{
    /**
     * @var User
     */
    public $User;
}

/**
 * Deletes a user.
 * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUserRequest Request Object
 */
final class DeleteUserRequest
{
    /**
     * The identifier of the user to delete.
     * @var long
     */
    public $UserId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetUser operation to get the time-stamp value. The delete operation fails if the user object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}

/**
 * Response object for the DeleteUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUserResponse Response Object
 */
final class DeleteUserResponse
{
}

/**
 * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
 * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfoRequest Request Object
 */
final class GetUsersInfoRequest
{
    /**
     * The identifier of the customer to which the users belong.
     * @var long
     */
    public $CustomerId;

    /**
     * The status value that the operation uses to filter the list of users that it returns. The operation returns only those users with the specified status.
     * @var UserLifeCycleStatus
     */
    public $StatusFilter;
}

/**
 * Response object for the GetUsersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfoResponse Response Object
 */
final class GetUsersInfoResponse
{
    /**
     * A list of UserInfo objects that identifies the list of users who meet the filter criteria.
     * @var UserInfo[]
     */
    public $UsersInfo;
}

/**
 * Gets a list of the pilot programs in which the specified customer participates.
 * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeaturesRequest Request Object
 */
final class GetCustomerPilotFeaturesRequest
{
    /**
     * The identifier of the customer whose list of pilot programs you want to get.
     * @var long
     */
    public $CustomerId;
}

/**
 * Response object for the GetCustomerPilotFeatures service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeaturesResponse Response Object
 */
final class GetCustomerPilotFeaturesResponse
{
    /**
     * A list of integers that identifies the pilot programs in which the customer participates. For a list of possible pilot program values, contact your account manager.
     * @var int[]
     */
    public $FeaturePilotFlags;
}

final class GetPilotFeaturesCountriesRequest
{
}

final class GetPilotFeaturesCountriesResponse
{
    public $PilotFeatures;
}

final class GetAccessibleCustomerRequest
{
    /**
     * @var long
     */
    public $CustomerId;
}

final class GetAccessibleCustomerResponse
{
    /**
     * @var Customer
     */
    public $AccessibleCustomer;

    /**
     * @var int
     */
    public $ValidFields;
}

/**
 * Gets a list of the accounts and customers that match the specified filter criteria.
 * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfoRequest Request Object
 */
final class FindAccountsOrCustomersInfoRequest
{
    /**
     * The criteria to use to filter the list of accounts and customers. You can specify either an account name, account number, or customer name.
     * @var string
     */
    public $Filter;

    /**
     * A nonzero positive integer that specifies the number of accounts to return in the result. You must specify a value from 1 through 5,000.
     * @var int
     */
    public $TopN;

    /**
     * A value that determines whether to return advertiser accounts or publisher accounts. If you do not specify the scope, the list may include both types of accounts.
     * @var ApplicationType
     */
    public $ApplicationScope;
}

/**
 * Response object for the FindAccountsOrCustomersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfoResponse Response Object
 */
final class FindAccountsOrCustomersInfoResponse
{
    /**
     * A list of AccountInfoWithCustomerData objects of the accounts and customers that match the specified filter criteria.
     * @var AccountInfoWithCustomerData[]
     */
    public $AccountInfoWithCustomerData;
}

final class UpgradeCustomerToAgencyRequest
{
    /**
     * @var long
     */
    public $CustomerId;
}

final class UpgradeCustomerToAgencyResponse
{
}

final class AddPrepayAccountRequest
{
    /**
     * @var Account
     */
    public $Account;
}

final class AddPrepayAccountResponse
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string
     */
    public $AccountNumber;

    /**
     * @var dateTime
     */
    public $CreateTime;
}

final class UpdatePrepayAccountRequest
{
    /**
     * @var Account
     */
    public $Account;
}

final class UpdatePrepayAccountResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

final class MapCustomerIdToExternalCustomerIdRequest
{
    /**
     * @var long
     */
    public $CustomerId;

    /**
     * @var string
     */
    public $ExternalCustomerId;
}

final class MapCustomerIdToExternalCustomerIdResponse
{
}

final class MapAccountIdToExternalAccountIdsRequest
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string[]
     */
    public $ExternalAccountIds;
}

final class MapAccountIdToExternalAccountIdsResponse
{
}

/**
 * Searches for customers that match a specified criteria.
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomersRequest Request Object
 */
final class SearchCustomersRequest
{
    /**
     * A value that determines whether to return results for advertising customers or publishing customers. If you do not specify the scope, the list may include both types of customers.
     * @var ApplicationType
     */
    public $ApplicationScope;

    /**
     * Determines the request conditions. You should not specify more than three Predicate objects.
     * @var Predicate[]
     */
    public $Predicates;

    /**
     * Determines the minimum and maximum customer creation date range.
     * @var DateRange
     */
    public $DateRange;

    /**
     * Determines the order of results.
     * @var OrderBy[]
     */
    public $Ordering;

    /**
     * Determines the index and size of results per page.
     * @var Paging
     */
    public $PageInfo;
}

/**
 * Response object for the SearchCustomers service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomersResponse Response Object
 */
final class SearchCustomersResponse
{
    /**
     * A list of customers that meet the specified criteria.
     * @var Customer[]
     */
    public $Customers;
}


?>
