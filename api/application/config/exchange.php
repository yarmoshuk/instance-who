<?php  if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| Exchange configuration
| -------------------------------------------------------------------------
*/
$config['exchange'] = array(
	'messages' => array(
		'no_user' => _('Incorrect username/password. Please visit %s if you do not have a Twine account or have forgotten your password.'),
		'invalid_permissions' => _('Your Twine account has not been configured to permit you to submit this report. You do have permissions for %s.  Please contact your Twine administrator to request additional permissions.'),
		'no_permissions' => _('Your Twine account has not been configured to permit you to submit this report. Please contact your Twine administrator to request additional permissions.'),
		'invalid_version' => _('You are using an out of date version of the Excel sheet which is no longer supported. Please obtain the new reporting sheet from the Tools tab in Twine - %s/#app=Tools'),
		'invalid_location' => _('The location you selected%s is not a valid location')
	)
);

/* End of file echange.php */
/* Location: ./application/config/echange.php */