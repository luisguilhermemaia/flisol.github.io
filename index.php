<?php 

if( $_SERVER['REQUEST_METHOD']=='POST' ){
  // include ('controller/FlisolController.php'); 
}?>


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>FLISOL2016/CE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="public/css/bootstrap.css" rel="stylesheet">
<link href="public/css/style.css" rel="stylesheet">
<link rel='stylesheet' id='prettyphoto-css'  href="public/css/prettyPhoto.css" type='text/css' media='all'>
<link href="public/css/fontello.css" type="text/css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="public/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="public/img/favicon.ico">

<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="public/js/jquery.localscroll-1.2.7-min.js"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
</head>

<body>
<!--******************** NAVBAR ********************-->
<div class="navbar-wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <h1 class="brand"><a href="#top">FLISoL CEARÁ</a></h1>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <nav class="pull-right nav-collapse collapse">
          <ul id="menu-main" class="nav">
            <li><a title="portfolio" href="#portfolio">Sobre o Evento</a></li>
            <li><a title="services" href="#services">Programação</a></li>
            <li><a title="news" href="#news">Palestrantes</a></li>
            <li><a title="team" href="#team">Cidades</a></li>
            <li><a title="contact" href="#contact">Inscreva-se</a></li>
          </ul>
        </nav>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-inner -->
  </div>
  <!-- /.navbar -->
</div>
<!-- /.navbar-wrapper -->
<div id="top"></div>
<!-- ******************** HeaderWrap ********************-->
<div id="headerwrap">
  <header class="clearfix">
    <h1><span>FLISoL</span> Festival Latino-americano de Instalação de Software Livre </h1>
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2>Usar, Estudar, Distribuir, Melhorar...</h2>
          <h2>16 de Abril / Ceará, Brasil</h2>
          <input type="text" id="email-inscrever" value="" name="your-email" placeholder="Digite um e-mail para se increver" class="cform-text" size="40" title="your email">
          <a href="#contact">
            <input type="submit" id="submit-inscrever" value="Inscreva-se" class="cform-submit">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <ul class="icon">
            <li><a href="#" target="_blank"><i class="icon-camera"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-facebook-squared"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</div>
<!--******************** Feature ********************-->
<div class="scrollblock">

</div>
<hr>
<!--******************** Portfolio Section ********************-->
<section id="portfolio" class="single-page scrollblock">
  <div class="container">
    <div class="align"><img src="public/img/portfoliofli.jpg"/></div>
    <h1 id="folio-headline">Sobre o Evento</h1>
    <div class="row">
      <div class="span4">
        <div class="mask2"> <a href="public/img/portfolio-01.jpg" rel="prettyPhoto"><img src="public/img/portfolio-01.jpg" alt=""></a> </div>
        <div class="inside">
          <hgroup>
            <h2>FLISoL</h2>
          </hgroup>
          <div class="entry-content">
            <p>O Festival Latino Americano de Instalação de Software Livre (FLISOL) 
               é o maior evento de divulgação de Software Livre da América Latina. 
               Ele acontece desde 2005 e seu principal objetivo é promover o uso de software livre, 
               apresentando sua filosofia, seu alcance, avanços e desenvolvimento ao público em geral.
            </p>
          </div>
        </div>
        <!-- /.inside -->
      </div>
      <!-- /.span4 -->
      <div class="span4">
        <div class="mask2"> <a href="public/img/portfolio-02.jpg" rel="prettyPhoto"><img src="public/img/portfolio-02.jpg" alt=""></a> </div>
        <div class="inside">
          <hgroup>
            <h2>Palestras</h2>
          </hgroup>
          <div class="entry-content">
            <p>Paralelamente acontecem palestras, apresentações e workshops, sobre temas locais, 
               nacionais e latino-americanos sobre Software Livre, em toda a sua expressão: artística, 
               acadêmica, empresarial e social.
               Fique por dentro da revolução silenciosa que está acontecendo em várias áreas com o uso do 
               Software Livre.
            </p>
           </div>
        </div>
        <!-- /.inside -->
      </div>
      <!-- /.span4 -->
      <div class="span4">
        <div class="mask2"> <a href="public/img/portfolio-03.jpg" rel="prettyPhoto"><img src="public/img/intallfest.jpg" alt=""></a> </div>
        <div class="inside">
          <hgroup>
            <h2>Install Fest</h2>
          </hgroup>
          <div class="entry-content">
            <p>Para alcançar estes objetivos, diversas comunidades locais de Software Livre (em cada país/cidade/localidade), organizam simultaneamente eventos em que se instala, de maneira gratuita e totalmente legal, Software Livre nos computadores dos participantes.</p>
        </div>
        </div>
        <!-- /.inside -->
      </div>
      <!-- /.span4 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</section>
<hr>
<!--******************** Services Section ********************-->
<section id="services" class="single-page scrollblock">
  <div class="container">
    <div class="align"><i class="icon-clipboard"></i></div>
    <h1>Programação</h1>
    <!-- programacao do flisol -->
    <div class="section">
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#acarau" aria-controls="acarau" role="tab" data-toggle="tab">Acaraú</a></li>
                <li role="presentation"><a href="#cariri" aria-controls="cariri" role="tab" data-toggle="tab">Cariri</a></li>
                <li role="presentation"><a href="#caninde" aria-controls="caninde" role="tab" data-toggle="tab">Canindé</a></li>
                <li role="presentation"><a href="#crateus" aria-controls="crateus" role="tab" data-toggle="tab">Crateús</a></li>
                <li role="presentation"><a href="#fortaleza" aria-controls="fortaleza" role="tab" data-toggle="tab">Fortaleza</a></li>
                <li role="presentation"><a href="#juazeiro" aria-controls="juazeiro" role="tab" data-toggle="tab">Juazeiro do Norte</a></li>
                <li role="presentation"><a href="#quixada" aria-controls="quixada" role="tab" data-toggle="tab">Quixadá</a></li>
                <li role="presentation"><a href="#russas" aria-controls="russas" role="tab" data-toggle="tab">Russas</a></li>
                <li role="presentation"><a data-toggle="tab" href="#goncalo" role="tab" aria-controls="goncalo">São Gonçalo do Amarante</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="acarau">
                    <table class="table table-striped table-bordered">
                    <tr>Programação FLISOL Acaraú 2016</tr>
                    <tr>
                        <td>Horário</td>
                        <td>Auditório</td>
                        <td>Sala 01</td>
                        <td>Sala 02</td>
                    </tr>
                </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="cariri">
                    <table class="table table-striped table-bordered">
                    <tr>Programação FLISOL Cariri 2016</tr>
                    <tr>
                        <td>Horário</td>
                        <td>Auditório</td>
                        <td>Sala 01</td>
                        <td>Sala 02</td>
                    </tr>
                </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="caninde">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Canindé 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="crateus">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Crateús 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="fortaleza">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Fortaleza 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="juazeiro">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Juazeiro do Norte 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="quixada">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Quixadá 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="russas">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL Russas 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="goncalo">
                    <table class="table table-striped table-bordered">
                        <tr>Programação FLISOL São Gonçalo do Amarante 2016</tr>
                        <tr>
                            <td>Horário</td>
                            <td>Auditório</td>
                            <td>Sala 01</td>
                            <td>Sala 02</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<hr>
<!--******************** Testimonials Section ********************-->

<hr>
<!--******************** News Section ********************-->
<section id="news" class="single-page scrollblock">
  <div class="container">
    <div class="align"><i class="icon-vcard"></i></div>
    <h1>Palestrantes</h1>
    <!-- Three columns -->
    <div class="row">
      <article class="span4 post"> <div class="text-center"><img class="img-news" src="public/img/gilmagno.jpg" alt=""></div>
        <div class="inside">
          <p class="post-date"><i class="icon-calendar"></i> 16 de Abril, 9:00h</p>
          <h2>Gil Magno</h2>
          <div class="entry-content">
            <p>Muito interessado nos aspectos sociais e políticos da tecnologia. Promove o conhecimento livre e o software livre. Entusiasta de Jornalismo de Dados. Trabalha como programador desde 2010, embora desde muito tempo se interesse pelo assunto. Contribuidor da Auditoria Cidadã da Dívida e do WikiPolíticos. Graduado em Direito &hellip;</p>
            <a href="#" class="more-link">leia mais</a> </div>
        </div>
        <!-- /.inside -->
      </article>
      <!-- /.span4 -->
      <article class="span4 post"> <div class="text-center"> <img class="img-news" src="public/img/joel.jpg" alt=""></div>
        <div class="inside">
          <p class="post-date">16 de Abril, 9:00h</p>
          <h2>Joel Wallis</h2>
          <div class="entry-content">
              <p>Muito interessado nos aspectos sociais e políticos da tecnologia. Promove o conhecimento livre e o software livre. Entusiasta de Jornalismo de Dados. Trabalha como programador desde 2010, embora desde muito tempo se interesse pelo assunto. Contribuidor da Auditoria Cidadã da Dívida e do WikiPolíticos. Graduado em Direito &hellip;</p>
            <a href="#" class="more-link">leia mais</a> </div>
        </div>
        <!-- /.inside -->
      </article>
      <!-- /.span4 -->
      <article class="span4 post"> <div class="text-center"><img class="img-news" src="public/img/Jepherson.jpg" alt=""></div>
        <div class="inside">
          <p class="post-date">16 de Abril, 9:00h</p>
          <h2>Jepherson Rodrigues</h2>
          <div class="entry-content">
              <p>Muito interessado nos aspectos sociais e políticos da tecnologia. Promove o conhecimento livre e o software livre. Entusiasta de Jornalismo de Dados. Trabalha como programador desde 2010, embora desde muito tempo se interesse pelo assunto. Contribuidor da Auditoria Cidadã da Dívida e do WikiPolíticos. Graduado em Direito &hellip;</p>
            <a href="#" class="more-link">leia mais</a> </div>
        </div>
        <!-- /.inside -->
      </article>
      <!-- /.span4 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</section>
<hr>
<!--******************** Team Section ********************-->
<section id="team" class="single-page scrollblock">
  <div class="container">
    <div class="align"><i class="icon-map"></i></div>
    <h1>Cidades</h1>
    <!-- Five columns -->
    <div class="row">
      <div class="span2 offset1">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-1.jpg" alt=""> </div>
        <h3>Acaraú</h3>
      </div>
      <!-- ./span2 -->
      <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-2.jpg" alt=""> </div>
        <h3>Cariri</h3>
      </div>
      <!-- ./span2 -->
      <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-3.jpg" alt=""> </div>
        <h3>Canindé</h3>
      </div>
      <!-- ./span2 -->
      <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-4.jpg" alt=""> </div>
        <h3>Crateús</h3>
      </div>
      <!-- ./span2 -->
      <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-2.jpg" alt=""> </div>
        <h3>Fortaleza</h3>
      </div>
      <!-- ./span2 -->

    <div class="span2 offset1">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-1.jpg" alt=""> </div>
        <h3>Juazeiro do Norte</h3>
    </div>
    <!-- ./span2 -->
    <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-2.jpg" alt=""> </div>
        <h3>Quixadá</h3>
    </div>
    <!-- ./span2 -->
    <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-3.jpg" alt=""> </div>
        <h3>Russas</h3>
    </div>
    <!-- ./span2 -->
    <div class="span2">
        <div class="teamalign"> <img class="team-thumb img-circle" src="public/img/portrait-4.jpg" alt=""> </div>
        <h3>São Gonçalo do Amarante</h3>
    </div>
    <!-- ./span2 -->

    <!-- ./span2 -->


    </div>
    <!-- /.row -->
    <div class="row">
      <div class="span10 offset1">
        <hr class="featurette-divider">
        <div class="featurette">
          <h2 class="featurette-heading">Quer palestrar, ministrar oficina ou mini curso no FLISOL Fortaleza?<span class="muted"> | Submeta seu trabalho, faça sua pré-inscrição <a title="contact" href="#contact">aqui.</a></span></h2>
          <p></p>
        </div>
        <!-- /.featurette -->
        <hr class="featurette-divider">
      </div>
      <!-- .span10 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!--******************** Contact Section ********************-->
<section id="contact" class="single-page scrollblock">
    <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>Inscreva-se</h1>
        <div class="row">
            <div class="span12">
                <div class="cform" id="theme-form">
                    <form id="form-inscrito" action="" method="post" class="cform-form">
                        
                        <div class="row"> 
                            <div class="span6">
                                <span>
                                    <input type="text" name="nome" required  placeholder="Nome" class="cform-text" size="40" title="Nome">
                                </span>
                            </div>
                            <div class="span6">
                                <span>
                                    <input type="text" id="email-cadastro" required  value="" name="email" placeholder="Email" class="cform-text" size="40" title="Email">
                                </span>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="span6">
                                <span>
                                    <input type="text" name="endereco" required  placeholder="Endereço" class="cform-text" size="40" title="Endereço">
                                </span>
                            </div>
                            <div class="span6">
                                <span>
                                    <input type="text" name="telefone" required  placeholder="Telefone" class="cform-text" size="40" title="Telefone">
                                </span>
                            </div>
                        </div>

                        <div class="row row-tipo">
                            <div class="span6 class-radio">
                              <label class="span3 label1">
                                  <input type="radio" name="categoria_id" value="1" checked>
                                  <span class="tipo">Estudante</span>
                              </label>
                              <label class="span3 label2">
                                  <input type="radio" name="categoria_id" value="2">
                                  <span class="tipo">Palestrante</span>
                              </label>
                            </div>
                            <div class="span6">
                                <select name="cidade" id="cidade" required >
                                    <option value="fortaleza" >Fortaleza</option>
                                    <option value="acarau">Acarau</option>
                                    <option value="caninde">Caninde</option>
                                    <option value="crateus">Crateus</option>
                                    <option value="juazeiro-do-norte">Juazeiro do Norte</option>
                                    <option value="quixada">Quixada</option>
                                    <option value="russas">Russas</option>
                                    <option value="sao-goncalo-do-amarante">São Gonçalo do Amarante</option>
                                </select>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="span6">
                                <input type="submit" id="enviar" value="enviar" class="cform-submit pull-left">
                            </div>
                        </div>
                        <div id="alert" class="alert alert-block" style="display:none;">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <h4>Warning!</h4>
                          Best check yo self, you're not...
                        </div>
                    </form>
                </div>
            </div>
                <!-- ./span12 -->
        </div>
            <!-- /.row -->
    </div>
  <!-- /.container -->
</section>
<hr>
<div class="footer-wrapper">
  <div class="container">
    <footer>
      <small>&copy; FLISoL 2016 CEARÁ</small>
    </footer>
  </div>
  <!-- ./container -->
</div>

<div id="myModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Sucesso!</h3>
  </div>
  <div class="modal-body">
    <p>Cadastro Realizado com Sucesso</p>
  </div>
</div>

<div id="myModal1" class="modal fade alert alert-success" tabindex="-1" role="dialog">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Sucesso!</h4>
  Cadastro efetuado com sucesso!
</div>

<!-- Loading the javaScript at the end of the page -->
<script type="text/javascript" src="public/js/bootstrap.js"></script>
<script type="text/javascript" src="public/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="public/js/site.js"></script>
<script type="text/javascript" src="public/js/jquery.mask.js"></script>

<!--ANALYTICS CODE-->
<script type="text/javascript">

  $("#submit-inscrever").on("click", function(e){
        e.preventDefault();
        
        var email = $("#email-inscrever").val();
        var emailCadastro = $("#email-cadastro").val(email.toLowerCase());

        if(email.length >= 1){
            $("#email-inscrever").val("");
        }
  });

  $('[name=telefone]').mask('(00) 0000-0000');

  $( "#form-inscrito" ).submit(function(e) {
    e.preventDefault();
     
    var values = $(this).serialize();

    $.ajax({
        url: "controller/FlisolController.php",
        type: "post",
        data: values,
        success: function (response) {            
            $('#myModal').modal();   
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });

});

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29231762-1']);
  _gaq.push(['_setDomainName', 'dzyngiri.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
