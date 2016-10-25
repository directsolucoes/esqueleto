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

            section {
                padding-top: 100px;
                padding-bottom: 100px;
            }

            .quote {
                color: rgba(0,0,0,.1);
                text-align: center;
                margin-bottom: 30px;
            }

            /*-------------------------------*/
            /*    Carousel Fade Transition   */
            /*-------------------------------*/

            #fade-quote-carousel.carousel {
                padding-bottom: 60px;
            }
            #fade-quote-carousel.carousel .carousel-inner .item {
                opacity: 0;
                -webkit-transition-property: opacity;
                -ms-transition-property: opacity;
                transition-property: opacity;
            }
            #fade-quote-carousel.carousel .carousel-inner .active {
                opacity: 1;
                -webkit-transition-property: opacity;
                -ms-transition-property: opacity;
                transition-property: opacity;
            }
            #fade-quote-carousel.carousel .carousel-indicators {
                bottom: 10px;
            }
            #fade-quote-carousel.carousel .carousel-indicators > li {
                background-color: #e84a64;
                border: none;
            }
            #fade-quote-carousel blockquote {
                text-align: center;
                border: none;
            }
            #fade-quote-carousel .profile-circle {
                width: 100px;
                height: 100px;
                margin: 0 auto;
                border-radius: 100px;
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



        <section id="carousel">    				
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="8000">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item">
                                    <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                    <blockquote>
                                        <h2 class="text-info"> Faça parte do Grupo Amity </h2>
                                        <h3>Se torne mais um Empreendedor de Sucesso.</h3>
                                        <h4>Soluções em Tecnologia para pequenas empresas e profissional autonomo,
                                            que se adaptam a necessidade de seus clientes!</h4>                                            
                                    </blockquote>	
                                </div>

                                <div class="item">
                                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                    <blockquote>
                                        <h2 class="text-info"> Acesse o Menu Projetos </h2>
                                        <h3>Se inscreva nos projetos em desenvolvimento para você e sua empresa.</h3>
                                        <h4>Ou solicite o projeto que você necessita.</h4>
                                    </blockquote>
                                </div>

                                <div class="active item">
                                    <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                                    <blockquote>
                                        <p>33333 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                    </blockquote>
                                </div>

                            </div>
                        </div>
                    </div>							
                </div>
            </div>
        </section>



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