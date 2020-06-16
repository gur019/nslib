function uploadEvent() {
    var eName = document.getElementById("eName").value;
    var eDescription = document.getElementById("eDescription").value;
    var eLocation = document.getElementById("eLocation").value;
    var ePoster = document.getElementById("ePoster").files[0];

    var eTime = document.getElementById("eDateTime").value.split("T");
    var date = eTime[0].split("-");
    var time = eTime[1].split(":");

    var obj = {
        day: date[2],
        month: date[1]-1,
        year: date[0],

        hour:  time[0],
        minute: time[1]
    };

    var formData = new FormData();

    formData.append("ePoster", ePoster, encodeURIComponent(ePoster.name));
    formData.append("eName", eName);
    formData.append("eDescription", eDescription);
    formData.append("eLocation", eLocation);
    formData.append("hour", obj.hour);
    formData.append("minute", obj.minute);
    formData.append("day", obj.day);
    formData.append("month", obj.month);
    formData.append("year", obj.year);

    var upload =
        $.ajax({
            headers: {
                'Accept': 'application/json'
            },
            // url: window.location.protocol + "//" + window.location.host + "/rest/uploadEvent?"+csrfParameter+"="+csrfToken,
            url: window.location.protocol + "//" + window.location.host + "/rest/uploadEvent",
            enctype: "multipart/form-data",
            method: 'POST',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                var newEv = document.createElement("option");
                newEv.setAttribute("id", "nnbEv_"+data.id);
                newEv.innerText = data.eName +" "+ data.eDay + "." + (data.eMonth+1) + "." + data.eYear;

                var e = document.getElementById("nnbEvList");
                e.appendChild(newEv);
                e.selectedIndex = e.options.length-1;
                e.value = newEv.innerText;
            },
            error: function (e) {
                // alert(e.responseText);
            }
        });
}

function deleteEvent() {
    var e = document.getElementById("nnbEvList");
    var selectedEvent = e.options[e.selectedIndex];
    var evId = selectedEvent.id.split("_")[1];

    $.ajax({
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        url: window.location.protocol + "//" + window.location.host + "/rest/deleteEvent?evId=" + evId,
        method: 'GET',
        type: 'GET',

        success: function (data) {
            e.removeChild(selectedEvent);
        },
        error: function (e) {

        }
    });
}

function uploadArcEvent() {
    var eName = document.getElementById("arcName").value;
    var eDescription = document.getElementById("arcDescription").value;
    var ePhotos = document.getElementById("arcPhotos").files;
    var ePoster = document.getElementById("arcPoster").files[0];

    var eTime = document.getElementById("arcDateTime").value.split("T");
    var date = eTime[0].split("-");
    var time = eTime[1].split(":");

    var obj = {
        day: date[2],
        month: date[1]-1,
        year: date[0],

        hour:  time[0],
        minute: time[1]
    };

    var formData = new FormData();


    // formData.append("ePhotos", ePoster, encodeURIComponent(ePoster.name));
    for (var x = 0; x < ePhotos.length; x++) {
        formData.append("ePhotos", ePhotos[x]);
    }
    formData.append("ePoster", ePoster);
    formData.append("eName", eName);
    formData.append("eDescription", eDescription);
    formData.append("hour", obj.hour);
    formData.append("minute", obj.minute);
    formData.append("day", obj.day);
    formData.append("month", obj.month);
    formData.append("year", obj.year);

    var upload =
        $.ajax({
            headers: {
                'Accept': 'application/json'
            },
            // url: window.location.protocol + "//" + window.location.host + "/rest/uploadEvent?"+csrfParameter+"="+csrfToken,
            url: window.location.protocol + "//" + window.location.host + "/rest/uploadArcEvent",
            enctype: "multipart/form-data",
            method: 'POST',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                alert("suckass")
            },
            error: function (e) {
                // alert(e.responseText);
            }
        });
}

function deleteArcEvent() {
    var e = document.getElementById("nnbArcList");
    var selectedEvent = e.options[e.selectedIndex];
    var evId = selectedEvent.id.split("_")[1];

    $.ajax({
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        url: window.location.protocol + "//" + window.location.host + "/rest/deleteArcEvent?evId=" + evId,
        method: 'GET',
        type: 'GET',

        success: function (data) {
            e.removeChild(selectedEvent);
        },
        error: function (e) {

        }
    });
}

function getArcEventsOfMonth() {
    var eTime = document.getElementById("arcSelectTime").value.split("T");
    var date = eTime[0].split("-");

    var obj = {
        month: date[1]-1,
        year: date[0],
    };

    $.ajax({
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        url: window.location.protocol + "//" + window.location.host + "/rest/getArcEventsOfMonth?year=" + obj.year + "&month=" + obj.month,
        method: 'GET',
        type: 'GET',

        success: function (data) {
            var e = document.getElementById("nnbArcList");
            e.innerHTML = "";


            for (var i = 0; i < data.length; i++){
                var newEv = document.createElement("option");
                newEv.setAttribute("id", "nnbArcEv_"+data[i].id);
                newEv.innerText = data[i].eName +" "+ data[i].eDay + "." + (data[i].month+1) + "." + data[i].year;

                e.appendChild(newEv);
            }

            e.selectedIndex = 0;
            e.value = data[0].eName +" "+ data[0].eDay + "." + (data[0].month+1) + "." + data[0].year;
        },
        error: function (e) {

        }
    });
}
