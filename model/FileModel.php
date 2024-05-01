<?php

class FileModel {
	public $db;

	public function insertCsvFileData($items){

		try {
			$query = " TRUNCATE TABLE tbl_team";
			$this->db->query($query);

			$sql='';
			foreach($items as $item){
				$sql .= "('" . $item['name'] . "','" . $item['qt'] . "','" . $item['price'] ."'),";
			}
			$sql = rtrim($sql , ",");

			$query =" INSERT INTO tbl_item (name,qt,price) VALUES {$sql}";
			$this->db->query($query);
			return 1;

		} catch (Exception $ex) {
			return $ex->getMessage();
		}


	}
}