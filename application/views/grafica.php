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
  
    <link href="<?=base_url();?>css/commerce/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/theme/default.css" id="theme" rel="stylesheet" />
 
    <link href="<?=base_url();?>css/general/general.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/general/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/chosen/chosen.css">
    <style type="text/css">
        #chartdiv {
          width: 100%;
          height: 500px;
        }
        .content {
                padding: 10px 15px 20px !important;
        }
    </style>

    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>

    <?php include('header.php'); ?>
        
    <div class="fondotitulo pad">
        
        <center><h1 class="textotitulo">Gráfica</h1></center>
        

        <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="barrafiltro">
                    <h4 class="filtro">Filtar indicadores</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li><center>
                    
                        <!-- begin info-container -->
                        <div class="row">
                            <div class="col-md-6" style="padding: 0;">
                                <select name="proposito" id="proposito">
                                    <option value="" disable>Proposito PED</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                &nbsp;
                                
                                <select name="indicador" id="indicador">
                                    <option value="" disable>Seleccionar indicador</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                &nbsp;
                                                          
                            <button type="button" style="background-color: #432764;" class="btn btn-primary btn-xs">Agregar indicador</button>                               
                            &nbsp;
                            <button type="button" style="background-color: #432764;" class="btn btn-primary btn-xs">Limpiar</button>                           
                        </div>
                        </center><!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
    <!-- begin content -->
    </div>

    <!--listado-->

    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin #pricing -->
        <div id="pricing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <!-- begin pricing-table -->
                <div id="chartdiv"></div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #pricing -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
     
    
    <?php include('footer.php'); ?>   
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>plugins/bootstrap3/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="<?=base_url();?>plugins/chosen/chosen.jquery.js"></script>
    <script src="<?=base_url();?>js/amchart/core.js"></script>
    <script src="<?=base_url();?>js/amchart/charts.js"></script>
    <script src="<?=base_url();?>js/amchart/animated.js"></script>
    <script src="<?=base_url();?>js/amchart/graf_linea.js"></script>
    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });
        
        $('.chosen-select').chosen({'width':'100%'});
    </script>
</body>
</html>
