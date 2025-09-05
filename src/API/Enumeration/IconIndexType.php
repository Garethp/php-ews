<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing IconIndexType
 *
 *
 * XSD Type: IconIndexType
 */
class IconIndexType extends Enumeration
{

    const DEFAULT_CONSTANT = 'Default';

    const POST_ITEM = 'PostItem';

    const MAIL_READ = 'MailRead';

    const MAIL_UNREAD = 'MailUnread';

    const MAIL_REPLIED = 'MailReplied';

    const MAIL_FORWARDED = 'MailForwarded';

    const MAIL_ENCRYPTED = 'MailEncrypted';

    const MAIL_SMIME_SIGNED = 'MailSmimeSigned';

    const MAIL_ENCRYPTED_REPLIED = 'MailEncryptedReplied';

    const MAIL_SMIME_SIGNED_REPLIED = 'MailSmimeSignedReplied';

    const MAIL_ENCRYPTED_FORWARDED = 'MailEncryptedForwarded';

    const MAIL_SMIME_SIGNED_FORWARDED = 'MailSmimeSignedForwarded';

    const MAIL_ENCRYPTED_READ = 'MailEncryptedRead';

    const MAIL_SMIME_SIGNED_READ = 'MailSmimeSignedRead';

    const MAIL_IRM = 'MailIrm';

    const MAIL_IRM_FORWARDED = 'MailIrmForwarded';

    const MAIL_IRM_REPLIED = 'MailIrmReplied';

    const SMS_SUBMITTED = 'SmsSubmitted';

    const SMS_ROUTED_TO_DELIVERY_POINT = 'SmsRoutedToDeliveryPoint';

    const SMS_ROUTED_TO_EXTERNAL_MESSAGING_SYSTEM = 'SmsRoutedToExternalMessagingSystem';

    const SMS_DELIVERED = 'SmsDelivered';

    const OUTLOOK_DEFAULT_FOR_CONTACTS = 'OutlookDefaultForContacts';

    const APPOINTMENT_ITEM = 'AppointmentItem';

    const APPOINTMENT_RECUR = 'AppointmentRecur';

    const APPOINTMENT_MEET = 'AppointmentMeet';

    const APPOINTMENT_MEET_RECUR = 'AppointmentMeetRecur';

    const APPOINTMENT_MEET_NY = 'AppointmentMeetNY';

    const APPOINTMENT_MEET_YES = 'AppointmentMeetYes';

    const APPOINTMENT_MEET_NO = 'AppointmentMeetNo';

    const APPOINTMENT_MEET_MAYBE = 'AppointmentMeetMaybe';

    const APPOINTMENT_MEET_CANCEL = 'AppointmentMeetCancel';

    const APPOINTMENT_MEET_INFO = 'AppointmentMeetInfo';

    const TASK_ITEM = 'TaskItem';

    const TASK_RECUR = 'TaskRecur';

    const TASK_OWNED = 'TaskOwned';

    const TASK_DELEGATED = 'TaskDelegated';
}
