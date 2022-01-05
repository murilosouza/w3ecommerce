<?php 

require_once("vendor/autoload.php");

use Slim\Slim;
use Hcode\Page;
use Hcode\PageAdmin;
use Hcode\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/adminLoja', function() {
    
	$page = new PageAdmin();
	
	$page->setTpl("index");

});

$app->get('/adminLoja/login', function() {
    
	$page = new PageAdmin([
		"header" => false,
		"footer" => false
	]);
	
	$page->setTpl("login");

});

$app->post('/adminLoja/login', function() {
    
	User::login($_POST["login"], $_POST["password"]);

	header("location: /adminLoja");
	
	exit;

});

$app->run();

 ?>