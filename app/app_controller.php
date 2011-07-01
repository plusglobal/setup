<?php

class AppController extends Controller {

 	var	$components= array(
		'Session',
		//'Brownie.Panel',
		'DebugKit.Toolbar',
	);

	var $helpers = array('Html', 'Form', 'Session');

	var $companyName = 'Company name';

	//var $brwMenu = array();

	function beforeRender() {
		$this->_setTitle();

	}

	function _setTitle() {
		if (!empty($this->pageTitle)) {
			$this->pageTitle .= ' - ';
		}
		$this->pageTitle .= $this->companyName;
		$this->set('title_for_layout', $this->pageTitle);
	}


}