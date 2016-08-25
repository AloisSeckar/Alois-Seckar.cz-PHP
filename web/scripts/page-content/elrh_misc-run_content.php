<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>BĚH</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Od jara 2013 se snažím pravidelně běhat, a protože jsem soutěživý typ, tak si všechny výkony od začátku zaznamenávám. A protože jsem taky hračička, zde je stránka mých běžeckých statistik.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Defaultně je vidět posledních 30 běhů, volitelně je zapnout přehled úplně všech, nebo záznamy filtrovat podle data či trati.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		// runs section
		echo '<h2>STATISTIKA BĚHŮ</h2>'.PHP_EOL;
		// display filter
		echo '<form method="post" action="misc-run">'.PHP_EOL;
			echo '<table><tr><td>'.PHP_EOL;
				// mode
				echo '<strong>Zobrazit:</strong>&nbsp;'.PHP_EOL;
				echo '<select name="filter_mode">'.PHP_EOL;
					echo '<option value="last30">Posledních 30</option>'.PHP_EOL;
					if ($page_data["filter"]["mode"]=="last 10") {
						echo ' <option value="last10" selected>Posledních 10</option>'.PHP_EOL;
					} else {
						echo ' <option value="last10">Posledních 10</option>'.PHP_EOL;
					}
					if ($page_data["filter"]["mode"]=="all") {
						echo ' <option value="all" selected>Všechno</option>'.PHP_EOL;
					} else {
						echo ' <option value="all">Všechno</option>'.PHP_EOL;
					}
				echo '</select>'.PHP_EOL;
				// track
				echo '&nbsp;&nbsp;<strong>Trať:</strong>&nbsp;'.PHP_EOL;
				echo '<select name="filter_track">'.PHP_EOL;
					echo '<option value="all">Vše</option>'.PHP_EOL;
					//echo '<option value="-1"';
					//	if ($page_data["filter"]["track"]==-1) { echo ' selected'; }
					//echo '>-</option>'.PHP_EOL;
					foreach ($page_data["tracks"] as $row) {
						echo '<option value="'.$row["id"].'"';
						if ($page_data["filter"]["track"]==$row["id"]) { echo ' selected'; }
						echo '>'.$row["name"].'</option>'.PHP_EOL;
					}
				echo '</select>'.PHP_EOL;
				// year
				echo '&nbsp;&nbsp;<strong>Období:</strong>&nbsp;'.PHP_EOL;
				echo '<select name="filter_year">'.PHP_EOL;
					echo '<option value="all">Vše</option>'.PHP_EOL;
					foreach ($page_data["years"] as $row) {
						echo '<option value="'.$row.'"';
						if ($page_data["filter"]["year"]==$row) { echo ' selected'; }
						echo '>'.$row.'</option>'.PHP_EOL;
					}
				echo '</select>'.PHP_EOL;
				// month
				echo '<select name="filter_month">'.PHP_EOL;
					echo '<option value="all">Vše</option>'.PHP_EOL;
					foreach ($page_data["months"] as $row) {
						echo '<option value="'.$row.'"';
						if ($page_data["filter"]["month"]==$row) { echo ' selected'; }
						echo '>'.$row.'</option>'.PHP_EOL;
					}
				echo '</select>'.PHP_EOL;
				// sort by
				echo '&nbsp;&nbsp;<strong>Řadit podle:</strong>&nbsp;'.PHP_EOL;
				echo '<select name="filter_sort">'.PHP_EOL;
					echo '<option value="date">Datum</option>'.PHP_EOL;
					echo ' <option value="length"';
						if ($page_data["filter"]["sort"]=="length") { echo ' selected'; } 
					echo '>Vzdálenost</option>'.PHP_EOL;
					echo ' <option value="time"';
						if ($page_data["filter"]["sort"]=="time") { echo ' selected'; } 
					echo '>Čas</option>'.PHP_EOL;
					echo ' <option value="speed"';
						if ($page_data["filter"]["sort"]=="speed") { echo ' selected'; } 
					echo '>Rychlost</option>'.PHP_EOL;
				echo '</select>'.PHP_EOL;
				// sort asc/desc
				echo '<select name="filter_sort_desc">'.PHP_EOL;
					echo '<option value="true">Sestupně</option>'.PHP_EOL;
					echo ' <option value="false"';
						if ($page_data["filter"]["sort_desc"]=="false") { echo ' selected'; } 
					echo '>Vzestupně</option>'.PHP_EOL;
				echo '</select>'.PHP_EOL;
				// submit
				echo '&nbsp;&nbsp;<input type="submit" value="Filtrovat" />'.PHP_EOL;
			echo '</td></tr></table>'.PHP_EOL;
		echo '</form>'.PHP_EOL;
		// display run entries (sorted by date desc, filtered by selection)
		if (!empty($page_data["runs"])) {
			echo '<table class="runs">'.PHP_EOL;
				// totals
				echo '<tr>'.PHP_EOL;
					// number of runs
					echo '<td class="runs"><strong>Celkem: '.$page_data["total"]["count"].'x</strong></td>'.PHP_EOL;
					// run track
					echo '<td class="runs"></td>'.PHP_EOL;
					// run length
					echo '<td class="runs"><strong>'.$page_data["total"]["length"].'</strong></td>'.PHP_EOL;
					// run time
					echo '<td class="runs"><strong>'.$page_data["total"]["time"].'</strong></td>'.PHP_EOL;
					// avg speed
					echo '<td class="runs"><strong>'.$page_data["total"]["speed"].' km/h</strong></td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
				//
				foreach ($page_data["runs"] as $row) {
					echo '<tr>'.PHP_EOL;
						// run date
						echo '<td class="runs"><strong>'.$row["date"].'</strong></td>'.PHP_EOL;
						// run track
						echo '<td class="runs-center">'.$row["track"].'</td>'.PHP_EOL;
						// run length
						echo '<td class="runs">'.$row["length"].' m</td>'.PHP_EOL;
						// run time
						echo '<td class="runs">'.$row["time"].'</td>'.PHP_EOL;
						// avg speed
						echo '<td class="runs">'.$row["speed"].' km/h</td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				}
				// totals
				echo '<tr>'.PHP_EOL;
					// run date
					echo '<td class="runs"><strong>Celkem: '.$page_data["total"]["count"].'x</strong></td>'.PHP_EOL;
					// run track
					echo '<td class="runs"></td>'.PHP_EOL;
					// run length
					echo '<td class="runs"><strong>'.$page_data["total"]["length"].'</td>'.PHP_EOL;
					// run time
					echo '<td class="runs"><strong>'.$page_data["total"]["time"].'</td>'.PHP_EOL;
					// avg speed
					echo '<td class="runs"><strong>'.$page_data["total"]["speed"].' km/h</td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
				//
			echo '</table>'.PHP_EOL;
		} else {
			// no runs
			echo '<p class="centered">'.PHP_EOL;
				echo 'Nenalezeny žádné záznamy podle zvolených kritérií'.PHP_EOL;
			echo '</p>'.PHP_EOL;
		}
		// input form for admin
		if (isset($_SESSION["user"])) {
			echo '<p><br /></p>';
			echo '<h3 style="text-align: center;">Vložit nový běh</h3>';
			echo '<form method="post" action="/misc-run">'.PHP_EOL;
				echo '<table>'.PHP_EOL;
					if (isset($page_data["admin_message"])) {
						echo '<tr><td colspan="2">'.$page_data["admin_message"].'</td></tr>'.PHP_EOL;
					}
					echo '<tr>'.PHP_EOL;
						echo '<td><strong>Datum:</strong></td>'.PHP_EOL;
						echo '<td><input type="text" name="admin_date"';
							if (isset($page_data["admin_input"]["date"])) { echo ' value="'.$page_data["admin_input"]["date"].'"'; }
						echo ' /></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td><strong>Trasa:</strong></td>'.PHP_EOL;
						echo '<td>'.PHP_EOL;
							echo '<select name="admin_track" style="width: 100%;">'.PHP_EOL;
							echo '<option value="-1">-</option>';
							foreach ($page_data["tracks"] as $row) {
								echo '<option value="'.$row["id"].'"';
								if ($row["id"]==$page_data["admin_input"]["track"]) { echo ' selected'; }
								echo '>'.$row["name"].'</option>'.PHP_EOL;
							}
							echo '</select>'.PHP_EOL;
						echo '</td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td><strong>Vzdálenost:</strong></td>'.PHP_EOL;
						echo '<td><input type="text" name="admin_length"';
							if (isset($page_data["admin_input"]["length"])) { echo ' value="'.$page_data["admin_input"]["length"].'"'; } else { echo ' value=" "'; } 
						echo ' /></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td><strong>Čas:</strong></td>'.PHP_EOL;
						echo '<td><input type="text" name="admin_time"';
							if (isset($page_data["admin_input"]["time"])) { echo ' value="'.$page_data["admin_input"]["time"].'"'; }
						echo ' /></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
					echo '<tr>'.PHP_EOL;
						echo '<td colspan="2"><input type="submit" value="Odeslat" /></td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				echo '</table>'.PHP_EOL;
			echo '</form>'.PHP_EOL;
		}
	}
}