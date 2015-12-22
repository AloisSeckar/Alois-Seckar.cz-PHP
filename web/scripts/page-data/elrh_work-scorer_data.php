<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Zápis baseball/softbal";
		
		// get tournaments
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["tournaments"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, sport, title, location, link FROM elrh_tournaments ORDER BY ord DESC");
		
		// save prepared data for renderer
		return $data;
	}
}