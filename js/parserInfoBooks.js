var books = {};
var strTest = "000  0     n001  0RU/IS/BASE/204720387005  020170111150218.5010  a5d103р.100  a20020213d2001    u  a0rusb0103    ca10100arus105  a|||||||||||||20011aАнтикризисное управлениеbТекстgред. Э.М. Короткова2101 aМ.cИНФРА-Мd2001215  a432 с.22521aВысшее образование6061 aУправление стратегическое686  a65.050.9(2)2я73drubbk702 0aКоротковgЭ.М.4340801 0aRuc20020213gpsbo801 1aru gpsbo899  bООНh65.050.9(2)я7iА72p1236394901  tm";
var index = 0;
var searchData;

var currentPage = 1;
var lastPage = 1;

var countBooks;

var basicSearch = false;
var searchAuthor;
var searchName;
var searchYear;

var fromMainSearch = false;
var searchStr = "";

document.addEventListener("DOMContentLoaded", function() {
    //alert(strTest);
    _.templateSettings = {
        interpolate: /\<\@\=(.+?)\@\>/gim,
        evaluate: /\<\@([\s\S]+?)\@\>/gim,
        escape: /\<\@\-(.+?)\@\>/gim
    };
    tmpl = _.template(document.getElementById('description').innerHTML);
    //getBooksFromServer();
    tmp2 = _.template(document.getElementById('switchPages').innerHTML);


    if (fromMainSearch || basicSearch) {
        getBooksFromServer();
    }
    //parser(strTest);
});

function parser(strToParser){
    var bookInfo = {};
    var strMassiv = strToParser.split("");
    strMassiv.forEach(function (item) {
       var depthSplit =  item.split("");
       var mainField = depthSplit[0].trim();


       var sliceDepthSplit = depthSplit.slice(1);
       var bookInfoDeep = {};
       sliceDepthSplit.forEach(function (item2) {
            bookInfoDeep[item2[0]]=item2.substring(1);
       });
       bookInfo[mainField] = bookInfoDeep;

    });
    return bookInfo;
}


function visableBook(prop){
    index ++;
    parserVariable = parser(books[prop].item);


    try {
        var authorName = parserVariable["700 0"]["g"];
        if (authorName == undefined){
            authorName = "";
        }
    }catch (e) {
        var authorName = "";
    }


    try {
        var ISBN = parserVariable["010"]["a"];
        if (ISBN == undefined){
            ISBN = "";
        }
    } catch (e) {
        var ISBN = "";
    }
    try {
        var size = parserVariable["215"]["a"];
        if (size == undefined){
            size = "";
        }
    } catch (e) {
        var size = "";
    }
    try {
        var language = parserVariable["675"]["z"];
        if (language == undefined){
            language = "";
        }
    } catch (e) {
        var language = "";
    }
    try {
        var publisher = parserVariable["210"]["c"];
        if (publisher == undefined){
            publisher = "";
        }
    } catch (e) {
        var publisher = "";
    }
    try {
        var path = parserVariable["8564"]["d"];
        if (path == undefined){
            path = "";
        }
    } catch (e) {
        var path = "";
    }
    // console.log(path);

    var arrayPathSplit = path.split(".");
    var typeFile = arrayPathSplit[arrayPathSplit.length - 1].substring(0,3);
    // console.log(path);
    // console.log(typeFile);

    var newTmpl = tmpl({
        docId: prop,
        count: index,
        // author: author +" "  + authorName,
        // name: name,
        // year: year,
        author: books[prop].author + " " + authorName,
        name: books[prop].title,
        year: books[prop].year,
        ISBN: ISBN,
        size: size,
        language: language,
        publisher: publisher,
        path: path,
        typeFile: typeFile,
        searchData: searchData.searchKey
    });



    var div = document.getElementsByClassName("booksSearchResultHtml")[0];

    var wrapper= document.createElement('div');
    wrapper.innerHTML= newTmpl;
    var div2 = wrapper.childNodes[1];
    div.appendChild(div2);
}


function findNewSetBooks(){
    searchAuthor = document.getElementById("searchAuthor").value;
    searchName = document.getElementById("searchName").value;
    searchYear = document.getElementById("searchYear").value;
    currentPage = 1;

    fromMainSearch = false;
    document.getElementsByClassName("cs-loader")[0].style.display = "block";
    document.getElementsByClassName("SearchInfo")[0].style.opacity = "0";
    getBooksFromServer()
}

function getBooksFromServer(){

    var pageNumber = currentPage;
    //var bookSearchResult;




    var formData = new FormData();

    if (fromMainSearch){
        formData.append("searchName", searchStr);
        document.getElementsByClassName("cs-loader")[0].style.display = "block";

    } else {
        formData.append("searchAuthor", searchAuthor);
        formData.append("searchName", searchName);
        formData.append("searchYear", searchYear);
    }

    formData.append("fromMainSearch", fromMainSearch);
    formData.append("pageNumber", pageNumber);

    var upload =
        $.ajax({
            headers: {
                'Accept': 'application/json'
            },
            url: window.location.protocol + "//" + window.location.host + "/search?"+csrfParameter+"="+csrfToken,
            enctype: "multipart/form-data",
            method: 'POST',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                document.getElementsByClassName("booksSearchResultHtml")[0].innerHTML = "";
                //alert("SUCCESS");
                searchData = data;
                //console.log(data);
                var searchInfo = document.getElementsByClassName("SearchInfo")[0];
                searchInfo.innerHTML = "";
                var span = document.createElement('span');
                if ((parseInt(data.countBooks) > 0)){
                    //currentPage = 1;
                    span.innerText = "Найдено: " + data.countBooks;
                    books = data.booksInfo;
                    lastPage = data.pagesCount;
                    index = (parseInt(currentPage)-1) * 15;
                    countBooks = data.countBooks;
                    for (var prop in books){
                        visableBook(prop);
                    }
                    console.log(currentPage, lastPage);
                    var a = document.getElementsByClassName("PageNumBooksPlace");
                    document.getElementsByClassName("PageNumBooksPlace")[0].innerHTML = "";
                    document.getElementsByClassName("PageNumBooksPlace")[1].innerHTML = "";
                    if (lastPage > 1) {

                        showTruePageSwitcher();
                    }
                    //console.log(searchData.searchKey);
                }else{
                    span.innerText = "Ничего не найдено";
                    document.getElementsByClassName("PageNumBooksPlace")[0].innerHTML = "";
                    document.getElementsByClassName("PageNumBooksPlace")[1].innerHTML = "";
                }
                document.getElementsByClassName("cs-loader")[0].style.display = "none";
                searchInfo.appendChild(span);
                document.getElementsByClassName("SearchInfo")[0].style.opacity = "1";

            },
            error: function (e) {
                document.getElementsByClassName("booksSearchResultHtml")[0].innerHTML = "";
                // alert(e.responseText);
            }
        });
}


function showTruePageSwitcher(){
    document.getElementsByClassName("PageNumBooksPlace")[0].innerHTML = "";
    document.getElementsByClassName("PageNumBooksPlace")[1].innerHTML = "";


    var newTmp = tmp2({
        currentPage: parseInt(currentPage),
        lastPage: lastPage
    });



    var div = document.getElementsByClassName("PageNumBooksPlace")[0];
    var divSecond = document.getElementsByClassName("PageNumBooksPlace")[1];

    var wrapper= document.createElement('div');
    wrapper.innerHTML= newTmp;
    var div2 = wrapper.childNodes[1];



    div.appendChild(div2);

    var wrapper2= document.createElement('div');
    wrapper2.innerHTML= newTmp;
    var div3 = wrapper2.childNodes[1];
    divSecond.appendChild(div3);

    var buttonsSwitcher = document.getElementsByClassName("pageNum");

    for (var i = 0; i < buttonsSwitcher.length; i++){
        buttonsSwitcher[i].onclick = changePage;
    }
    var prevButton = document.getElementsByClassName("prevButton");
    var nextButton = document.getElementsByClassName("nextButton");

    for (var i1 = 0; i1 < prevButton.length; i1++){
        prevButton[i1].onclick = changePage;
    }

    for (var i2 = 0; i2 < nextButton.length; i2++){
        nextButton[i2].onclick = changePage;
    }

}

function changePage(event) {
    var newPage = currentPage;
    if (event.target.classList.contains("pageNum")) {
        newPage = event.target.innerText;
        //alert(event.target.innerText);
    }
    else if (event.target.classList.contains("nextButton")){
        newPage = parseInt(currentPage) + 1;
    }
    else if (event.target.classList.contains("prevButton")){
        newPage = parseInt(currentPage) - 1;
    }

    if (newPage != currentPage){
        currentPage = newPage;
        getBooksFromServer();
    }

}
