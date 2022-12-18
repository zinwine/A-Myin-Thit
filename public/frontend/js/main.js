/**
 * Created by kaung on 5/31/2017.
 
$(document).ready(function () {
    $('#myNavbar>ul>li>a').click(function () {
        $('.active').removeClass('active');
        $(this).addClass('active');
       /* $(this).style.background="orange";
    });
*/

    $(window).scroll(function(){
        var w=this;
        var $navbar= $('.navbar');
        if(w.pageYOffset>120){
            $navbar.addClass('navbar-fixed-top')
        }else{
            $navbar.removeClass('navbar-fixed-top')
        }

        var $top= $('#top');
        if(w.pageYOffset>200){
            $top.css({'opacity':1,"zIndex":1})
        }else{
            $top.css({'opacity':0,"zIndex":-1})
        }

    });
function scrolltotop() {
    $('body').animate({
        scrollTop: 0
    });
}