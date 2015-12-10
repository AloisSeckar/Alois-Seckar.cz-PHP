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
// *  File:           *  /web/page-data/elrh_misc-hansp_data.php   * //
// *  Purpose:        *  Prepares data to be presented within page * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-09 18:40 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Hanspaulka";
		
		// save prepared data for renderer
		return $data;
	}
}