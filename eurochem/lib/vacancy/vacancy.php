<?php
//WP API
define('WP_USE_THEMES', false);
require('../../../../../wp-load.php');


$input_values['input_1']  = $_REQUEST['userName'];
$input_values['input_5']  = $_REQUEST['userLName'];
$input_values['input_2']  = $_REQUEST['userEmail'];
$input_values['gform_save'] = true; // support for save and continue

$result = GFAPI::submit_form(2, $input_values );

echo $_REQUEST['userName'].'|'.$_REQUEST['userLName'].'|'.$_REQUEST['userEmail'];
var_dump($result);
?>