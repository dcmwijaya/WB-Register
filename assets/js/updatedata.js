$(document).ready(function() {
	$('.editbtn').on('click', function() {
		
		$('#editmhs').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#update_id').val(data[0]);
		$('#nama').val(data[1]);
		$('#email').val(data[2]);
		$('#pstudi').val(data[3]);
		$('#telp').val(data[4]);
	});	
});