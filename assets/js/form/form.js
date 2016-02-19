
//	clone template
$('[data-clone]').click(function(e){
	e.preventDefault();
	var template = $(this).attr('data-clone');
	var target = $(this).attr('data-target');
	$(template).clone().removeClass('hide').removeAttr('id').appendTo(target);
});

$(document).on('click', '.remove-item', function(e){
	e.preventDefault();
	$(this).parents('.tableItems').fadeOut(500, function(){
		$(this).remove();
	});
});

$('#form-application').validator({
	feedback: {
	  success: 'glyphicon-ok',
	  error: 'glyphicon-remove'
	}
});