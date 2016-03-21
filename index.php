
<?php
require 'application/controller/c_student.php';
$controller = new c_student();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<!--Bootstrap CSS-->
	<link rel="stylesheet"  href="asset/bootstrap/css/bootstrap.css">
	
	<!--JQuery-->
	<script src="asset/jquery/jquery.min.js"></script>

	<!--Bootstrap JS-->
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>

	<!--JQquery validation-->
	<script type="text/javascript" src="asset/jquery/jquery.validate.min.js"></script>

	<script type="text/javascript" src="asset/jquery/add.js"></script>
	<script type="text/javascript" src="asset/jquery/edit.js"></script>
	<script type="text/javascript" src="asset/jquery/delete.js"></script>

	</head>
<body>
	<div class="container">
		<!--Title-->
		<div div="row">
			<div class="col-xs-12 col-md-12">
				<h1 style="text-align: center">Quản lý sinh viên</h1>
			</div>
		</div><!--Title-->

		<!--Add student-->
		<?php  
			include("application/view/v_add.php");
		?>
		<!--Add student-->

		<!--Edit student-->
		<?php  
			include("application/view/v_edit.php");
		?>
		<!--Edit student-->

		<!--Delete student-->
		<?php  
			include("application/view/v_delete.php");
		?>
		<!--Delete student-->

		<br />

		<!--Table Data-->
		<?php  
			$student = $controller->listAll();
		?>
		<!--Table Data-->
	</div><!--Container-->
</body>
</html>