$(function(){
	$('button[type="submit"]').click(function(){
		var value =  $(this).attr('data-value');
		$('[name="age_validation"]').val(value);
	});
});