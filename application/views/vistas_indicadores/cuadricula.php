<?php 
    $cont = 0;
    foreach ($ind as $vind) {
        switch ($cont) {
            case 0: echo '<div class="pricing-table col-md-12" style="margin-bottom: 3%;">'; break;
            case 3: echo '</div><div class="pricing-table col-md-12" style="margin-bottom: 3%;">'; break;
            case 6: echo '</div><div class="pricing-table col-md-12" style="margin-bottom: 3%;">'; break;
            case 9: echo '</div><div class="pricing-table col-md-12" style="margin-bottom: 3%;">'; break;
            case 12: echo '</div>'; break;
            
            default:
                # code...
                break;
        }
        ?>
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

    <?php 
    $cont++;    
        }
?>