<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing EmptySuggestionReasonType
 *
 * Reasons no suggestions are returned by FindMeetingTimeCandidates
 * XSD Type: EmptySuggestionReason
 */
class EmptySuggestionReasonType extends Enumeration
{

    const UNKNOWN = 'Unknown';

    const ATTENDEES_UNAVAILABLE = 'AttendeesUnavailable';

    const LOCATIONS_UNAVAILABLE = 'LocationsUnavailable';

    const ORGANIZER_UNAVAILABLE = 'OrganizerUnavailable';

    const ATTENDEES_UNAVAILABLE_OR_UNKNOWN = 'AttendeesUnavailableOrUnknown';
}
