<?php
/*
 * SchematicsForFree.com Website
 * @copyright 2004-2017
 * @author lorenzo at poixson.com
 * @link http://schematicsforfree.com/
 */
namespace pxn\schfreeWebsite\pages;

use pxn\phpUtils\Paths;


class page_home extends \pxn\phpPortal\pages\wiki\Wiki {



	protected function getPageData() {
		$dataPath = Paths::data();
		$path = "$dataPath/wiki";
		$data = \file_get_contents(
			"$path/home.txt"
		);
		return $data;
	}



}
