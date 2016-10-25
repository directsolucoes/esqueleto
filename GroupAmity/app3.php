<?php

/*********************************************************************
 * 
 * 
 * 
 * 
 *********************************************************************/
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
        <link rel="icon" href="view/img/icon_emp.ico">
        <script src="view/js/jquery/alejq2.2.4.js"></script>
        <script src="view/js/boots/js/bootstrap.min.js"></script>
        <script src="view/js/nucleo/nucleo_js.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>

            html,body {
                height:100%;
                width:100%;
                position:relative;
            }
            #background-carousel{
                position:fixed;
                width:100%;
                height:100%;
                z-index:-1;
            }
            .carousel,
            .carousel-inner {
                width:100%;
                height:100%;
                z-index:0;
                overflow:hidden;
            }
            .item {
                width:100%;
                height:100%;
                background-position:center center;
                background-size:cover;
                z-index:0;
            }

            #content-wrapper {
                position:absolute;
                z-index:1 !important;
                min-width:100%;
                min-height:100%;
            }
            .well {
                opacity:0.85
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
                background-color: transparent;
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
            a:link, a, a:hover, a:active, a:visited{
                text-decoration: none  !important;
                border: none !important;
                outline: 0 !important;
                outline: none !important;
            }
  
            
            /*******************************************************
              ********INÍCIO configurações default layout*********
            ********************************************************/
            /********** BAR TOP **********/
             .navbar-brand-centered {
                position: absolute;
                left: 50%;
                display: block;
                width: 160px;
                text-align: center;
                background-color: transparent !important;
            }
            .navbar>.container .navbar-brand-centered, 
            .navbar>.container-fluid .navbar-brand-centered {
                margin-left: -80px;
                background-color: transparent !important;
            }            
            .bartopA1{
                background-color: transparent !important;
                border: 0px !important;
            }
            /********** BAR TOP **********/
            /********************************************************/ 
            /********** FOOTER **********/
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 60px;
                background-color: #f5f5f5;
                
            }
            .container .text-muted {
                margin: 20px 0;
            }

            .footer > .container {
                padding-right: 15px;
                padding-left: 15px;
            }            
            /********** FOOTER **********/
            /********************************************************/
            /********** a links **********/
            .alinks{
                color: #f260ab !important;
            }
            
            /********** a links **********/
            
            
            /*******************************************************
              ********FIM configurações default layout*********
            ********************************************************/
            
            
        </style>
        <script>
            $(document).ready(function () {

            });
            $('#myCarousel').carousel({
                pause: 'none'
            });
        </script>


    </head>
    <body>
        <div id="background-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                <div class="carousel-inner">
                    <div class="item active" style="background-image:url(http://placehold.it/1600x800/)"></div>
                    <div class="item" style="background-image:url(http://placehold.it/1600x800/)"></div>
                    <div class="item" style="background-image:url(http://placehold.it/1600x800/)"></div>  
                </div>
            </div>
        </div>


        <div id="content-wrapper">
            <!-- PAGE CONTENT -->
            <div class="container">
                <div id="div_NavBar">
                    <nav class="navbar navbar-default bartopA1" role="navigation" style="">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand navbar-brand-centered">Título</div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbar-brand-centered">
                                <ul class="nav navbar-nav">
                                    <li><a href="#" class="alinks">Associados</a></li>
                                    <li><a href="#" class="alinks">Projetos</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" data-toggle="modal" data-target="#modal_QuemSomos" class="alinks">Quem Somos</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_FaleConosco" class="alinks">Fale Conosco</a></li>		        
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
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


            </div><!-- End Container -->
            <!-- PAGE CONTENT -->
            <footer class="footer">
                <div class="container">
                    <p class="text-muted">Place sticky footer content here.</p>
                </div>
            </footer>
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