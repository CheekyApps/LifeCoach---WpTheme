var $ = jQuery.noConflict();

$(document).ready(function(){
    var header_nav = $('#header_nav');

    header_nav.on("click","a", function (event) {
        event.preventDefault();

        var id  = $(this).attr('href');

        var top = $(id).offset().top;
        top -= 100;

        $('body,html').animate({scrollTop: top}, 1500);
    });
});
