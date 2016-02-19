$(function(){
	$('[data-value]').click(function(e){
		e.preventDefault();
		var value = $(this).attr('data-value');
		$('[name="scenario"]')val(value);
		$('#form-application').submit();
	});
});