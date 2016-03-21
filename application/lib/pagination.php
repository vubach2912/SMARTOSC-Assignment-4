<?php
	class Pagination{
		private $config = array();
		private $base_url;
		private $total_rows;
		private $per_page;
		private $start_from;

		function __construct(){

		}

		public function config($config){
			$this->$base_url = $config['base_url'];
			$this->$total_rows = $config['total_rows'];
			$this->$per_page = $config['per_page'];
			$this->$start_from = ($config['total_rows'] - 1)*$config['per_page'];

			$query = mysql_query("SELECT * FROM student ORDER BY id DESC LIMIT $start_from, $per_page");
		}

		public function create_link(){
				$sql = "SELECT * FROM student "; 
				$rs_result = mysql_query($sql); //run the query
				$total_records = mysql_num_rows($rs_result);  //count number of records
				$total_pages = ceil($total_records / $num_rec_per_page); 

				echo '<a href="'.$this->$base_url.'?page=1>"First page </a>';
				for ($i=1; $i<=$total_pages; $i++) { 
				            echo "<a href='product.php?page=".$i."'>".$i."</a> "; 
				}; 
				echo '<a href="'.$this->$base_url.'?page='.$this->total_pages.'>"First page </a>';
		}
	}

?>