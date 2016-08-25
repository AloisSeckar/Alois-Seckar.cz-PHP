<?php
class ELRHNavigationCreator {
	
	/** Builds a navigation line included in top of page content section.
	 * Simply looks into DB for values assigned to specified locations and builds
	 * the html output from them. If some error occurs, renders default text for 
	 * such situation. 
	 *  
	 * @param String $page Current page request
	 * @param MySQLi $mysql Database connection operator
	 */
	public static function createNavigationContent($page, $item, $mysqli) {
		// split page request into parts (page and sub-page)
		$request = explode("-", $page);
		// look into db for values
		// page
		$result = $mysqli->query(
			"SELECT name FROM elrh_navigation WHERE type='page' AND ident='".$request[0]."'");
		$data = $result->fetch_array();	
		$page_nav["name"] = $data["name"];
		if ($page_nav["name"] == "") {
			$page_nav["name"] = 'UNKNOWN'; // should never happen
		}
		// subpage
		if (!empty($request[1])) {
			$result = $mysqli->query(
				"SELECT name FROM elrh_navigation WHERE type='subpage' AND ident='".$request[1]."'");
			$data = $result->fetch_array();	
			$subpage_nav["name"] = $data["name"];
			if ($subpage_nav["name"] == "") {
				$subpage_nav["name"] = 'UNKNOWN'; // should never happen
			}
		}
	 
		// build navigation
		// top breadcrumb
		$navigation["top"] = '&raquo;&nbsp;<a href="/" target="_self" title="Index">INDEX</a>';
		if (!empty($request[1])) {
			// level 2 nav
			// link to parent page
			$navigation["top"] .= '&nbsp;&raquo;&nbsp;<a href="/'.$request[0].'" title="'.$page_nav["name"].'">'.$page_nav["name"].'</a>';
			// name of subpage
			$navigation["top"] .= '&nbsp;&raquo;&nbsp;<a href="/'.$page.'" title="'.$subpage_nav["name"].'">'.$subpage_nav["name"].'</a>';
		} else {
			// level 1 nav
			// link to parent page
			$navigation["top"] .= '&nbsp;&raquo;&nbsp;<a href="/'.$request[0].'" title="'.$page_nav["name"].'">'.$page_nav["name"].'</a>';
	    }
		// bottom box
		$navigation["bottom"] = '<p class="back-to-top">';
		$navigation["bottom"] .= '- <a href="#top" title="Nahoru na stránku">Nahoru</a><br />';
		if (!empty($request[1])) {
			if (!empty($item)) {
				$navigation["bottom"] .= '- <a href="/'.$page.'" title="'.$page_nav["name"].'">Zpět</a><br />';
			} else {
				$navigation["bottom"] .= '- <a href="/'.$request[0].'" title="'.$page_nav["name"].'">Zpět</a><br />';
			}
		}
		$navigation["bottom"] .= '- <a href="/index" title="Na index">Index</a><br />';
		$navigation["bottom"] .= '- <a href="/sitemap" title="Mapa stránek">Mapa stránek</a>';
        $navigation["bottom"] .= '</p>';
		
		// return breadcrumb result
		return $navigation;
	}
}
?>