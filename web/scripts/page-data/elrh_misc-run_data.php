<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		include_once getcwd().'/web/scripts/elrh_misc_helper.php';
		
		
		// page title
		$data["title"] = "Alois Sečkár - Běh";
		
		// deal with admin input, if any
		if (isset($_SESSION["user"])) {
			if (isset($_POST["admin_date"]) && isset($_POST["admin_track"]) && isset($_POST["admin_length"]) && isset($_POST["admin_time"])) {
				// prepare values
				$data["admin_input"]["date"] = $_POST["admin_date"];
				$data["admin_input"]["track"] = $_POST["admin_track"];
				if ($data["admin_input"]["track"]>-1) {
					// get length from db
					$track_info = ELRHDataHelper::retrieveArray($mysqli, "SELECT length FROM elrh_run_tracks WHERE id='".$data["admin_input"]["track"]."'");
					$data["admin_input"]["length"] = $track_info[0]["length"];
			    } else {
					// for single-run-records length is inserted directly
					$data["admin_input"]["length"] = $_POST["admin_length"];
				}
				$data["admin_input"]["time"] = $_POST["admin_time"];
				$data["admin_input"]["speed"] = ELRHMiscHelper::getAVGSpeed($data["admin_input"]["time"], $data["admin_input"]["length"]); // elaborate average speed from input
				if ($data["admin_input"]["track"]>-1) {
					$data["admin_input"]["length"] = 0; // erease length info again for existing track (is kept in other table)
				}
				// insert into db
				$result = $mysqli->query("INSERT INTO elrh_run_records (date, track, length, time, speed) VALUES ('".mysqli_real_escape_string($mysqli, $data["admin_input"]["date"] )."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["track"])."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["length"])."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["time"])."', '".mysqli_real_escape_string($mysqli, $data["admin_input"]["speed"])."');");
				if ($result) {
					$data["admin_message"] = '<span style="color: green;">Vložen nový záznam</span>';
				} else {
					$data["admin_message"] = '<span style="color: red;">Vložení selhalo</span>';
				}
			} else {
				$data["admin_input"]["date"] = "";
				$data["admin_input"]["track"] = "";
				$data["admin_input"]["length"] = "";
				$data["admin_input"]["time"] = "";
			}
		}
		//
		
		// handle filter selection
		if (isset($_POST["filter_mode"])) {
			$data["filter"]["mode"] = $_POST["filter_mode"];
		} else {
			$data["filter"]["mode"] = "last30";
		}
		if (isset($_POST["filter_track"])) {
			$data["filter"]["track"] = $_POST["filter_track"];
		} else {
			$data["filter"]["track"] = "all";
		}
		if (isset($_POST["filter_year"])) {
			$data["filter"]["year"] = $_POST["filter_year"];
		} else {
			$data["filter"]["year"] = "all";
		}
		if (isset($_POST["filter_month"])) {
			$data["filter"]["month"] = $_POST["filter_month"];
		} else {
			$data["filter"]["month"] = "all";
		}
		if (isset($_POST["filter_sort"])) {
			$data["filter"]["sort"] = $_POST["filter_sort"];
		} else {
			$data["filter"]["sort"] = "date";
		}
		if (isset($_POST["filter_sort_desc"])) {
			$data["filter"]["sort_desc"] = $_POST["filter_sort_desc"];
		} else {
			$data["filter"]["sort_desc"] = "true";
		}
		
		// prepare filter values
		$data["tracks"] = ELRHDataHelper::retrieveArray($mysqli, "SELECT id, name FROM elrh_run_tracks ORDER BY name");
		for ($i=2013;$i<=date("Y");$i++) {
			$data["years"][$i] = $i;
		}
		$data["months"][0] = "01";
		$data["months"][1] = "02";
		$data["months"][2] = "03";
		$data["months"][3] = "04";
		$data["months"][4] = "05";
		$data["months"][5] = "06";
		$data["months"][6] = "07";
		$data["months"][7] = "08";
		$data["months"][8] = "09";
		$data["months"][9] = "10";
		$data["months"][10] = "11";
		$data["months"][11] = "12";
		
		
		// get run records
		// prepare sql statement
		// basic statement
		if ($data["filter"]["track"]==-1) {
			$sql = "SELECT r.date AS date, r.track AS track_id, r.time AS time, r.speed AS speed, '-' AS track, r.length AS length, r.length AS r_length FROM elrh_run_records r";
		} else {
			$sql = "SELECT r.date AS date, r.track AS track_id, r.time AS time, r.speed AS speed, t.name AS track, t.length AS length, r.length AS r_length FROM elrh_run_records r JOIN elrh_run_tracks t ON r.track = t.id";
		}
		// where clauses (track, year and month - if set)
		$where = "";
		if ($data["filter"]["track"]!="all") {
			$where .= " WHERE r.track=".$data["filter"]["track"];
		}
		if ($data["filter"]["year"]!="all") {
			if ($where == "") {
				$where .= " WHERE ";
			} else { 
				$where .= " AND ";
			}
			$where .= "r.date LIKE '".$data["filter"]["year"]."%'";
		}
		if ($data["filter"]["month"]!="all") {
			if ($where == "") {
				$where .= " WHERE ";
			} else { 
				$where .= " AND ";
			}
			$where .= "r.date LIKE '%-".$data["filter"]["month"]."-%'";
		}
		if ($where != "") {
			$sql .= $where; 
		}
		// order by
		$sql .= " ORDER BY ".$data["filter"]["sort"];
		if ($data["filter"]["sort_desc"]=="true") {
			$sql .= " DESC";
		}
		// limit part (if set)
		if ($data["filter"]["mode"]=="last10") {
			$sql .= " LIMIT 10";
		} elseif ($data["filter"]["mode"]=="last30") {
			$sql .= " LIMIT 30";
		}
		
		// run records from db
		$data["runs"] = ELRHDataHelper::retrieveArray($mysqli, $sql);
		// fix values + count totals from extracted results
		$data["total"]["count"] = 0;
		$data["total"]["length"] = 0;
		$data["total"]["time"] = "00:00:00";
		$row_index = 0;
		foreach ($data["runs"] as $row) {
			// $data["runs"][$row_index]["speed"] =  ELRHMiscHelper::getAVGSpeed($row["time"], $row["length"]); // value now stored in DB
			$data["runs"][$row_index]["time"] = substr_replace($data["runs"][$row_index]["time"],'.', strrpos($data["runs"][$row_index]["time"], ':'), 1); // change : to . for miliseconds
			if ($data["runs"][$row_index]["track_id"]==-1) {
				$row["length"] = $row["r_length"];
				$data["runs"][$row_index]["length"] = $row["r_length"]; // for single-record-runs, length is kept within run record itself
			}
			$row_index++;
			//
			$data["total"]["count"]++;
			$data["total"]["length"] += $row["length"];
			$data["total"]["time"] = ELRHMiscHelper::sumTimes($data["total"]["time"], $row["time"]);
		}
		// set totals
		if ($data["total"]["length"]>0) {
			$data["total"]["speed"] = ELRHMiscHelper::getAVGSpeed($data["total"]["time"], $data["total"]["length"]);
		}
		$data["total"]["time"] = substr_replace($data["total"]["time"],'.', strrpos($data["total"]["time"], ':'), 1); // change : to . for miliseconds
		// round length if needed
		if ($data["total"]["length"]>9999) {
			$data["total"]["length"] = round($data["total"]["length"] / 1000, 2) . " km";
		} else {
			$data["total"]["length"] .= " m";
		}
		
		// save prepared data for renderer
		return $data;
	}
}