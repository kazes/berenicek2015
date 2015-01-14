/*------------------------------------------------------------------------------
    JS Document (https://developer.mozilla.org/en/JavaScript)

    project:    Project
    created:    YYYY-MM-DD
    author:     johdoe
    
----------------------------------------------------------------------------- */


/*  =CONSTANTES
----------------------------------------------------------------------------- */
//jQuery.noConflict();
var d = document;
var w = window;
pm = {};


/*  =UTILITIES
----------------------------------------------------------------------------- */
var log = function(x) {
    if (typeof console != 'undefined') {
        console.log(x);
    }
};


/*  =WINDOW.ONLOAD
----------------------------------------------------------------------------- */
$(d).ready(function(){

    pm.fixHeader();
    pm.scrollTo();

});


/* SCROLL TO */
pm.scrollTo = function () {
    var $buttons = $('.JS_scroll-to');

    $buttons.on('click', function (e) {
        e.preventDefault();

        var destination_id = $(this).attr('href'),
            $destination = $(destination_id),
            time = 500,
            destination_y = $destination.offset().top;

        console.log('destination_y', destination_y);

        $('html, body').animate({
                scrollTop: destination_y
            }, {
                duration:time
            }
        );
    });
};


/* FIX HEADER WHEN SCROLLING */
pm.fixHeader = function() {
    // fix logo
    $('#logo-berenicek a').scrollToFixed({
        //marginTop:10,
        zIndex:2
    });


    // fix menu
    $('#menu-container').scrollToFixed({
        zIndex:1
    });
};











