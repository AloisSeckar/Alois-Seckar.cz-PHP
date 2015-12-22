<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Glosy";
		
		// get quotes 
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		// default amount is 25
		// user can load more by clicking 
		if (is_numeric($item)) {
			$data["limit"] = $item;
		} else {
			$data["limit"] = 25;
		}
		// last quote inserted
		$data["last"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT value FROM elrh_main WHERE var='last_quote'");
		// get desired amount of quotes sorted by date inserted
		$data["quotes"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, content, topic, link FROM elrh_quotes ORDER BY date DESC LIMIT ".$data["limit"]);
		// get total amount of quotes 
		$data["total"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT count(id) AS entries FROM elrh_quotes");
		
		// save prepared data for renderer
		return $data;
	}
}