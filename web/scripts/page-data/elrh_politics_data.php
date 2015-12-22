<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		// page title
		$data["title"] = "Alois Sečkár - Politické názory";
		
		// save prepared data for renderer
		return $data;
	}
}