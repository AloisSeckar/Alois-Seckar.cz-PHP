<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Knihovna";
		
		// save prepared data for renderer
		return $data;
	}
}