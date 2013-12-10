Bing Ads API Version 8 in PHP
=============================

This download includes PHP sample files for Bing Ads web services.

Introduction
============

This download includes the following PHP sample files for Bing Ads web services.

* DownloadCampaigns (Bulk service)
* GetEstimatedBid (Ad Intelligence service)
* GetHeaders (Customer Management service)
* GetMonthlySpend (Customer Billing service)
* KeywordPerformance (Reporting service)
* Keywords (Campaign Management service)
* Notifications (Notification service)
* OptimizeBids (Optimizer service)
* OptimizeBudget (Optimizer service)

Building the Sample
===================

The samples require that you update some of the following elements, and then build a project.

* $username
* $password
* $token
* $customerId
* $accountId
* $campaignId
* $campaignIds
* $adgroupId 

Source Code Files
=================

* DownloadCampaigns.php - Demonstrates how to download the entities of one or more campaigns in the background.
* GetEstimatedBid.php - Demonstrates how to get the minimum suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results..
* GetHeaders.php - Demonstrates how to get your customer and account identifiers..
* GetMonthlySpend.php - Demonstrates how to get the monthly spend to date for the specified account.
* KeywordPerformance.php - Demonstrates how to request and retrieve a keyword performance report.
* Keywords.php - Demonstrates how to reate a keyword, set the keyword's destination URL, and get the keyword and destination URL. If the keyword is disapproved, this sample also shows how to get the reasons of why it failed editorial review.
* Notifications.php - Demonstrates how to get top notifications of the specified type, which have not yet been retrieved.
* OptimizeBids.php - Demonstrates how to get the bid opportunities which have not expired for the specified account.
* OptimizeBudgets.php - Demonstrates how to get the budgetopportunities which have not expired for the specified account.

More Information
================

For information about updates to Bing Ads web services, see Release Notes here on MSDN:
http://msdn.microsoft.com/en-US/library/bing-ads-overview-release-notes(v=msads.80).aspx

Downloaded from: http://code.msdn.microsoft.com/Bing-Ads-API-PHP-b242082d
