$(document).ready(function(){
	//Validate when click on add button in modal add student
	$('#btnAdd_student').click(function(){
		$('#frmAdd_student').validate({
	        rules: {
	          	txtName: {
	            	required: true,
	           		minlength: 6
	        	},

	        	txtEmail: {
	            	required: true,
	            	email: true
	        	},

	        	txtPhone: {
	            	required: true,
	            	minlength: 9,
	            	maxlength: 11
	        	},

	        	txtCountry: {
	        		required: true
	        	},

	        	txtAddress: {
	        		required: true
	        	}
	        }
      	});
	});//Validate when click on add button in modal add student

	//Khi ấn vào nút làm sạch trong modal thêm  product
	$('#btnClean_student').click(function(){
		$('.error').empty();
	});

	//Khi ấn vào nút close trong modal thêm product
	$('#btnClose_student').click(function(){
		$('.error').empty();
		$('#txtName').val("");
		$('#txtAddress').val("");
		$('#txtPhone').val("");
		$('#txtEmail').val("");
		$('#slGender').val("1");
		$('#txtCountry').val("");
	});
});