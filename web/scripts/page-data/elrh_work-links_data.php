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
// *  File:           *  ../page-data/elrh_misc-work_data.php      * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-05 22:55 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Pracovní rozcestník";
		
		// get relevant links
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["links"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT name, dscr, link, thumb FROM elrh_links WHERE cat='work' ORDER BY name");
		
		// save prepared data for renderer
		return $data;
	}
}