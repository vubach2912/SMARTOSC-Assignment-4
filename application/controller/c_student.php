<?php
require_once 'application/controller/load.php';
class C_student extends Load
{
	function __construct()
	{
		parent::__construct();
	}

	public function addStudent(){
		$this->render("v_add");
		if (isset($_POST['add'])) {
			$name= $_POST['txtName'];
			$phone = $_POST['txtPhone'];
			$email = $_POST['txtEmail'];
			$address = $_POST['txtAddress'];
			$country = $_POST['txtCountry'];
			$gender = $_POST['slGender'];		
			if($name == ""||$phone==""||$email ==""||$address==""||$country==""||$gender==""){
				echo "All the field must not be empty";
			}else{
				

			}
		}
	}

	var $student = array();
	public function listAll(){
		$connect = mysqli_connect("localhost","root","","student") or die("Cannot Connect");
		$results = mysqli_query($connect,"SELECT * FROM tbl_sinhvien");
		$student = array();
		while ($rows = mysqli_fetch_array($results)) {
			$student[] = $rows;

		}
		$this->student = $student;
		$this->render('v_listall');
		return $student;
	}


}

?>