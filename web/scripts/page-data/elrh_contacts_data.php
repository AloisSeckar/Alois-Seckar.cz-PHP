<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Kontakty";
		
		// get contacts
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["contacts"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT contact, name, link, dscr FROM elrh_contacts");
		
		// save prepared data for renderer
		return $data;
	}
}