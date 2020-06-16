let monthName = ["Январь", "Февраль" , "Март" , "Апрель" , "Май", "Июнь", "Июль", "Август" , "Сентябрь ", "Октябрь ", "Ноябрь ", "Декабрь"];
let calendarHeader;
let childCalendarHeader;
let monthButtons;
document.addEventListener("DOMContentLoaded", function() {
    calendarHeader = document.getElementsByClassName("CalendarArchiveHeader")[0];
    childCalendarHeader = calendarHeader.childNodes;
    childCalendarHeader[1].innerText = "";

    monthButtons = document.getElementsByClassName("Month");
    for (let i = 0; i<12; i++){
        monthButtons[i].onclick = function(event) {
            var monthIndex = 0;
            if (event.target.id){
                monthIndex = event.target.id.split("_")[1];
            }
            else{
                monthIndex = event.target.parentElement.id.split("_")[1];
            }
            monthSelect(monthIndex);

        };
        //monthButtons[i].addEventListener('click', function(i){ alert(i);}, false);
    }

});


function monthSelect(monthIndex) {
    monthButtonsStateNormal();
    childCalendarHeader[1].innerText = monthName[monthIndex];
    monthButtons[monthIndex].classList.add("MonthActive");
    var year = childCalendarHeader[0].innerText;
    getConcert(year, monthIndex);
}

function monthButtonsStateNormal(){
    //console.log(monthButtons);
    for (let i = 0; i<12; i++){
        monthButtons[i].classList.remove("MonthActive");
    }
}

function arrowYearChange(direction) {
    //alert(direction);
    monthButtonsStateNormal();
    var year = childCalendarHeader[0].innerText;
    if (parseInt(year) != NaN){
        year = (parseInt(year) + direction).toString();

    }
    childCalendarHeader[0].innerText = year;
    childCalendarHeader[1].innerText = "";
    getConcert(year,-1);
    //alert("aaasssss");
}

function getConcert(year, month) {
    $.ajax({
        url: window.location.protocol + "//" + window.location.host + "/getArcEvents?year=" + year + "&month=" + month,
        method: 'GET',
        type: 'GET',

        success: function (data) {
            console.log(data);
            // var deletedPost = document.getElementById("idPost_" + id);
            // deletedPost.children[1].style.display = "none";
            // deletedPost.children[0].style.display = "block";


        },
        error: function (e) {
            alert(e.responseText);
        }
    });
}
