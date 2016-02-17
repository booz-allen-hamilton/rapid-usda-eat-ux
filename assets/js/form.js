$(function(){



});

var $form_id = $('#page-application-form');
var max_step = $form_id.attr('data-max-steps');
var complete = parseInt($form_id.attr('data-complete'));

$form_id.find('[data-action="next"]').click(function(){
	var current_step = parseInt($form_id.attr('data-current-step'));
	var next_step = current_step + 1;
	// if (current_step == max_step) {
	// 	next_step = max_step;
	// }

	if (current_step != complete) {
		$form_id.find('.form-section[data-step="'+current_step+'"]').addClass('hide');
		$form_id.find('.form-section[data-step="'+next_step+'"]').removeClass('hide');
		update_current_step(next_step);
		$('.footer-progress-step#step-'+current_step).removeClass('step-disabled').removeClass('step-active').addClass('step-complete');
		$('.footer-progress-step#step-'+next_step).removeClass('step-disabled').removeClass('step-complete').addClass('step-active');
	}

	if (next_step == complete) {
		$form_id.find('.footer').addClass('hide');
	}



});
$form_id.find('[data-action="prev"]').click(function(){
	var current_step = parseInt($form_id.attr('data-current-step'));
	var prev_step = current_step - 1;

	if (current_step != 1) {
		$form_id.find('.form-section[data-step="'+current_step+'"]').addClass('hide');
		$form_id.find('.form-section[data-step="'+prev_step+'"]').removeClass('hide');
		update_current_step(prev_step);
		$('.footer-progress-step#step-'+current_step).removeClass('step-complete').removeClass('step-active').addClass('step-disabled');
		$('.footer-progress-step#step-'+prev_step).removeClass('step-disabled').removeClass('step-complete').addClass('step-active');
	}


	//	validate section
	// var fv = $form_id.data('formValidation'); //	FormValidation instance
	// fv.validateContainer('#form-section-household');

});


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


function update_current_step(step) {
	console.log(step);
	$form_id.attr('data-current-step', step);
}

$('#application-form').formValidation({
	framework: 'bootstrap',
	icon: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	// This option will not ignore invisible fields which belong to inactive panels
	excluded: ':disabled',
	fields: {
		numberChildren: {
			validators: {
				notEmpty: {},
				integer: {}
			}
		},
		numberAdults: {
			validators: {
				notEmpty: {},
				integer: {}
			}
		},
	}
});