<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>VERZE SYSTÉMU</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Postupný vývoj těchto stránek:'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		//
		echo '<table>'.PHP_EOL;
		echo '<tr>'.PHP_EOL;
			echo '<th class="versions">Verze</th>'.PHP_EOL;
			echo '<th class="versions">Datum</th>'.PHP_EOL;
			echo '<th class="versions">Popis</th>'.PHP_EOL;
		echo '</tr>'.PHP_EOL;
		foreach ($page_data["versions"] as $version_info) {
			echo '<tr>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo '<strong>'.$version_info["version"].'</strong>'.PHP_EOL;
				echo '</td>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo $version_info["date"].PHP_EOL;
				echo '</td>'.PHP_EOL;
				echo '<td class="versions">'.PHP_EOL;
					echo $version_info["dscr"].'<hr />'.PHP_EOL;
				echo '</td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
		}
		echo '</table>'.PHP_EOL;
	}
}