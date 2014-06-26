<?php  if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| DE Forms configuration
|
| This configuration is for de form groupings to avoid
| redundancies in the reports table
| -------------------------------------------------------------------------
*/
// default
$config['de_forms'] = array();

// categories
$config['de_forms']['categories'] = array(
	'primary' => array(
		'label' => _('Enter new data into report'),
		'icon' => 'new-data.png'
	),
	'summary' => array(
		'label' => _('Prepare a report to share'),
		'icon' => 'share.png'
	)
);

/* End of file de_forms.php */
/* Location: ./application/config/de_forms.php */