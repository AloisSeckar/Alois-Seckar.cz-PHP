<?php
class ELRHGARenderer {
	// script for google analytics
	// taken from Google Analytics code generator
	public static function renderGA() {
		echo '<script>';
			echo "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					})(window,document,'script','//www.google-analytics.com/analytics.js','ga');";
			echo "ga('create', 'UA-71275984-1', 'auto');";
			echo "ga('send', 'pageview');";
		echo '</script>';
	}
}
?>