<?php

class Model
{
	private static $db = null;

	public function __construct()
	{
		global $wpdb;
		self::$db = $wpdb;
	}

	public static function getDatabaseConnection()
	{
		return self::$db;
	}
}