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
// *  File:           *  /web/scripts/elrh_error_page.php          * //
// *  Purpose:        *  Renders an error page content			   * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-11-17 23:12 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page) {
		echo '<div class="font-error">';
			echo '<p>';
				echo 'Pokusili jste se zobrazit stránku <strong>'.$page.'</strong>, která ale neexistuje, nebo nebyla nalezena. ';
				echo 'Pokud se domníváte, že tento obsah by fungovat měl, prosím, dejte mi vědět.';
			echo '</p>';
			echo '<p>';
				echo '<a href="http://alois-seckar.cz">Zpět na index</a>';
			echo '</p>';
		echo '</div>';
	}
}
?>