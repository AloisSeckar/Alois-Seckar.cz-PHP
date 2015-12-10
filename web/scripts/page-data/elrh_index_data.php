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
// *  File:           *  /web/page-data/elrh_index_data.php        * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 11:24 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Domovská stránka";
		
		// information - age of author
		include_once getcwd()."/web/scripts/elrh_misc_helper.php";
		$data["age"] = ELRHMiscHelper::elrhCountAge("1988-07-21");
		
		// get contacts
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["contacts"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT contact, name, link, dscr FROM elrh_contacts");
		
		// save prepared data for renderer
		return $data;
	}
}