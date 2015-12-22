<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Hudební publicistika";
		
		// get reviews
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["reviews"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT type, title, date, location, link FROM elrh_reviews ORDER BY date DESC");
		
		// save prepared data for renderer
		return $data;
	}
}