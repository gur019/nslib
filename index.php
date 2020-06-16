<!--<!DOCTYPE html>-->
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ННБ Владикавказ</title>

    <link rel="stylesheet" href="css/style_Global_Vars.css">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/sliderPosters.css">
    <link rel="stylesheet" href="css/style_Header.css">

    <!-- ----------------bootstrap-------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">

    <link rel="stylesheet" href="css/bookAnim/bookAnimTopMain.css">

    <link rel="stylesheet" href="css/photoGallery/style_photo_gallery.css">
    <link rel="stylesheet" href="css/ToDay/style_ToDay.css">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <script>
        var posterCount = 0;
    </script>
    <script src="js/posters.js"></script>
    <script src="js/structNNB.js"></script>

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

        <div class="InfoBlockSpan InfoBlockSpanSearch">
            <span style="color: #142638;">Электронная библиотека</span>
        </div>
        <div class="SearchBlock">
          <?php include 'templates/includes/input_search_mainPage.html';?>
        </div>

        <?php include 'templates/includes/posters.html';?>

        <?php include 'templates/includes/archivePage.html';?>
        

        <div class="InfoBlockSpan InfoBlockSpanToDay">
            <span>Сегодня в ННБ РСО-Алания</span>
            <p>Книжно-иллюстративные выставки:</p>
        </div>

        <div class="ToDay">
            <div class="ToDayCentre">
                <div class="ramka-7">«Алексей Саврасов. Мастер лирического пейзажа - к 190-летию со дня рождения художника» <br><br> Отдел искусств - 1 этаж</div>
                <div class="ramka-7">«Оглянись вокруг» «Татьянин день! Ликуй, студент!» «Антарктида, 200 лет открытий» <br><br> ОЧЗ - 2 этаж</div>
                <div class="ramka-7">«Гордость европейской философской школы» (к 305-летию К.Гельвеция, 335-летию Дж.Беркли, 200-летию Г. Спенсера, 260-летию К. Сен-Симона, 245-летию В.И. Шеллинга, 145-летию А. Швейцера) <br><br> Отдел иностранной литературы - 4 этаж</div>
                <div class="ramka-7">«Человечность фантастики» (к 130-летию К.Чапека, 100-летию Р. Бредбери, 100-летию А. Азимова) <br><br> Отдел иностранной литературы - 4 этаж</div>
                <div class="ramka-7">«Миллионы уроков для сердца...» (к 300-летию К.Гоцци, 235-летию Я.Гримма, 215-летию Г.Х. Андерсена, 155-летию Р.Киплинга, 100-летию Дж. Родари) <br><br> Отдел иностранной литературы - 4 этаж</div>
                <div class="ramka-7">«Великий историк языка» (к 125-летию со дня рождения языковеда, литературоведа В.В. Виноградова) <br><br> Зал художественной литературы - 4 этаж</div>
                <div class="ramka-7">«Поэзия!!!Люблю ее без памяти, страстно...» (к 225-летию со дня рождения Грибоедова А.С.) <br><br> Зал художественной литературы - 4 этаж</div>
                <div class="ramka-7">«Оглянись вокруг» «Антарктида - 200 лет открытий» <br><br> ИБЦ - 2 этаж</div>
                <div class="ramka-7"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/8jA_SVEEMgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
        </div>

        <div class="InfoBlockSpan">
            <span style="color: #142638;">Календарь памятных дат "Осетия - 2020"</span>
        </div>
        <div class="Calendar">
            <div class="CalendarLeft"><iframe width="100%" height="300px" src="https://www.youtube.com/embed/8jA_SVEEMgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div class="CalendarRight">
                <span>23 января 1786 года родился Огюст де Монферран.
Сегодня исполняется 90 лет со дня рождения выдающегося поэта, нобелевского лауреата Дерека Уолкотта.
23 января 1928 года родилась великая французская актриса, легенда мирового кинематографа Жанна Моро.</span>
                <div class="GalleryLink">
                    <a href="">Посмотреть все</a>
                </div>
            </div>

        </div>

        <div class="InfoBlockSpan InfoBlockSpanJournal">
            <span>Журнал "Записки на манжетах"</span>
        </div>
        <div class="Journal">
            <img src="media/mainPage/Journal/2.png" alt="">
            <span>Мы предлагаем тебе новый формат общения. Почему новый? Об этом ты скоро узнаешь…</span>
            <div class="GalleryLink GalleryLinkJournal">
                <a href="http://nslib.tmweb.ru/zap/index.html" target="_blank">Читать дальше</a>
            </div>
        </div>

        <div class="InfoBlockSpan">
            <span style="color: #142638;">Контакты</span>
            <p style="color: #142638;">Вы сможите с нами связаться:</p>
        </div>
        <div class="ContactBlock">
            <div class="ContactText">
                <div class="ContactCoordinates">
                    <img src="media/mainPage/Contact/phone512.png" alt="">
                    <span>Мы находимся по адресу:</span>
                    <p>г.Владикавказ, ул.Коцоева 43</p>

                </div>
                <div class="ContactTel">
                    <img src="media/mainPage/Contact/w512h5121390854463phone512.png" alt="">
                    <span>Телефон для справок:</span>
                    <a href="tel:88672251867">8(8672)25-18-67</a>
                </div>
                <div class="ContactMail">
                    <img src="media/mainPage/Contact/hone512.png" alt="">
                    <span>E-mail:</span>
                    <a href="mailto:nnb-rso@yandex.ru">nnb-rso@yandex.ru</a>
                </div>
            </div>
            <div class="ContactMap">
                <iframe src="https://yandex.ru/map-widget/v1/-/CGsrjE-m" width="100%" height="400px" frameborder="1" allowfullscreen="true"></iframe>
            </div>
        </div>
        <footer>
          <?php include 'templates/includes/footer.html';?>
        </footer>
    </div>


</main>
</body>

</html>
