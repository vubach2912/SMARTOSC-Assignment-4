<?php
/**
*	Class pagination
*
*
*/
	class Pagination{
		private var $config = array();
		private var $base_url;
		private var $total_rows;
		private var $per_page;
		private var $start_from;

		// construct pagination class
		function __construct(){

		}

		// config pagination class
		public function config($config){
			$this->base_url = $config['base_url'];
			$this->total_rows = $config['total_rows'];
			$this->per_page = $config['per_page'];
			$this->start_from = ($config['total_rows'] - 1)*$config['per_page'];

			$query = mysql_query("SELECT * FROM student ORDER BY id DESC LIMIT $start_from, $per_page");
		}


		// create links 
		public function create_link(){
				// select DBS
				$sql = "SELECT * FROM student "; 
				$rs_result = mysql_query($sql); //run the query
				$total_records = mysql_num_rows($rs_result);  //count number of records
				$total_pages = ceil($total_records / $num_rec_per_page); 

				echo '<a href="'.$this->base_url.'?page=1>"First page </a>';
				for ($i=1; $i<=$total_pages; $i++) { 
				            echo "<a href='product.php?page=".$i."'>".$i."</a> "; 
				}; 
				echo '<a href="'.$this->base_url.'?page='.$this->total_pages.'>"First page </a>';
		}
	}

?>