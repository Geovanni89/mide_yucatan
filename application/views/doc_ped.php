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
	<link href="<?=base_url();?>plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/blog/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/commerce/style.css" rel="stylesheet" />
	<link href="<?=base_url();?>css/commerce/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>css/commerce/theme/default.css" id="theme" rel="stylesheet" />
    <style type="text/css">
        .page-title h1 {
            color: #4A2D51;
        }
        .bg-eje-texto {
            background: #183661 !important;
        }
        .bg-eje-ciud {
            background: #6A449B !important;
        }
        .bg-eje-norma {
            background: #189887 !important;
        }
        .bg-eje-agenda {
            background: #0EADE1 !important;
        }
    </style>
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url();?>plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        
    
        <?php include("header.php"); ?>
        

    
        <!-- begin #page-title -->
        <div id="page-title" class="page-title has-bg" style="padding: 0px;">
            <div class="bg-cover bottom"><img src="<?=base_url();?>img/sei_img/fotos.jpg" alt="" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-2"><img src="<?=base_url();?>img/sei_img/plan_estatal.png" style="width: 50%;"></div>
                    <div class="col-md-6 col-md-offset-3"><h1>DOCUMENTOS DEL PED</h1></div>
                </div>
                
            </div>
        </div>
        <!-- end #page-title -->
    
        <!-- BEGIN #promotions -->
        <div id="promotions" class="section-container bg-white">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN section-title -->
                <h4 class="section-title clearfix">                    
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                </h4>
                <!-- END section-title -->
                <!-- BEGIN row -->
                <div class="row row-space-12">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <!-- BEGIN promotion -->
                        <div class="promotion promotion-lg bg-eje-texto">
                            <div class="promotion-image text-right promotion-image-overflow-middle">
                                <img src="<?=base_url();?>img/sei_img/v_texto.png" alt="" />
                            </div>
                            <div class="promotion-caption promotion-caption-inverse">
                                <div class="promotion-price">Versión</div>
                                <h4 class="promotion-title">Texto</h4>
                                <a href="#" class="promotion-btn">Descarga</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    </div>
                    <!-- END col-6 -->
                    <div class="col-md-6">
                        <!-- BEGIN col-3 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-ciud">
                                <div class="promotion-image text-right promotion-image-overflow-center promotion-image-overflow-middle">
                                    <img src="<?=base_url();?>img/sei_img/v_ciudadano.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">Versión</div>
                                    <h4 class="promotion-title">Ciudadana</h4>
                                    <a href="#" class="promotion-btn">Descarga</a>
                                </div>
                            </div>
                            <!-- END promotion -->                        
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-norma">
                                <div class="promotion-image text-right promotion-image-overflow-center promotion-image-overflow-middle text-right">
                                    <img src="<?=base_url();?>img/sei_img/v_normativo.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">Versión</div>
                                    <h4 class="promotion-title">Normativa</h4>
                                    <a href="#" class="promotion-btn">Descarga</a>
                                </div>
                            </div>
                            <!-- END promotion -->                       
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-md-12 col-sm-12 m-t-10">
                            <!-- BEGIN promotion -->
                            <div class="promotion bg-eje-agenda">
                                <div class="promotion-image text-right promotion-image-overflow-center promotion-image-overflow-middle text-right">
                                    <img src="<?=base_url();?>img/sei_img/v_agenda.png" alt="" />
                                </div>
                                <div class="promotion-caption promotion-caption-inverse text-left">
                                    <div class="promotion-price">Versión</div>
                                    <h4 class="promotion-title">Agenda 2030</h4>
                                    <a href="#" class="promotion-btn">Descarga</a>
                                </div>
                            </div>
                            <!-- END promotion -->                       
                        </div>
                        <!-- END col-3 -->
                    </div>
                    
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #promotions -->
    
        <?php include("footer.php"); ?>
    </div>
    <!-- END #page-container -->    
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url();?>plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url();?>plugins/bootstrap3/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url();?>js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
