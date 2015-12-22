<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Fotografování";
		
		// get photo galleries
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["galleries"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT name, dscr, link, pics, thumb1, thumb2, thumb3 FROM elrh_galleries ORDER BY ord");
		
		// save prepared data for renderer
		return $data;
	}
}