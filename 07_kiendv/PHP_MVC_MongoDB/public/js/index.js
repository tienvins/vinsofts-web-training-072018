$(document).ready(function () {
	$(".showmore").click(function () {
		var id = $(this).attr("id");
		$.ajax ({
			url: "admin.php?controller=Users",
			dataType : 'text',
			data: {id:id},
			type: "POST",
			success:function(data){
				console.log(data);
			}
		});
	});
});