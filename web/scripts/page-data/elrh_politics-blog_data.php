<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		
		// page title
		$data["title"] = "Alois Sečkár - Blog";
		
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		
		if (empty($item)) {
			// if no item selected = show list of all blog entries
			$data["entries"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT id, title, date, categories FROM elrh_blog ORDER BY date DESC");
		} else {
			// still have to determine between blog-id and category-filter 
			if (is_numeric($item)) {
				// notify content renderer, there will be only one blog entry
				$data["single"] = true;
				// try to find particular blog item
				$data["entry"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT id, title, date, time, content FROM elrh_blog WHERE id='".mysqli_real_escape_string($mysqli, $item)."'");
				if (!empty($data["entry"])) {
					// page title adjustment
					$data["title"] .= ": ".$data["entry"]["title"];
					// notify content renderer, article exists
					$data["exists"] = true;
				}
			} else {
				// notify content renderer, filter is active
				$data["filter"] = $item;
				// category filter is set-up = show list of filtered blog entries
				$data["entries"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT id, title, date, categories FROM elrh_blog WHERE categories LIKE '%".mysqli_real_escape_string($mysqli, $item)."%' ORDER BY date DESC");
			}
		}
		
		// save prepared data for renderer
		return $data;
	}
}