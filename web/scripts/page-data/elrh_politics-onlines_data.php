<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		
		// page title
		$data["title"] = "Alois Sečkár - Politika online";
		
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		
		// deal with admin input, if any
		if (isset($_SESSION["user"])) {
			if (isset($_POST["admin_online"]) && isset($_POST["admin_content"])) {
				$data["admin_content"] = $_POST["admin_content"];
				$result = $mysqli->query("INSERT INTO elrh_onlines_content (online, date, content) VALUES (".mysqli_real_escape_string($mysqli, $_POST["online"]).", now(), '".mysqli_real_escape_string($mysqli, $_POST["content"])."');");
				if ($result) {
					$data["admin_message"] = '<span style="color: green;">Vložen nový záznam</span>';
				} else {
					$data["admin_message"] = '<span style="color: red;">Vložení selhalo</span>';
				}
			}
		}
		//
		
		// get list of all existing onlines
		$data["onlines"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT id, date, name, thumb, status FROM elrh_onlines ORDER BY date DESC");
		//
		if (!empty($item)) {
			// notify content renderer, there will be only one entry
		    $data["single"] = true;
				
			// find one particular entry and its details
			$data["entry"] = ELRHDataHelper::retrieveRow($mysqli, "SELECT id, date, name, dscr, thumb, status FROM elrh_onlines WHERE id='".mysqli_real_escape_string($mysqli, $item)."'");
			//
			if (!empty($data["entry"])) {
				// page title adjustment
			    // too long...
				// $data["title"] .= ": ".$data["entry"]["name"];
				// notify content renderer, article exists
				$data["exists"] = true;
			}
			
			// find all content relative to selected online
			$data["contents"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT date, content FROM elrh_onlines_content WHERE online='".mysqli_real_escape_string($mysqli, $item)."' ORDER BY date DESC");
			//
			if (!empty($data["contents"])) {
				// notify content renderer, there are contents for this online
				$data["full"] = true;
			}
			
			// memo FOR FUTRE USE when there will be admin-form for inserting
			//if (is_numeric($item)) {
			//} else {
			//}
		}
		
		// save prepared data for renderer
		return $data;
	}
}