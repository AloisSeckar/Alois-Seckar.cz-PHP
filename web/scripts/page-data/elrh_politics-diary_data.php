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
// *  File:           *  .../elrh_politics-diary_data.php          * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-08 16:21 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Deník politika";
		
		// get diary entries
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		// default amount is 25
		// user can load more by clicking 
		if (is_numeric($item)) {
			$data["limit"] = $item;
		} else {
			$data["limit"] = 25;
		}
		// last entry inserted
		$data["last"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT value FROM elrh_main WHERE var='last_diary'");
		// get desired amount of entries sorted by date inserted
		$data["entries"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, content, link FROM elrh_diary ORDER BY date DESC LIMIT ".$data["limit"]);
		// get total amount of entries
		$data["total"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT count(id) AS entries FROM elrh_diary");
		
		// save prepared data for renderer
		return $data;
	}
}