
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>SSED | Yucatán</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url(); ?>plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>css/forum/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>css/parallax/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>css/commerce/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>css/forum/style-responsive.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>css/forum/theme/default.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    <style type="text/css">
        .content {
            padding: 15px 15px 35px !important;
        }

        #acerca p,
        h1,
        h2,
        h4 {
            color: #fff;
        }

        h2+h4 {
            color: #F5A54B;
        }

        h2.content-title {
            color: #432764;
        }
    </style>

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url(); ?>plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>

<body>
    <?php include("header.php"); ?>



    <!-- begin content -->
    <div class="content" style="background-color: #432764;">
        <!-- begin container -->
        <div class="container">

            <!-- begin #about -->
            <div id="acerca" class="content" data-scrollview="true">
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInDown">
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-4 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- begin about -->
                            <div class="about">
                                <h2>¿Qué es SEI</h2>
                                <h4>Seguimiento y Evaluación <br>de Indicadores</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra
                                    est eu velit feugiat condimentum. Sed dictum ipsum in justo tempus gravida.
                                    Maecenas fermentum urna metus, non tempor arcu dapibus ac. Nulla facilisi.
                                    Sed efficitur arcu at turpis commodo, sit amet congue leo blandit. Integer non
                                    nisl blandit, malesuada velit et, aliquam dui. Nulla porta leo eget tincidunt
                                    imperdiet. Nulla pharetra imperdiet aliquet. Nunc sit amet egestas lorem, in
                                    venenatis arcu.
                                </p>
                            </div>
                            <!-- end about -->
                        </div>
                        <!-- end col-4 -->
                        <!-- begin col-4 -->
                        <div class="col-md-4 col-sm-4 col-md-offset-2"> <br><br><br><br><br>
                        <h1 align="left"><b>SEI</b></h1>
                        <h4 align="left">SEGUIMIENTO Y EVALUACIÓN <br> DE INDICADORES</h4>
                    </div>
                        <!-- end col-4 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #about -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
    <pre>
        
<?php //print_r($datos_json); 
echo $datos_json; ?>
    </pre>
    <!-- begin content -->
    <div class="content">
        <!-- begin container -->

        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Indicadores</h2>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- begin skills -->
                        <img src="<?= base_url(); ?>img/sei_img/indicadores.png" style="width: 95%;">
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vestibulum posuere augue eget ante porttitor fringilla.
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna,
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam.
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec.
                            </p>
                            <p>
                                In non libero at orci rutrum viverra at ac felis.
                                Curabitur a efficitur libero, eu finibus quam.
                                Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo.
                                Donec gravida, eros ac pretium cursus, est erat dapibus quam,
                                sit amet dapibus nisl magna sit amet orci.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
    </div>
    <!-- end container -->
    </div>
    <!-- end content -->

    <!-- begin content -->
    <div class="content" style="background-color: #EDEFEC">
        <!-- begin container -->
        <div class="container">

            <!-- begin #about -->
            <div id="about" class="content" data-scrollview="true">
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInDown">
                    <h2 class="content-title">Matriz DESCA</h2>
                    <div class="row">
                            <img src="<?= base_url(); ?>img/sei_img/matriz.png" id="map-image" style="width: 100%; height: auto;" alt="" usemap="#map" />
                            <map name="map">
                                <area shape="circle" coords="647, 606, 30" />
                                <area shape="circle" coords="449, 609, 30" />
                                <area shape="circle" coords="667, 463, 29" />
                                <area shape="circle" coords="1289, 461, 30" />
                                <area shape="circle" coords="823, 460, 31" />
                                <area shape="circle" coords="1139, 301, 29" />
                                <area shape="circle" coords="1140, 383, 33" />
                                <area shape="circle" coords="1141, 461, 29" />
                                <area shape="circle" coords="1000, 607, 30" />
                                <area shape="circle" coords="1067, 462, 29" />
                                <area shape="circle" coords="1068, 383, 29" />
                                <area shape="circle" coords="1067, 301, 32" />
                                <area shape="circle" coords="1180, 598, 27" />
                                <area shape="circle" coords="834, 608, 31" />
                                <area shape="circle" coords="596, 386, 31" />
                                <area shape="circle" coords="1289, 534, 31" />
                                <area shape="circle" coords="597, 542, 29" />
                                <area shape="circle" coords="425, 464, 33" />
                                <area shape="circle" coords="426, 382, 30" />
                                <area shape="circle" coords="425, 543, 30" />
                                <area shape="circle" coords="597, 463, 30" />
                                <area shape="circle" coords="427, 302, 32" />
                                <area shape="circle" coords="668, 305, 31" />
                                <area shape="circle" coords="668, 386, 30" />
                                <area shape="circle" coords="822, 385, 31" />
                                <area shape="circle" coords="824, 301, 33" />
                                <area shape="circle" coords="901, 462, 29" />
                                <area shape="circle" coords="902, 384, 32" />
                                <area shape="circle" coords="902, 301, 31" />
                                <area shape="circle" coords="1289, 301, 34" />
                                <area shape="circle" coords="1289, 380, 32" />
                                <area shape="circle" coords="595, 303, 32" />
                            </map>
                            
                    </div>
                    <!-- begin row -->
                        <!-- begin col-4 -->
                            <!-- begin about -->
                            <!-- end about -->
                        <!-- end col-4 -->
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #about -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->


    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin #pricing -->
            <div id="pricing" class="content" data-scrollview="true">
                <!-- begin container -->
                <div class="container">
                    <h2 class="content-title">Análisis SEIDY</h2>
                    <!-- begin pricing-table -->
                    <div class="pricing-table col-md-12">
                        <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3>Histórico y comparativos</h3>
                                <img src="<?= base_url(); ?>img/sei_img/historico.png" style="width: 60%;">
                                <div class="footer">
                                    <button type="button" href="#" style="background-color: #3c6f96; border-radius: 5px; border: 0;"><a style="font-size:15px; color: white;">Ingresar análisis</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3>Plan Estatal de Desarrollo</h3>
                                <img src="<?= base_url(); ?>img/sei_img/plan.png" style="width: 60%;">
                                <div class="footer">
                                    <button type="button" href="#" style="background-color: #3c6f96; border-radius: 5px; border: 0;"><a style="font-size:15px; color: white;">Ingresar análisis</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3>Organizar y descargar datos</h3>
                                <img src="<?= base_url(); ?>img/sei_img/datos.png" style="width: 60%;">
                                <div class="footer">
                                    <button type="button" href="#" style="background-color: #3c6f96; border-radius: 5px; border: 0;"><a style="font-size:15px; color: white;">Ingresar análisis</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end #pricing -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->

    <div class="content" style="background-color: #EDF0ED">
        <div class="container">
            <!-- begin #about -->
            <div id="about" class="content" data-scrollview="true">
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInDown">
                    <h2 class="content-title">Ejes PED</h2>
                    <!-- begin row -->
                    <div class="row">
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-uno">
                                <div class="promotion-image promotion-image-overflow-left promotion-image-overflow-bottom text-right">
                                    <img src="<?= base_url(); ?>img/sei_img/1_economico.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">
                                        <p><b>Yucatán con economía inclusiva</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END promotion -->
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-dos">
                                <div class="promotion-image promotion-image-overflow-left promotion-image-overflow-bottom text-right">
                                    <img src="<?= base_url(); ?>img/sei_img/2_calidad.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">
                                        <p><b>Yucatán con calidad de vida y bienestar social</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END promotion -->
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-tres">
                                <div class="promotion-image promotion-image-overflow-left promotion-image-overflow-bottom text-right">
                                    <img src="<?= base_url(); ?>img/sei_img/3_cultural.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">
                                        <p><b>Yucatán cultural con identidad para el desarrollo</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END promotion -->
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-cuatro">
                                <div class="promotion-image promotion-image-overflow-left promotion-image-overflow-bottom text-right">
                                    <img src="<?= base_url(); ?>img/sei_img/4_verde.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">
                                        <p><b>Yucatán verde y sustentable</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END promotion -->
                        </div>
                        <!-- END col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #about -->
        </div>
    </div>

    <?php include("footer.php"); ?>

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url(); ?>plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>plugins/bootstrap3/js/bootstrap.min.js"></script>    
    <script src="<?= base_url(); ?>js/imageMapResizer.min.js"></script>
                            
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?= base_url(); ?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            $("map").imageMapResize();
        });
    </script>
</body>

</html> 