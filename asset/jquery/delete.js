$(document).ready(function(){
	//Click on delete
	$('.btnDelete_student_show').click(function(){
		$('#id_delete').val($(this).attr('data-id'));
	});
});