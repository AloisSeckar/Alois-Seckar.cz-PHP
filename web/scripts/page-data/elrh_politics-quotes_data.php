<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Glosy";
		
		// deal with admin input, if any
		if (isset($_SESSION["user"])) {
			if (isset($_POST["admin_quote"]) && isset($_POST["admin_topic"])) {
				// prepare values
				$data["admin_input"]["quote"] = $_POST["admin_quote"];
				$data["admin_input"]["topic"] = $_POST["admin_topic"];
				$data["admin_input"]["link"] = "null";
				if (isset($_POST["admin_link"]) && $_POST["admin_link"]!="") {
					$data["admin_input"]["link"] = $_POST["admin_link"];
				}
				// insert into db
				$result = $mysqli->query("INSERT INTO elrh_quotes (date, content, topic, link) VALUES (now(), '".mysqli_real_escape_string($mysqli, $data["admin_input"]["quote"] )."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["topic"])."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["link"])."');");
				if ($result) {
					$mysqli->query("UPDATE elrh_main SET value=now() WHERE var='last_quote'");
					$data["admin_message"] = '<span style="color: green;">Vložen nový záznam</span>';
				} else {
					$data["admin_message"] = '<span style="color: red;">Vložení selhalo</span>';
				}
			}
		}
		//
		
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