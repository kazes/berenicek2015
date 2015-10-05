/*------------------------------------------------------------------------------
    JS Document (https://developer.mozilla.org/en/JavaScript)

    project:    Bérénice K. Portfolio 2015
    created:    2014-12-22
    author:     Florian Boudot
    
----------------------------------------------------------------------------- */


/* CONSTANTES */
var d = document;
var w = window;
pm = {};


/* WINDOW.ONLOAD */
$(d).ready(function(){
    pm.scrollTo();
    pm.reduceHeader();
    pm.ajaxHistory();
});



/* SCROLL TO */
pm.scrollTo = function () {


    $('body').on('click','.JS_scroll-to', function (e) {
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


pm.ajaxHistory = function () {
    var $ajax = $('#ajax');
    var $menu = $('#menu-container');
    var $logo = $('#logo-berenicek').find('a');
    var logo_href, logo_title;

    // gestion de l'historique
    if('pushState' in history) {
        $(window).on('popstate', function(){
            if((null != history.state) && ('page' in history.state)){
                loadPageContent(history.state.page);
            }
        });

        var parts = document.location.pathname.split('/');
        var destination = parts[parts.length - 1];
        history.replaceState({page:destination},
            document.title, // title
            destination // nouvel etat = nouvelle url ?
        );
    }

    // correspondance 'destination page' : 'menu item to active'
    var table = {
        '/':'portfolio',
        'contact':'contact',
        'drawings':'drawings',
        'projet-brandalley':'portfolio',
        'projet-constance-fournier':'portfolio',
        'projet-emilie-et-charles':'portfolio',
        'projet-la-bonne-box':'portfolio',
        'projet-micromix':'portfolio',
        'projet-new-kidz':'portfolio',
        'projet-usine-a-design':'portfolio'
    };

    var loadPageContent = function (destination) {
        var ajax = new window.XMLHttpRequest();
        var menu_to_active = table[destination];
        var is_page_index = destination == '/';

        // 1 - préparation de la reception de la réponse
        ajax.onreadystatechange = function () {
            // si la requete est terminée
            if (4 === ajax.readyState) {
                // si la requete a réussi
                if (200 >= ajax.status && ajax.status < 400) {
                    // insert new content
                    $ajax.html(ajax.responseText);

                    // repositioning effect
                    $ajax.removeClass('moved');

                    // mask reveal
                    $ajax.removeClass('active');
                }
                else {
                    console.error('oh non george !')
                }
            }
        };

        /* 2 - configuration de la requete */
        ajax.open('GET', destination + '?ajax=true');

        // when fade in is finished we launch the request
        $ajax.one('transitionend', function(){
            $ajax.addClass('moved');

            $(window).scrollTop(0);

            /* 3 - lancement de la requete */
            ajax.send(); // si POST les params sont a passer dans le send()
        });

        // mask page content (launch ajax)
        $ajax.addClass('active');

        // clear menu
        $menu.find('.item').removeClass('active');

        // active menu item
        $('#menu-' + menu_to_active).addClass('active');

        // handle link on logo
        if(is_page_index){
            logo_href = '#content';
            logo_title = 'haut de page ↑';
        }
        else {
            logo_href = '/';
            logo_title = 'accueil';
        }
        $logo.prop('href', logo_href).prop('title', logo_title);
        $logo.toggleClass('JS_scroll-to', is_page_index).toggleClass('history', !is_page_index);
    };

    // handle click to load page
    $('body').on('click', '.history', function (e) {
        e.preventDefault();
        var destination = $(this).attr('href');

        // change url
        if('pushState' in history){
            history.pushState({page:destination},
                document.title, // title
                destination
            );
        }

        // load content
        loadPageContent(destination);
    });
};


/**
 * reduce header when scroll down
 */
pm.reduceHeader = function () {
    var $header = $("#header");
    $(window).on('scroll', function(){
        var $window = $(this);
        if($window.scrollTop() > 99){
            $header.addClass('active');
        }
        else {
            $header.removeClass('active');
        }
    });
};












