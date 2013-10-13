(function($){
    $(function($) {
        //comment submit button
        $('#respond').find('input[type=submit]').addClass('btn theme-btn');

        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });

        $('ul.dropdown-menu li.dropdown').hover(function() {
            $(this).addClass('open');
        }, function() {
            $(this).removeClass('open');
        });
    });
})(jQuery);
