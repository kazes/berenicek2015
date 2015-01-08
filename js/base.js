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


});


/* FIX HEADER WHEN SCROLLING */
pm.fixHeader = function() {
    // fix logo
    $('#logo-berenicek').scrollToFixed({
        //marginTop:10,
        zIndex:2
    });


    // fix menu
    $('#menu-container').scrollToFixed({
        zIndex:1
    });
};











