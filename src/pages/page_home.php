<?php
/*
 * SchematicsForFree.com Website
 * @copyright 2004-2017
 * @author lorenzo at poixson.com
 * @link http://schematicsforfree.com/
 */
namespace pxn\schfreeWebsite\pages;


class page_home extends \pxn\phpPortal\pages\wiki\Wiki {



	protected function getPageData() {
		$data = \file_get_contents(
			__DIR__.'/home.txt'
		);
		return $data;
	}



}
