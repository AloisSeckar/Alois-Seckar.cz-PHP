<?php
///////////////////////////////////////////////////////////////////////
//                                                                   //
//                           Alois-Seckar.cz                         //
//                          Personal homepage                        //
//                                                                   //
//                 Copyright © Alois Seckar 2008-2015                //
//                                                                   //
//                                                                   //
//    Page Info                                                      //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
// *  Author:         *  Alois Seckar [ seckar@svobodni.cz ]       * //
// *  Homepage:       *  http://alois-seckar.cz                    * //
// *  File:           *  ../page-content/elrh_work_content.php     * //
// *  Purpose:        *  Present page content for particular page  * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 16:40 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>PRÁCE</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Tato sekce webu slouží jako prezentace mých pracovních zkušeností a&nbsp;dovedností:'.PHP_EOL;
		echo '</p>'.PHP_EOL;	
		echo '<ul>'.PHP_EOL;
			echo '<li><strong><a href="work-cv" title="Můj životopis">ŽIVOTOPIS</a></strong> - strukturovaný profesní životopis.</li>'.PHP_EOL;
			echo '<li><strong><a href="work-it" title="Programátorské výtvory">PROGRAMOVÁNÍ</a></strong> - hotové publikovatelné programy a&nbsp;weby, které mám na svědomí, s&nbsp;odkazy na kód na GitHub.</li>'.PHP_EOL;
			echo '<li><strong><a href="work-other" title="Další práce">OSTATNÍ</a></strong> - jiné než IT činnosti (zejména zapisování baseballu a softbalu a&nbsp;hudební publicistika).</li>'.PHP_EOL;
			echo '<li><strong><a href="work-links" title="Pracovní rozcestník">ROZCESTNÍK</a></strong> - odkazy na související weby.</li>'.PHP_EOL;
		echo '</ul>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Už od posledních tříd základní školy, kdy živelně začaly mé první pokusy s&nbsp;tvorbou webových stránek v MS Frontpage, jsem směřoval k&nbsp;tomu, že se chci v&nbsp;životě motat kolem počítačů. '.PHP_EOL;
		    echo 'Brzo jsem Frontpage odhodil, poté, co jsem usoudil, že generuje zbytečně moc nesmyslného kódu, a&nbsp;začal se sám učit psát HTML kód. K&nbsp;tomu se brzo přidalo PHP, jenž jsem si postupně také jakž takž osvojil. Mezitím začalo na gymnáziu "opravdové" programování, napřed v&nbsp;Pascalu, později v&nbsp;Delphi. Na vysoké škole mě pak ukázali C# a&nbsp;později Javu. A samozřejmě další věci okolo, jak se na vyskoškolské studium informatiky sluší. Mám za to, že vím leccos o&nbsp;databázích, sítích, objektovém programování, a&nbsp;že jsem schopen si poradit v&nbsp;podstatě s&nbsp;jakýmkoliv programovacím jazykem, jen si přečíst něco o&nbsp;syntaxi a&nbsp;základních myšlenkách. Co mi zatím tolik nejde je stylování front-endu a&nbsp;optimalizace pro různé prohlížeče a&nbsp;zařízení. Ale <a href="http://stackoverflow.com/users/3204544/ellrohir">Stack Overflow</a> je kdyžtak můj kamarád...'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Programováním bych se chtěl tak či onak živit. Vedle toho se ale v&nbsp;množství větším než malém věnuju nebo jsem se věnoval i&nbsp;jiným aktivitám. Zejména je to funkce rozhodčího nebo zapisovatele softballu a&nbsp;baseballu, tím si dokonce docela slušně přivydělávám, navíc cestuju a&nbsp;ke všemu mě to i&nbsp;baví. Jeden čas jsem také psal hudební recenze do internetových magazínů o metalové hudbě, na to už ale bohužel nemám moc čas.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
}