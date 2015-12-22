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
// *  File:           *  /web/scripts/elrh_page_renderer.php       * //
// *  Purpose:        *  Renders html code for page                * //
// *  System Version: *  3.0.2                                     * //
// *  Last Modified:  *  2015-12-22 22:53 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageRenderer {
	public static function renderHTMLStart() {
		echo '<!DOCTYPE html>'.PHP_EOL;
		echo '<html>'.PHP_EOL;
	}
	
	public static function renderHTMLHead($title) {
		echo '<head>'.PHP_EOL;
			echo '<title>'.$title.'</title>'.PHP_EOL;
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.PHP_EOL;
			echo '<meta name="generator" content="PSPad editor, www.pspad.com" />'.PHP_EOL;
			echo '<meta name="description" content="Alois Sečkár - osobní prezentace, politické názory a další aktivity" />'.PHP_EOL;
			echo '<meta property="og:image" content="/web/images/alois_seckar.png" />'.PHP_EOL;
			echo '<link rel="stylesheet" type="text/css" href="/elrh_css.css" />'.PHP_EOL;
			echo '<link rel="stylesheet" type="text/css" href="/dropdown.css" />'.PHP_EOL;
		echo '</head>'.PHP_EOL;
	}
	
	public static function renderBodyStart() {
		echo '<body id="top">'.PHP_EOL;
		// google analytics
		include_once getcwd().'/web/scripts/java-script/elrh_ga_renderer.php';
		ELRHGARenderer::renderGA();
		//
		echo '<div id="container">'.PHP_EOL;
	}
	
	public static function renderPageHeader() {
		echo '<header>'.PHP_EOL;
		    echo '<div id="header-left">'.PHP_EOL;
				echo '<a href="/"><img src="/web/images/global_as_1.jpg" title="Alois Sečkár" alt="Alois Sečkár" height="65" width="65" /></a>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		    echo '<div id="header-center">'.PHP_EOL;
				echo '<a href="/"><img src="/web/images/name.png" title="Alois Sečkár" alt="Alois Sečkár" height="70" /></a>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		    echo '<div id="header-right">'.PHP_EOL;
				echo '<a href="/"><img src="/web/images/global_as_2.jpg" title="Alois Sečkár" alt="Alois Sečkár" height="65" width="65" /></a>'.PHP_EOL;
		    echo '</div>'.PHP_EOL;
		echo '</header>'.PHP_EOL;
	}
	
	public static function renderPageMenu($menu) {
		echo '<nav>'.PHP_EOL;
			echo $menu.PHP_EOL;
		echo '</nav>'.PHP_EOL;
	}
	
	public static function renderContentStart($nav) {
		echo '<div id="content">'.PHP_EOL;
		// breadcrumb nav
		echo '<div id="content-navbox">'.PHP_EOL;
			echo $nav.PHP_EOL;
		echo '</div>'.PHP_EOL;
		// social box
		echo '<div id="content-social">'.PHP_EOL;
			echo '<a href="https://www.facebook.com/AloisSeckarSvobodni" title="Facebook"><img src="/web/images/social_facebook.png" title="Facebook" alt="FB" width="40" /></a>'.PHP_EOL;
			echo '<a href="https://twitter.com/AloisSeckar" title="Twitter"><img src="/web/images/social_twitter.png" title="Twitter" alt="Twi" width="40" /></a>'.PHP_EOL;
			echo '<a href="https://www.linkedin.com/profile/view?id=343277832" title="LinkedIn"><img src="/web/images/social_linkedin.png" title="LinkedIn" alt="Ln" width="40" /></a>'.PHP_EOL;
			echo '<a href="http://www.youtube.com/user/HowlingIronMetalBlog" title="Youtube"><img src="/web/images/social_youtube.png" title="Youtube" alt="YT" width="40" /></a>'.PHP_EOL;
			echo '<a href="http://ellrohir.deviantart.com/" title="DeviantArt"><img src="/web/images/social_deviantart.png" title="DeviantArt" alt="DA" width="40" /></a>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
		//
		echo '<article>'.PHP_EOL;
	}
	
	public static function renderContentEnd($nav) {
		echo '</article>'.PHP_EOL;
		echo $nav; // bottom navigation box
		echo '</div>'.PHP_EOL;
	}
	
	public static function renderPageFooter($version, $update) {
		echo '<footer>'.PHP_EOL;
			echo '<div id="footer-left">'.PHP_EOL;
				echo '<a href="http://praha4.svobodni.cz" title="Svobodní Praha 4"> <img title="Svobodní Praha 4" alt="praha4.svobodni.cz" height="31" src="/web/images/svobodni_p4_bar.png" width="88" /> </a>'.PHP_EOL;
				echo '<a href="http://svobodnatv.cz" title="Svobodná TV"> <img title="Svobodná TV" alt="svobodnatv.cz" height="31" src="/web/images/svobodna_tv_bar.png" width="88" /> </a>'.PHP_EOL;
				echo '<a href="http://krc-historie.cz" title="Stará Krč"> <img title="Stará Krč" alt="krc-historie.cz" height="31" src="/web/images/stara_krc_bar.png" width="88" /> </a>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
			echo '<div id="footer-center">'.PHP_EOL;
				echo '<div class="footer-big">&copy; 2008-2015 <a href="/versions" title="Verze systému">System v.'.$version.'</a> by <a href="/contacts" title="Kontakt">Alois Sečkár</a></div>'.PHP_EOL;
				echo '<div class="footer-small">Last Update: '.$update.'</div>'.PHP_EOL;
				echo '<div class="footer-tiny"><a href="https://validator.w3.org/nu/?doc=http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'" title="Validator at w3.org">This document was checked with Nu Html Checker</a></div>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
			echo '<div id="footer-right">'.PHP_EOL;
				echo '<a href="http://krc-historie.cz" title="Stará Krč"> <img title="Stará Krč" alt="krc-historie.cz" height="31" src="/web/images/stara_krc_bar.png" width="88" /> </a>'.PHP_EOL;
				echo '<a href="http://svobodnatv.cz" title="Svobodná TV"> <img title="Svobodná TV" alt="svobodnatv.cz" height="31" src="/web/images/svobodna_tv_bar.png" width="88" /> </a>'.PHP_EOL;
				echo '<a href="http://praha4.svobodni.cz" title="Svobodní Praha 4"> <img title="Svobodní Praha 4" alt="Svobodni.cz" height="31" src="/web/images/svobodni_p4_bar.png" width="88" /> </a>'.PHP_EOL;
			echo '</div>'.PHP_EOL;
		echo '</footer>'.PHP_EOL;
	}
	
	public static function renderHTMLEnd() {
		echo '</div>'.PHP_EOL;
		echo '</body>'.PHP_EOL;
		echo '</html>'.PHP_EOL;
	}
		
}
?>