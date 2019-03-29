<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Plan Estatal de Desarrollo 2018-2024</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?=base_url();?>/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>/css/blog/style.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>/css/blog/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>/css/blog/theme/default.css" id="theme" rel="stylesheet" />
   
   <style type="text/css">
         /*#container { display:block; }
         @media only screen and (orientation:portrait){
            #container {  
                  -webkit-transform: rotate(90deg);
                  -moz-transform: rotate(90deg);
                  -o-transform: rotate(90deg);
                  -ms-transform: rotate(90deg);
                  transform: rotate(90deg);
                 }
 
         }
         @media only screen and (orientation:landscape){
            #container {  
                  -webkit-transform: rotate(0deg);
                  -moz-transform: rotate(0deg);
                  -o-transform: rotate(0deg);
                  -ms-transform: rotate(0deg);
                  transform: rotate(0deg);
                 }
         }*/
    </style>
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body id="container">
    <!-- begin #header -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-12">
                    <!-- begin post-detail -->
                    <div class="post-detail section-container">                        
                        <h4 class="post-title">
                            <!--<a href="post_detail.html">Bootstrap Carousel Blog Post</a>-->
                        </h4>
                        <div class="post-by">
                            <!--Posted By <a href="#">admin</a> <span class="divider">|</span> 10 June 2015 <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Mountain</a>, <a href="#">Bike</a> <span class="divider">|</span> 2 Comments-->
                        </div>
                        <!-- begin post-image -->
                        <div align="center">
                            <iframe id="iframe_graf" src="<?=base_url();?>graficas/examples/javascript/<?php echo $id; ?>" height="500" width="100%"></iframe>
                            <div id="div_giro" class="row" style="display: none;">
                                <h5>Para visualizar las gráficas deberá activar la rotación automática y colorcar su dispositivo en posición horizontal</h5>
                                <div class="col-lg-12"><img src="<?=base_url();?>img/sei_img/rotate2.gif" style="max-width: 100%; min-height: 350px;"></div>
                            </div>
                        </div>
                        <!-- end post-image -->
                        <!-- begin post-desc -->
                        <div class="post-desc">
                            <p></p>
                        </div>
                        <!-- end post-desc -->                        
                    </div>
                    <!-- end post-detail -->
                    
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <?php include('footer.php'); ?>
    
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>/plugins/bootstrap3/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="<?=base_url();?>/crossbrowserjs/html5shiv.js"></script>
        <script src="<?=base_url();?>/crossbrowserjs/respond.min.js"></script>
        <script src="<?=base_url();?>/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>
        $(document).ready(function() {            
            App.init();
            giro();
        });

        function giro() {
            var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
            if(isMobile) {
                //((container  display:block;
                //transform: rotate(0deg);
                //document.getElementById("container").style.transform = "rotate(90deg)";
                if(window.screen.orientation.type=="landscape-primary") {
                    //document.getElementById('iframe_graf').style.display = "";
                    //document.getElementById('div_giro').style.display = "none";                    
                }
                else if(window.screen.orientation.type="portrait-primary") {
                    document.getElementById('iframe_graf').style.display = "none";
                    document.getElementById('div_giro').style.display = "";
                    //document.getElementById("container").style.transform = "rotate(90deg)";

                }
            }            
        }

        window.addEventListener("orientationchange", function() {
            //alert("the orientation of the device is now " + screen.orientation.angle);
            if(window.screen.orientation.type=="landscape-primary") {
                //document.location.reload(true);
                document.getElementById('iframe_graf').style.display = "";
                document.getElementById('div_giro').style.display = "none";
            }
            else if(window.screen.orientation.type="portrait-primary") {
                document.getElementById('iframe_graf').style.display = "none";
                document.getElementById('div_giro').style.display = "";
            }
        });


    </script>
</body>
</html>