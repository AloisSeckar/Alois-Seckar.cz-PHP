<?php
class ELRHPageContentRenderer {
	public static function renderContent($page) {
		echo '<p class="red-note">';
			echo 'Pokusili jste se zobrazit stránku <strong>'.$page.'</strong>, která ale neexistuje, nebo nebyla nalezena. ';
			echo 'Pokud se domníváte, že tento obsah by fungovat měl, prosím, dejte mi vědět.';
		echo '</p>';
		echo '<p class="centered">';
			echo '<a href="http://alois-seckar.cz">Zpět na index</a>';
		echo '</p>';
	}
}
?>