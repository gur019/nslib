document.addEventListener("DOMContentLoaded", function() {
    changeDescription(0);
});

function changeDescription(index){

    document.getElementById("1_Date").innerText = document.getElementsByClassName("templatePosterDate")[index].innerText;
    document.getElementById("2_Text").innerText = document.getElementsByClassName("templatePosterDateText")[index].innerText;
    document.getElementById("3_Description").innerText = document.getElementsByClassName("templatePosterDescriptionHeader")[index].innerText;
    document.getElementById("4_DescriptionFooter").innerText = document.getElementsByClassName("templatePosterDescriptionFooter")[index].innerText;
    document.getElementById("5_DescriptionFooterDepartment").innerText = document.getElementsByClassName("templatePosterDescriptionFooterDepartment")[index].innerText;
    document.getElementById("6_DateTime").innerText = document.getElementsByClassName("templatePosterDateTime")[index].innerText;
    document.getElementById("1_Date2").innerText = document.getElementsByClassName("templatePosterDate")[index].innerText;
    document.getElementById("2_Text2").innerText = document.getElementsByClassName("templatePosterDateText")[index].innerText;
    document.getElementById("3_Description2").innerText = document.getElementsByClassName("templatePosterDescriptionHeader")[index].innerText;
    document.getElementById("4_DescriptionFooter2").innerText = document.getElementsByClassName("templatePosterDescriptionFooter")[index].innerText;
    document.getElementById("5_DescriptionFooterDepartment2").innerText = document.getElementsByClassName("templatePosterDescriptionFooterDepartment")[index].innerText;
    document.getElementById("6_DateTime2").innerText = document.getElementsByClassName("templatePosterDateTime")[index].innerText;

}



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