Bing Ads API Version 9 in PHP
=============================

This download includes PHP class files for Bing Ads web services and supports composer autoloading.

Building the Sample
===================

For example, after downloading the PHP file that contains the reporting classes, you can use the following snippet to include the reporting classes in your application.

```PHP
// Specify the BingAds\Reporting objects that will be used.
use BingAds\Reporting\SubmitGenerateReportRequest;
use BingAds\Reporting\KeywordPerformanceReportRequest;
use BingAds\Reporting\ReportFormat;
use BingAds\Reporting\ReportAggregation;
use BingAds\Reporting\AccountThroughAdGroupReportScope;
use BingAds\Reporting\CampaignReportScope;
use BingAds\Reporting\ReportTime;
use BingAds\Reporting\ReportTimePeriod;
use BingAds\Reporting\KeywordPerformanceReportFilter;
use BingAds\Reporting\DeviceTypeReportFilter;
use BingAds\Reporting\KeywordPerformanceReportColumn;
use BingAds\Reporting\PollGenerateReportRequest;
use BingAds\Reporting\ReportRequestStatusType;
use BingAds\Reporting\KeywordPerformanceReportSort;
use BingAds\Reporting\SortOrder;
 
// Specify the BingAds\Proxy object that will be used.
use BingAds\Proxy\ClientProxy;

$report = new AccountPerformanceReportRequest(); 
$report->Format = ReportFormat::Xml; 
$report->ReportName = 'My Account Performance Report'; 
$report->ReturnOnlyCompleteData = false; 
$report->Aggregation = ReportAggregation::Yearly;
```

Source Code Files
=================

* AdIntelligenceClasses.php - Contains the classes for the Ad Intelligence service.
* BulkClasses.php - Contains the classes for the Bulk service.
* CampaignManagementClasses.php - Contains the classes for the Campaign Management service.
* ClientProxy.php - Contains the proxy class to set the service headers and make a service call.
* CustomerBillingClasses.php - Contains the classes for the Customer Billing service.
* CustomerManagementClasses.php - Contains the classes for the Customer Management service.
* OptimizerClasses.php - Contains the classes for the Optimizer service.
* ReportingClasses.php - Contians classes for the Reporting service.
  
More Information
================

For information about updates to Bing Ads Version 9 web services, see Release Notes here on MSDN:
http://msdn.microsoft.com/en-US/library/bing-ads-overview-release-notes(v=msads.90).aspx

Downloaded from: http://code.msdn.microsoft.com/PHP-Classes-for-Bing-Ads-c9762281
