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
// *  File:           *  ../elrh_politics-onlines_content.php      * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0.2                                     * //
// *  Last Modified:  *  2015-12-22 07:53 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
	    if ($page_data["single"]==true) {
			// there is request for displaying particular blog entry
			if ($page_data["exists"]==true) {
				// article found
				echo '<h1>Politika online: '.$page_data["entry"]["name"].'</h1>'.PHP_EOL;
				echo '<img src="'.$page_data["entry"]["thumb"].'" title="'.$page_data["entry"]["name"].'" alt="'.$page_data["entry"]["name"].'" width="200" height="120" />'.PHP_EOL;
				echo '<p>'.PHP_EOL;
					echo '<strong><em>Datum: '.$page_data["entry"]["date"].'</em></strong>'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo '<p>'.PHP_EOL;
					switch ($page_data["entry"]["status"]) {
						case "future":
						    $state = '<span style="background-color: #C0C0C0;">Budoucí</span>';
							break;
						case "current":
						    $state = '<span style="background-color: #66FF66;">Aktivní</span>';
							break;
						case "past":
						    $state = '<span style="background-color: #FFFF99;">Ukončeno</span>';
							break;
					}
					echo '<strong><em>Stav: '.$state.'</em></strong>'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo '<p>'.PHP_EOL;
					echo $page_data["entry"]["dscr"];
				echo '</p>'.PHP_EOL;
				echo '<h2>ONLINE PŘENOS:</h2>';
				echo '<p class="centered">'.PHP_EOL;
					echo '<a href="/politics-onlines/'.$page_data["entry"]["id"].'">Znovu načíst...</a>'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				if ($page_data["full"]==true) {
					echo '<table class="onlines">'.PHP_EOL;
					// headers
					echo '<tr>'.PHP_EOL;
						echo '<th>Čas</th>'.PHP_EOL;
						echo '<th style="text-align: left;">Příspěvek</th>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td colspan="5" style="height: 5px;"></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					foreach ($page_data["contents"] as $row) {
						// prepare time in HH:MM format
						$date = preg_split("/ /", $row["date"]);
						$time = preg_split("/:/", $date[1]);
						// display results
						echo '<tr>'.PHP_EOL;
							echo '<td><strong>'.$time[0].':'.$time[1].'</strong></td>'.PHP_EOL;
							echo '<td style="text-align: justify;">'.$row["content"].'</td>'.PHP_EOL;
						echo '</tr>'.PHP_EOL;
					}
					echo '</table>'.PHP_EOL;
				} else {
					// no online content
					echo '<p>'.PHP_EOL;
						echo 'Nenalezeny žádné příspěvky. Zkuste to později.'.PHP_EOL;
					echo '</p>'.PHP_EOL;
				}
			} else {
				// article not found
				echo '<h1>POLITIKA ONLINE</h1>'.PHP_EOL;
				echo '<p class="red-note">'.PHP_EOL;
					echo 'Online přenos s takovým ID se bohužel na blogu nenachází...'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo '<p class="centered">';
					echo '<a href="http://alois-seckar.cz/politics-onlines">Zpět na seznam přenosů</a>';
				echo '</p>';
			}
		} else {
			// there is request for displaying onlines index 
			echo '<h1>POLITIKA ONLINE</h1>'.PHP_EOL;
			echo '<p>'.PHP_EOL;
				echo 'Politika <strong>online</strong> je nový zpravodajský formát, který kopíruje dnes oblíbené sportovní "onlajny". Já se pokusím obdobnou a&nbsp;pokud možno zábavnou formou přinášet zprávy přímo z&nbsp;politických jednání. Je jasné, že málokdo má trpělivost sedět mnoho hodin jako divák na místě. Takto je možnost čas od času zjistit, co je nového, a&nbsp;nakonec si zpětně přečíst zestručněný průběh jednání a&nbsp;získat tak představu o&nbsp;dění.'.PHP_EOL;
			echo '</p>'.PHP_EOL;
			// list of onlines
			echo '<h2>ARCHIV ONLINE PŘENOSŮ</h2>'.PHP_EOL;
			echo '<table class="onlines">'.PHP_EOL;
			// headers
			echo '<tr>'.PHP_EOL;
				echo '<th>Datum</th>'.PHP_EOL;
				echo '<th></th>'.PHP_EOL;
				echo '<th style="text-align: left;">Název</th>'.PHP_EOL;
				echo '<th>Stav</th>'.PHP_EOL;
				echo '<th>Přejít</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<td colspan="5" style="height: 5px;"></td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			// display stored onlines
			if (!empty($page_data["onlines"])) {
				foreach ($page_data["onlines"] as $row) {
					// display results
					// diferent row colors according to status
					switch ($row["status"]) {
						case "future":
						    $state = "Budoucí";
							echo '<tr style="background-color: #C0C0C0;">'.PHP_EOL;
							break;
						case "current":
						    $state = "Aktivní";
							echo '<tr style="background-color: #66FF66;">'.PHP_EOL;
							break;
						case "past":
						    $state = "Ukončeno";
							echo '<tr style="background-color: #FFFF99;">'.PHP_EOL;
							break;
					}
					//
						echo '<td>'.$row["date"].'</td>'.PHP_EOL;
						echo '<td class="onlines"><img src="'.$row["thumb"].'" title="'.$row["name"].'" alt="'.$row["name"].'" width="50" height="30" /></td>'.PHP_EOL;
						echo '<td style="padding-right: 10px; text-align: left;"><a href="/politics-onlines/'.$row["id"].'" title="'.$row["name"].'">'.$row["name"].'</a></td>'.PHP_EOL;
						echo '<td>'.$state.'</td>'.PHP_EOL;
						if ($row["status"]!="future") { 
							echo '<td><a href="/politics-onlines/'.$row["id"].'" title="'.$row["name"].'"><img src="/web/skin/left_arrow.png" title="K online přenosu" alt="K online přenosu" height="10" /></a></td>'.PHP_EOL;
						} else {
							echo '<td><img src="/web/skin/gray_arrow.png" title="Neaktivní" alt="Neaktivní" height="10" /></td>'.PHP_EOL;
						}
					echo '</tr>'.PHP_EOL;
				}
			} else {
				// no entries
				echo '<tr>'.PHP_EOL;
					echo '<td colspan="5">Nenalezeny žádné přenosy</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			}
			echo '</table>'.PHP_EOL;			
		}
	}
}