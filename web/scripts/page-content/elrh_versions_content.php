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
// *  File:           *  ../elrh_misc-links_content.php            * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 11:00 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>VERZE SYSTÉMU</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Postupný vývoj těchto stránek:'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		//
		echo '<table>'.PHP_EOL;
		echo '<tr>'.PHP_EOL;
			echo '<th class="versions">Verze</th>'.PHP_EOL;
			echo '<th class="versions">Datum</th>'.PHP_EOL;
			echo '<th class="versions">Popis</th>'.PHP_EOL;
		echo '</tr>'.PHP_EOL;
		foreach ($page_data["versions"] as $version_info) {
			echo '<tr>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo '<strong>'.$version_info["version"].'</strong>'.PHP_EOL;
				echo '</td>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo $version_info["date"].PHP_EOL;
				echo '</td>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo $version_info["dscr"].PHP_EOL;
				echo '</td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
		}
		echo '</table>'.PHP_EOL;
	}
}