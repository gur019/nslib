function downloadbook(pathToBook) {
    var formData = new FormData();
    //pathToBook = pathToBook.replace(/\\/g,'\\\\');
    //alert(pathToBook);

    formData.append("pathToBook", pathToBook);
    $.ajax({
        url: location.href = window.location.protocol + '//'+ customHost + '/downloadbook',
        enctype: "multipart/form-data",
        method: "POST",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function () {

        },
        error: function (e) {
            //alert(e.responseText);
        }
    })
}

function simpleDownload(searchData, docId){
    var link = document.createElement('a');
    link.href = window.location.protocol + '//'+ customHost + '/downloadBook?searchName=' + searchData + '&bid=' + docId;
    link.download = "";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function simpleViewForPdf(searchData, docId){
    var url = window.location.protocol + '//'+ customHost + '/downloadBook?searchName=' + searchData + '&bid=' + docId;
    window.open(url);
}
