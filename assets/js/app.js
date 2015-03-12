$(document).ready(function() {
	api_menu('/fr/');
	go_events();
	load('.index');
	
	$('#search').delayKeyup(function() {
        var q = $('#search').val();
        if (q.length > 2) {
            $('.suggestions').show();
            load_suggest(q);
        } else {
            $('.suggestions').hide();
        }
    }, 300);
});