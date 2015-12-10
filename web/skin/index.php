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
// *  File:           *  _dir_/index.php                           * //
// *  Purpose:        *  Disallows sub-directory listing           * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-11-08 12:04 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


// disallows direct access to sub-directories
// those directories shouldn't been listed by web browser
// only allowed to be accessed by direct call from root index.php script
if ($ELRH_Auth!="index") {
	echo "here2";
	require "../../disallowed.php";	// NOTICE - relative path (check for each "index.php" file)
	ELRH_AccessDenied();
}
?>
