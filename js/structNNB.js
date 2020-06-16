
// document.addEventListener("DOMContentLoaded", function() {
//     changeDescription(0);
// });

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

// function changeDescription(index){
//     var countImages = document.getElementsByClassName("PostersInfo")[0].childElementCount;
//     for (var i = 0; i<countImages; i++){
//         if (i == index){
//             document.getElementById("description_"+i).style.display = "flex";
//         }
//         else{
//             document.getElementById("description_"+i).style.display = "none";
//         }
//     }
// }