<?php

class ProductController {
	public $model;

	public function getProductAction(){
		return require_once('../views/product.php');
	}
}