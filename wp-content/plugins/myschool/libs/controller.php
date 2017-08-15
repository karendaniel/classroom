<?php

/**
* @package controller
*/
class Controller extends View
{
	public $view = null;

	public function __construct()
	{
		parent::__construct();
		$this->view = new View();
	}

}