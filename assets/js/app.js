$(function () {
	//	initialize tooltips
  $('[data-toggle="tooltip"]').tooltip();

	//	help modals
	$('[data-target="#modal-help"]').click(function(e){
		e.preventDefault();
		var title = $(this).attr('data-modal-title');
		var body  = $(this).attr('data-modal-body');
		$('#modal-help .modal-title').html(title);
		$('#modal-help .modal-body').html(body);
	});
})