<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing RuleFieldURIType
 *
 * Rule field URI enumerates all possible rule fields that could trigger validation
 * error
 * XSD Type: RuleFieldURIType
 */
class RuleFieldURIType extends Enumeration
{

    const ACTION_ASSIGN_CATEGORIES = 'Action:AssignCategories';

    const ACTION_COPY_TO_FOLDER = 'Action:CopyToFolder';

    const ACTION_DELETE = 'Action:Delete';

    const ACTION_FORWARD_AS_ATTACHMENT_TO_RECIPIENTS = 'Action:ForwardAsAttachmentToRecipients';

    const ACTION_FORWARD_TO_RECIPIENTS = 'Action:ForwardToRecipients';

    const ACTION_MARK_AS_READ = 'Action:MarkAsRead';

    const ACTION_MARK_IMPORTANCE = 'Action:MarkImportance';

    const ACTION_MOVE_TO_FOLDER = 'Action:MoveToFolder';

    const ACTION_PERMANENT_DELETE = 'Action:PermanentDelete';

    const ACTION_REDIRECT_TO_RECIPIENTS = 'Action:RedirectToRecipients';

    const ACTION_SEND_SMS_ALERT_TO_RECIPIENTS = 'Action:SendSMSAlertToRecipients';

    const ACTION_SERVER_REPLY_WITH_MESSAGE = 'Action:ServerReplyWithMessage';

    const ACTION_STOP_PROCESSING_RULES = 'Action:StopProcessingRules';

    const ACTIONS = 'Actions';

    const CONDITION_CATEGORIES = 'Condition:Categories';

    const CONDITION_CONTAINS_BODY_STRINGS = 'Condition:ContainsBodyStrings';

    const CONDITION_CONTAINS_HEADER_STRINGS = 'Condition:ContainsHeaderStrings';

    const CONDITION_CONTAINS_RECIPIENT_STRINGS = 'Condition:ContainsRecipientStrings';

    const CONDITION_CONTAINS_SENDER_STRINGS = 'Condition:ContainsSenderStrings';

    const CONDITION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Condition:ContainsSubjectOrBodyStrings';

    const CONDITION_CONTAINS_SUBJECT_STRINGS = 'Condition:ContainsSubjectStrings';

    const CONDITION_FLAGGED_FOR_ACTION = 'Condition:FlaggedForAction';

    const CONDITION_FROM_ADDRESSES = 'Condition:FromAddresses';

    const CONDITION_FROM_CONNECTED_ACCOUNTS = 'Condition:FromConnectedAccounts';

    const CONDITION_HAS_ATTACHMENTS = 'Condition:HasAttachments';

    const CONDITION_IMPORTANCE = 'Condition:Importance';

    const CONDITION_IS_APPROVAL_REQUEST = 'Condition:IsApprovalRequest';

    const CONDITION_IS_AUTOMATIC_FORWARD = 'Condition:IsAutomaticForward';

    const CONDITION_IS_AUTOMATIC_REPLY = 'Condition:IsAutomaticReply';

    const CONDITION_IS_ENCRYPTED = 'Condition:IsEncrypted';

    const CONDITION_IS_MEETING_REQUEST = 'Condition:IsMeetingRequest';

    const CONDITION_IS_MEETING_RESPONSE = 'Condition:IsMeetingResponse';

    const CONDITION_IS_NDR = 'Condition:IsNDR';

    const CONDITION_IS_PERMISSION_CONTROLLED = 'Condition:IsPermissionControlled';

    const CONDITION_IS_READ_RECEIPT = 'Condition:IsReadReceipt';

    const CONDITION_IS_SIGNED = 'Condition:IsSigned';

    const CONDITION_IS_VOICEMAIL = 'Condition:IsVoicemail';

    const CONDITION_ITEM_CLASSES = 'Condition:ItemClasses';

    const CONDITION_MESSAGE_CLASSIFICATIONS = 'Condition:MessageClassifications';

    const CONDITION_NOT_SENT_TO_ME = 'Condition:NotSentToMe';

    const CONDITION_SENSITIVITY = 'Condition:Sensitivity';

    const CONDITION_SENT_CC_ME = 'Condition:SentCcMe';

    const CONDITION_SENT_ONLY_TO_ME = 'Condition:SentOnlyToMe';

    const CONDITION_SENT_TO_ADDRESSES = 'Condition:SentToAddresses';

    const CONDITION_SENT_TO_ME = 'Condition:SentToMe';

    const CONDITION_SENT_TO_OR_CC_ME = 'Condition:SentToOrCcMe';

    const CONDITION_WITHIN_DATE_RANGE = 'Condition:WithinDateRange';

    const CONDITION_WITHIN_SIZE_RANGE = 'Condition:WithinSizeRange';

    const CONDITIONS = 'Conditions';

    const DISPLAY_NAME = 'DisplayName';

    const EXCEPTION_CATEGORIES = 'Exception:Categories';

    const EXCEPTION_CONTAINS_BODY_STRINGS = 'Exception:ContainsBodyStrings';

    const EXCEPTION_CONTAINS_HEADER_STRINGS = 'Exception:ContainsHeaderStrings';

    const EXCEPTION_CONTAINS_RECIPIENT_STRINGS = 'Exception:ContainsRecipientStrings';

    const EXCEPTION_CONTAINS_SENDER_STRINGS = 'Exception:ContainsSenderStrings';

    const EXCEPTION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Exception:ContainsSubjectOrBodyStrings';

    const EXCEPTION_CONTAINS_SUBJECT_STRINGS = 'Exception:ContainsSubjectStrings';

    const EXCEPTION_FLAGGED_FOR_ACTION = 'Exception:FlaggedForAction';

    const EXCEPTION_FROM_ADDRESSES = 'Exception:FromAddresses';

    const EXCEPTION_FROM_CONNECTED_ACCOUNTS = 'Exception:FromConnectedAccounts';

    const EXCEPTION_HAS_ATTACHMENTS = 'Exception:HasAttachments';

    const EXCEPTION_IMPORTANCE = 'Exception:Importance';

    const EXCEPTION_IS_APPROVAL_REQUEST = 'Exception:IsApprovalRequest';

    const EXCEPTION_IS_AUTOMATIC_FORWARD = 'Exception:IsAutomaticForward';

    const EXCEPTION_IS_AUTOMATIC_REPLY = 'Exception:IsAutomaticReply';

    const EXCEPTION_IS_ENCRYPTED = 'Exception:IsEncrypted';

    const EXCEPTION_IS_MEETING_REQUEST = 'Exception:IsMeetingRequest';

    const EXCEPTION_IS_MEETING_RESPONSE = 'Exception:IsMeetingResponse';

    const EXCEPTION_IS_NDR = 'Exception:IsNDR';

    const EXCEPTION_IS_PERMISSION_CONTROLLED = 'Exception:IsPermissionControlled';

    const EXCEPTION_IS_READ_RECEIPT = 'Exception:IsReadReceipt';

    const EXCEPTION_IS_SIGNED = 'Exception:IsSigned';

    const EXCEPTION_IS_VOICEMAIL = 'Exception:IsVoicemail';

    const EXCEPTION_ITEM_CLASSES = 'Exception:ItemClasses';

    const EXCEPTION_MESSAGE_CLASSIFICATIONS = 'Exception:MessageClassifications';

    const EXCEPTION_NOT_SENT_TO_ME = 'Exception:NotSentToMe';

    const EXCEPTION_SENSITIVITY = 'Exception:Sensitivity';

    const EXCEPTION_SENT_CC_ME = 'Exception:SentCcMe';

    const EXCEPTION_SENT_ONLY_TO_ME = 'Exception:SentOnlyToMe';

    const EXCEPTION_SENT_TO_ADDRESSES = 'Exception:SentToAddresses';

    const EXCEPTION_SENT_TO_ME = 'Exception:SentToMe';

    const EXCEPTION_SENT_TO_OR_CC_ME = 'Exception:SentToOrCcMe';

    const EXCEPTION_WITHIN_DATE_RANGE = 'Exception:WithinDateRange';

    const EXCEPTION_WITHIN_SIZE_RANGE = 'Exception:WithinSizeRange';

    const EXCEPTIONS = 'Exceptions';

    const IS_ENABLED = 'IsEnabled';

    const IS_IN_ERROR = 'IsInError';

    const IS_NOT_SUPPORTED = 'IsNotSupported';

    const PRIORITY = 'Priority';

    const RULE_ID = 'RuleId';

    const ACTION_SEND_SMSALERT_TO_RECIPIENTS = 'Action:SendSMSAlertToRecipients';
}
