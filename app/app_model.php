<?php
App::import('Lib', 'LazyModel.LazyModel');

class AppModel extends LazyModel {

	var $brwConfig = array();
	var $recursive = -1;
	var $actsAs = array(
		'Containable',
		'Brownie.Panel',
	);

}