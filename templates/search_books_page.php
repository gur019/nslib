<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <title>Search_Books</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/downloadScripts.js"></script>
    <script src="js/parserInfoBooks.js"></script>

    <script src="js/LoDash.js"></script>

    <!-- ----------------bootstrap-------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style_Global_Vars.css">
    <link rel="stylesheet" href="/css/style_Header.css">
    <link rel="stylesheet" href="/css/style_search_books.css">

    <link rel="stylesheet" href="/css/bookAnim/bookAnim.css">
    <link rel="stylesheet" href="/css/bookNextPage/nextPage.css">
    <link rel="stylesheet" href="/css/bookAnim/loadAnim.css">

        <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
<header>
    <?php include '../templates/includes/header.html';?>
</header>
    <main>


    <script>
        if ([[${fromMainPage}]]){
            fromMainSearch = true;
            basicSearch = false;

            searchStr = '[[${searchString}]]';
        }

        if ([[${basicSearch}]]) {
            fromMainSearch = false;
            basicSearch = true;
            searchName = '[[${searchName}]]';
            searchAuthor = '[[${searchAuthor}]]';
            searchYear = '[[${searchYear}]]';
        }

        // books = [[${bookList}]];
    </script>
    <div class="MainBlockSearch">
        <div class="SearchBlock">
            <?php include '../templates/includes/input_search_page.html';?>
        </div>
        <div class="cs-loader">
            <div class="cs-loader-inner">
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
            </div>
        </div>
        <div class="SearchInfo"></div>
        <div class="PageNumBooksPlace"></div>
        <div class = "booksSearchResult">
            <script type="text/template" id="description">
                <?php include 'templates/includes/bookDescription.html';?>
            </script>
        </div>
        <div class = "booksSearchResultHtml"></div>
        <div class="PageNumBooksTemplate">
            <script type="text/template" id="switchPages">
                <?php include 'templates/includes/pageSwitcher.html';?>
            </script>
         </div>
        <div class="PageNumBooksPlace"></div>
    </div>
    </main>
</body>
</html>
