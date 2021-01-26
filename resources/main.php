<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidyadrsha Nochchiyagama</title>

    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet">
    <link href="asset/font/flaticon/flaticon.css" rel="stylesheet">

    <!--<link href="asset/css/styles.css?v=1" rel="stylesheet"> -->
    <link href="asset/css/ayesha.css?v=1" rel="stylesheet">
    <link href="asset/css/hirushani.css?v=1" rel="stylesheet">
    <link href="asset/css/isuru.css?v=1" rel="stylesheet">
    <link href="asset/css/kalana.css?v=1" rel="stylesheet">
    <link href="asset/css/news.css?v=1" rel="stylesheet">
    <link href="asset/css/roshan.css?v=1" rel="stylesheet">
    <link href="asset/css/shani.css?v=1" rel="stylesheet">
    <link href="asset/css/nelusha.css?v=1" rel="stylesheet">
    <link href="asset/css/preschool.css?v=1" rel="stylesheet">

    <link href="asset/css/com.css?v=1" rel="stylesheet">

    <link rel="stylesheet" href="Magnific-Popup-master/dist/magnific-popup.css">

</head>

<body>

    <?php
require_once('resources/header/index.php');


if(!isset($_GET['tag']) || $_GET['tag'] =='home'){
require_once('resources/slider/index.php');
require_once('resources/gallery/index.php');
require_once('resources/event/index.php');
require_once('resources/news/index.php');
require_once('resources/videos/index.php');
require_once('resources/donation/index.php');

}
elseif($_GET['tag'] == 'dev-home'){
require_once('resources/dev-home/index.php');
}
elseif($_GET['tag'] == 'developments'){
require_once('resources/dev-description/index.php');
}
elseif($_GET['tag'] == 'history'){
require_once('resources/history/index.php');
}

elseif($_GET['tag'] == 'youth'){
require_once('resources/youth/index.php');
}

elseif($_GET['tag'] == 'service'){
require_once('resources/service/index.php');
}

elseif($_GET['tag'] == 'create'){
require_once('resources/about/index.php');
}
elseif($_GET['tag'] == 'preschool'){
    require_once('resources/preschool/index.php');
}

require_once('resources/footer/index.php');
?>



    <script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="asset/js/scroll.js"></script>
    <script src="Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
    <script>
    $('.test-popup-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',

        zoom: {
            enabled: true,

            duration: 300,
            easing: 'ease-in-out',

            opener: function(openerElement) {

                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }

    });
    </script>


</body>

</html>