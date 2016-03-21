$(document).ready(function(){
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
	});

	//Khi ấn vào nút close trong modal thêm product
	$('#btnClose_student_edit').click(function(){
		$('.error').empty();
		$('#txtName').val("");
		$('#txtAddress').val("");
		$('#txtPhone').val("");
		$('#txtEmail').val("");
		$('#slGender').val("1");
		$('#txtCountry').val("");
	});
});