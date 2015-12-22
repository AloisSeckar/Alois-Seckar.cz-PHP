<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Pracovní rozcestník";
		
		// get relevant links
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["links"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT name, dscr, link, thumb FROM elrh_links WHERE cat='work' ORDER BY name");
		
		// save prepared data for renderer
		return $data;
	}
}