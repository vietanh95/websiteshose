

$(function(){

	//get the clck of the create user
	$("#modalbutton").click(function(){

		$("#modal").modal("show").find("#modalContent").load($(this).attr("value"));
	});
})
