<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>MAPA STRÁNEK</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Navigační schéma stránek: '.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<ul>'.PHP_EOL;
			echo '<li><strong><a href="index" title="Úvodní stránka">INDEX</a></strong></li>'.PHP_EOL;
			echo '<li>- <a href="contacts" title="Kontakty na mě">Kontakty</a>'.PHP_EOL;
			echo '<li>- <a href="versions" title="Verze stránek">Verze stránek</a>'.PHP_EOL;
			echo '<li>- <a href="sitemap" title="Mapa stránek">Mapa stránek</a>'.PHP_EOL;
			echo '<li><strong><a href="work" title="Osobní prezentace">PRÁCE</a></strong></li>'.PHP_EOL;
			echo '<li>- <a href="work-cv" title="Můj životopis">Životopis</a>'.PHP_EOL;
			echo '<li>- <a href="work-it" title="Programátorské výtvory">Programování</a>'.PHP_EOL;
			echo '<li>- <a href="work-other" title="Další práce">Ostatní</a>'.PHP_EOL;
			echo '<li>-- <a href="work-reviews" title="Hudební publicistika">Hudební publicistika</a>'.PHP_EOL;
			echo '<li>-- <a href="work-scorer" title="Zápis baseball/softbal">Zápis baseball/softbal)</a>'.PHP_EOL;
			echo '<li>- <a href="work-links" title="Pracovní rozcestník">Rozcestník</a>'.PHP_EOL;
			echo '<li><strong><a href="politics" title="Politické názory">POLITIKA</a></strong></li>'.PHP_EOL;
			echo '<li>- <a href="politics-blog" title="Archiv článků">Články</a>'.PHP_EOL;
			echo '<li>- <a href="politics-quotes" title="Krátké postřehy">Glosy</a>'.PHP_EOL;
			echo '<li>- <a href="politics-diary" title="Politická kariéra">Deník politika</a>'.PHP_EOL;
			echo '<li>- <a href="politics-library" title="LIberální LIteratura">Knihovna</a>'.PHP_EOL;
			echo '<li>- <a href="politics-links" title="Politický rozcestník">Rozcestník</a>'.PHP_EOL;
			echo '<li><strong><a href="misc" title="Ostatní aktivity">ZÁBAVA</a></strong></li>'.PHP_EOL;
			echo '<li>- <a href="misc-writing" title="Literární tvorba">Psaní</a>'.PHP_EOL;
			echo '<li>- <a href="misc-history" title="Historické okénko">Historie</a>'.PHP_EOL;
			echo '<li>- <a href="misc-soft" title="Hraní softbalu">Softbal</a>'.PHP_EOL;
			echo '<li>- <a href="misc-hansp" title="Hraní fotbalu">Hanspaulka</a>'.PHP_EOL;
			echo '<li>- <a href="misc-photo" title="Moje fotografie">Fotografování</a>'.PHP_EOL;
			echo '<li>- <a href="misc-music" title="Moje hudba">Hudba</a>'.PHP_EOL;
			echo '<li>- <a href="misc-links" title="Všeobecný rozcestník">Rozcestník</a>'.PHP_EOL;
		echo '</ul>'.PHP_EOL;
	}
}