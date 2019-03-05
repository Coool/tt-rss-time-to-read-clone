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

		//$host->add_hook($host::HOOK_PREFS_TAB, $this);
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

	function hook_prefs_tab($args) {
		if ($args != "prefPrefs") return;

		print "<div dojoType='dijit.layout.AccordionPane'
			title=\"<i class='material-icons'>photo</i> ".$this->__('Test-Test')."\">";

		print "</div>";

	}
}
