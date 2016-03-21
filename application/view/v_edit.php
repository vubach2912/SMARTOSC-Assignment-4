<!--Modal edit students-->
<form action="" method="post" id="frmEdit_student">
<div id="modal-edit-student" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" id="btnClose_student_edit">&times;</button>
		<h4 class="modal-title">Edit Infomation</h4>
		</div>

		<!--Body modal-->
		<div class="modal-body">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtStudentID_edit">StudentID: </label>
					    <input type="text" class="form-control" name="txtStudentID_edit" class="txtStudentID_edit" id="txtStudentID_edit" placeholder="StudentID..." disabled> 
					</div>
				</div>
			</div>

        	<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtName_edit">Name: </label>
					    <input type="text" class="form-control" name="txtName_edit" class="txtName_edit" id="txtName_edit" placeholder="Name...">
					    <label  class="error" for="txtName_edit" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtEmail_edit">Email: </label>
					    <input type="text" class="form-control" name="txtEmail_edit" class="txtEmail_edit" id="txtEmail_edit" placeholder="Email...">
					    <label  class="error" for="txtEmail_edit" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtAddress_edit">Address: </label>
					    <input type="text" class="form-control" name="txtAddress_edit" class="txtAddress_edit" id="txtAddress_edit" placeholder="Address...">
					    <label  class="error" for="txtAddress_edit" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="txtPhone_edit">Phone: </label>
					    <input type="number" class="form-control" name="txtPhone_edit" class="txtPhone_edit" id="txtPhone_edit" placeholder="Phone..." min="0" step="1">
					    <label  class="error" for="txtPhone_edit" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="form-group">
					    <label for="slGender">Gender: </label>
					    <select name="slGender_edit" class="form-control" id="slGender_edit">
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
					    <label for="txtCountry_edit">Country: </label>
					    <input type="text" class="form-control" name="txtCountry_edit" class="txtCountry_edit" id="txtCountry_edit" placeholder="Country...">
					    <label  class="error" for="txtCountry_edit" style="color:red; padding:5px"></label><!--Hiện thị lỗi class=error-->
					</div>
				</div>
			</div>
		</div><!--Body modal-->


		<div class="modal-footer">
		<button type="submit" class="btn btn-default" id="btnEdit_student">Edit</button>
		<button type="button" class="btn btn-default" id="btnClean_student_edit">Reset</button>
		</div>
    </div>

  </div>
</div>
</form><!--Modal add students-->
