<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >

<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Структура библиотеки</title>

    <script src="/oldBrowser/IE.js?<?=filemtime('../../oldBrowser/IE.js')?>"></script>

    <link rel="stylesheet" href="/css/style_Global_Vars.css?<?=filemtime('../../css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="/css/style_Header.css?<?=filemtime('../../css/style_Header.css')?>">
    <link rel="stylesheet" href="/css/style_footer.css?<?=filemtime('../../css/style_footer.css')?>">
    <link rel="stylesheet" href="/css/KarinaCSS/style_structure.css?<?=filemtime('../../css/KarinaCSS/style_structure.css')?>">

     <!-- ----------------bootstrap-------------------- -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

       <!-- ----------------bootstrap-------------------- -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   <script src="/js/structNNB.js?<?=filemtime('../../js/structNNB.js')?>"></script>

</head>
<body>
    <main>

    <header>
        <?php include '../includes/header.html';?>
    </header>

    <div class="MainBlock container">

        <div class="selectedPhotoPage mt-4">
            <div class="card__info">
                <h1 class="card__title">Структура и органы управления</h1>
            </div>
            <img src="/media/structure/photo.png" alt="">
        </div>


        <div class="InfoBlockSpan mt-4">
            <span>Структура и органы управления ГБУК "Национальная научная библиотека РСО-А"</span>
        </div>

        
        

        <div class="container p-0">
            <div class="row">

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/5282827.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Директор</h5>
                            <span class="card-title">«Национальной научной библиотеки Республики Северная Осетия-Алания»</span>
                            <h6 class="card-title">Хайманова Ирина Асланбековна</h6>
                            <!-- <p class="card-text">Подробнее о руководстве библиотеки</p> -->
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Подробнее о руководстве</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел регистрации читателей и  сервисного обслуживания</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Михайлова Людмила Николаевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел комплектования и учета фондов</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Кусаева Виктория Борисовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел обработки и каталогизации документов</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Татунашвили Ирина Владимировна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Абонемент художественной литературы</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Дзукаева Светлана Борисовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел периодических изданий</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Галазова Лариса Урузмаговна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел искусств</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Басиева Фариза Михайловна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Общий читальный зал</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Абисалова Лариса Анатольевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Информационно-библиографический отдел</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Гиоева Светлана Эльбрусовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел редкой книги им. В.Г. Шредерс</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Бигаева Ольга Османовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Межбиблиотечный абонемент</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Афендулиди Луиза Константиновна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Краеведческий отдел</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Мамукаева Людмила Цараевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Книжная палата</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Тигиева Залина Юрьевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел книгохранения</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Мамсурова Тамара Сахановна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Музей истории библиотечного дела РСО-А</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Цориева Альбина Таймуразовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Выставочный зал</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Хугаева Оксана Руслановна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Зал художественной литературы</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Татарская Марина Михайловна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Зал иностранной литературы</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Гиоева Ирма  Абисаловна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Зал электронных ресурсов</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Туриева Татьяна Владимировна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Сектор оцифровки документов</h5>
                            <div>
                                <span>Зав. сектором</span>
                                <h6 class="card-title">Татрова Залина Тлатовна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Инновационно-методический отдел</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Мазитова Нина Георгиевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел автоматизации библиотечных процессов</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Якубов Гурген Михайлович</h6>
                            </div>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Типография</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Азиева Алла Николаевна</h6>
                            </div>
                            <ul>
                                <span>Отдел в социальных сетях</span>
                                <li class="liNone">
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/vk.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/fb.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/ok.png" alt=""></a>
                                    <a href="#"><img class="IconLink" src="/media/structure/linkIcon/inst.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Бухгалтерия</h5>
                            <div>
                                <span>Главный бухгалтер</span>
                                <h6 class="card-title">Рамонова Залина Казбековна</h6>
                            </div>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="card cardEgde">
                        <img class="card-img-top" src="/media/structure/m44c2aa11a.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Отдел кадров</h5>
                            <div>
                                <span>Зав. отделом</span>
                                <h6 class="card-title">Кулова Эльма Ахбертовна</h6>
                            </div>
                            <a href="#" class="btn btn-primary w-100 Bcolor link">Положение об отделе</a>
                        </div>
                    </div>
                </div>


            </div>    
        </div>


        <footer>
          <?php include '../includes/footer.html';?>
        </footer>

    </div>
    </main>
</body>
</html>
