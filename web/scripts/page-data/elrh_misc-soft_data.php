<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Softbal";
		
		// get relevant stats
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["stats"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT * FROM elrh_softball");
		
		// save prepared data for renderer
		return $data;
	}
}