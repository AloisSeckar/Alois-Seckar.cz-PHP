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
// *  File:           *  ../page-content/elrh_index_content.php    * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-11 00:12 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		// personal advertising
		echo '<p style="text-align: center;">'.PHP_EOL;
			echo '<a href="http://praha4.svobodni.cz" title="Svobodní Praha 4"><img title="Svobodní Praha 4" alt="Svobodní Praha 4" height="100" src="https://svobodni-cms.s3.amazonaws.com/sites/53be7c12c58b9a2ca9000036/theme/images/poutac.png" /></a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		// welcome text
		echo '<h1>INFO</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Vítám vás na svém webu. Mé jméno je <strong>Alois Sečkár</strong>, je mi '.$page_data["age"].' let, narodil jsem se a&nbsp;žiju v Praze. Momentálně studuju na FIS VŠE v&nbsp;Praze, kde jsem ve třetím ročníku navazujícího magisterského studia oboru Informační systémy a&nbsp;technologie.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Svoje stránky jsem rozdělil na tři hlavní tématické okruhy: '.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<ul>'.PHP_EOL;
			echo '<li><strong><a href="work" title="Osobní prezentace">PRÁCE</a></strong> obsahuje ukázky mých programátorských výtvorů a&nbsp;dalších profesních činností, které mě dosud postihly.</li>'.PHP_EOL;
			echo '<li><strong><a href="politics" title="Politické názory">POLITIKA</a></strong> reflektuje fakt, že jsem hrdým příznivcem, voličem a&nbsp;aktivním členem <a href="http://www.svobodni.cz" title="Svobodní">Strany Svobodných Občanů</a>.</li>'.PHP_EOL;
			echo '<li><strong><a href="misc" title="Ostatní aktivita">ZÁBAVA</a></strong> je všechno ostatní, co pokládám nějakým způsobem za důležité v&nbsp;mém životě.</li>'.PHP_EOL;
		echo '</ul>'.PHP_EOL;
		// contacts
		include_once getcwd().'/web/scripts/page-content/elrh_content_helper.php';
		ELRHContentHelper::renderContactsList($page_data["contacts"], "h2");
		// current page version
		echo '<p style="padding-top: 25px.PHP_EOL; padding-bottom: 15px.PHP_EOL;">'.PHP_EOL;
			echo 'Aktuální verze stránek je <a href="versions" title="Verze systému">'.$page_data["version"].'</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
}