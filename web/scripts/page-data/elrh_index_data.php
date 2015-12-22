<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Domovská stránka";
		
		// information - age of author
		include_once getcwd()."/web/scripts/elrh_misc_helper.php";
		$data["age"] = ELRHMiscHelper::elrhCountAge("1988-07-21");
		
		// get contacts
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		$data["contacts"] = ELRHDataHelper::retrieveArray(
			$mysqli, "SELECT contact, name, link, dscr FROM elrh_contacts");
		
		// save prepared data for renderer
		return $data;
	}
}