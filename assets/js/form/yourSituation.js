$(function(){
	$('[data-scenario-value]').click(function(e){
		e.preventDefault();
		var value = $(this).attr('data-scenario-value');
		$('[name="scenario"]').val(value);
		$('#form-application').submit();
	});
});