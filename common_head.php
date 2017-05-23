<?php 
	require_once('core/init.php');
	$admin = new Admin();
	$Products = new Products();
	$info = new Info();
	$users = new Users();
	$agents = new Agents();
	$adv = new Adv();
	$front = new Frontend();
	$slider = new Slider();
	$a_id = Input::get('a_id');
	$info_id = Input::get('info_id');
	$sl_id = Input::get('slider_id');
	$pro_id = Input::get('pro_id');
	$token = Input::get('token');
	$admin->check_admin_login();
	$admin->check_admin_token($token);	
	
?>