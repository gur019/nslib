<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >

<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Календарь памятных дат "Осетия - 2020"</title>

    <link rel="stylesheet" href="/css/style_Global_Vars.css?<?=filemtime('../../css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="/css/style_Header.css?<?=filemtime('../../css/style_Header.css')?>">
    <link rel="stylesheet" href="/css/style_footer.css?<?=filemtime('../../css/style_footer.css')?>">
    <link rel="stylesheet" href="/css/memorialCalendar/memorialCalendar.css?<?=filemtime('../../css/memorialCalendar/memorialCalendar.css')?>">

     <!-- ----------------bootstrap-------------------- -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

       <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
    <main>

    <header>
        <?php include '../includes/header.html';?>
    </header>

    <div class="MainBlock container">

        <div class="InfoBlockSpan mt-4">
            <span style="color: #142638;">Календарь памятных дат "Осетия - 2020"</span>
        </div>
        
        <div class="Calendar mt-4">
            <div class="CalendarLeft">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/8jA_SVEEMgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="CalendarRight">
                <span>23 января 1786 года родился Огюст де Монферран. Сегодня исполняется 90 лет со дня рождения выдающегося поэта, нобелевского лауреата Дерека Уолкотта. 23 января 1928 года родилась великая французская актриса, легенда мирового кинематографа Жанна Моро.</span>
            </div>
        </div>

        <div class="InfoBlockSpan mt-4">
            <span style="color: #142638;">Календарь памятных дат "Осетия - 2019"</span>
        </div>

        <div class="Calendar mt-4">
            <div class="CalendarLeft">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/8jA_SVEEMgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="CalendarRight">
                <span>23 января 1786 года родился Огюст де Монферран. Сегодня исполняется 90 лет со дня рождения выдающегося поэта, нобелевского лауреата Дерека Уолкотта. 23 января 1928 года родилась великая французская актриса, легенда мирового кинематографа Жанна Моро.</span>
            </div>
        </div>

        <footer>
          <?php include '../includes/footer.html';?>
        </footer>

    </div>
    </main>
</body>
</html>
