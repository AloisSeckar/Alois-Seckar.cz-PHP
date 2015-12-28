<?php
class ELRHPageContentRenderer {
	public static function renderContent($page) {
		echo '<p class="red-note">'.PHP_EOL;
			echo 'Pokusili jste se zobrazit stránku <strong>'.$page.'</strong>, která ale neexistuje, nebo nebyla nalezena. '.PHP_EOL;
			echo 'Pokud se domníváte, že tento obsah by fungovat měl, prosím, dejte mi vědět.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p class="centered">'.PHP_EOL;
			echo '<a href="/">Zpět na index</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
}
?>