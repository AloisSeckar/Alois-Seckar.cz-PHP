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
// *  File:           *  ../elrh_politics-blog_onlines.php         * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0.2                                     * //
// *  Last Modified:  *  2015-12-21 14:42 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		
		// page title
		$data["title"] = "Alois Sečkár - Politika online";
		
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		
		if (empty($item)) {
			// if no item selected = show list of all available onlines
			$data["onlines"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT id, date, name, thumb, status FROM elrh_onlines ORDER BY date DESC");
		} else {
			// notify content renderer, there will be only one entry
		    $data["single"] = true;
				
			// find one particular entry and its details
			$data["entry"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT id, date, name, dscr, thumb, status FROM elrh_onlines WHERE id='".mysqli_real_escape_string($mysqli, $item)."'");
			//
			if (!empty($data["entry"])) {
				// page title adjustment
			    // too long...
				// $data["title"] .= ": ".$data["entry"]["name"];
				// notify content renderer, article exists
				$data["exists"] = true;
			}
			
			// find all content relative to selected online
			$data["contents"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, content FROM elrh_onlines_content WHERE online='".mysqli_real_escape_string($mysqli, $item)."' ORDER BY date DESC");
			//
			if (!empty($data["contents"])) {
				// notify content renderer, there are contents for this online
				$data["full"] = true;
			}
			
			// memo FOR FUTRE USE when there will be admin-form for inserting
			//if (is_numeric($item)) {
			//} else {
			//}
		}
		
		// save prepared data for renderer
		return $data;
	}
}