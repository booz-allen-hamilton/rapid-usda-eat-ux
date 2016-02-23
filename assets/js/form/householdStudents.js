$('[data-clone]').click(function(e){
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
	if ($(".tableItems").length > 2) {
		$(this).parents('.tableItems').fadeOut(500, function() {
			$(this).remove();
		});
	}
});