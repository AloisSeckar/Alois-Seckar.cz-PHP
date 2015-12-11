<?php
/* 
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
// *  File:           *  ../java-script/elrh_ga_renderer.php       * //
// *  Purpose:        *  Renders JS for Google Analytics           * //
// *  System Version: *  3.0.1                                     * //
// *  Last Modified:  *  2015-12-11 11:36 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////
*/


class ELRHGARenderer {
	// taken from Google Analytics code generator
	public static function renderGA() {
		echo '<script>';
			echo "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					})(window,document,'script','//www.google-analytics.com/analytics.js','ga');";
			echo "ga('create', 'UA-71275984-1', 'auto');";
			echo "ga('send', 'pageview');";
		echo '</script>';
	}
}
?>