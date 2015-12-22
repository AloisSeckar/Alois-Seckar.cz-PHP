<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Deník politika";
		
		// get diary entries
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		// default amount is 25
		// user can load more by clicking 
		if (is_numeric($item)) {
			$data["limit"] = $item;
		} else {
			$data["limit"] = 25;
		}
		// last entry inserted
		$data["last"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT value FROM elrh_main WHERE var='last_diary'");
		// get desired amount of entries sorted by date inserted
		$data["entries"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, content, link FROM elrh_diary ORDER BY date DESC LIMIT ".$data["limit"]);
		// get total amount of entries
		$data["total"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT count(id) AS entries FROM elrh_diary");
		
		// save prepared data for renderer
		return $data;
	}
}