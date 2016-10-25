<?php
require_once './persistenc/kernel.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="keywords" content="amity, finance, small, big, circle, amitysmall, pequenas amizades, pequena amizade, pequena, amizade" />
        <meta name="description" content="Amity Small" />
        <title><?php kernel::titulosApp("tituloA2"); ?></title>
        <link rel="stylesheet" type="text/css" href="view/js/boots/css/bootstrap.min.css">
        <script src="view/js/jquery/alejq2.2.4.js"></script>
        <script src="view/js/boots/js/bootstrap.min.js"></script>
        <script src="view/js/nucleo/nucleo_js.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            div#div_PaiIndex{
                text-align: center;
            }

            .navbar-brand-centered {
                position: absolute;
                left: 50%;
                display: block;
                width: 160px;
                text-align: center;
                background-color: transparent;
            }
            .navbar>.container .navbar-brand-centered, 
            .navbar>.container-fluid .navbar-brand-centered {
                margin-left: -80px;
                background-color: #FFFFFF;
            }

            .main-text
            {
                position: absolute;
                top: 50px;
                width: 96.66666666666666%;
                color: #FFF;
            }
            .btn-min-block
            {
                min-width: 170px;
                line-height: 26px;
            }
            .btn-clear
            {
                color: #FFF;
                background-color: transparent;
                border-color: #FFF;
                margin-right: 15px;
            }
            .btn-clear:hover
            {
                color: #000;
                background-color: #FFF;
            }


        </style>
        <script>
            $(document).ready(function () {
                $("div#div_PaiIndex").AleCenterDiv("50%", "50%");
            });
        </script>


    </head>
    <body>
        <div id="div_NavBar">
            <nav class="navbar navbar-default" role="navigation" style="background-color: #FFFFFF; border: 0px;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand navbar-brand-centered"><?php kernel::titulosApp("tituloA2"); ?></div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-brand-centered">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Associados</a></li>
                            <li><a href="#">Projetos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" data-toggle="modal" data-target="#modal_QuemSomos">Quem Somos</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_FaleConosco">Fale Conosco</a></li>		        
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <div id="div_PaiIndex">


        </div>


        <div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="8000">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/1900x900/3498db/2980b9" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>
                                        First slide</h3>
                                    <p>
                                        Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1850x850/9b59b6/8e44ad" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>
                                        Second slide</h3>
                                    <p>
                                        Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1200x500/34495e/2c3e50" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>
                                        Third slide</h3>
                                    <p>
                                        Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                     href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                            </span></a>
                    </div>
                    <div class="main-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2> Faça parte do Grupo Amity </h2>
                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </h3>
                            <div class="">
                                <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                                                                                                                               href="http://www.jquery2dotnet.com/">Registration</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="push">
        </div>



        <!-- Modal quem somos -->
        <div class="modal fade" id="modal_QuemSomos" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Grupo Amity</h4>
                    </div>
                    <div class="modal-body">
                        <p>Planejamos a inclusão tecnologica de Pequenos Empreendedores e Profissionais Autonomos a realidade tecnologica atual exigida pelos seus clientes.</p> 

                        <p>Através do Desenvolvimento de Sistemas Web e Aplicações Mobile para que você possua o diferencial, e possa oferecer comodidade a seus clientes.  </p>

                        <p>Melhor custo benefício a Associados ao Grupo. <br> Veja nossas soluções para sua área de atuação e se torne sócio do Grupo.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal quem somos -->

        <!-- Modal fale conosco -->
        <div class="modal fade" id="modal_FaleConosco" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Grupo Amity</h4>
                    </div>
                    <div class="modal-body">
                        <p>Tire sua dúvidas.</p>
                        <p>Informe sua necessidade.</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal fale conosco -->



    </body>
</html>