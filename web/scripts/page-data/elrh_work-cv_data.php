<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Životopis";
		
		// save prepared data for renderer
		return $data;
	}
}