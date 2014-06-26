<?php  if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
/*
| -------------------------------------------------------------------------
| Report Review Configuration
| -------------------------------------------------------------------------
*/
// default
$config['review'] = array();

// general settings
// max review levels (published state)
$config['review']['max_review_levels'] = 3;

/*
| -------------------------------------------------------------------------
| Review Strings
| -------------------------------------------------------------------------
*/
// default strings
$config['review']['strings'] = array();

/*
| Default
*/ 
$config['review']['strings']['default'] = array(
	// review level names
	'review_level_names' => array(
		0 => _('Country'),
		1 => _('Regional'),
		2 => _('Headquarters'),
		3 => _('Published')
	),
	// report action labels
	'action_labels' => array(
		// country
		0 => array(
			'preview' => _('Preview'),
			'submit' => _('Submit'),
			'create' => _('Create'),
			'delete' => _('Delete'),
			'init' => _('Reinitialize'),
			'retract' => _('Send back'),
			'advance' => _('Advance'),
			'config' => _('Edit configuration'),
			'time' => _('Change time period')
		),
		// regional
		1 => array(
			'preview' => _('Preview'),
			'submit' => _('Approve'),
			'create' => _('Create'),
			'delete' => _('Delete'),
			'init' => _('Reinitialize'),
			'retract' => _('Send back'),
			'advance' => _('Advance'),
			'config' => _('Edit configuration'),
			'time' => _('Change time period')
		),
		// hq
		2 => array(
			'preview' => _('Preview'),
			'submit' => _('Publish'),
			'create' => _('Create'),
			'delete' => _('Delete'),
			'init' => _('Reinitialize'),
			'retract' => _('Send back'),
			'advance' => _('Advance'),
			'config' => _('Edit configuration'),
			'time' => _('Change time period')
		),
		// published
		3 => array(
			'preview' => _('Preview'),
			'submit' => _('Publish'),
			'create' => _('Create'),
			'delete' => _('Delete'),
			'init' => _('Reinitialize'),
			'retract' => _('Withdraw'),
			'advance' => _('Advance'),
			'config' => _('Edit configuration'),
			'time' => _('Change time period')
		)
	),
	'icons' => array(
		'approve' => 'approved.png',
		'published' => 'approved.png',
		'retract' => 'retracted.png',
		'unpublished' => 'retracted.png',
		'create' => 'created.png'
	),
	// review history
	'review_history' => array(
		// review history title
		'title' => _('History'),
		// created report history text (username or email, date)
		'created' => _('<strong>%s</strong> created this report on <b>%s</b>'),
		// approved report history text (username or email, review level, date)
		'approved' => _('<strong>%s</strong> approved this report at <b>%s</b> level on <b>%s</b>'),
		// publish report history text (username or email, date)
		'published' => _('<strong>%s</strong> published this report on <b>%s</b>'),
		// disapproved (sent back) report history text, user, review level, date
		'disapproved' => _('<strong>%s</strong> sent back this report to <b>%s</b> level on <b>%s</b>'),
		// unpublished (sent back) report history text, user, review level, date
		'unpublished' => _('Unpublishable due to data errors. <strong>%s</strong> sent back this report to <b>%s</b> level on <b>%s</b>')
	)
);

/*
| WASH
*/ 
// set as default
$config['review']['strings']['wash'] = $config['review']['strings']['default'];
// review level names
$config['review']['strings']['wash']['review_level_names'] = array(
	0 => _('WASH Partner'),
	1 => _('WASH Country Focal Point'),
	2 => _('Regional'),
	3 => _('Published')
);

/*
| Outbreaks
*/
// set as default
$config['review']['strings']['outbreaks'] = $config['review']['strings']['default'];
// report action labels
$config['review']['strings']['outbreaks']['action_labels'][0]['submit'] = _('Close');

/*
| Urban
*/
// set as default
$config['review']['strings']['urban'] = $config['review']['strings']['default'];
// set review level names
$config['review']['strings']['urban']['review_level_names'] = array(
	0 => _('Country'),
	1 => _('Regional'),
	2 => _('Published'),
	3 => _('Published')
);
// report action labels
$config['review']['strings']['urban']['action_labels'][1]['submit'] = _('Publish');

/*
| Camp Profile
*/
// set as default
$config['review']['strings']['camp_profile'] = $config['review']['strings']['default'];
// report action labels
$config['review']['strings']['camp_profile']['action_labels'][0]['submit'] = _('Publish');

/* End of file review.php */
/* Location: ./application/config/review.php */