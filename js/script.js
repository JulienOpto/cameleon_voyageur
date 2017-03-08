$(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 250){
            $('#logo-mini').removeClass('hidden');
        }else{
            $('#logo-mini').addClass('hidden');
        }
    });
});