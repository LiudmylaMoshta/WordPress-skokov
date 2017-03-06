$(document).ready(function() {
    $("a.fancyimage").fancybox();

    // Инициализирует карусель
    $(".start-slide").click(function() {
        $("#myCarousel2").carousel('cycle');
    });
});

$('.list').masonry({
    itemSelector: '.item',
    columnWidth: '.grid-sizer',
    percentPosition: true
});

//slader-client
var slider = $("#lightslider").lightSlider({
    item:4,
    pager: false,
    loop:false,
    slideMove:2,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    responsive : [
        {
            breakpoint:768,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:8
            }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
            }
        },
        {
            breakpoint:321,
            settings: {
                item:1,
                slideMove:1
            }
        }
    ],
    controls: false
});
$('.content-slide-skokov > a.leftbtn-client-skokov').click(function (){
    slider.goToPrevSlide();
});
$('.content-slide-skokov > a.rightbtn-client-skokov').click(function (){
    slider.goToNextSlide();
});
