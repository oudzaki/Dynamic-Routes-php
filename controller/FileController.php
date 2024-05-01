<?php

class FileController {
	public $model;

	public function uploadAction(){
		$message='';
		if(isset($_POST['submit'])){
			$target_dir = "./uploads/";
			// $target_file = $target_dir.basename($_FILES['uploadFile']['name']);
			// Get the base name of the uploaded file
			$base_name = basename($_FILES['uploadFile']['name']);

			// Generate a unique name for the uploaded file
			$unique_name = uniqid() . '_' . $base_name;

			// Concatenate the target directory with the unique name of the uploaded file to get the full path
			$target_file = $target_dir . $unique_name;

			if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"],$target_file)){
				$message = "The File ".htmlspecialchars(basename($_FILES["uploadFile"]["name"]))." has been uploaded!";
				// get excel file data /////////////////////
				// $row = 1;
				// $columnData = [];
				// if(($hanlde = fopen($target_file,"r"))!==FALSE){
				// 	while(($data = fgetcsv($hanlde,0,","))!==FALSE){
				// 		if($row!=1){
				// 			$columnData[$row]['name'] = $data[0];
				// 			$columnData[$row]['qt'] = $data[1];
				// 			$columnData[$row]['price'] = $data[2];
				// 		}
				// 		$row++;
				// 	}
				// 	fclose($hanlde);
				// }
				// if(!empty($columnData)){
				// 	$this->model->insertCsvFileData($columnData);
				// }
				///////////////////////////////////////////
			}else{
				$message ="Sorry, there was an error while uploading you file!";
			}
		}
		return require_once('../views/upload.php');
	}
}