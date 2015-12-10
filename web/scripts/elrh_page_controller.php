<?php
///////////////////////////////////////////////////////////////////////
//                                                                   //
//                           Alois-Seckar.cz                         //
//                          Personal homepage                        //
//                                                                   //
//                 Copyright © Alois Seckar 2008-2015                //
//                                                                   //
//                                                                   //
//    Page Info                                                      //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
// *  Author:         *  Alois Seckar [ seckar@svobodni.cz ]       * //
// *  Homepage:       *  http://alois-seckar.cz                    * //
// *  File:           *  /web/scripts/elrh_page_controller.php     * //
// *  Purpose:        *  Handle's all page rendering operations    * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 17:42 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHPageController {
	
	/// ATRIBUTES \\\
	
    private $mysqli; // contains MySQL connection and db-handling methods
	
	private $page_request; // string containing page to be displayed
	private $item_request; // string containing item (typically articles) to be displayed
	
	private $page_data; // array containing all relevant data to be displayed within page-content
	
	
	/// (DE)CONSTRUCTOR \\\
	
	public function __construct() {
		// set mySQL
		$this->getMySQLConnection();
	}
	
	
	/// PUBLIC METHODS \\\
	
	public function resolvePath($url) {
		// split url by "/"
		$url_parts = split("/", $url);
		// page (set default if needed)
		if ($url_parts[0]!="") {
			$this->page_request = $url_parts[0];
		} else {
			$this->page_request = "index";
		}
		// possible (article) id
		$this->item_request = $url_parts[1];
		
		// check if desired page exists
		if ((!file_exists(getcwd().'/web/scripts/page-data/elrh_'.$this->page_request.'_data.php'))
			||(!file_exists(getcwd().'/web/scripts/page-content/elrh_'.$this->page_request.'_content.php'))) {
				$this->page_data["request"] = $this->page_request; // store for display in error page
				$this->page_request = "error";
		}
	}
	
	public function prepareData() {
		// variable info that depends on displayed page
		if ($this->page_request != "error") {
			include_once getcwd().'/web/scripts/page-data/elrh_'.$this->page_request.'_data.php';
			$this->page_data = array_merge($this->page_data, 
				ELRHPageData::prepareData($this->item_request, $this->mysqli));
		} else {
			$this->page_data["title"] = "Alois Sečkár - Domovská stránka";
		}
		// always presented info
		if ($this->page_data["mysql"] == true) {
			// menu
			include_once getcwd().'/web/scripts/elrh_menu_creator.php';
			$this->page_data["menu"] = 
					ELRHMenuCreator::createMenuContent();
			// breadcrumb navigation
			include_once getcwd().'/web/scripts/elrh_navigation_creator.php';
			$this->page_data["navigation"] = 
					ELRHNavigationCreator::createNavigationContent($this->page_request, $this->item_request, $this->mysqli);
			// info displayed in footer
			// current version number and last update date
			$result = $this->mysqli->query(
				"SELECT value FROM elrh_main WHERE var='last_update' OR var='system_version'");
			$data = $result->fetch_array();
			$this->page_data["update"] = $data["value"];
			$data = $result->fetch_array();
			$this->page_data["version"] = $data["value"];	
		} else {
			$this->page_data["menu"] = '&nbsp;&diams;&nbsp;Not connected&nbsp;&diams;&nbsp;';
			$this->page_data["navigation"]["top"] = '&raquo;&nbsp;<a href="" target="_self" title="Index">INDEX</a>';
			$this->page_data["navigation"]["bottom"] = '';
			$this->page_data["update"] = "???";
			$this->page_data["version"] = "???";	
		}
	}
	
	public function renderPage() {
		include_once 'elrh_page_renderer.php';
		ELRHPageRenderer::renderHTMLStart();
			ELRHPageRenderer::renderHTMLHead($this->page_data["title"]);
			ELRHPageRenderer::renderBodyStart();
				ELRHPageRenderer::renderPageHeader();
				ELRHPageRenderer::renderPageMenu($this->page_data["menu"]);
				ELRHPageRenderer::renderContentStart($this->page_data["navigation"]["top"]);
					if ($this->page_request != "error") {
						include_once getcwd().'/web/scripts/page-content/elrh_'.$this->page_request.'_content.php';
						ELRHPageContentRenderer::renderContent($this->page_data);
					} else {
						include_once 'elrh_error_page.php';
						ELRHPageContentRenderer::renderContent($this->page_data["request"]);
					}	
				ELRHPageRenderer::renderContentEnd($this->page_data["navigation"]["bottom"]);
				ELRHPageRenderer::renderPageFooter($this->page_data["version"], $this->page_data["update"]);
		ELRHPageRenderer::renderHTMLEnd();
	}
	
	
	/// PRIVATE METHODS \\\

    private function getMySQLConnection() {
		// get connection info
		include_once "elrh_dbconnect.php";
		$databaseInfo = new ELRHDBConnectionStrings();
		// set connection info
		$this->mysqli = new mysqli($databaseInfo->ELRH_MySQL_Host, $databaseInfo->ELRH_MySQL_User, 
			$databaseInfo->ELRH_MySQL_Pass, $databaseInfo->ELRH_MySQL_Db);
		// work with DB
		if ($this->mysqli->errno == 0) {
			// set db encoding
			$this->mysqli->set_charset("utf8");
			// notify that no error occured
			$this->page_data["mysql"] = true; 
		} else {
			// notify that error occured and connection is not established
			$this->page_data["mysql"] = false; 
		}
    }
}

?>