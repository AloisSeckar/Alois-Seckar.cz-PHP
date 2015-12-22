<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>PRÁCE - PROGRAMOVÁNÍ</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Přehled mých realizovaných programátorských projektů. Hodně to jsou weby, krom toho několik menších programů a&nbsp;yložených jednorázovek.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Kde je to možné, snažím se dávat zdrojové kódy na <strong>GitHub</strong> -&nbsp;<a href="https://github.com/AloisSeckar">https://github.com/AloisSeckar</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Nikdo není dokonalý a&nbsp;programy už vůbec ne (programátorský axiom: "V&nbsp;libovolném programu je alespoň jedna chyba."), proto prosím, pokud v mých výtvorech nějaký bug objevíte, dejte mi o tom vědět. Chyby v&nbsp;programech lze hlásit na seckar@svobodni.cz či přes můj Facebook (viz <a href="/contacts">kontakty</a>) nebo do <em>Issues</em> ve výše zmíněném GitHubu.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<hr />';
		// webs section
		echo '<h2>WEBY</h2>'.PHP_EOL;
		echo '<h3>Stará Krč</h3>'.PHP_EOL;
		echo '<a href="http://krc-historie.cz" title="Stará Krč"><img src="/web/images/work_krc.jpg" title="Stará Krč" alt="Stará Krč" /></a>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Stará Krč</strong> - Pro tátu vytvořený systém pro nahrávání a&nbsp;prezentaci náhledů historických fotografií z&nbsp;jeho sbírky, který se rozrostl v&nbsp;navštěvovaný informační web o&nbsp;historii naší čtvrti v&nbsp;Praze. Oba máme s&nbsp;webem velké plány, trochu se nedostává času. Současná podoba stránek je k&nbsp;vidění na <a href="http://krc-historie.cz" title="Stará Krč">http://krc-historie.cz</a>.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> <a href="https://github.com/AloisSeckar/StaraKrc">https://github.com/AloisSeckar/StaraKrc</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<h3>Osobní web</h3>'.PHP_EOL;
		echo '<a href="/" title="Alois Sečkár - Domovská stránka"><img src="/web/images/work_pers.jpg" title="Alois Sečkár" alt="Alois Sečkár" /></a>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Osobní web</strong> - I&nbsp;tento web je produktem mé programátorské práce a&nbsp;dalo by se říct vrcholným dílem. Postupně se ho budu snažit dále vylepšovat a&nbsp;rozvíjet.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> <a href="https://github.com/AloisSeckar/Alois-Seckar.cz">https://github.com/AloisSeckar/Alois-Seckar.cz</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<h3>Metin 2 Encyklopedie</h3>'.PHP_EOL;
		echo '<img src="/web/images/work_m2e.jpg" title="Metin 2 Encyklopedie" alt="Metin 2 Encyklopedie" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Metin 2 Encyklopedie</strong> - Od nuly budovaný php-based redakční systém, na kterém jsem se dá se říct učil pracovat s&nbsp;PHP, vyvíjený speciálně pro potřeby encyklopedie k&nbsp;on-line hře <a href="http://www.metin2.cz/" title="Metin 2">Metin 2</a>. Byl to ambiciózní nápad a&nbsp;na projektu jsem strávil téměř 2&nbsp;roky. Je do dosud mé největší dílo, kterého si i&nbsp;nejvíc cením. Bylo oblíbené mezi hráči a&nbsp;Encyklopedie, ač neoficiální, měla dobré jméno a&nbsp;aktivní uživatelskou komunitu. O&nbsp;některé věci, jako například vzhled a&nbsp;základní JavaScript, se tehdy postaral kolega <strong>Grujojin</strong>. Na konci listopadu 2010 jsem se z&nbsp;časových i&nbsp;jiných důvodů vzal čelního a&nbsp;výlučného postavení mezi vývojáři a&nbsp;dál už to moc dobře nešlo. I&nbsp;jsem se zkusil vrátit, ale už jsem se v&nbsp;kódu nevyznal a&nbsp;nebavilo mě to, navíc už hru nehrálo zdaleka tolik lidí -&nbsp;život jde zkrátka dál. Web teoreticky stále "žije" na adrese <a href="http://www.metin2encyklopedie.cz/" title="Metin 2 Encyklopedie">http://www.metin2encyklopedie.cz/</a>, ale při kontrole v prosinci 2015 nefungovala databáze. Podívat se tedy můžete alespoň na poslední existující <a href="https://web.archive.org/web/20141220135918/http://www.metin2encyklopedie.cz/" title="Metin 2 Encyklopedie">otisk úvodní stránky</a> z&nbsp;1.&nbsp;srpna&nbsp;2015.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> pro tento web bohužel není k&nbsp;dispozici.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<h3>BERmuda Cup - Online Registrace</h3>'.PHP_EOL;
		echo '<img src="/web/images/work_bermuda.jpg" title="BERmuda Cup - Online Registrace" alt="BERmuda Cup - Online Registrace" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>BERmuda Cup - Online Registrace</strong> - Kdysi v&nbsp;dávné prehistorii jsem kamarádovi zapracoval do webu výpis závodů jachtařského klubu a&nbsp;elektronické registrace do závodu. Web, na kterém to všechno bylo, už dnes není dostupný, zůstal jen screenshot. Přes relativní jednoduchost však systém fungoval několik let zdárně a&nbsp;celá řada jachtařů se přes něj přihlásila na závod.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> pro tento web bohužel není k&nbsp;dispozici.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<hr />';
		// programs section
		echo '<h2>PROGRAMY</h2>'.PHP_EOL;
		echo '<h3>MP3xtreme</h3>'.PHP_EOL;
		echo '<a href="/web/content/prog/MP3xtreme.zip" title="MP3xtreme"><img src="/web/images/work_mp3.jpg" title="MP3xtreme" alt="MP3xtreme" /></a>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>MP3xtreme</strong> - Jednoduchý, ale funkční přehravač MP3 souborů udaný v&nbsp;prvním semestru programování na MFF jako zápočtový program. Krom vlastního přehrávání nabízí různé jednoduché grafické prvky jako estetický doplněk. Ke stažení v&nbsp;<a href="web/content/prog/MP3xtreme.zip" title="MP3xtreme">.zip&nbsp;formátu</a> (1.5&nbsp;MB)'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> <a href="https://github.com/AloisSeckar/MP3xtreme">https://github.com/AloisSeckar/MP3xtreme</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<h3>Nightwish Puzzle</h3>'.PHP_EOL;
		echo '<a href="web/content/prog/NightwishPuzzle.zip" title="Nightwish Puzzle"><img src="web/images/work_nw.jpg" title="Nightwish Puzzle" alt="Nightwish Puzzle" /></a>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>Nightwish Puzzle</strong> - V&nbsp;Javě psaná klasická logická hra. Máte obrázek rozdělený na zamíchané kostičky, jedno pole je volné a&nbsp;vašim úkolem je složit obrázek jak patří. Měří se čas. Na výběr je ze tří obtížností (3x3, 4x4 a&nbsp;6x6 kostiček) a&nbsp;dvou obrázků -&nbsp;tématicky jsem zvolil obaly dvou řadových alb kapely Nightwish. Ke stažení v&nbsp;<a href="web/content/prog/NightwishPuzzle.zip" title="Nightwish Puzzle">.zip&nbsp;formátu</a> (19.2&nbsp;MB)'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> <a href="https://github.com/AloisSeckar/NightwishPuzzle">https://github.com/AloisSeckar/NightwishPuzzle</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
		echo '<hr />';
		// quick items section
		echo '<h2>RYCHLOVKY</h2>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
		echo 'Jednorázové PHP mini-prográmky, které se mi občas na něco hodily. Nejsou nic extra, ale slouží (nebo sloužily) svému účelu.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>ELRH Hash</strong> - Občas se může hodit rychle si zjistit hashovací kód nějakého řetězce. Abych nemusel pokaždé onen primitivní skript psát znovu, založil jsem tuto utilitku. Můžete si zde nechat zahashovat libovolné slovo s použitím několika hashovacích funkcí. Aktuálně umí MD5, SHA-1 a&nbsp;kombinaci SHA-1(MD5()). Zasloužila by si update. Stránka (verze 2012-01-02) je k&nbsp;dispozici <a href="/web/content/util/elrh_hash.php" title="ELRH Hash">ZDE</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>ELRH Rand</strong> - Generování náhodných čísel pomocí php funkce <em>mt_rand()</em>. Sem tam docela užitečná věcička. Stvořil jsem jí, když jsem připravoval na maturitu. Stránka (verze 2012-01-02) je k&nbsp;dispozici <a href="/web/content/util/elrh_rand.php" title="ELRH Rand">ZDE</a>.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>GitHub:</strong> <a href="https://github.com/AloisSeckar/Misc">https://github.com/AloisSeckar/Misc</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<hr />';
	}
}