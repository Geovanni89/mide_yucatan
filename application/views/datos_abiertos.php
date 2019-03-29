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
    <link href="<?=base_url();?>css/parallax/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/commerce/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/theme/default.css" id="theme" rel="stylesheet" />
    <link href="<?=base_url();?>css/parallax/style.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link href="<?=base_url();?>css/general/general.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/fc-3.2.5/fh-3.1.4/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/chosen/chosen.css">


    <style type="text/css">        
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
        
        <center><h1 class="textotitulo">Datos abiertos</h1></center>
        

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
                            <div class="col-md-2">
                                <select name="indicador" id="indicador" class="chosen-select">
                                    <option value="" disable>Indicador</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                
                            </div>
                            <div class="col-md-2">
                                <select name="periodicidad" id="periodicidad" class="chosen-select">
                                    <option value="" disable>Periodicidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-inverse">Aplicar filtro</button>
                                
                            </div>
                            
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
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 2</th>
                            <th>Column 2</th>
                            <th>Column 2</th>
                            <th>Column 2</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                    </tbody>
                </table>
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

    
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/fc-3.2.5/fh-3.1.4/r-2.2.2/datatables.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>plugins/chosen/chosen.jquery.js"></script>

    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>plugins/scrollMonitor/scrollMonitor.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();

            $('#table_id').DataTable();
            $('.chosen-select').chosen({'width':'100%'});
        });
        
    </script>
</body>
</html>
