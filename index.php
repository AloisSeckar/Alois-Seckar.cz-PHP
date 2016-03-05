<?php
// supress all error displaying from live version
ini_set('display_errors','Off');

// page setup //
include_once getcwd().'/web/scripts/elrh_page_controller.php';
$controller = new ELRHPageController();

// get request
if (!empty($_GET["page"])) {
	$page = $_GET["page"];
}

$controller->resolvePath(mb_strtolower($page, 'UTF-8'));
$controller->prepareData();

// display page
$controller->renderPage();
?>