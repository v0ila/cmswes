$(window).scroll(function() {
    if ($(this).scrollTop() > 110){  
        $('header').addClass("cpe_nav_fix");
    }
    else{
        $('header').removeClass("cpe_nav_fix");
    }
});