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