<?php

namespace BingAds\Reporting;

/**
 * Defines the possible components of a rich ad that you can use to filter the report data. The values are also used as the data values for the ComponentType column in the rich ad component performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh180146(v=msads.90).aspx ComponentTypeFilter Value Set
 */
final class ComponentTypeFilter
{
    /** The title of the ad that contains a hyperlink to a destination URL. */
    const Basic = 'Basic';

    /** A hyperlink to a webpage inside the destination website. */
    const Deeplink = 'Deeplink';

    /** An entry form on the ad that gathers data from the user. Clicking the button on the form counts as a click. */
    const Form = 'Form';

    /** An image in the ad that contains a hyperlink to a destination URL. */
    const Image = 'Image';

    /** The icon that displays next to the display URL. */
    const FavoriteIcon = 'FavoriteIcon';

    /** A video embedded in the ad that the user can click to play. */
    const Video = 'Video';

    /** A link in a pharmaceutical ad that links to additional drug information. */
    const TitledLink = 'TitledLink';

    const Unknown = 'Unknown';
}
