<?php
class Session
{
	public static function init()
	{
		@session_start();
	}
	public static function set($key, $value)
	{
		$_SESSION[sha1($key)] = $value;
	}
	public static function get($key)
	{
		if (isset($_SESSION[sha1($key)]))
		return $_SESSION[sha1($key)];
	}
	public static function destroy()
	{
		//unset($_SESSION);
		session_destroy();
	}
	
}