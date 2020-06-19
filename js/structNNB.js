
document.addEventListener("DOMContentLoaded", function() {
    changeDescription(0);
});

function  changeSelectStruct(event) {
    var num = event.target.id.split("_")[1];
    for (var i = 0; i<5; i++){
        if (i==num){
            event.target.style.backgroundColor = "#eee";
            event.target.style.color = "#559ec9";
            document.getElementById("floor_"+i).style.display = "flex";

        }
        else{
            var otherElement = document.getElementById("struct_"+i);
            otherElement.style.backgroundColor = "#559ec9";
            otherElement.style.color = "#eee";
            var otherText = document.getElementById("floor_"+i);
            otherText.style.display = "none";
        }
    }
}

function changeDescription(index){
    // var countImages = document.getElementsByClassName("PostersInfo")[0].childElementCount;
    // var descriptionObjects = document.getElementsByClassName("PostersInfoBlock");
    // for (var i = 0; i<countImages; i++){
    //     if (i == index){
    //         //document.getElementById("description_"+i).style.display = "flex";
    //         descriptionObjects[i].style.display = "flex";
    //     }
    //     else{
    //         //document.getElementById("description_"+i).style.display = "none";
    //         descriptionObjects[i].style.display = "none";
    //     }
    // }
    // var parentDOM = document.getElementsByClassName("unicSlider")[0].childNodes;
    // console.log(parentDOM);

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