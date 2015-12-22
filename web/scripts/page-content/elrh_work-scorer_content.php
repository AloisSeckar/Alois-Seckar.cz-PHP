<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>PRÁCE - ZÁPIS BASEBALL/SOFTBAL</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Zde najdete bližší představení činnosti baseballového a&nbsp;softbalového zapisovatele mezinárodních turnajů evropské úrovně. Této činnosti jsem se řízení osudu začal věnovat v&nbsp;létě 2009 a&nbsp;od roku 2011 jsem za ní už i&nbsp;poměrně slušně finančně honorován. V této slibné kariéře zábavné práce hodlám pokračovat, jak jen to osobní rozvrh dovolí.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Odkaz na zapisovatelský web ČBA mé výroby: <a href="http://online.baseball.cz/">http://online.baseball.cz/</a>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<h2>PŘEDSTAVENÍ ČINNOSTI</h2>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Pod zkratkou <strong>TASBS</strong> se skrývá program <strong>"The Automated Scorebook for Baseball &amp; Softball"</strong> od <a href="http://www.statcrew.com/html/baseball1.shtml" title="Web Stats Crew Software">Stats Crew Software</a>. Tento program začala užívat <a href="http://softball.cz/" title="Web ČSA">Česká Softballová Asociace</a> pro elektronický zápis zápasových statistik na mezinárodních softballových turnajích pořádaných u&nbsp;nás. Já jsem měl to štěstí, že jsem se náhodou nachomýtl coby dobrovolník k prvnímu turnaji v roce 2009, kde byl TASBS zkoušen a&nbsp;byl jsem coby "osoba IT gramotná" pověřen, abych se s&nbsp;programem seznámil a&nbsp;naučil se ho. To se mi povedlo natolik, že jsem byl osloven i&nbsp;o&nbsp;rok později a&nbsp;od té doby pravidelně. Od roku 2012 jsem se navíc dostal i&nbsp;k&nbsp;baseballu, přičemž <a href="http://baseball.cz/" title="Web ČBA">Česká Baseballová Asociace</a> nyní používá <strong>TASBS</strong> pro všechny zápasy extraligy a&nbsp;já mám na starosti organizaci zapisovatelů. Vzhledem k&nbsp;relativní zastaralosti programu se uvažuje o&nbsp;změně (ČSA už ji provedla a používá software <strong>iScore</strong>), uvidíme, co budoucnost přinese.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Co vlastně program umí? Softbalisté si stejně jako baseballisté vedou poměrně podrobné statistiky všeho možného, co se během zápasu událo. Propracovaný starosvětský systém funguje ručně -&nbsp;zápisem herních situací na více či méně sofistikovaný papír. Odtud se pak statistiky ručně přepočítávají. S&nbsp;nástupem technologií se začaly následně ukládat do databází, všechno stále ručně, maximálně s&nbsp;nějakým usnadněním v&nbsp;podobě formulářů nebo Excelovských maker. A&nbsp;z&nbsp;databáze je zase ty údaje potřeba nějak dostat a&nbsp;vypsat -&nbsp;další práce, i&nbsp;když zde jen jednorázová.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo '<strong>TASBS</strong> tenhle proces prakticky automatizuje. Uživatel pouze zadává do programu herní situace (přes poněkud archaické rozhraní, ale dá se na něj zvyknout a&nbsp;není aspoň příliš složité) a&nbsp;program z&nbsp;toho sám vytváří zpravodajské výstupy a&nbsp;počítá statistiky. Vše se dá snadno exportovat do html a&nbsp;díky automatickém FTP posílat v&nbsp;podstatě v&nbsp;reálném čase na web. Není divu, že se tento systém používá pro živé zpravodajství, především z&nbsp;větších turnajů, v některých zemích i&nbsp;ligových soutěží.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Náplní mé práce bývá předně ovládání programu, což zahrnuje pozorné sledování zápasů a&nbsp;okamžitý zápis herních situací. Tohle je poměrně snadná záležitost a&nbsp;je relativně jednoduchá. Druhá věc, do které se už jen tak někdo nehrne, je zajistit plynulé fungování - to jest aby běželo internetové připojení, aby se data a&nbsp;soubory posílaly kam měly, aby se nejpozději na konci každého dne udělal a&nbsp;nahrál statistický souhrn. To je hlavní jádro práce. Evropské turnaje obvykle trvají týden a&nbsp;je to maraton od rána do večera. Když člověk "pouze" zapisuje, je to jednodušší, když je zároveň i&nbsp;vrchní dohlížitel a&nbsp;musí vše zpracovávat, nezastaví se skutečně až dlouho do noci. Ale stojí to za to. Cestujete, starají se o&nbsp;vás, vidíte kvalitní zápasy a&nbsp;ještě vám mnohdy zaplatí.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<h2>ABSOLVOVANÉ TURNAJE</h2>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Následuje průběžně aktualizovaný přehled turnajů (softbal i&nbsp;baseball), které mám v&nbsp;popsané pozici zapisovatele, ať už coby "hlavního" či "pomocného", za sebou:'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<table>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<th style="padding-right: 5px;">Datum</th>'.PHP_EOL;
				echo '<th style="padding-right: 5px;">Sport</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Turnaj</th>'.PHP_EOL;
				echo '<th style="text-align: left;">Místo</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			echo '<tr><td colspan="4" style="height: 5px;"></td></tr>'.PHP_EOL;
			if (!empty($page_data["tournaments"])) {
				foreach ($page_data["tournaments"] as $row) {
					// display tournaments 
					echo '<tr>'.PHP_EOL;
						echo '<td>'.$row["date"].'</td>'.PHP_EOL;
					    echo '<td>'.$row["sport"].'</td>'.PHP_EOL;
					    echo '<td style="padding-right: 5px; text-align: left;"><a href="'.$row["link"].'" title="'.$row["title"].'">'.$row["title"].'</a></td>';
					   echo '<td style="padding-right: 5px; text-align: left;">'.$row["location"].'</td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				}
			} else {
				// no tournaments found
				echo '<tr><td colspan="4">Nenalezeny žádné turnaje</td></tr>'.PHP_EOL;
			}
		echo '</table>'.PHP_EOL;
	}
}