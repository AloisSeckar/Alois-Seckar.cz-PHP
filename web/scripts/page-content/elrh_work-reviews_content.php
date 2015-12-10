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
// *  File:           *  ../elrh_work-reviews_content.php          * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-08 18:42 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>PRÁCE - HUDEBNÍ PUBLICISTIKA</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Zde se nachází přehled mých článků v rámci hudební publicistiky. Bohužel dnes už nová díla nepřibývají. V druhé části stránky pak najdte stručný přehled uvedených publikačních míst.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Pozn.:</strong> Články zveřejněné na webu Metalzone.info už bohužel dnes nejsou dostupné. Má chyba to není.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<h2>PŘEHLED ČLÁNKŮ</h2>'.PHP_EOL;
		echo '<table>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<th style="padding-right: 5px;">Datum</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Umístění</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Typ článku</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Název článku</th>'.PHP_EOL;
				echo '<th>Přejít</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			echo '<tr><td colspan="5" style="height: 5px;"></td></tr>'.PHP_EOL;
			if (!empty($page_data["reviews"])) {
				foreach ($page_data["reviews"] as $row) {
					// set location link
					switch ($row["location"]) {
						case "Sicmaggot":
							$row["loc"] = '<a href="http://sicmaggot.blog.cz/" title="Sicmaggot Rock &amp; Metal Blog">Sicmaggot</a>';
							break;
						case "Metalzone":
							$row["loc"] = '<a href="http://www.metalzone.info/cz/" title="Metalzone.info">Metalzone</a>';
							break;
						case "Blog":
							$row["loc"] = '<a href="http://ellrohir.blog.cz/" title="Howling Iron Metal Blog">Blog</a>';
							break;
						case "Metalstorm":
							$row["loc"] = '<a href="http://www.metalstorm.net/" title="Metalstorm.net">Metalstorm</a>';
							break;
					}
					// display results
					echo '<tr>'.PHP_EOL;
						echo '<td style="padding-right: 5px;">'.$row["date"].'</td>'.PHP_EOL;
						echo '<td style="padding-right: 5px; text-align: left;">'.$row["loc"].'</td>'.PHP_EOL;
						echo '<td style="padding-right: 5px; text-align: left;">'.$row["type"].'</td>'.PHP_EOL;
						echo '<td style="padding-right: 5px; text-align: left;"><a href="'.$row["link"].'" title="'.$row["title"].'">'.$row["title"].'</a></td>'.PHP_EOL;
						echo '<td><a href="'.$row["link"].'" title="'.$row["title"].'"><img src="web/skin/left_arrow.png" title="K článku" alt="K článku" height="10" /></a></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				}
			} else {
				// no tournaments found
				echo '<tr><td colspan="5">Nenalezeny žádné články</td></tr>'.PHP_EOL;
			}
		echo '</table>'.PHP_EOL;
		echo '<h2>REDAKTORSKÉ POZICE</h2>'.PHP_EOL;
		echo '<img src="/web/images/writing_sicmaggot.png" title="Sicmaggot Rock &amp; Metal Blog" alt="Sicmaggot Rock &amp; Metal Blog" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Sicmaggot Rock &amp; Metal Blog</strong> - Toto je má nejvděčnější redaktorská štace, do které jsem byl uveden v&nbsp;listopadu 2011 a&nbsp;skončil jsem zhruba s&nbsp;koncem roku 2013. <a href="http://sicmaggot.cz/" title="Sicmaggot Rock &amp; Metal Blog">Blog Sicmaggot</a> pořádal nábor nových redaktorů a&nbsp;mě napadlo to zkusit, což se setkalo s&nbsp;příznivým ohlasem zdejšího "šéfa" "H". Těžištěm mé práce byly recenze, psaní novinek a&nbsp;reportů z&nbsp;koncertů jsem se věnoval spíše okrajově. Frekvence mého publikování byla cca 2-3 recenze za měsíc. Kromě toho jsem ještě občas do zdejšího systému dobrovolných "minirecenzí" ostatních redaktorů k&nbsp;aktuálně recenzovanému albu, plus mé příspěvky figurovaly v&nbsp;tradičních <a href="http://sicmaggot.cz/rubrika/redakcni-eintopf" title="Sicmaggot - Redakční Eintopf">periodických redakčních rubrikách</a>. Později jsem svou aktivitu utlumoval, až nakonec úplně skončila.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<img src="web/images/writing_metalzone.png" title="Metalzone.info" alt="Metalzone.info" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Metalzone.info</strong> - Bohužel už neexistující <a href="http://www.metalzone.info/cz/" title="Metalzone.info">Metalzone</a> de facto nastartovalo mou "organizovanou" redakční činnost. Sem tam jsem nějaké recenze nebo reporty napsal sám od sebe už dřív, nicméně teprve díky Ćombolovi, který mě někdy v lednu 2009 sám oslovil s&nbsp;nabídkou pozice v&nbsp;jeho redaktorském týmu, se mojí práci dal poprvé nějaký směr a&nbsp;řád. Krom napsání několika recenzí jsem byl využíván coby překladatel prací ostatních redaktorů do anglického jazyka a&nbsp;ještě jsem jménem tohoto webmagazínu byl na několika koncertech coby akreditovaný reportér. Bohužel musím říct, že stran Čombola nebyl příliš velký tlak na vymáhání práce, což přirozeně vedlo k&nbsp;jistému "flákání se". Občas ho ještě vídám, jak píše něco hudebního na Facebooku, ale už nejsme v kontaktu. A&nbsp;jak jsem nedávno zjistil - stránky nefungují...'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<img src="web/images/writing_metalstorm.png" title="Metalstorm.net" alt="Metalstorm.net" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Metalstorm.net</strong> - <a href="http://www.metalstorm.net/" title="Metalstorm.net">Metalstorm</a> je velký mezinárodní metalový portál nabízející krom standardního webzinového materiálu tvořeného zdejší redakcí i&nbsp;databázi kapel a&nbsp;možnost zapojení se registrovaných uživatelů. A&nbsp;to jak do diskuse, tak do editace zmíněné databáze a&nbsp;dokonce i&nbsp;amatérského zapojení do redaktorské práce. To byla možnost, kterou jsem svého času hojně využíval - během mého tříletého působení tady jsem zcela spontánně stvořil dvě "guest" recenze a&nbsp;také  zaslal celkem slušný počet <a href="http://metalstorm.net/events/news.php?user_id=23926" title="Mé novinky na Metalstorm.net">novinek</a>. Mimoto jsem se též úspěšně snažil být aktivní v&nbsp;oblasti editace databáze a&nbsp;v&nbsp;samotné diskusi. "Ellrohira" jde ve <a href="http://www.metalstorm.net/users/" title="Memberlist">statistikách</a> stále ještě najít hodně vysoko, a&nbsp;stále tam občas zajdu a&nbsp;sem tam i&nbsp;něco okomentuju, ale už to není ono.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<img src="web/images/writing_blog.png" title="Howling Iron Metal Blog" alt="Howling Iron Metal Blog" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Howling Iron Metal Blog</strong> - Můj <a href="http://ellrohir.blog.cz/" title="Howling Iron Metal Blog">blog</a> se snaží už několik let držet tradici "na každý den jeden hudební tip dne". To se většinu času daří, s&nbsp;ostatní aktivitou už je to horší, počet příspěvků ročně pravidelně klesá. Ale sem tam jsem dřív něco napsal...'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
}