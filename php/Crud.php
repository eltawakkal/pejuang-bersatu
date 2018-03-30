<?php 

	include_once 'dbConfig.php'; 

	/**
	* 
	*/
	class Crud extends dbConfig
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function showAllData(){

			$query = "SELECT * FROM tb_Anggota";
			$result = $this->conn->query($query);

			if ($result == false) {
				return false;
			}

			$rows = array();

			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}

			return $rows;

		}

		public function showByAmanah($amanah){

			$query = "SELECT * FROM tb_Anggota WHERE amanah = '$amanah'";
			$result = $this->conn->query($query);

			if ($result == false) {
				return false;
			}

			$rows = array();

			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}

			return $rows;

		}
	}

?>