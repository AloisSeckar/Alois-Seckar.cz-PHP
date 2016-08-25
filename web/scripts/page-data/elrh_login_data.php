<?php
class ELRHPageData {
	public static function prepareData($item, $mysqli) {
		
		include_once getcwd().'/web/scripts/page-data/elrh_data_helper.php';
		include_once getcwd().'/web/scripts/elrh_misc_helper.php';
		
		
		// page title
		$data["title"] = "Alois Sečkár - Login";
		
		// handle possible variables
		if (isset($_POST["user_name"])) {
			$data["user_name"] = $_POST["user_name"];
		} else {
			$data["user_name"] = "";
		}
		if (isset($_POST["user_pass"])) {
			$data["user_pass"] = $_POST["user_pass"];
		} else {
			$data["user_pass"] = "";
		}
		
		// login is hardwired here...
	    if ((hash("sha512", hash("sha512", $data["user_name"])) == "a2001095baf7710f020634731f8e6b6bf5f93dc84c6f5307b6752e451008e8b31c553f217591aa98b89f68764d563e3a1fbe11936a59e4e6621e5bfef4f30140")
			&& (hash("sha512", hash("sha512", $data["user_pass"])) == "a1b0bc0ac9a49b18e06625362fa6c74c9b31391529da00926672588ec0480338681481e4b952f29b5fdc7bdc6157ef3ff0d5d1871baf8a39eec1e71605bf1b1e")) {
			
			$_SESSION["user"] = "Admin";
			
		}
		
		// save prepared data for renderer
		return $data;
	}
}