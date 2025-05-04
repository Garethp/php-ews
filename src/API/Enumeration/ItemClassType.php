<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing ItemClassType
 *
 *
 * XSD Type: ItemClassType
 */
class ItemClassType extends Enumeration
{

    const ACTIVITY = 'IPM.Activity';

    const APPOINTMENT = 'IPM.Appointment';

    const CONTACT = 'IPM.Contact';

    const DISTRIBUTION_LIST = 'IPM.DistList';

    const DOCUMENT = 'IPM.Document';

    const IPM = 'IPM';

    const NOTE = 'IPM.Note';

    const NOTE_IMC_NOTIFICATION = 'IPM.Note.IMC.Notification';

    const NOTE_RULES_OOF_TEMPLATE_MICROSOFT = 'IPM.Note.Rules.Oof.Template.Microsoft';

    const NOTE_RULES_REPLYTEMPLATE_MICROSOFT = 'IPM.Note.Rules.ReplyTemplate.Microsoft';

    const NOTE_SECURE = 'IPM.Note.Secure';

    const NOTE_SECURE_SIGN = 'IPM.Note.Secure.Sign';

    const OLE_CLASS = 'IPM.OLE.Class';

    const OUTLOOK_RECALL = 'IPM.Outlook.Recall';

    const POST = 'IPM.Post';

    const RECALL_REPORT = 'IPM.Recall.Report';

    const REMOTE = 'IPM.Remote';

    const REPORT = 'IPM.Report';

    const RESEND = 'IPM.Resend';

    const SCHEDULE_MEETING_CANCELED = 'IPM.Schedule.Meeting.Canceled';

    const SCHEDULE_MEETING_REQUEST = 'IPM.Schedule.Meeting.Request';

    const SCHEDULE_MEETING_RESP_NEG = 'IPM.Schedule.Meeting.Resp.Neg';

    const SCHEDULE_MEETING_RESP_POS = 'IPM.Schedule.Meeting.Resp.Pos';

    const SCHEDULE_MEETING_RESP_TENT = 'IPM.Schedule.Meeting.Resp.Tent';

    const STICKYNOTE = 'IPM.StickyNote';

    const TASK = 'IPM.Task';

    const TASKREQUEST = 'IPM.TaskRequest';

    const TASKREQUEST_ACCEPT = 'IPM.TaskRequest.Accept';

    const TASKREQUEST_DECLINE = 'IPM.TaskRequest.Decline';

    const TASKREQUEST_UPDATE = 'IPM.TaskRequest.Update';
}
