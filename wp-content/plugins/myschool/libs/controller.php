<?php

require_once(plugin_dir_path(__FILE__).'view.php');
require_once(plugin_dir_path(__FILE__).'model.php');

/**
* @package controller
*/
class Controller
{
	public $view = null;
	public $model = null;
	public $db = null;

	public function __construct()
	{
		$this->view = new View();
		$this->model = new Model();
		$this->db = Model::getDatabaseConnection();

	}

}