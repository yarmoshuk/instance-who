<?php  if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| Data Entry configuration
| -------------------------------------------------------------------------
*/
// default
$config['dataentry'] = array();

// hover text strings
$config['dataentry']['hover_text'] = array(
	// initialization type text
	// any values in meta_de_report_init.initvalues can be used
	'initialization' => array(
		'tooltip_placement' => 'left', // where the tooltip pop ups (top, bottom, left or right)
		'same_date' => _('This information was initialized from data on the same reporting date as this report, the field used was &#34;{init_column}&#34;.'),
		'latest' => _('This information was initialized from the latest available data ({reportdate}), the field used was &#34;{init_column}&#34;.'),
		'last_interval' => _('This information was initialized from the previous report ({reportdate}), the field used was &#34;{init_column}&#34;.'),
		'value' => _('This value was initialized from HIS data.  If this value is incorrect please contact webHIS.')
	),
	// dataentry report icons (beside each cell)
	'de_report_icons' => array(
		'tooltip_placement' => 'left', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('You can not edit this field.'),
		'write' => _('You can edit this field.')
	),
	// dataentry report header icons
	'de_report_header_icons' => array(
		'tooltip_placement' => 'bottom', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('This report is available for you to view.'),
		'write' => _('This report is available for you to edit.'),
		// report review level
		'report_review_level' => _('The report is at this review level'),
		// user review level
		'user_review_level' => _('This is your review level'),
		// user and report review level (same)
		'same_review_level' => _('The report is at your review level'),
		// report is published
		'report_published' => _('The report is published')
	),
	// dataentry todo list icons
	'de_todo_list_icons' => array(
		'tooltip_placement' => 'top', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('This report is available for you to view.'),
		'write' => _('This report is available for you to edit.'),
		// report review level
		'report_review_level' => _('The report is at this review level'),
		// user review level
		'user_review_level' => _('This is your review level'),
		// user and report review level (same)
		'same_review_level' => _('The report is at your review level'),
		// report is published
		'report_published' => _('The report is published')
	),
	// dataentry todo list icons
	'de_create_report_icons' => array(
		'tooltip_placement' => 'bottom', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('This report is available for you to view.'),
		'write' => _('This report is available for you to edit.'),
		// report review level
		'report_review_level' => _('The report is at this review level'),
		// user review level
		'user_review_level' => _('This is your review level'),
		// user and report review level (same)
		'same_review_level' => _('The report is at your review level'),
		// report is published
		'report_published' => _('The report is published')
	),
	// notification icons
	'notification_icons' => array(
		'tooltip_placement' => 'bottom', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('This report is available for you to view.'),
		'write' => _('This report is available for you to edit.'),
		// report review level
		'report_review_level' => _('The report is at this review level'),
		// user review level
		'user_review_level' => _('This is your review level'),
		// user and report review level (same)
		'same_review_level' => _('The report is at your review level'),
		// report is published
		'report_published' => _('The report is published')
	),
	// user report list icons
	'user_report_list_icons' => array(
		'tooltip_placement' => 'top', // where the tooltip pop ups (top, bottom, left or right)
		'read' => _('This report is available for you to view.'),
		'write' => _('This report is available for you to edit.'),
		// report review level
		'report_review_level' => _('The report is at this review level'),
		// user review level
		'user_review_level' => _('This is your review level'),
		// user and report review level (same)
		'same_review_level' => _('The report is at your review level'),
		// report is published
		'report_published' => _('The report is published')
	),
	// data entry filter control
	'de_filter_control_icons' => array(
		'tooltip_placement' => 'left',
		'hover_text' => _('You can edit this field by changing the report configuration in the left menu.')
	)
);

// table names (this is display text to be used for data init in data entry)
$config['dataentry']['table_names'] = array(
	'his' => _('HIS'),
	'de_ar' => _('LAST'),
	'de_cp' => _('LAST'),
	'de_bi' => _('LAST'),
	'de_outbreaks' => _('LAST'),
	'de_focus' => _('LAST'),
	'de_stratplan' => _('LAST'),
	'value' => 'HC' // used when there is no source type as the intialization type is an arbitrary value
);

// context display names
$config['dataentry']['report_context_names'] = array(
	'wash' => 'WASH',
	'his_default' => 'PHHIV',
	'phhiv_2' => 'PHHIV (2 levels of review)',
	'his_urban' => 'HIS (urban)',
	'phhiv_nut' => 'PHHIV Nutrition',
	'phhiv_md' => 'Maternal death investigation',
	'pop' => 'Population'
);

// report layout title prefixes
$config['dataentry']['title_prefix'] = array(
	'focus_ind' => array(
		'tooltip_placement' => 'top', // where the tooltip pop ups (top, bottom, left or right)
		'text' => _('FOCUS'),
		'hover_text' => _('Focus Indicator')
	),
	'extent_ind' => array(
		'tooltip_placement' => 'top', // where the tooltip pop ups (top, bottom, left or right)
		'text' => _('Extent'),
		'hover_text' => _('Sub-criterion for Extent indicator'),
		'background_color' => '#8c007b'
	),
	'strat_ind' => array(
		'tooltip_placement' => 'top', // where the tooltip pop ups (top, bottom, left or right)
		'text' => _('Strat Plan'),
		'hover_text' => _('Strategic Plan 2014-2018 Indicator'),
		'background_color' => '#8c007b'
	)
);

// report filters description
$config['dataentry']['report_filter_description'] = array(
	'complete' => array(
		'can_edit' => _('This report contains configuration that should be completed before you begin. This reports configuration is <strong>complete</strong>. Use the edit configuration button in the left panel to edit the configuration.'),
		'cannot_edit' => _('This report contains configuration that should be completed before you begin. This reports configuration is <strong>complete</strong>. Use the edit configuration button in the left panel to edit the configuration.'),
		'alert_class' => 'alert-success'
	),
	'incomplete' => array(
		'can_edit' => _('This report contains configuration that should be completed before you begin. This reports configuration is <strong>incomplete</strong>. Use the edit configuration button in the left panel to edit the configuration.'),
		'cannot_edit' => _('This report contains configuration that should be completed before you begin. This reports configuration is <strong>incomplete</strong>. Use the edit configuration button in the left panel to edit the configuration.'),
		'alert_class' => NULL
	)
);
/* End of file dataentry.php */
/* Location: ./application/config/dataentry.php */
