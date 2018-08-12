$(document).ready(function(){
	
	$('#prodTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	$('#supTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
});