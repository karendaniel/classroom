<?php

class Registration extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getRegistrationForm()
	{
		$this->view->renderRegistrationForm();
	}
}