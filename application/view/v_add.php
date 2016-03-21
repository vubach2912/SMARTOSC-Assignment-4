<div div="row">
	<div class="col-xs-12 col-md-3">
		<button type="button" class="btn btn-danger" id="btnAdd-student" data-toggle="modal" data-target="#modal-add-student">Thêm sinh viên</button>
	</div>
</div>

<br />

<!--Modal add students-->
<form action="" method="post" id="frmAdd_student">
<div id="modal-add-student" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" id="btnClose_student">&times;</button>
		<h4 class="modal-title">Thêm sinh viên</h4>
		</div>

		<!--Body modal-->
		<div class="modal-body">
        	<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtName">Name: </label>
					    <input type="text" class="form-control" name="txtName" class="txtName" id="txtName" placeholder="Name...">
					    <label  class="error" for="txtName" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtEmail">Email: </label>
					    <input type="text" class="form-control" name="txtEmail" class="txtEmail" id="txtEmail" placeholder="Email...">
					    <label  class="error" for="txtEmail" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtAddress">Address: </label>
					    <input type="text" class="form-control" name="txtAddress" class="txtAddress" id="txtAddress" placeholder="Address...">
					    <label  class="error" for="txtAddress" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtPhone">Phone: </label>
					    <input type="number" class="form-control" name="txtPhone" class="txtPhone" id="txtPhone" placeholder="Phone..." min="0" step="1">
					    <label  class="error" for="txtPhone" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="slGender">Gender: </label>
					    <select name="slGender" class="form-control" id="slGender">
					    	<option value="1">Nam</option>
					    	<option value="2">Nữ</option>	
					    	<option value="3">Khác</option>	
					    </select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtCountry">Country: </label>
					    <input type="text" class="form-control" name="txtCountry" class="txtCountry" id="txtCountry" placeholder="Country...">
					    <label  class="error" for="txtCountry" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>
		</div><!--Body modal-->


		<div class="modal-footer">
		<button type="submit" class="btn btn-default" id="btnAdd_student">Add</button>
		<button type="reset" class="btn btn-default" id="btnClean_student">Reset</button>
		</div>
    </div>

  </div>
</div>
</form><!--Modal add students-->