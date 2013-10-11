<?php
echo "test";
include("templates/header.html");

$action = 'index';
$disallowed_paths = array('header', 'footer');

if (!empty($_GET['action'])) {
	$tmp_action = basename($_GET['action']);//$_GET['action'];
	$action = basename($_GET['action']);
	if (!in_array($tmp_action, $dissallowed_paths) && file_exists("templates/$action.html"))
		$action = $tmp_action;
}
include ("templates/$action.html");

include("templates/footer.html");
?>