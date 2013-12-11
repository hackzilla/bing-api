<?php

namespace BingAds\CustomerBilling;

/**
 * Defines the possible formats in which to generate the billing document.
 * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.90).aspx DataType Value Set
 */
final class DataType
{
    /** Use XML format. */
    const Xml = 'Xml';

    /** Use PDF format. */
    const Pdf = 'Pdf';
}
