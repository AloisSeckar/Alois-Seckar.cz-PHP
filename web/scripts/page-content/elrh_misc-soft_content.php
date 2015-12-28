<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>SOFTBAL</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Jak říká <a href="http://cs.wikipedia.org/wiki/Softball" target="_blank" title="Softbal na wikipedii">wikipedie</a>: "Softbal je kolektivní míčový sport, vyvinutý z baseballu jako jeho rychlejší a&nbsp;na prostor méně náročná verze." Rozepisovat tu pravidla podle mého cenu nemá, každý nechť si to v&nbsp;případě zájmu dohledá. Důležitější je, že je pro mě softbal důležitou součástí života, oblíbenou volnočasovou aktivitou, záminkou k&nbsp;cestování a&nbsp;také společenskou záležitostí.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<h2>KARIÉRA</h2>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Softbalisti hrají na statistiky. Kdo říká, že ne, tak kecá :) Současný klub <strong>Mistrál&nbsp;Praha</strong> mi mé výkony posledních dvou sezón zatím tají, tak aspoň přehled z&nbsp;předchozích šesti let v&nbsp;<strong>MFF&nbsp;Neratovice</strong>'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		// stats
		echo '<table>'.PHP_EOL;
			echo '<tr>'.PHP_EOL;
				echo '<th>Sezóna</th>'.PHP_EOL;
				echo '<th></th>'.PHP_EOL;
				echo '<th>G</th>'.PHP_EOL;
				echo '<th>AB</th>'.PHP_EOL;
				echo '<th>BA</th>'.PHP_EOL;
				echo '<th>H</th>'.PHP_EOL;
			    echo '<th>2B</th>'.PHP_EOL;
				echo '<th>3B</th>'.PHP_EOL;
				echo '<th>HR</th>'.PHP_EOL;
				echo '<th>R</th>'.PHP_EOL;
				echo '<th>RBI</th>'.PHP_EOL;
				echo '<th>BB</th>'.PHP_EOL;
				echo '<th>HB</th>'.PHP_EOL;
				echo '<th>SH</th>'.PHP_EOL;
				echo '<th>SB</th>'.PHP_EOL;
				echo '<th>SO</th>'.PHP_EOL;
				echo '<th>O</th>'.PHP_EOL;
				echo '<th></th>'.PHP_EOL;
				echo '<th>IP</th>'.PHP_EOL;
				echo '<th>PO</th>'.PHP_EOL;
				echo '<th>A</th>'.PHP_EOL;
				echo '<th>E</th>'.PHP_EOL;
				echo '<th>FA</th>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
			if (!empty($page_data["stats"])) {
				foreach ($page_data["stats"] as $row) {
					echo '<tr>'.PHP_EOL;
						echo '<td>'.$row["year"].'</td>'.PHP_EOL;
						echo '<td></td>'.PHP_EOL;
						echo '<td>'.$row["G"].'</td>'.PHP_EOL;
						echo '<td>'.$row["AB"].'</td>'.PHP_EOL;
						echo '<td>'.$row["BA"].'</td>'.PHP_EOL;
						echo '<td>'.$row["H"].'</td>'.PHP_EOL;
						echo '<td>'.$row["2B"].'</td>'.PHP_EOL;
						echo '<td>'.$row["3B"].'</td>'.PHP_EOL;
						echo '<td>'.$row["HR"].'</td>'.PHP_EOL;
						echo '<td>'.$row["R"].'</td>'.PHP_EOL;
						echo '<td>'.$row["RBI"].'</td>'.PHP_EOL;
						echo '<td>'.$row["BB"].'</td>'.PHP_EOL;
						echo '<td>'.$row["HB"].'</td>'.PHP_EOL;
						echo '<td>'.$row["SH"].'</td>'.PHP_EOL;
						echo '<td>'.$row["SB"].'</td>'.PHP_EOL;
						echo '<td>'.$row["SO"].'</td>'.PHP_EOL;
						echo '<td>'.$row["O"].'</td>'.PHP_EOL;
						echo '<td></td>'.PHP_EOL;
						echo '<td>'.$row["IP"].'</td>'.PHP_EOL;
						echo '<td>'.$row["PO"].'</td>'.PHP_EOL;
						echo '<td>'.$row["A"].'</td>'.PHP_EOL;
						echo '<td>'.$row["E"].'</td>'.PHP_EOL;
						echo '<td>'.$row["FA"].'</td>'.PHP_EOL;
					echo '</tr>'.PHP_EOL;
				}
			} else {
				// no stats found
				echo '<tr><td colspan="23">Nenalezeny žádné statistiky</td></tr>'.PHP_EOL;
			}
		echo '</table>'.PHP_EOL;
		// other soft
		echo '<h2>ČESKÉ AKADEMICKÉ HRY</h2>'.PHP_EOL;
		echo '<img src="/web/images/soft_akada.jpg" title="ČAH" alt="ČAH" />'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Od roku 2009 se pravidelně účastním Českých akademických her v&nbsp;softbalu. Nejprve dvakrát v&nbsp;dresu Univerzity Karlovy a&nbsp;od roku 2011 zkoušíme prorazit s&nbsp;týmem VŠE. Jsem tronásobný akademický mistr republiky v&nbsp;tomto sportu: 2009&nbsp;v&nbsp;Plzni s&nbsp;UK, 2010&nbsp;v&nbsp;Praze s&nbsp;UK a&nbsp;2014&nbsp;v&nbsp;Liberci s&nbsp;VŠE.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<h2>ROZHODČÍ</h2>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Krom toho, že mě softbal baví hrát, věnuju se také funkci rozhodčího. Rozhodčím není příliš těžké se u&nbsp;nás stát -&nbsp;stačí chtít, začít je možné prakticky hned. I&nbsp;já začal jako samouk v&nbsp;nižších soutěžích, kde si týmy často pískají navzájem, od počátku roku 2012 jsem pak oficiálně vyškolen ČSA. Od podzimu 2012 pak občas vypomáhám i&nbsp;v&nbsp;nižších soutěžích pražského baseballu. Ačkoliv je to občas vypjaté, tak mě baví zodpovědnost, kterou tato pozice přináší. A&nbsp;samozřejmě je tu motivační faktor finanční odměny, která není vůbec špatná.'.PHP_EOL;	
		echo '</p>'.PHP_EOL;	
		echo '<p>'.PHP_EOL;
			echo 'V&nbsp;roce&nbsp;2012 jsem odřídil něco přes 40&nbsp;zápasů, v&nbsp;roce&nbsp;2013 celkem&nbsp;110, v&nbsp;roce&nbsp;2014 asi&nbsp;35 a&nbsp;v&nbsp;roce&nbsp;2015 kolem třiceti. Nakoukl jsem už i&nbsp;do nejvyšší mužské a&nbsp;ženské soutěže u&nbsp;nás a&nbsp;letos jsem byl dokonce vyslán na jeden dvojzápas do Rakouska.'.PHP_EOL;	
		echo '</p>'.PHP_EOL;	
		echo '<p>'.PHP_EOL;
			echo 'Zde je můj <a href="http://softball.cz/modules.php?op=modload&amp;name=infosys&amp;file=index&amp;do=umpires&amp;co=dirview&amp;umid=85&amp;pda=2">rozhodcovský profil</a> na webu ČSA, kde jsou uvedeny počty nominací v&nbsp;nejvyšších dvou soutěžích a&nbsp;ligových pohárech.'.PHP_EOL;	
		echo '</p>'.PHP_EOL;	
		echo '<h2>ZAPISOVATEL</h2>'.PHP_EOL;	
		echo '<p>'.PHP_EOL;
			echo 'O&nbsp;tomto víc <a href="/work-scorer" title="Zápis baseball/softbal">na jiné stránce</a>, ale patří to k&nbsp;softbalu také.'.PHP_EOL;	
		echo '</p>'.PHP_EOL;
	}
}