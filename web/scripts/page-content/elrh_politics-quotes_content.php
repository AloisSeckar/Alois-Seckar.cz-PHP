<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
	    echo '<h1>GLOSY</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Sekce <strong>Glosy</strong> obsahuje mé kratší myšlenky, diskusní příspěvky nebo komentáře k&nbsp;webovým odkazům, které jsou příliš krátké na samostatný článek, ale přijdou mi zajímavé a&nbsp;zaznamenáníhodné.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
		echo '<strong>Poslední update: '.$page_data["last"]["value"].'</strong>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<table>'.PHP_EOL;
			// headers
			echo '<tr>'.PHP_EOL;
				echo '<th>Datum</th>'.PHP_EOL;
				echo '<th class="left">Glosa</th>'.PHP_EOL;
				echo '<th>Téma</th>'.PHP_EOL;
				echo '<th>Odkaz</th>'.PHP_EOL;
			// display stored quotes
			if (!empty($page_data["quotes"])) {
				foreach ($page_data["quotes"] as $row) {
					echo '<tr>'.PHP_EOL;
						echo '<td>'.$row["date"].'</td>'.PHP_EOL;
						echo '<td class="justify">'.$row["content"].'</td>'.PHP_EOL;
						echo '<td>'.$row["topic"].'</td>'.PHP_EOL;
						if ($row["link"]!="null") {
							echo '<td><a href="'.$row["link"].'" title="K odkazu"><img src="/web/skin/left_arrow.png" title="K odkazu" alt="K odkazu" height="10" /></a></td>'.PHP_EOL;
						} else {
							echo '<td><img src="/web/skin/gray_arrow.png" title="Bez odkazu" alt="Bez odkazu" height="10" /></td>'.PHP_EOL;
						}
					echo '</tr>'.PHP_EOL;
				}
				// show amount of entries + "load more" link (if possible)
				echo '<tr><td colspan="4"><hr />'.PHP_EOL;
					if ($page_data["total"]["entries"]>$page_data["limit"]) {
						$new_limit = $page_data["limit"] + 25;
						echo 'Zobrazeno <strong>'.$page_data["limit"].'</strong> záznamů. <a href="/politics-quotes/'.$new_limit.'" title="Načíst více...">Načíst více...</a>';
					} else {
						echo 'Zobrazeno <strong>'.$page_data["total"]["entries"].'</strong> záznamů.'.PHP_EOL;
					}
				echo '</td></tr>'.PHP_EOL;
			} else {
				// no quotes
				echo '<tr>'.PHP_EOL;
					echo '<td colspan="4">Nenalezeny žádné příspěvky</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			}
		echo '</table>'.PHP_EOL;			
	}
}