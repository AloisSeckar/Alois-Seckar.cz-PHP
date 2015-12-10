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
// *  File:           *  ../elrh_politics-library_content.php      * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-08 17:05 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>KNIHOVNA</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Knihovna <strong>LIberální LIteratury</strong> (alternativně <strong>LIbertarian LIbrary</strong>) postupně vzniká díky podpoře Petra Macha, europoslance a&nbsp;předsedy Svobodných. Veškeré dění okolo mám přitom na starosti já. Momentálně má knihovna asi 150 titulů (politika, ekonomie, historie, sociální vědy) a&nbsp;je fyzicky umístěna v&nbsp;europoslanecké kanceláři <em>Opletalova 57</em> v&nbsp;Praze&nbsp;1.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Probíhají práce na webových stránkých podporujících on-line prezentaci a&nbsp;možnost rezervace výpůjček. Po jejich dokončení odsud povede odkaz.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Pokud vás téma knihovny zajímá, <a href="mailto:seckar@svobodni.cz">napište mi</a>!'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
}