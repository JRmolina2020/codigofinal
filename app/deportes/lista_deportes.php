          <html lang="en">
          <head>
            <?php include ('../../controller/deportes/lista_deportes.php ');?>
            <script src="../ruteo/js/ruteo_deportes.js"></script>
            <script src="../ruteo/js/busqueda_lista_equipo.js"></script>
            <link rel="stylesheet" type="text/css" href="../ruteo/css/sweetalert.css">
            <script src="../ruteo/js/sweetalert.min.js"></script>
            <body>
             <br><br><br>
             <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                  <input type="search" class="form-control" id="input-search" placeholder="Busqueda de equipos">
                </div>
              </div>
              <br><br>
              <div class="row">
                <?php foreach($data as $fila){?>
                <div class="searchable-container">
                  <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-4 clearfix">
                    <div class="dln-member" data-name="<?php echo $fila["d_nombre"]?>" data-state="ca" data-expertise="Producer">
                     <div class="panel panel-primary">
                      <div class="panel-heading" >
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <!--buttons CRUD-->
                          <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12"> 
                            <table class="table table-user-information"><tbody><tr><td>Nombre:</td><td><?php echo $fila["d_nombre"]?></td></tr><tr><td>Codigo:</td><td><?php echo $fila["d_codigo"]?></td></tr><tr><td>Estado</td><td><?php echo $fila["d_estado"]?></td></tr><tr><td></td><td></td></tr></tbody></table><br>
                            <div class="row">
                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                               <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["id"]?>)">Modificar
                                 <i class="fa fa-paint-brush  fa-lg"></i> 
                               </a>
                             </div>
                             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                              <a class="btn btn-block btn-danger" onClick="eliminar(<?php echo $fila["id"]?>)">Eliminar
                                <i class="fa fa-trash  fa-lg"></i> 
                              </a>
                            </div>
                          </div>
                        </div>
                        <!--fin buttons CRUD-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </body>
      </html>