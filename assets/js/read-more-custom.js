/**
 * Custom JS
 *
 * @package AcmeThemes
 * @subpackage Read More
 */
jQuery(document).ready(function($){
    var at_body = $("body");
    var at_window = $(window);
    /*search*/
    $('.search-icon-menu').click(function(){
        $('.menu-search-toggle').fadeToggle();
    });

    at_window.on("load", function() {
        /*parallax scolling*/
        $('a[href*="#"]').click(function(event){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top-$('.at-navbar').height()
            }, 1000);
            event.preventDefault();
        });
        /*bootstrap sroolpy*/
        at_body.scrollspy({target: ".navbar-fixed-top", offset: $('.at-navbar').height()+50 } );

        //Sickey Sidebar
        if(at_body.hasClass('at-sticky-sidebar')){
            if(at_body.hasClass('both-sidebar')){
                $('#secondary-right, #primary-wrap').theiaStickySidebar();
            }
            else{
                $('.secondary-sidebar, #primary').theiaStickySidebar();
            }
        }
    });

    function read_more_stickyMenu() {

        var scrollTop = at_window.scrollTop();
        var at_navbar_wrapper = $('.at-navbar-wrapper');
        var at_navbar_container = $('#navbar > .container');

        at_navbar_wrapper.height(at_navbar_wrapper.height());
        var offset = $('.top-header').height() + at_navbar_container.height() -2;
        if ( scrollTop > offset ) {
            $('.main-navigation ').addClass('navbar-fixed-top ');
            $('.sm-up-container').show();
        }
        else {
            $('.main-navigation ').removeClass('navbar-fixed-top ');
            $('.sm-up-container').hide();
        }
    }
    //What happen on window scroll
    read_more_stickyMenu();
    at_window.on("scroll", function () {
        setTimeout(function () {
            read_more_stickyMenu();
        }, 300)
    });
});