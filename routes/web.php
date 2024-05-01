<?php

// include_once(__DIR__."/Route.php");


// Route::add("/home","HomeController@indexAction");
// Route::add("/login","UserController@loginAction");
// Route::add("/register","UserController@registerAction");
// Route::add("/logout","UserController@logoutAction");
// Route::add("/upload","FileController@uploadAction");
// Route::add("/fileUpload","FileController@uploadAction");
// Route::add("/product","ProductController@getProductAction");

// $route = Route::run();

if(isset($_GET['action'])){
	$request = $_GET['action'];

	if($request == 'home'){$route = "HomeController@indexAction";}
	if($request == 'login'){$route = "UserController@loginAction";}
	if($request == 'register'){$route = "UserController@registerAction";}
	if($request == 'logout'){$route = "UserController@logoutAction";}
	if($request == 'upload'){$route = "FileController@uploadAction";}
	if($request == 'fileUpload'){$route = "FileController@uploadAction";}

	if($request == 'product'){$route = "ProductController@getProductAction";}
}