<!--<!DOCTYPE html>-->
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ННБ Владикавказ</title>

	  <script src="oldBrowser/IE.js?<?=filemtime('oldBrowser/IE.js')?>"></script>

    <link rel="stylesheet" href="css/style_Global_Vars.css?<?=filemtime('css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="css/style_index.css?<?=filemtime('css/style_index.css')?>">
    <link rel="stylesheet" href="css/sliderPosters.css?<?=filemtime('css/sliderPosters.css')?>">
    <link rel="stylesheet" href="css/style_Header.css?<?=filemtime('css/style_Header.css')?>">

    <!-- ----------------bootstrap-------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="js/slick/slick.css?<?=filemtime('js/slick/slick.css')?>">
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css?<?=filemtime('js/slick/slick-theme.css')?>">

    <link rel="stylesheet" href="css/input_search_mainPage/input_search_mainPage.css?<?=filemtime('css/input_search_mainPage/input_search_mainPage.css')?>">
    <link rel="stylesheet" href="css/bookAnim/bookAnimTopMain.css?<?=filemtime('css/bookAnim/bookAnimTopMain.css')?>">

    <link rel="stylesheet" href="css/archivePage/archivePage.css?<?=filemtime('css/archivePage/archivePage.css')?>">
    <link rel="stylesheet" href="css/ToDay/style_ToDay.css?<?=filemtime('css/ToDay/style_ToDay.css')?>">
    <link rel="stylesheet" href="css/calendarPage/calendarPage.css?<?=filemtime('css/calendarPage/calendarPage.css')?>">
    <link rel="stylesheet" href="css/journal/journal.css?<?=filemtime('css/journal/journal.css')?>">
    <link rel="stylesheet" href="css/contact/contact.css?<?=filemtime('css/contact/contact.css')?>">
    <link rel="stylesheet" href="css/style_footer.css?<?=filemtime('css/style_footer.css')?>">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/slick/slick.js?<?=filemtime('js/slick/slick.js')?>" type="text/javascript" charset="utf-8"></script>

    <script>
        var posterCount = 0;
    </script>
    <script src="js/posters.js?<?=filemtime('js/posters.js')?>"></script>

    <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>



<body>
<main>
    <header>
      <?php include 'templates/includes/header.html';?>
    </header>

    <div class="MainBlock container">
        
        <?php include 'templates/includes/input_search_mainPage.html';?>

        <?php include 'templates/includes/posters.html';?>

        <?php include 'templates/includes/archivePage.html';?>
        
        <?php include 'templates/includes/toDay.html';?>
        
        <?php include 'templates/includes/calendarPage.html';?>
        
        <?php include 'templates/includes/journal.html';?>
        
        <?php include 'templates/includes/contact.html';?>
        
        <footer>
          <?php include 'templates/includes/footer.html';?>
        </footer>
    </div>


</main>
</body>

</html>
