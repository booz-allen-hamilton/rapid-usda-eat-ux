$(function(){
	$('._multiselect_race').each(function(index, element){
		var label = $(this).attr('data-label');
		$(this).multiselect({ nonSelectedText: label });
	});
});
