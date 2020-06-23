let monthName = ["Январь", "Февраль" , "Март" , "Апрель" , "Май", "Июнь", "Июль", "Август" , "Сентябрь ", "Октябрь ", "Ноябрь ", "Декабрь"];
let calendarHeader;
let childCalendarHeader;
let monthButtons;
let monthBlocks = []

document.addEventListener("DOMContentLoaded", function() {
    var yearInPath = window.location.pathname.split("/");


    var countEvents = document.getElementById("countEvents");

    var countCards = document.getElementsByClassName("card");

    countEvents.innerText = "Всего: " + countCards.length;


    calendarHeader = document.getElementsByClassName("CalendarArchiveHeader")[0];
    childCalendarHeader = calendarHeader.childNodes;
    childCalendarHeader[0].innerText = yearInPath[3];
    //childCalendarHeader[1].innerText = "";
    console.log(window.location.host);
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

        monthBlocks.push(document.getElementById((i+1) + "_month"));
        if (monthBlocks[i] != null){
            var a = monthBlocks[i].childNodes[1].childNodes[1].innerText = monthName[i];
            // a = a[1];
            // a = a.childNodes;
            // a = a[1];
            // a.innerText = monthName[i];
        }
        else{
            // document.getElementById("month_" + i).style.backgroundColor = "red";
            document.getElementById("month_" + i).style.opacity = "0.3";
        }
        

        //monthButtons[i].addEventListener('click', function(i){ alert(i);}, false);
    }
    console.log(monthBlocks);
});


function monthSelect(monthIndex) {
    monthButtonsStateNormal();

    window.scrollTo(0,0);
    //childCalendarHeader[1].innerText = monthName[monthIndex];
    monthButtons[monthIndex].classList.add("MonthActive");
    //var year = childCalendarHeader[0].innerText;
    //getConcert(monthIndex);
    
    if (monthBlocks[monthIndex] != null){
        monthBlocks[monthIndex].style.display = "block";
        document.getElementById("messageNotFound").style.display = "none";
    }
    else{
        document.getElementById("messageNotFound").style.display = "block";
    }
}

function monthButtonsStateNormal(){
    //console.log("asdasda");
    for (let i = 0; i<12; i++){
        monthButtons[i].classList.remove("MonthActive");
        if (monthBlocks[i] != null){
            monthBlocks[i].style.display = "none";
        }
        
    }
}

function showAllYear(){
    window.scrollTo(0,0);
    document.getElementById("messageNotFound").style.display = "none";
    monthButtonsStateNormal();
    for (let i = 0; i<12; i++){
        if (monthBlocks[i] != null){
            monthBlocks[i].style.display = "block";
        }
        
    }
}

function arrowYearChange(direction) {
    //alert(direction);
    // monthButtonsStateNormal();
    var year = childCalendarHeader[0].innerText;
    var intYear = parseInt(year);
    if (intYear != NaN){
        if ((intYear + direction) >= startYear && (intYear + direction) <= endYear){
            year = (intYear + direction).toString();
            // childCalendarHeader[0].innerText = year;
            window.location.assign(window.location.protocol + "//" + window.location.host + "/templates/archive/" + year + "/year.php");
        }
    }
    // childCalendarHeader[0].innerText = year;
    // childCalendarHeader[1].innerText = "";
    // getConcert(year,-1);
    //alert("aaasssss");
}

