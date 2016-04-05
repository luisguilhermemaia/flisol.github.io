<?php include_once('EmailController.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Flisol Ce 2016</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/email.css"/>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>
</head>
<body bgcolor="#FF8E2A">
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<table class="head-wrap" bgcolor="#f0bf00">
    <tr>
        <td></td>
        <td class="header container">
            <div class="content">
                <table bgcolor="white">
                    <tr>
                        <td><img src="../public/img/logo-2016.png"/></td>
                        <td align="right"><h6 class="collapse">Dia 16 de Abril de 2016 - Festival Latino Americano de Instalação de Software Livre do Ceará</h6></td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">
            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h3>Prezado(a),</h3>

                            <?php foreach($email as $inscrito): ?>


                             <h3><?= $inscrito['nome']; ?></h3>


                            <?php endforeach ?>

                            <p> Parabéns sua inscriçao foi realizada com sucesso!</p>
                            <p>Hora e local do evento: 16 Abr 08:30 - 17h - Faculdade 7 de Setembro.</p>

                            <p class="callout">
                                Acesse a página do evento para obter maiores informaçoes <a href="http://flisolce.org/">Clique aqui &raquo;</a>
                            </p>

                            <table class="social" width="100%">
                                <tr>
                                    <td>

                                        <table align="left" class="column">
                                            <tr>
                                                <td>
                                                    <h5 class="">Fique conectado FLisol CE 2016</h5>
                                                    <p class=""><a href="https://www.facebook.com/Flisol-Cear%C3%A1-230697460613894" class="soc-btn fb">Facebook</a> <a href="https://www.instagram.com/flisolceara/" class="soc-btn gp">Instagram</a> <a href="https://github.com/flisolceara"  class="soc-btn tw">Github</a></p>
                                                </td>
                                            </tr>
                                        </table>

                                        <table align="left" class="column">
                                            <tr>
                                                <td>
                                                    <div style="margin:auto;max-width: 500px; padding:20px;"><div class="fb-page" style="margin:auto;" data-tabs="timeline,events,messages" data-href="https://www.facebook.com/Flisol-Cear&#xe1;-230697460613894" data-tabs="messages" data-width="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <span class="clear"></span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>

<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">

            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                            <p>
                                <a href="iticdigital.org/">Itic DIgital</a> |
                                <a href="flisolce.org/"> Flisol CE 2016</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>