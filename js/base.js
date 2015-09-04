/*------------------------------------------------------------------------------
    JS Document (https://developer.mozilla.org/en/JavaScript)

    project:    Bérénice K. Portfolio 2015
    created:    2014-12-22
    author:     Florian Boudot - www.papadiv.com
    
----------------------------------------------------------------------------- */


/* CONSTANTES */
var d = document;
var w = window;
pm = {};


/* WINDOW.ONLOAD */
$(d).ready(function(){
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












