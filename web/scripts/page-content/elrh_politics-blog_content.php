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
// *  File:           *  ../elrh_politics-blog_content.php         * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0.2                                     * //
// *  Last Modified:  *  2015-12-22 07:52 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
	    if ($page_data["single"]==true) {
			// there is request for displaying particular blog entry
			if ($page_data["exists"]==true) {
				// article found
				echo '<h1>'.$page_data["entry"]["title"].'</h1>'.PHP_EOL;
				echo '<p>'.PHP_EOL;
					echo '<strong><em>Publikováno: '.$page_data["entry"]["date"].' '.$page_data["entry"]["time"].'</em></strong>'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo $page_data["entry"]["content"];
				echo '<h2>KOMENTÁŘE:</h2>';
					include_once getcwd().'/web/scripts/page-content/elrh_content_helper.php';
					ELRHContentHelper::renderShareBox('http://alois-seckar.cz/blog/'.$page_data["id"]);
					echo '<br />'.PHP_EOL;
					ELRHContentHelper::renderCommentBox('http://alois-seckar.cz/blog/'.$page_data["id"]);
			} else {
				// article not found
				echo '<h1>ČLÁNKY</h1>'.PHP_EOL;
				echo '<p class="red-note">'.PHP_EOL;
					echo 'Příspěvek s takovým ID se bohužel na blogu nenachází...'.PHP_EOL;
				echo '</p>'.PHP_EOL;
				echo '<p class="centered">';
					echo '<a href="http://alois-seckar.cz/politics-blog">Zpět na seznam příspěvků</a>';
				echo '</p>';
			}
		} else {
			// there is request for displaying blog index (possibly filtered)
			echo '<h1>ČLÁNKY</h1>'.PHP_EOL;
			echo '<p>'.PHP_EOL;
				echo 'Sekce <strong>Články</strong> slouží k&nbsp;příležitostnému uspokojení mé grafomanie a&nbsp;prezentaci mých názorů na nejrůznější témata. Příspěvky je možné filtrovat podle kategorií. Stačí kliknout na jméno kategorie pro zobrazení relevantních. Každý příspěvek je zařazen do tří tématických okruhů dle mého nejlepšího vědomí a&nbsp;svědomí.'.PHP_EOL;
			echo '</p>'.PHP_EOL;
			echo '<hr />'.PHP_EOL;
			// blog rss feed
			include_once getcwd().'/web/scripts/page-content/elrh_content_helper.php';
			echo '<div style="width: 100%; text-align: center;">'.PHP_EOL;
				ELRHContentHelper::renderRSSFeed('http://seckar.blog.idnes.cz');
			echo '</div>'.PHP_EOL;
			echo '<hr />'.PHP_EOL;
			// blog archived message
			echo '<p class="red-note">'.PHP_EOL;
				echo 'Od <strong>27. července 2015</strong> své texty publikuji na blogu <a href="http://seckar.blog.idnes.cz/">http://seckar.blog.idnes.cz/</a>. Zde naleznete pouze archiv starších článků.'.PHP_EOL;
			echo '</p>'.PHP_EOL;
			echo '<hr />'.PHP_EOL;
			// list of blog entries
			echo '<h2>ARCHIV PŘÍSPĚVKŮ</h2>'.PHP_EOL;
			echo '<table>'.PHP_EOL;
			// inform about possible filter
			if (!empty($page_data["filter"])) {
				echo '<tr><td colspan="4" style="text-align: left;">'.PHP_EOL;
				echo 'Příspěvky jsou filtrovány podle výrazu <strong>'.$page_data["filter"].'</strong>. <a href="/politics-blog">Vypnout filtr</a>'.PHP_EOL;
				echo '</td></tr>'.PHP_EOL;
				echo '<tr><td colspan="4" style="height: 5px;"></td></tr>'.PHP_EOL;
			}
			// headers
			echo '<tr>'.PHP_EOL;
				echo '<th>Datum</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Název</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Kategorie</th>'.PHP_EOL;
				echo '<th>Přejít</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<td colspan="4" style="height: 5px;"></td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			// display stored blog entries
			if (!empty($page_data["entries"])) {
				foreach ($page_data["entries"] as $row) {
					// build categories with link
					$cats = explode(", ", $row["categories"]);
					$i = 0;
					$categories = "";
					foreach ($cats as $one) {
						// deal with separators
						if ($i>0) {
							$categories .= ", ";
						}
						$i++;
						// make a link to category filter
						$categories .= '<a href="/politics-blog/'.str_replace(" ","%20",$one).'">'.$one.'</a>';
					}
					// display results
					echo '<tr>'.PHP_EOL;
						echo '<td>'.$row["date"].'</td>'.PHP_EOL;
						echo '<td style="padding-right: 10px; text-align: left;"><a href="/politics-blog/'.$row["id"].'" title="'.$row["title"].'">'.$row["title"].'</a></td>'.PHP_EOL;
						echo '<td style="padding-right: 10px; text-align: left;">'.$categories.'</td>'.PHP_EOL;
						echo '<td><a href="/politics-blog/'.$row["id"].'" title="'.$row["title"].'"><img src="/web/skin/left_arrow.png" title="K článku" alt="K článku" height="10" /></a></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				}
			} else {
				// no entries
				echo '<tr>'.PHP_EOL;
					echo '<td colspan="4">Nenalezeny žádné příspěvky</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			}
			echo '</table>'.PHP_EOL;			
		}
	}
}