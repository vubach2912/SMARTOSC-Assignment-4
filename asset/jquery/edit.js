$(document).ready(function(){
	//Show data on modal
	$('.btnEdit_student_show').click(function(){
		$('#txtStudentID_edit').val($(this).attr('data-id'));
		$('#txtName_edit').val($(this).attr('data-name'));
		$('#txtPhone_edit').val($(this).attr('data-phone'));
		$('#txtAddress_edit').val($(this).attr('data-address'));
		$('#txtCountry_edit').val($(this).attr('data-country'));
		$('#txtEmail_edit').val($(this).attr('data-email'));
		$('#slGender_edit').val($(this).attr('data-gender'));
	});

	//Validate when click on add button in modal add student
	$('#btnEdit_student').click(function(){
		$('#frmEdit_student').validate({
	        rules: {
	          	txtName_edit: {
	            	required: true,
	           		minlength: 6
	        	},

	        	txtEmail_edit: {
	            	required: true,
	            	email: true
	        	},

	        	txtPhone_edit: {
	            	required: true,
	            	minlength: 9,
	            	maxlength: 11
	        	},

	        	txtCountry_edit: {
	        		required: true
	        	},

	        	txtAddress_edit: {
	        		required: true
	        	}
	        }
      	});
	});//Validate when click on add button in modal add student

	//Khi ấn vào nút làm sạch trong modal thêm  product
	$('#btnClean_student_edit').click(function(){
		$('.error').empty();
		$('#txtName_edit').val("");
		$('#txtAddress_edit').val("");
		$('#txtPhone_edit').val("");
		$('#txtEmail_edit').val("");
		$('#slGender_edit').val("1");
		$('#txtCountry_edit').val("");
	});


	//Khi ấn vào nút close trong modal thêm product
	$('#btnClose_student_edit').click(function(){
		$('.error').empty();
		$('#txtName_edit').val("");
		$('#txtAddress_edit').val("");
		$('#txtPhone_edit').val("");
		$('#txtEmail_edit').val("");
		$('#slGender_edit').val("1");
		$('#txtCountry_edit').val("");
	});
});