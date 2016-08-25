<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Deník politika";
		
		// deal with admin input, if any
		if (isset($_SESSION["user"])) {
			if (isset($_POST["admin_diary"])) {
				// prepare values
				$data["admin_input"]["diary"] = $_POST["admin_diary"];
				$data["admin_input"]["link"] = "null";
				if (isset($_POST["admin_link"]) && $_POST["admin_link"]!="") {
					$data["admin_input"]["link"] = $_POST["admin_link"];
				}
				// insert into db
				$result = $mysqli->query("INSERT INTO elrh_diary (date, content, link) VALUES (now(), '".mysqli_real_escape_string($mysqli, $data["admin_input"]["diary"] )."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["link"])."');");
				if ($result) {
					$mysqli->query("UPDATE elrh_main SET value=now() WHERE var='last_diary'");
					$data["admin_message"] = '<span style="color: green;">Vložen nový záznam</span>';
				} else {
					$data["admin_message"] = '<span style="color: red;">Vložení selhalo</span>';
				}
			}
		}
		//
		
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