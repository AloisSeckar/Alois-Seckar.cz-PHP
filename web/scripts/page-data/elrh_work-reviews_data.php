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
// *  File:           *  /web/page-data/elrh_work-reviews_data.php * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-08 18:20 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Hudební publicistika";
		
		// get reviews
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["reviews"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT type, title, date, location, link FROM elrh_reviews ORDER BY date DESC");
		
		// save prepared data for renderer
		return $data;
	}
}