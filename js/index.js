$(document).ready(function () {
    /*******Js for Nav bar ******/
    
    $('ul a').on('click', function () {
        $('ul a').removeClass('active');
        $(this).addClass('active');
    });
   
    $(document).on('scroll', function () {

        if ($(this).scrollTop() > 1) {
            $('nav').addClass('bkColor');
        } else {
            $('nav').removeClass('bkColor');
        }
    });
    $('a[href^="#"]').bind('click.smoothscroll', function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 40
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
    $('section').hover(function(){
        var secId=$(this).attr('id');
        switch (secId) {
            case 'homeSec':
                $('ul a').removeClass('active');
                $("a[href='#homeSec']").addClass('active');
                break;
            case 'aboutSec':
                 $('ul a').removeClass('active');
                $("a[href='#aboutSec']").addClass('active');
                break;
            case 'contactSec':
                 $('ul a').removeClass('active');
                $("a[href='#contactSec']").addClass('active');
                break;
        }
    });
});