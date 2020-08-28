$(document).ready(function() {
    $(".accordian .inner").slideUp(0);

    $(".accordian .title").click(function () {
        $(this).siblings('.inner').slideToggle();
    })
});