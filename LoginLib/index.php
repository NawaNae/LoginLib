<?php
session_start();
class Account
{
	private $account = $_SESSION['account'];
	public function isLogin()
	{
		if(isset($_SESSION['account']))
			return true;
		else
			return false;
	}
	public function logout()
	{
		
	}
	public function login($accountName,$password)
	{
		
	}
}


?>