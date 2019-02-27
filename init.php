<?php
class Time_to_Read extends Plugin {
	private $host;

	function about() {
		return array(1.0,
			"Shows (approximate) time it takes to read an article, combined mode only",
			"fox");
	}

	function init($host) {
		$this->host = $host;

	}

	function get_js() {
		return file_get_contents(__DIR__ . "/init.js");
	}

	function get_css() {
		return file_get_contents(__DIR__ . "/init.css");
	}

	function api_version() {
		return 2;
	}

}
