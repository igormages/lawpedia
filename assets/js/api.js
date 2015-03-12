function api_menu(url) {
	$.ajax({
		type: "GET",
		url: 'http://lawpedia.codit.io' + url,
		success: function(data)
		{
			if (data[0] != '0')
				$('.menu_automate').html(data);
			else
			{
				$('.edit_link').attr('data-url', url);
				$('.article .data').html(data.substring(1));
				load('.article');
			}
		}
	});
};

function api_json(url) {
	$.ajax({
		type: "GET",
		url: 'http://lawpedia.codit.io/wy' + url,
		success: function(data)
		{
			$('.data_put').html(data);
			new SirTrevor.Editor({el:$(".editor-wy")})
		}
	});
};
function api_search(q) {
	$.ajax({
		type: "GET",
		url: 'http://lawpedia.codit.io/search/b/' + q,
		success: function(data)
		{
			$('.resultats').render(data, search_directives);
		}
	});
};


