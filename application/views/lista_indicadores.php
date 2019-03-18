<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SEI | Yucatán</title>
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
    <link href="<?=base_url();?>css/general/font-awesome.css" rel="stylesheet" />

    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>

    <?php include('header.php'); ?>
        
    <div class="fondotitulo pad">
        
        <center><h1 class="textotitulo">B&#250;squeda de indicadores</h1></center>
        

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
                            <select name="sel1" id="propositoped">
                                <option value="" disable>Proposito PED</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <select name="sel2" id="temsectorial">
                                <option value="" disable>Tematica sectorial</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel3" id="depend">
                                <option value="" disable>Dependencia</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel4" id="Nindi">
                                <option value="" disable>Nivel de indicador</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel5" id="Desag">
                                <option value="" disable>Desagregado</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel6" id="Periodi">
                                <option value="" disable>Periodicidad</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel7" id="Tend">
                                <option value="" disable>Tendencia</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <select name="sel8" id="AZ">
                                <option value="" disable>A-Z</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            </select>
                            <button type="submit" onclick="mostrar1()"><i class="fa fa-square"></i></button>
                            <button type="submit" onclick="mostrar2()"><i class="fa fa-bars"></i></button>                            
                        </div>
                        </center><!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
    <!-- begin content -->
    </div>

    <!--cuadricula-->
    <div class="content" id="lista" style='display:block;'>
        <!-- begin container -->
        <div class="container">
            <!-- begin panel-forum -->
            
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Variaci&oacute;n porcentual del producto interno bruto estatal</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container row">
                            <div class="col-md-4">
                                <h4 class="title"><a class="texto">L&iacute;nea base o valor de referencia</a></h4>
                                <p class="desc">
                                $249613.573
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Unidad de medida</a></h4>
                                <p class="desc">
                                Millones de pesos
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Fuente</a></h4>
                                <p class="desc">
                                Sistema de cuentas nacionales. INEGI
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">A&ntilde;o</a></h4>
                                <p class="desc">
                                2017
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title texto"><a class="texto">Periodicidad</a></h4>
                                <p class="desc">
                                Anual
                                </p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>

            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Variaci&oacute;n porcentual del producto interno bruto estatal</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container row">
                            <div class="col-md-4">
                                <h4 class="title"><a class="texto">L&iacute;nea base o valor de referencia</a></h4>
                                <p class="desc">
                                $249613.573
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Unidad de medida</a></h4>
                                <p class="desc">
                                Millones de pesos
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Fuente</a></h4>
                                <p class="desc">
                                Sistema de cuentas nacionales. INEGI
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">A&ntilde;o</a></h4>
                                <p class="desc">
                                2017
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title texto"><a class="texto">Periodicidad</a></h4>
                                <p class="desc">
                                Anual
                                </p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Variaci&oacute;n porcentual del producto interno bruto estatal</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container row">
                            <div class="col-md-4">
                                <h4 class="title"><a class="texto">L&iacute;nea base o valor de referencia</a></h4>
                                <p class="desc">
                                $249613.573
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Unidad de medida</a></h4>
                                <p class="desc">
                                Millones de pesos
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Fuente</a></h4>
                                <p class="desc">
                                Sistema de cuentas nacionales. INEGI
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">A&ntilde;o</a></h4>
                                <p class="desc">
                                2017
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title texto"><a class="texto">Periodicidad</a></h4>
                                <p class="desc">
                                Anual
                                </p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Variaci&oacute;n porcentual del producto interno bruto estatal</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container row">
                            <div class="col-md-4">
                                <h4 class="title"><a class="texto">L&iacute;nea base o valor de referencia</a></h4>
                                <p class="desc">
                                $249613.573
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Unidad de medida</a></h4>
                                <p class="desc">
                                Millones de pesos
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Fuente</a></h4>
                                <p class="desc">
                                Sistema de cuentas nacionales. INEGI
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">A&ntilde;o</a></h4>
                                <p class="desc">
                                2017
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title texto"><a class="texto">Periodicidad</a></h4>
                                <p class="desc">
                                Anual
                                </p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>            
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->


   


    <!--listado-->

    
            <!-- begin #pricing -->
        <div class="content" id="cuadricula" style='display:none;' data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                              
                <!-- begin pricing-table -->
                <div class="pricing-table col-md-12">
                    <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container dentro">
                        <div class="tarjetita">
                            <center><h4>Variaci&oacute;n porcentual del producto interno bruto estatal</h4></center>
                        </div><div class="dentro">
                            <div class="row">
                            <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" width="100px" alt="" />
                            </div>
                            <br>
                            <div class="col-md-7">
                                <a class="texto2">L&iacute;nea base o valor de referencia</a>
                                <a class="desc" style="font-size: 9px; color: black;">$249613.573</a>
                            </div>
                            <div class="col-md-5">
                                <a class="texto2">Unidad de medida</a>
                                <a class="desc" style="font-size: 9px; color: black;">Millones de pesos</a>
                            </div>
                            <div class="col-md-12">
                            <br>
                            
                            <p><a class="texto2" style="text-align: left;">Fuente&nbsp;</a><a class="desc" style="font-size: 9px; color: black;">Sistemas nacionales. INEGI</a></p>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">A&ntilde;o</a>
                                <a class="desc" style="font-size: 9px; color: black;">2017</a>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">Periodicidad</a>
                                <a class="desc" style="font-size: 9px; color: black;">Anual</a>
                                <br><br>
                            </div>
                            </div></div>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container dentro">
                        <div class="tarjetita">
                            <center><h4>Variaci&oacute;n porcentual del producto interno bruto estatal</h4></center>
                        </div><div class="dentro">
                            <div class="row">
                            <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" width="100px" alt="" />
                            </div>
                            <br>
                            <div class="col-md-7">
                                <a class="texto2">L&iacute;nea base o valor de referencia</a>
                                <a class="desc" style="font-size: 9px; color: black;">$249613.573</a>
                            </div>
                            <div class="col-md-5">
                                <a class="texto2">Unidad de medida</a>
                                <a class="desc" style="font-size: 9px; color: black;">Millones de pesos</a>
                            </div>
                            <div class="col-md-12">
                            <br>
                            
                            <p><a class="texto2" style="text-align: left;">Fuente&nbsp;</a><a class="desc" style="font-size: 9px; color: black;">Sistemas nacionales. INEGI</a></p>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">A&ntilde;o</a>
                                <a class="desc" style="font-size: 9px; color: black;">2017</a>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">Periodicidad</a>
                                <a class="desc" style="font-size: 9px; color: black;">Anual</a>
                                <br><br>
                            </div>
                            </div></div>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container dentro">
                        <div class="tarjetita">
                            <center><h4>Variaci&oacute;n porcentual del producto interno bruto estatal</h4></center>
                        </div><div class="dentro">
                            <div class="row">
                            <div class="media">
                            <img src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" width="100px" alt="" />
                            </div>
                            <br>
                            <div class="col-md-7">
                                <a class="texto2">L&iacute;nea base o valor de referencia</a>
                                <a class="desc" style="font-size: 9px; color: black;">$249613.573</a>
                            </div>
                            <div class="col-md-5">
                                <a class="texto2">Unidad de medida</a>
                                <a class="desc" style="font-size: 9px; color: black;">Millones de pesos</a>
                            </div>
                            <div class="col-md-12">
                            <br>
                            
                            <p><a class="texto2" style="text-align: left;">Fuente&nbsp;</a><a class="desc" style="font-size: 9px; color: black;">Sistemas nacionales. INEGI</a></p>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">A&ntilde;o</a>
                                <a class="desc" style="font-size: 9px; color: black;">2017</a>
                            </div>
                            <div class="col-md-6">
                                <a class="texto2">Periodicidad</a>
                                <a class="desc" style="font-size: 9px; color: black;">Anual</a>
                                <br><br>
                            </div>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #pricing -->
     
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
    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });

        function mostrar1(){
        document.getElementById('cuadricula').style.display = 'block';
        document.getElementById('lista').style.display = 'none';}

        function mostrar2(){
        document.getElementById('lista').style.display = 'block';
        document.getElementById('cuadricula').style.display = 'none';}
    </script>
</body>
</html>
