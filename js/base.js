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
    pm.reduceHeader();
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

        $('html, body').animate({
                scrollTop: destination_y
            }, {
                duration:time
            }
        );
    });
};


pm.reduceHeader = function () {
    $(window).on('scroll', function(){
        if($(window).scrollTop() > 99){
            $("#header").addClass('active');
        }
        else {
            $("#header").removeClass('active');
        }
    });
};












