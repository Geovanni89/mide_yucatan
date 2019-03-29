<style type="text/css">
    .popular-tags > li > a:hover, .popular-tags > li > a:focus {
        text-decoration: none !important;
        color: #432764 !important;
        border-color: #100505 !important;
        box-shadow: 0px 0px 12px 0px !important;
    }

.popular-tags > li > a.active {
    box-shadow: inset 0px 0px 12px 0px !important;
}

</style>
<!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?=base_url();?>" class="navbar-brand">
                    <span class="navbar-logo"></span>
                    <span class="brand-text">
                        Yucatán | SSED
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin #header-navbar -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar indicador" />
                            </div>
                        </form>
                    </li>                    
                </ul>
            </div>
            <!-- end #header-navbar -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->

    <!-- begin search-banner -->
    <div class="search-banner has-bg">        
        <!-- begin container -->
        <div class="container">
            <ul class="popular-tags">                
                <li><a href="<?=base_url();?>">Inicio</a></li>
                <li><a href="<?=base_url();?>documentos">Documentos del PED</a></li>
                <li><a href="<?=base_url();?>indicadores">Versión Electrónica</a></li>
                <li><a href="<?=base_url();?>copledey">COPLEDEY</a></li>
                <li><a href="<?=base_url();?>contacto">Contacto</a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-banner -->