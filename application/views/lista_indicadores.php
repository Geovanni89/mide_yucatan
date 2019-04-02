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
                            <button type="button" onclick="mostrar('cuadricula');"><i class="fa fa-square"></i></button>
                            <button type="button" onclick="mostrar('lista');"><i class="fa fa-bars"></i></button>                            
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
        <div class="container" id="contenedor_indicadores">
            <!-- begin panel-forum -->
            <?php 
                foreach ($ind as $vind) {
                    echo 'id: '.$vind->id_indicador;
                    
            ?>
                <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title"><a target="_blank" href="<?=base_url();?>indicadores/ind?id=<?=$vind->id_indicador;?>"><?=$vind->nombre_indicador;?></a></h4>
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
                                <?=$vind->valor;?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Unidad de medida</a></h4>
                                <p class="desc">
                                <?=$vind->unidad;?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Fuente</a></h4>
                                <p class="desc">
                                Sistema de cuentas nacionales. INEGI
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title"><a class="texto">Año</a></h4>
                                <p class="desc">
                                <?=$vind->fecha;?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h4 class="title texto"><a class="texto">Periodicidad</a></h4>
                                <p class="desc">
                                <?=$vind->periodicidad;?>
                                </p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <?php
                }
            ?>
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
    <!--listado-->

        <div class="section-container">
            <!-- begin pagination -->
            <div class="pagination-container text-center">
                <ul class="pagination m-t-0 m-b-0" id="paginador">

                <?php
                if($total > 0)
                {
                    $clase = 'active';
                    echo '<li class="disabled"><a href="javascript:;">Anterior</a></li>';
                    
                    $total_pag = floor($total/10);
                    $total_ind = (floor($total/10) > 5) ? 4 : floor($total/10);
                    for ($i=0; $i <= $total_ind; $i++) { 
                        echo '<li id="pg_'.$i.'" class="'.$clase.'"><a href="javascript:;" onclick="pagina_ind('.$i.');">'.($i+1).'</a></li>';
                        $clase = '';
                    }
                   
                    if($total_pag<5) 
                        echo '<li class="disabled"><a href="javascript:;">Siguiente</a></li>';
                    else
                        echo '<li><a href="javascript:;" onclick="paginador(\'sig\',0,4,'.$total_pag.');">Siguiente</a></li>';
                }

                ?>
                    <!--<li><a href="javascript:;"><?=(($total%10)==0) ? ($total/10) : ceil($total/10);?></a></li>-->
                        
                </ul>
            </div>
            <!-- end pagination -->
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
    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>
        var pagina_actual = 0;

        $(document).ready(function() {
            App.init();
            //$('#pg_0').addClass('active');
        });

        function mostrar(tipo_vista) {
            $.post('<?=base_url();?>C_indicadores/vista_ind',{pagina:pagina_actual,vista:tipo_vista}, function(resp){
                //console.log(resp);
                $('#contenedor_indicadores').html(resp);
            });
        }


        function pagina_ind(pagina) {

            $.post('<?=base_url();?>C_indicadores/pagina_ind', {pagina:pagina}, function(resp){
                $('#pg_'+pagina_actual).removeClass('active')
                $('#pg_'+pagina).addClass('active');
                pagina_actual = pagina;
                $('#contenedor_indicadores').html(resp);
                
                //var result = resp.split('_separador_');
                //$('#paginador').html(result[1]);
                //console.log('total propuestas: '+result[2]+'\n total paginas: '+result[3]+'\n pruebas: '+result[4]);
                //loading.out();
            });
        }

        function paginador(op,lim_i,lim_s,total) {
            if(op=='sig') pagina = pagina_actual+1;
            if(op=='ant') pagina = pagina_actual-1;
            $.post('<?=base_url();?>C_indicadores/paginador',{op:op,lim_i:lim_i,lim_s:lim_s,total:total}, function(resp){
                $('#paginador').empty().html(resp);
                pagina_ind(pagina);         
            });

        }
    </script>
</body>
</html>
