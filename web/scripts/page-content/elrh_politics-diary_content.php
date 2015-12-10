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
// *  File:           *  ../elrh_politics-diary_content.php        * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-10 22:56 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
	    echo '<h1>DENÍK POLITIKA</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Sekce <strong>Deník politika</strong> má za úkol shromažďovat informace o&nbsp;mé politické aktivitě -&nbsp;co jsem kde dělal, s&nbsp;kým jsem si psal, koho jsem potkal, o&nbsp;čem jsme zhruba mluvili apod. Cílem je transparentost mého jednání. Budu se snažit zachytit maximální množství interakcí. Pokud budete vědět o&nbsp;události, kterou jsem zde nezachytil, neváhejte se ozvat. Důvodem opomenutí bude zapomnětlivost, nikoliv úmysl.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
		echo '<strong>Poslední update: '.$page_data["last"]["value"].'</strong>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<table>'.PHP_EOL;
			// headers
			echo '<tr>'.PHP_EOL;
				echo '<th>Datum</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Událost</th>'.PHP_EOL;
				echo '<th>Odkaz</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<td colspan="3" style="height: 5px;"></td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			// display stored entries
			if (!empty($page_data["entries"])) {
				foreach ($page_data["entries"] as $row) {
					echo '<tr>'.PHP_EOL;
						echo '<td>'.$row["date"].'</td>'.PHP_EOL;
						echo '<td style="padding: 10px; text-align: justify;">'.$row["content"].'</td>'.PHP_EOL;
						if ($row["link"]!="null") {
							echo '<td><a href="'.$row["link"].'" title="K odkazu"><img src="/web/skin/left_arrow.png" title="K odkazu" alt="K odkazu" height="10" /></a></td>'.PHP_EOL;
						} else {
							echo '<td><img src="/web/skin/gray_arrow.png" title="Bez odkazu" alt="Bez odkazu" height="10" /></td>'.PHP_EOL;
						}
					echo '</tr>'.PHP_EOL;
				}
				// show amount of entries + "load more" link (if possible)
				echo '<tr><td colspan="3"><hr />'.PHP_EOL;
					if ($page_data["total"]["entries"]>$page_data["limit"]) {
						$new_limit = $page_data["limit"] + 25;
						echo 'Zobrazeno <strong>'.$page_data["limit"].'</strong> záznamů. <a href="/politics-diary/'.$new_limit.'" title="Načíst více...">Načíst více...</a>';
					} else {
						echo 'Zobrazeno <strong>'.$page_data["total"]["entries"].'</strong> záznamů.'.PHP_EOL;
					}
				echo '</td></tr>'.PHP_EOL;
			} else {
				// no entries
				echo '<tr>'.PHP_EOL;
					echo '<td colspan="3">Nenalezeny žádné příspěvky</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			}
		echo '</table>'.PHP_EOL;			
	}
}