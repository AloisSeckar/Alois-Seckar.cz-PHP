<?php
/** Displays content page navigation.
 *  
 * @param Array $elemenets Page contents
 */
function elrhHtmlContentPageNav($elements) {
 // NOT IMPLEMENTED YET
} 

/** Displays content page footer.
 *  
 * @param String $backlink URL of previous page in site hierarchy
 */
function elrhHtmlContentPageFooter($backlink) {
 echo '<div class="back-to-top">';
  echo '- <a href="#top" title="Nahoru na stránku">Nahoru</a><br />';
  echo '- <a href="'.$backlink.'" target="_self" title="O stránku zpìt">Zpìt</a>';
 echo '</div>';
} 

/** Displays section header.
 *  
 * @param String $title Section title to be displayed
 */
function elrhHtmlContentSectionHeader($title) {
 echo '<h2>';
  echo $title;
  echo '&nbsp;<a href="#top" target="_self" title="Nahoru"><img src="web/skin/back_arrow.png" title="Nahoru" alt="Nahoru" border="0" /></a>';
 echo '</h2>';
} 

/** Displays social media share buttons.
 *  
 * @param String $source Page that is being shared
 */
function elrhHTMLPrintShareBox($source) {
 echo '<div style="padding-bottom: 3px;" class="fb-share-button" data-href="'.$source.'" data-type="button_count"></div>';
 echo '<a href="https://twitter.com/share" class="twitter-share-button" data-via="AloisSeckar" data-lang="cs">Tweet</a>';
 echo "<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
 echo '<br />';
}

/** Displays social media buttons.
 */
function elrhHTMLPrintSocialBox() {
 echo '<a href="https://www.facebook.com/AloisSeckarSvobodni" title="Facebook"><image src="/web/images/social_facebook.png" title="Facebook" alt="FB" width="40" /></a>';
 echo '<a href="https://twitter.com/AloisSeckar" title="Twitter"><image src="/web/images/social_twitter.png" title="Twitter" alt="Twi" width="40" /></a>';
 echo '<a href="https://cz.linkedin.com/in/alois-seèkár-1a0b6896" title="LinkedIn"><image src="/web/images/social_linkedin.png" title="LinkedIn" alt="Ln" width="40" /></a>';
 echo '<a href="http://www.youtube.com/user/HowlingIronMetalBlog" title="Youtube"><image src="/web/images/social_youtube.png" title="Youtube" alt="YT" width="40" /></a>';
 echo '<a href="http://ellrohir.deviantart.com/" title="DeviantArt"><image src="/web/images/social_deviantart.png" title="DeviantArt" alt="DA" width="40" /></a>';
}

?>
