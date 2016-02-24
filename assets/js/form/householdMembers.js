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

$(document).on('click', '[data-clone-row]', function(){
	var clone = $(this).attr('data-clone-row');
	var base_url = $('body').attr('data-base');
	$.ajax({
		url: base_url + 'apply/template/' + clone,
		type: 'GET',
		data: {
			format: 'json'
		},
		error: function() {
			alert('There was problem with your request');
		},
		dataType: 'html',
		success: function(data) {
			switch(clone) {
				case "adult_row":
					$(data).appendTo('#adultName-list');
				break;
				case "child_row":
					$(data).appendTo('#childName-list');
				break;
			}
		}
	});
});


$(document).on('click', '[data-clone-income]', function(){
	var clone = $(this).attr('data-clone-income');
	var base_url = $('body').attr('data-base');
	var parent = $(this).parents('.rowItemIncome').find('.rowItem-'+clone);
	console.log('clone: '+clone);
	$.ajax({
		url: base_url + 'apply/template/' + clone,
		type: 'GET',
		data: {
			format: 'json'
		},
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



// $(document).on('click', '#adultName-list .income-toggle', function(e){
// 	var toggle_value = $(this).val();
// 	if (toggle_value == 'true') {
// 		$(this).parents('.main-row-container').find('.adult-income-container').removeClass('hide');
// 	} else {
// 		$(this).parents('.main-row-container').find('.adult-income-container').addClass('hide');
// 	}
// });
//
// $(document).on('click', '#adultName-list .toggle-earnings-from-work', function(e){
// 	var toggle_value = $(this).val();
// 	if (toggle_value == 'true') {
// 		$(this).parents('.main-row-container').find('.adult-income-container').removeClass('hide');
// 	} else {
// 		$(this).parents('.main-row-container').find('.adult-income-container').addClass('hide');
// 	}
// });
