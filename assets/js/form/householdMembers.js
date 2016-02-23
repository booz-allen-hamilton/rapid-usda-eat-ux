$(document).on('click', '[data-toggle-target] button', function(){
	var toggle_value = $(this).attr('data-toggle-value');
	var toggle_target = $(this).parent().attr('data-toggle-target');
	$(this).parents('.main-adultRow-container').find('[name="'+toggle_target+'[]"]').val(toggle_value);
	if (toggle_value == '1') {
		$(this).addClass('btn-active').siblings('[data-toggle-value="0"]').removeClass('btn-active');
		$('.'+toggle_target+'-container').removeClass('hide');
		$('.'+toggle_target+'-add').removeClass('hide');
	} else {
		$(this).addClass('btn-active').siblings('[data-toggle-value="1"]').removeClass('btn-active');
		$('.'+toggle_target+'-container').addClass('hide');
		$('.'+toggle_target+'-add').addClass('hide');
	}
});



// $(document).on('click', '#adultName-list .income-toggle', function(e){
// 	var toggle_value = $(this).val();
// 	if (toggle_value == 'true') {
// 		$(this).parents('.main-adultRow-container').find('.adult-income-container').removeClass('hide');
// 	} else {
// 		$(this).parents('.main-adultRow-container').find('.adult-income-container').addClass('hide');
// 	}
// });
// 
// $(document).on('click', '#adultName-list .toggle-earnings-from-work', function(e){
// 	var toggle_value = $(this).val();
// 	if (toggle_value == 'true') {
// 		$(this).parents('.main-adultRow-container').find('.adult-income-container').removeClass('hide');
// 	} else {
// 		$(this).parents('.main-adultRow-container').find('.adult-income-container').addClass('hide');
// 	}
// });
