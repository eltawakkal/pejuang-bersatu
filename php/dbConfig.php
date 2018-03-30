<?php  

	/**
	* 
	*/
	class dbConfig
	{

		private $hostName = 'localhost';
		private $uname = 'root';
		private $pass = '';
		private $db = 'pejp8417_db_anggota';

		protected $conn;
		
		function __construct()
		{
			if (!isset($this->conn)) {
				$this->conn = new mysqli($this->hostName, $this->uname, $this->pass, $this->db);

				if (!$this->conn) {
					echo "Koneksi gagal";
					exit();
				}
			}

			return $this->conn;
		}

	}

?>