<?php

namespace BingAds\Bulk;

/**
 * Defines the file formats for a download request.
 * @link http://msdn.microsoft.com/en-us/library/jj919219(v=msads.80).aspx DownloadFileType Value Set
 */
final class DownloadFileType
{
    /** The file format is XML. For a description of the XML, see Bulk Service Schema. */
    const Xml = 'Xml';

    /** Not supported. */
    const Csv = 'Csv';
}
