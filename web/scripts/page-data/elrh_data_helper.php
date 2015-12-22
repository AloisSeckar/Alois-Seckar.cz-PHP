<?php
class ELRHDataHelper {
	
	public static function retrieveArray($mysqli, $query) {
		$result = $mysqli->query($query);
	    $i = 0;
		while ($current = $result->fetch_array()) {
			$array[$i] = $current;
			$i++;
		}
		return $array;
	}
	
	public static function retrieveRow($mysqli, $query) {
		$result = $mysqli->query($query." LIMIT 1");
	    $row = $result->fetch_array();
		return $row;
	}
}