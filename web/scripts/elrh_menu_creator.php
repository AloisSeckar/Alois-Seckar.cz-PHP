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
// *  File:           *  /web/scripts/elrh_menu_creator.php        * //
// *  Purpose:        *  Creates menu elements for page            * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 17:22 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////

class ELRHMenuCreator {
	
	/** Builds a drop-down menu in top of each page.
	 */
	public static function createMenuContent() {
		// taken from http://code.stephenmorley.org/javascript/touch-friendly-drop-down-menus/
	    $menu = '<ul class="dropdown">
					<li class="left-li">
						<a href="/work" title="Osobní prezentace">PRÁCE</a>
						<ul class="sub-dropdown">
							<li>
								<a href="/work-cv" title="Můj životopis">Životopis</a>
							</li>
							<li>
								<a href="/work-it" title="Programátorské výtvory">Programování</a>
							</li>
    						<li>
								<a href="/work-other" title="Další práce">Ostatní</a>
      						</li>
    						<li>
								<a href="/work-links" title="Pracovní rozcestník">Rozcestník</a>
      						</li>
    					</ul>
					</li>
					<li class="center-li">
						<a href="/politics" title="Politické názory">POLITIKA</a>
						<ul class="sub-dropdown">
							<li>
								<a href="/politics-blog" title="Archiv článků">Články</a>
							</li>
							<li>
								<a href="/politics-quotes" title="Krátké postřehy">Glosy</a>
							</li>
    						<li>
								<a href="/politics-diary" title="Politická kariéra">Deník politika</a>
      						</li>
    						<li>
								<a href="/politics-library" title="LIberální LIteratura">Knihovna</a>
      						</li>
    						<li>
								<a href="/politics-links" title="Politický rozcestník">Rozcestník</a>
      						</li>
    					</ul>
					</li>
					<li class="right-li">
						<a href="/misc" title="Ostatní aktivity">ZÁBAVA</a>
						<ul class="sub-dropdown">
							<li>
								<a href="/misc-writing" title="Literární tvorba">Psaní</a>
							</li>
    						<li >
								<a href="/misc-history" title="Historické okénko">Historie</a>
      						</li>
    					    <li >
								<a href="/misc-soft" title="Hraní softbalu">Softbal</a>
      						</li>
    					    <li >
								<a href="/misc-hansp" title="Hraní fotbalu">Hanspaulka</a>
      						</li>
							<li>
								<a href="/misc-photo" title="Moje fotografie">Fotografování</a>
							</li>
							<li>
								<a href="/misc-music" title="Moje hudba">Hudba</a>
      						</li>
							<li>
								<a href="/misc-links" title="Všeobecný rozcestník">Rozcestník</a>
      						</li>
    					</ul>
					</li>
				</ul>';
		
		// return menu result
		return $menu;
	}
}
?>