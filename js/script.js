$(document).ready(function() {
    $(".accordian .inner").slideUp(0);

    $(".faq-section .accordian .title").click(function () {
        $(this).siblings('.inner').slideToggle();
        $(this).find('i').toggleClass('fa-plus-square').toggleClass('fa-minus-square');
    });

    $(".faqs .accordian .title").click(function () {
        $(this).siblings('.inner').slideToggle();
        $(this).find('i').toggleClass('fa-caret-up').toggleClass('fa-caret-down');
    });
});