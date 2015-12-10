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
// *  File:           *  ../elrh_misc-photo_content.php            * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-09 17:10 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>FOTOGRAFOVÁNÍ</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Fotografování je jedna z&nbsp;mnoha oblastí, kterými se amatérsky zabývám. Fotím rád především přírodu a&nbsp;zajímavé věci okolo sebe. Mé vybavení se omezuje na digitální fotoaparát značky Canon, což není nic moc, ale dobré snímky se s&nbsp;ním dělat dají. Navíc je tu vždycky postprodukce v&nbsp;grafických editorech. Nemám v&nbsp;oboru fotografie velké teoretické znalosti a&nbsp;ani se je popravdě nesnažím příliš aktivně získávat. Mou filosofií je fotit prostě tak, jak se mi to aktuálně líbí. Fotím hodně a&nbsp;jen občas to stojí za to. To se pak snažím prezentovat. Sami rozhodněte, zda se vám to líbí, nebo jde o&nbsp;naprostou hrůzu nehodnou větší pozornosti, nebo třeba něco mezi tím.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Vybrané snímky končí na mém profilu na <strong>DeviantArt</strong> -&nbsp;<a href="http://ellrohir.deviantart.com/">http://ellrohir.deviantart.com/</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		// galleries section
		echo '<h2>GALERIE</h2>'.PHP_EOL;
		// display stored galleries
		if (!empty($page_data["galleries"])) {
			foreach ($page_data["galleries"] as $row) {
				// gallery name
				echo '<h3>'.$row["name"].'</h3>'.PHP_EOL;
				// gallery description
				echo '<p>'.$row["dscr"].'</p>'.PHP_EOL;
				// gallery contents
				echo '<table>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td><a href="'.$row["link"].'" title="Přejít na galerii"><img src="'.$row["thumb1"].'" alt="Obr" width="200" height="150" /></a></td>'.PHP_EOL;
						echo '<td><a href="'.$row["link"].'" title="Přejít na galerii"><img src="'.$row["thumb2"].'" alt="Obr" width="200" height="150" /></a></td>'.PHP_EOL;
						echo '<td><a href="'.$row["link"].'" title="Přejít na galerii"><img src="'.$row["thumb3"].'" alt="Obr" width="200" height="150" /></a></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td colspan="3"><a href="'.$row["link"].'" title="Přejít na galerii">Přejít na galerii</a> ('.$row["pics"].' snímků)</td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				echo '</table>'.PHP_EOL;
			}
		} else {
			// no galleries
			echo '<p>'.PHP_EOL;
				echo 'Nenalezeny žádné galerie'.PHP_EOL;
			echo '</p>'.PHP_EOL;
		}	
	}
}