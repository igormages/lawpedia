suggest_directives = {
	link: {href: function() {return this.link;}, html: function() {return '';}},
	title: {html: function() {return this.title;}},
};

search_directives = {
	link: {href: function() {return this.link;}, html: function() {return '';}},
	title: {html: function() {return this.title;}},
	desc: {html: function() {return this.desc;}},
	fil: {html: function() {return this.fil;}},
};

(function ($) {
    $.fn.delayKeyup = function(callback, ms){
        var timer = 0;
        $(this).keyup(function(){                   
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        });
        return $(this);
    };
})(jQuery);