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

}