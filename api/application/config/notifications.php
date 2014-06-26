<?php  if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| Notifications Strings (in app)
| -------------------------------------------------------------------------
|
| Default
*/
$config['notifications'] = array(
	'report_review_approve' => array(
		'app_message' => _('<strong>%s</strong> was <strong>%s</strong> by <strong>%s</strong> {datetime} ago and is pending <strong>%s review</strong>.'),
		'email_subject' => _('%s for %s at %s review'),
		'category' => 'report_review_approve'
	),
	'report_review_retract' => array(
		'app_message' => _('<strong>%s</strong> was <strong>reviewed</strong> at %s level by <strong>%s</strong> {datetime} ago and was sent back for <strong>further edits</strong>.'),
		'email_subject' => _('%s for %s sent back for edits'),
		'category' => 'report_review_retract'
	),
	'report_review_publish' => array(
		'app_message' => _('<strong>%s</strong> was <strong>published</strong> by <strong>%s</strong> {datetime} ago.'),
		'email_subject' => _('%s for %s published'),
		'category' => 'report_review_publish'
	),
	'report_review_unpublish' => array(
		'app_message' => _('<strong>%s</strong> was <strong>withdrawn</strong> from Explore and returned for <strong>further edits</strong> by <strong>%s</strong> {datetime} ago.'),
		'email_subject' => _('%s for %s has been withdrawn from Explore and returned for further review'),
		'category' => 'report_review_unpublish'
	),
	'report_new' => array(
		'app_message' => _('A new <strong>%s</strong> was <strong>created</strong> by <strong>%s</strong> {datetime} ago.'),
		'email_subject' => _('%s for %s created'),
		'category' => 'report_new'
	),
	'report_delete' => array(
		'app_message' => _('<strong>%s</strong> was <strong>deleted</strong> by <strong>%s</strong> {datetime} ago.'),
		'email_subject' => _('%s for %s deleted'),
		'category' => 'report_delete'
	),
	'report_comment' => array(
		'app_message' => _('<strong>%s</strong> has added a new <strong>comment</strong> to <strong>%s</strong> {datetime} ago.'),
		'email_subject' => _('Comment: %s for %s'),
		'category' => 'report_comment'
	)
);
/* End of file notification_strings.php */
/* Location: ./application/config/notification_strings.php */