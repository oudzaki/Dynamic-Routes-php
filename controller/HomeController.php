<?php


class HomeController extends UserController{
	public $model;

	public function indexAction(){

		$this->checkUserAccess();
		$items = $this->model->getItemsData();
		return require_once('../views/dashboard.php');

	}


}
