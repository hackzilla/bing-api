<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible keyword match type values.
 * @link http://msdn.microsoft.com/en-us/library/gg712238(v=msads.80).aspx MatchType Value Set
 */
final class MatchType
{
    /** An exact match results when all of the words in the keyword exactly match the user's search query. */
    const Exact = 'Exact';

    /** A phrase match results when all of the words in the keyword are present in the user's search query and are in the same order. */
    const Phrase = 'Phrase';

    /** A broad match results when words in the keyword are present in the user's search query; however, the word order can vary. */
    const Broad = 'Broad';

    /** A content match results when the keywords extracted from the content webpage match the keywords in the user's search query by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query. */
    const Content = 'Content';

    /** Aggregates the data across all match types. You can specify this type for the following operations. */
    const Aggregate = 'Aggregate';
}
