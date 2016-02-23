$(document).on('click', '[data-clone]', function(e){
	e.preventDefault();
	var template = $(this).attr('data-clone');
	var target = $(this).attr('data-target');
	$(template).clone().removeClass('hide').removeAttr('id').appendTo(target);

	$('#childName-list').find('[data-name="child_first"]').removeAttr('data-name').attr('name', 'child_first[]').attr('required', 'true');
	$('#childName-list').find('[data-name="child_last"]').removeAttr('data-name').attr('name', 'child_last[]').attr('required', 'true');
	$('#childName-list').find('[data-name="child_middle"]').removeAttr('data-name').attr('name', 'child_middle[]');
});

$(document).on('click', '.remove-item', function(e){
	e.preventDefault();
	$(this).parents('.tableItems').fadeOut(500, function(){
		$(this).remove();
	});
});

/*$('input[type="radio"]').click(function(){
	var radioName = $(this).attr('name');
	if ($(this).val() == 'true') {
		$(this).parents('.main-something-container').find('.child-income-container').removeClass('hide');
	} else {
		$(this).parents('.main-something-container').find('.child-income-container').addClass('hide');
	}
});*/
