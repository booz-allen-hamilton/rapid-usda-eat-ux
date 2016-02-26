$(document).on('click', '[data-toggle-target] button', function(){
	var toggle_value = $(this).attr('data-toggle-value');
	var toggle_target = $(this).parent().attr('data-toggle-target');
	$(this).parents('.main-row-container').find('[name="'+toggle_target+'[]"]').val(toggle_value);
	if (toggle_value == '1') {
		$(this).addClass('btn-active').siblings('[data-toggle-value="0"]').removeClass('btn-active');
		$(this).parents('.main-row-container').find('.'+toggle_target+'-container').removeClass('hide');
		$(this).parents('.main-row-container').find('.'+toggle_target+'-add').removeClass('hide');
	} else {
		$(this).addClass('btn-active').siblings('[data-toggle-value="1"]').removeClass('btn-active');
		$(this).parents('.main-row-container').find('.'+toggle_target+'-container').addClass('hide');
		$(this).parents('.main-row-container').find('.'+toggle_target+'-add').addClass('hide');
	}
});

$(document).on('click', '[data-toggle-simple-target] button', function(){
	var toggle_value = $(this).attr('data-toggle-value');
	var toggle_target = $(this).parent().attr('data-toggle-target');
	$(this).parents('.main-row-container').find('[name="'+toggle_target+'[]"]').val(toggle_value);
	if (toggle_value == '1') {
		$(this).addClass('btn-active').siblings('[data-toggle-value="0"]').removeClass('btn-active');
	} else {
		$(this).addClass('btn-active').siblings('[data-toggle-value="1"]').removeClass('btn-active');
	}
});

$(document).on('click', '[data-clone-row]', function(e){
	e.preventDefault();
	var clone = $(this).attr('data-clone-row');
	var base_url = $('body').attr('data-base');
	if (clone == 'adult_row') {
		var parent_id = '#adultName-list';
	} else {
		var parent_id = '#childName-list';
	}
	var parent_index = $(parent_id + ' .main-row-container').last().attr('data-index');

	$.ajax({
		url: base_url + 'apply/template/' + clone + '?parent_index=' + parent_index,
		type: 'GET',
		error: function() {
			alert('There was problem with your request');
		},
		dataType: 'html',
		success: function(data) {
			switch(clone) {
				case "adult_row":
					$(data).appendTo(parent_id);
				break;
				case "child_row":
					$(data).appendTo(parent_id);
				break;
			}
		}
	});
});


$(document).on('click', '[data-clone-income]', function(e){
	e.preventDefault();
	var clone = $(this).attr('data-clone-income');
	var base_url = $('body').attr('data-base');
	var parent = $(this).parents('.rowItemIncome').find('.rowItem-'+clone);
	var group = $(this).attr('data-group');
	if (group == 'adult_row') {
		var parent_id = '#adultName-list';
	} else {
		var parent_id = '#childName-list';
	}
	var parent_index = $(parent_id + ' .main-row-container').last().attr('data-index');
	var income_index = $(parent_id + ' .main-row-container .rowItem-' + clone + ' .rowItem').last().attr('data-index');

	$.ajax({
		url: base_url + 'apply/template/' + clone + '?parent_index=' + parent_index + '&income_index=' + income_index,
		type: 'GET',
		error: function() {
			alert('There was problem with your request');
		},
		dataType: 'html',
		success: function(data) {
			$(data).appendTo(parent);
		}
	});
});


$(document).on('click', '.remove-item', function(){
	$(this).parents('.main-row-container').fadeOut(500, function(){
		$(this).remove();
	});
});

$(function(){
	$('._child_description').each(function(index, element){
		var label = $(this).attr('data-label');
		$(this).multiselect({ nonSelectedText: label });
	});
});
