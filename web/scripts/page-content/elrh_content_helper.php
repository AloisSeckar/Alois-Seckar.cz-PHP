<?php
class ELRHContentHelper {
	
	public static function renderLinksTable($links) {
		echo '<table class="links">'.PHP_EOL;
		foreach ($links as $link_info) {
			echo '<tr>'.PHP_EOL;
				echo '<td>'.PHP_EOL;
					echo '<a href="'.$link_info["link"].'" title="'.$link_info["name"].'"><img src="'.$link_info["thumb"].'" alt="'.$link_info["name"].'" width="100" height="67" /></a>'.PHP_EOL;
				echo '</td>'.PHP_EOL;
				echo '<td class="links">'.PHP_EOL;
					echo '<strong><a href="'.$link_info["link"].'" title="'.$link_info["name"].'">'.$link_info["name"].'</a></strong><br />'.PHP_EOL;
					echo $link_info["dscr"].PHP_EOL;
				echo '</td>'.PHP_EOL;
			echo '</tr>'.PHP_EOL;
		}
		echo '</table>'.PHP_EOL;
	}
	
	// $level - h1 (stand alone contacts page) or h2 (included within index page)
	public static function renderContactsList($contacts, $level) {
		echo '<'.$level.'>KONTAKTY</'.$level.'>'.PHP_EOL;
		echo '<ul>'.PHP_EOL;
		    // check, if some contacts exist (may be disconnected from db)
			if (!empty($contacts)) {
				foreach ($contacts as $contact_info) {
					echo '<li><strong>'.$contact_info["contact"].':</strong> <a href="'.$contact_info["link"].'" title="'.$contact_info["dscr"].'">'.$contact_info["name"].'</a></li>'.PHP_EOL;
				}
			} else {
				echo 'Nefunguje mi teď databáze, ale zastihnete mě na emailu <a href="mailto:seckar@svobodni.cz">seckar@svobodni.cz</a>'.PHP_EOL;
			}
		echo '</ul>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Pokud mě některým z&nbsp;těchto způsobů oslovíte, do roka a&nbsp;do dne se vám ozvu.'.PHP_EOL;
		echo '</p>'.PHP_EOL;
	}
	
	
	public static function renderShareBox($source) {
		echo '<div style="padding-bottom: 3px;" class="fb-share-button" data-href="'.$source.'" data-type="button_count"></div>'.PHP_EOL;
		echo '<a href="https://twitter.com/share" class="twitter-share-button" data-via="AloisSeckar" data-lang="cs">Tweet</a>'.PHP_EOL;
		include_once getcwd().'/web/scripts/java-script/elrh_js_renderer.php';
		ELRHJSRenderer::renderJSShare();
		echo PHP_EOL;
	}
	
	public static function renderCommentBox($source) {
		echo '<div class="fb-comments" data-href="'.$source.'" data-num-posts="5" data-width="700"></div>'.PHP_EOL;
		include_once getcwd().'/web/scripts/java-script/elrh_js_renderer.php';
		ELRHJSRenderer::renderJSComments();
	}
	
	public static function renderRSSFeed($source) {
		// taken from http://feed.mikle.com/
	    echo '<!-- start feedwind code --><script type="text/javascript">document.write(\'\x3Cscript type="text/javascript" src="\' + (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'feed.mikle.com/js/rssmikle.js">\x3C/script>\');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "'.$source.'/rss",rssmikle_frame_width: "600",rssmikle_frame_height: "150",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "POSLEDNÍ ČLÁNKY NA BLOGU",rssmikle_title_link: "'.$source.'",rssmikle_title_bgcolor: "#00654E",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#6C247B",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "5",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:600px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code -->'.PHP_EOL;
	}
}