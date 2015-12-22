<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>ROZCESTNÍK (politika)</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Odkazy na zajímavé nebo pro mě důležité weby s&nbsp;politickou tématikou:'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		//
		include_once getcwd().'/web/scripts/page-content/elrh_content_helper.php';
		ELRHContentHelper::renderLinksTable($page_data["links"]);
	}
}