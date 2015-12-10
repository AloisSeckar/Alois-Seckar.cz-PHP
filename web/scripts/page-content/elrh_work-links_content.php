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
// *  File:           *  ../elrh_work-links_content.php            * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 11:04 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>ROZCESTNÍK (práce)</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Odkazy na zajímavé stránky, které se nějak dotýkají či dotýkaly mé profesní činnosti:'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		//
		include_once getcwd().'/web/scripts/page-content/elrh_content_helper.php';
		ELRHContentHelper::renderLinksTable($page_data["links"]);
	}
}