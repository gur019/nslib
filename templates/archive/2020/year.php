<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="utf-8" />
    <title>О библиотеке</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

     <!-- ----------------bootstrap-------------------- -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="/css/style_Global_Vars.css">
    <link rel="stylesheet" href="/css/style_Header.css">
    <link rel="stylesheet" href="/css/footer.css">

    <link rel="stylesheet" href="/css/KarinaCSS/eventArchive.css">
    <link rel="stylesheet" href="/css/photoGallery/style_photo_gallery.css">

    <script src="/js/eventArchive/calendar.js" type="text/javascript"></script>

    <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <?php include '../../includes/header.html';?>
</header>
<main>
    <div class="MainBlock container">
        <div class="GalleryBlock">
            <div class="InfoBlockSpan">
                <span style="color: #142638;">Культурно-досуговая деятельность библиотеки (архив)</span>
            </div>

            <div class="CalendarArchive">
                <div class="arrowBack"><img src="/media/searchBooks/nextPage/arrow2.png" alt="" onclick="arrowYearChange(-1)"></div>
                <div class="CalendarArchiveHeader"><h1>2020</h1><p>Март</p></div>
                <div class="MonthBlock">
                    <div id = "month_0" class="Month"><p>янв</p></div>
                    <div id = "month_1" class="Month"><p>фев</p></div>
                    <div id = "month_2" class="Month"><p>мар</p></div>
                    <div id = "month_3" class="Month"><p>апр</p></div>
                    <div id = "month_4" class="Month"><p>май</p></div>
                    <div id = "month_5" class="Month"><p>июн</p></div>
                    <div id = "month_6" class="Month"><p>июл</p></div>
                    <div id = "month_7" class="Month"><p>авг</p></div>
                    <div id = "month_8" class="Month"><p>сен</p></div>
                    <div id = "month_9" class="Month"><p>окт</p></div>
                    <div id = "month_10" class="Month"><p>ноя</p></div>
                    <div id = "month_11" class="Month"><p>дек</p></div>
                </div>
                <div class="arrowNext"><img src="/media/searchBooks/nextPage/arrow2.png" alt="" onclick="arrowYearChange(1)"></div>
            </div>

           <!-- <div class="InfoBlockSpan InfoBlockSpanYear">
               <span style="color: #142638;">2020</span>
           </div> -->
            <div class="InfoBlockSpan InfoBlockSpanYear">
                <span style="color: #142638; font-size: 20px;">Декабрь</span>
            </div>
            <div class="GalleryBlockPhoto">
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g1.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Поэтический вечер "Чай клуб"</h2>
                            <p>Тут типа будет описание</p>
                            <a href="events/19_05_2020_teaСlub.php">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g2.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g3.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div style="height: 40px;" class="InfoBlockSpan InfoBlockSpanYear">
                <span style="color: #142638; font-size: 20px;">Ноябрь</span>
            </div>

            <div class="GalleryBlockPhoto">
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g4.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g5.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
            </div>


            <div class="InfoBlockSpan InfoBlockSpanYear">
                <span style="color: #142638;">2019</span>
            </div>
            <div class="GalleryBlockPhoto">
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="GalleryPhoto GalleryPhotoMargin">
                    <figure class="GalleryFigure">
                        <div class="GalleryFigureDiv">
                            <img src="/media/mainPage/gallery/g6.jpg" alt="">
                        </div>
                        <figcaption class="GalleryFigcaption">
                            <span>19.05.2020</span>
                            <h2>Заголовок</h2>
                            <p>Тут типа будет описание</p>
                            <a href="">Подробнее</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>

        <footer>
            <th:block th:include="includes/footer.html"/>
        </footer>
    </div>
</main>
</body>
</html>
