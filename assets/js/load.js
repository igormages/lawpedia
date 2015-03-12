function load_suggest(q) {
	$.ajax({
		type: "GET",
		url: 'http://lawpedia.codit.io/search/q/' + q,
		success: function(data)
		{
			$('.suggestions').render(data, suggest_directives);
		}
	});
	
}

function load(load) {
	$('.active').removeClass('active');
	$(load).addClass('active');
};
