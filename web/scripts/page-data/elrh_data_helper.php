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
// *  File:           *  ../page-data/elrh_data_helper.php         * //
// *  Purpose:        *  Shared help methods for getting data      * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 15:52 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHDataHelper {
	
	public static function retrieveArray($mysqli, $query) {
		$result = $mysqli->query($query);
	    $i = 0;
		while ($current = $result->fetch_array()) {
			$array[$i] = $current;
			$i++;
		}
		return $array;
	}
	
	public static function retrieveRow($mysqli, $query) {
		$result = $mysqli->query($query." LIMIT 1");
	    $row = $result->fetch_array();
		return $row;
	}
}