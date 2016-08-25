<?php
class ELRHDataHelper {
	
	public static function retrieveArray($mysqli, $query) {
		$result = $mysqli->query($query);
	    $i = 0;
		while ($current = $result->fetch_array()) {
			$array[$i] = $current;
			$i++;
		}
		//
		if (isset($array)) {
			return $array;
		} else {
			return null;
		}
	}
	
	public static function retrieveRow($mysqli, $query) {
		$result = $mysqli->query($query." LIMIT 1");
	    $row = $result->fetch_array();
		//
		if (isset($row)) {
			return $row;
		} else {
			return null;
		}
	}
}