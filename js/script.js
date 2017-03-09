function logo() {
    var scroll = $(window).scrollTop();
    if ($(window).width() > 1200) {
        if (scroll <= 250) {
            $('#logo-mini').addClass('hidden');
        } else {
            $('#logo-mini').removeClass('hidden');
        }
    };
}

logo();

$(function() {
    if ($(window).width() > 1200) {
        $(window).scroll(function () {
            logo();
        });
    };
});
