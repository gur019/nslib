<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org" >
<head>
    <meta charset="utf-8" />
    <!-- ----------------bootstrap-------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Архив</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="/css/style_Global_Vars.css?<?=filemtime('../../../css/style_Global_Vars.css')?>">
    <link rel="stylesheet" href="/css/style_Header.css?<?=filemtime('../../../css/style_Header.css')?>">
    <link rel="stylesheet" href="/css/style_footer.css?<?=filemtime('../../../css/style_footer.css')?>">

    <link rel="stylesheet" href="/css/KarinaCSS/eventArchive.css?<?=filemtime('../../../css/KarinaCSS/eventArchive.css')?>">
    <link rel="stylesheet" href="/css/photoGallery/style_photo_gallery.css?<?=filemtime('../../../css/photoGallery/style_photo_gallery.css')?>">
    <link rel="stylesheet" href="/css/archive/year.css?<?=filemtime('../../../css/archive/year.css')?>">

         <!-- ----------------bootstrap-------------------- -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="/js/eventArchive/calendar.js?<?=filemtime('../../../js/eventArchive/calendar.js')?>" type="text/javascript"></script>

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
            <div class="InfoBlockSpan mt-4">
                <span style="color: #142638;">Культурно-досуговая деятельность библиотеки (архив)</span>
            </div>

            <?php include '../calendar.html';?>

<!-- -------------------------months--------------------- -->
            

            <?php include '12/month.html';?>
            
            <?php include '11/month.html';?>

            <?php include '1/month.html';?>
            

        </div>

        <footer>
          <?php include '../../includes/footer.html';?>
        </footer>
    </div>
</main>
</body>
</html>
