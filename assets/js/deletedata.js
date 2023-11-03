$(document).ready(function() {
	$('.delbtn').on('click', function() {
		
		$('#deletemhs').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#delete_id').val(data[0]);
	});	
});