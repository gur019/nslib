<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Электронная библиотека</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="/js/downloadScripts.js?<?=filemtime('../js/downloadScripts.js')?>"></script>
    <script src="/js/parserInfoBooks.js?<?=filemtime('../js/parserInfoBooks.js')?>"></script>

    <script src="/js/LoDash.js?<?=filemtime('../js/LoDash.js')?>"></script>


    <link rel="stylesheet" href="/css/style_Global_Vars.css?<?=filemtime('../css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="/css/style_Header.css?<?=filemtime('../css/style_Header.css')?>">
    <link rel="stylesheet" href="/css/style_search_books.css?<?=filemtime('../css/style_search_books.css')?>">

    <link rel="stylesheet" href="/css/bookAnim/bookAnim.css?<?=filemtime('../css/bookAnim/bookAnim.css')?>">
    <link rel="stylesheet" href="/css/bookNextPage/nextPage.css?<?=filemtime('../css/bookNextPage/nextPage.css')?>">
    <link rel="stylesheet" href="/css/bookAnim/loadAnim.css?<?=filemtime('../css/bookAnim/loadAnim.css')?>">

    <!-- ----------------bootstrap-------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    <main>

    <header>
        <?php include '../templates/includes/header.html';?>
    </header>

    <div class="MainBlockSearch container">
        <div class="SearchBlock container P0">
            <?php include '../templates/includes/input_search_page.html';?>
        </div>
        <div class="cs-loader container">
            <div class="cs-loader-inner">
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
                <label>	●</label>
            </div>
        </div>
        <div class="SearchInfo mt-4"></div>
        <div class="PageNumBooksPlace mt-4"></div>
        <div class = "booksSearchResult">
            <script type="text/template" id="description">
                <?php include 'includes/bookDescription.html';?>
            </script>
        </div>
        <div class = "booksSearchResultHtml mt-4"></div>
        <div class="PageNumBooksTemplate">
            <script type="text/template" id="switchPages">
                <?php include 'includes/pageSwitcher.html';?>
            </script>
         </div>
        <div class="PageNumBooksPlace"></div>
    </div>
    </main>
</body>
</html>
