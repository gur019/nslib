$(document).on('ready', function() {
    if (posterCount !== null){
        if (posterCount > 3){
            $(".center").slick({
                description: true,
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                variableWidth: true,
                slidesToScroll: posterCount-3
            });
        }else if (posterCount >1){
            $(".center").slick({
                description: true,
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: posterCount-1,
                variableWidth: true,
                slidesToScroll: 1
            });
        }else {
            $(".center").slick({
                description: true,
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: 1,
                variableWidth: true,
                slidesToScroll: 1
            });
        }
    }
    $(".lazy").slick({
        description: false,
        lazyLoad: 'ondemand',
        infinite: true
    });

    $('.HeaderSlick').slick({
        description: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
    });
});