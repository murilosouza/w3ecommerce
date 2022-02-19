<?php

use Hcode\PageAdmin;
use Hcode\Model\User;

$app->get("/admin/forgot", function()
{

	$page = new PageAdmin([
		"header" => false,
		"footer" => false
	]);
	
	$page->setTpl("forgot");

});

$app->post("/admin/forgot", function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");

	exit;

});

$app->get("/admin/forgot/sent", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");	

});

$app->get("/admin/forgot/recover", function(){

	$user = User::validForgotDecrypt($_GET["code"]);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-recover", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));

});

$app->post("/admin/forgot/recover", function(){

	$forgot = User::validForgotDecrypt($_POST["code"]);	

	User::setForgotUsed($forgot["idrecovery"]);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = User::getPasswordHash($_POST["password"]);

	$user->setPassword($password);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset-success");

});

$app->get("/admin/forgot/error", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-error");	

});

$app->get("/admin/login/error", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login-error");	

});

?>