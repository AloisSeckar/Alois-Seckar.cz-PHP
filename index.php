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
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 17:41 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


// session init
session_start();

// include support php functions file
include_once "web/scripts/elrh_misc_helper.php";
include_once "web/scripts/elrh_page_controller.php";

// page setup //
$controller = new ELRHPageController();

// prepare values
$page = ELRHMiscHelper::elrhTestAndAssignVariable($_GET["page"], "");
$controller->resolvePath(mb_strtolower($page, 'UTF-8'));
$controller->prepareData();

// display page
$controller->renderPage();
?>