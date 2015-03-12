function go_events() {
	$('.menu_automate, .data, .suggestions, .resultats').on('click', 'a', function(e) {
		e.preventDefault();
		url = $(this).attr('href');
		api_menu(url);
		return false;
	});
	$('body').on('click', '.add_article', function(e) {
		e.preventDefault();
		new SirTrevor.Editor({el:$(".adder-wy")})
		load('.adder');
		return false;
	});
	$('body').on('click', '.edit_link', function(e) {
		e.preventDefault();
		$('.data_put').html(api_json($('.edit_link').attr('data-url')));
		load('.editer');
		return false;
	});
	$('body').on('click', '#chargement', function(e) {
		$('#chargement') .modal('hide');
	});
	$('body').on('click', '.ok_article', function(e) {
		e.preventDefault();
		$('#chargement') .modal('show');
		load('.index');
		return false;
	});
	$('body').on('submit', '.search-submit', function(e) {
		e.preventDefault();
		q = $(this).find('input').val();
		api_search(q);
		load('.search');
		return false;
	});
};