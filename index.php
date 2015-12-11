<?php
///////////////////////////////////////////////////////////////////////
//                                                                   //
//                           Alois-Seckar.cz                         //
//                          Personal homepage                        //
//                                                                   //
//                 Copyright © Alois Seckar 2008-2015                //
//                                                                   //
//                                                                   //
//    Page Info                                                      //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
// *  Author:         *  Alois Seckar [ seckar@svobodni.cz ]       * //
// *  Homepage:       *  http://alois-seckar.cz                    * //
// *  File:           *  index.php                                 * //
// *  Purpose:        *  My personal homepage - new version        * //
// *  System Version: *  3.0.1                                     * //
// *  Last Modified:  *  2015-12-11 20:53 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


// page setup //
include_once "web/scripts/elrh_page_controller.php";
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