$('a.add-cart').click(function(event){
	event.preventDefault();
	var href = $(this).attr('href');
	var nem = $(this).data('name');
	$.ajax({
		url: href,
		type: 'GET',
		data: {},
	});
	//alert(href);
});