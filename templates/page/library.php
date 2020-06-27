<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >

<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>О библиотеке</title>

    <link rel="stylesheet" href="/css/style_Global_Vars.css?<?=filemtime('../../css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="/css/style_Header.css?<?=filemtime('../../css/style_Header.css')?>">
    <link rel="stylesheet" href="/css/KarinaCSS/style_library.css?<?=filemtime('../../css/KarinaCSS/style_library.css')?>">

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
            <span>О библиотеке</span>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo link">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="../page/history.php">История</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bGreen">
                        <div class="BlockInfoImg"><img src="/media/library/img2.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Музей истории библиотечного дела РСО-Алания</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bRed">
                        <div class="BlockInfoImg"><img src="/media/library/img3.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Шредерс Варвара Григорьевна - основательница ННБ РСО-Алания</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bGreen">
                        <div class="BlockInfoImg"><img src="/media/library/img4.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="../page/structure.php">Структура</a></div>
                    </article>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bYellow">
                        <div class="BlockInfoImg"><img src="/media/library/img5.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Руководство</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Услуги</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bGreen">
                        <div class="BlockInfoImg"><img src="/media/library/img2.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Стратегия</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bRed">
                        <div class="BlockInfoImg"><img src="/media/library/img3.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Документы</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Пространства для работы и чтения</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Библиотека в СМИ</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">ННБ РСО-Алания в социальных сетях</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Контакты</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Как нас найти</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Режим работы</a></div>
                    </article>
                </div>
            </div>

        </div>

        <div class="InfoBlockSpan mt-4">
            <span>Сотруднечество</span>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Реквизиты</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bGreen">
                        <div class="BlockInfoImg"><img src="/media/library/img2.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Партнеры</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bRed">
                        <div class="BlockInfoImg"><img src="/media/library/new.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Дары и дарители</a></div>
                    </article>
                </div>
            </div>

        </div>

        <div class="InfoBlockSpan mt-4">
            <span>Сотруднечество</span>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bBlue">
                        <div class="BlockInfoImg"><img src="/media/library/img1.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/content/history">Реквизиты</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bGreen">
                        <div class="BlockInfoImg"><img src="/media/library/img2.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Партнеры</a></div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 d-flex align-items-end mt-4">
                <div class="BlockInfo">
                    <article class="BlockArticle bRed">
                        <div class="BlockInfoImg"><img src="/media/library/img3.jpg" alt=""></div>
                        <div class="BlockInfoTitle"><a class="BlockInfoLink link" href="/">Дары и дарители</a></div>
                    </article>
                </div>
            </div>

        </div>


    </div>
    </main>
</body>
</html>
