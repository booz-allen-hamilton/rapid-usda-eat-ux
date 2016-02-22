//	form validation
$('#form-application').validator({
	feedback: {
	  success: 'glyphicon-ok',
	  error: 'glyphicon-remove'
	}
});

$('#history-back').click(function(e){
	e.preventDefault();
	$('#form-application-back').submit();
});