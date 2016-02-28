$(function(){
	$('[name="ssn_not_available"]').click(function(){
		if ($(this).is(":checked")) {
			$('[name="social_security_last_four"]').val('').attr('disabled', 'true');
		} else {
			$('[name="social_security_last_four"]').removeAttr('disabled');
		}
	});

	$(document).on('keyup', '[name="social_security_last_four"]', function(){
		if ($(this).val().length === 4) {
			$('[name="ssn_not_available"]').val(0).parents('.ssn-checkbox').addClass('hide');
		} else {
			$('[name="ssn_not_available"]').val(1).parents('.ssn-checkbox').removeClass('hide');
		}
	});
});