<?php include_once('EmailController.php'); ?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Flisol 2016 - Ceará -  16 de Abril de 2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="../public/css/fonts.css" rel="stylesheet" type="text/css" charset="utf-8" />
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <link href="../public/css/prettyPhoto.css" rel='stylesheet' id='prettyphoto-css' type='text/css' media='all'>
    <link href="../public/css/fontello.css" type="text/css" rel="stylesheet">

    <!--[if lt IE 7]>
    <link href="../public/css/fontello-ie7.css" type="text/css" rel="stylesheet">
    <![endif]-->
    <!-- Google Web fonts
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->

    <link href="../public/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="../public/js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="../public/js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="../public/js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div id="headerwrap">
        <header class="clearfix">
            <!--<h1><span>FliSol 2016</span> Ceará </h1>-->
            <div class="container">
                <div class="row">
                    <div class="span12">

                        <h2>Prezado(a),</h2>

                        <?php echo($email->nome) ?>

                        <h2>Parabéns sua inscriçao foi realizada com sucesso!</h2>

                        <h2>Hora e local do evento: 16 Abr 08:30 - 17h </h2>

                        <h2>Acesse a página do evento para obter maiores informaçoes</h2>

                        <a class="btn btn-default" href="http://flisolce.org/" role="button">flisolce.org</a>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <ul class="icon">
                            <li><a href="https://www.instagram.com/flisolceara/" target="_blank"><i class="icon-camera"></i></a></li>
                            <li><a href="https://www.facebook.com/Flisol-Cear%C3%A1-230697460613894" target="_blank"><i class="icon-facebook-squared"></i></a></li>
                            <li><a href="https://github.com/flisolceara" target="_blank"><img src="../public/img/github.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <section id="social" class="single-page scrollblock">
        <div class="container">
            <div class="align"><i class="icon-thumbs-up"></i></div>
            <h1>Realização</h1>
            <div class="row">
                <div class="span12"  style="text-align: center; padding-bottom: 20px;">
                    <img src="../public/img/itic.jpg"/>
                </div>
                <div style="margin:auto;max-width: 500px; padding:20px;"><div class="fb-page" style="margin:auto;" data-tabs="timeline,events,messages" data-href="https://www.facebook.com/Flisol-Cear&#xe1;-230697460613894" data-tabs="messages" data-width="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></div>
            </div>
        </div>
    </section>

</body>
</html>