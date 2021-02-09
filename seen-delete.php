<?php
require __DIR__ . '/functions.php';

if ( isset($_POST['yazi_key']) ) {

	$yazi_key = $_POST['yazi_key'];

	delete_cookie('key' . $yazi_key);

}


if ( isset($_POST['location']) ) {
	header("location: " . $_POST['location']);
} else {
	header("location: " . $_SERVER['HTTP_REFERER']);
}


?>
