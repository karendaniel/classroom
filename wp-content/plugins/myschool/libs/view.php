<?php

/**
* @package view
*/
class View 
{
	private $path = null;
	private $filename = null;
	private $message = null;
	private $title = null;
	
	public function __construct()
	{
		$this->path = plugin_dir_path(__DIR__).'templates/';
	}

	public function renderRegistrationForm()
	{

		$this->getHtmlTemplate('registration');
	}

	public function getHtmlTemplate($templateRequired)
	{
		$this->title = $templateRequired;
		$this->filename = $templateRequired.'.php';

		if (!file_exists($this->path.$this->filename)) {
			
			$this->filename = 'warning.php';
			$this->message = 'Template Not Found';
			require_once($this->path.$this->filename);
			return;
		}

		require_once($this->path.$this->filename);
	}
}