(function($){
    $(function($) {
        //comment submit button
        $('#respond').find('input[type=submit]').addClass('btn theme-btn');

        //contact form
        var subjects = ['Just to say hello', 'other', 'none'],
            $budgetGroup = $('.budget-group');

        $budgetGroup.hide();
        $('form.wedevs-contact-form').on('change', '#contact-subject', function (e) {
            var val = $(this).val();
            console.log(val);

            if( $.inArray( val, subjects ) < 0 ) {
                $budgetGroup.show();
            } else {
                $budgetGroup.hide();
            }
        });

        //social icons tooltip
        $('.social-icons, .site-footer').tooltip({ selector: "a" })

        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });
    });

    // on DOM load gives incorrect width of element due to image size
    $(window).load(function() {
        var windowWidth = $(window).width();
                
        if( windowWidth > 768 ) {
            var contentHeight = $('#content').height(),
                widgetHeight = $('.widget-area').height();

            // console.log(windowWidth, contentHeight, widgetHeight);
            if ( contentHeight > widgetHeight) {
                $('.widget-area').height(contentHeight);
            };
        }
    });
})(jQuery);
