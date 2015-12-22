<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Verze systému";
		
		// get system versions
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["versions"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT version, date, dscr FROM elrh_versions ORDER BY date DESC");
		
		// save prepared data for renderer
		return $data;
	}
}