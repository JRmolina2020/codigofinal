              <html lang="en">
              <head>
                <?php include ('../../controller/equipos/lista_equipos.php ');?>
                <link rel="stylesheet" type="text/css" href="../ruteo/css/sweetalert.css">
                <link rel="stylesheet" type="text/css" href="../ruteo/css/lista_equipos.css">
                <script src="../ruteo/js/ruteo_equipos.js"></script>
                <script src="../ruteo/js/sweetalert.min.js"></script>
                <script src="../ruteo/js/busqueda_lista_equipo.js"></script>
              </head>
              <body><br><br><br>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <input type="search" class="form-control" id="input-search" placeholder="Busqueda de equipos" >
                  </div>
                </div><br>
                <?php foreach($data as $fila){?>
                <div class="searchable-container">
                  <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-3 clearfix">
                   <!--contenido-->
                   <div class="thumbnail">
                    <img width="200" height="240" src="data:image/jpg;base64,<?php echo base64_encode($fila['eq_imagen']);?>" alt="...">
                    <div class="caption">
                      <h3><?php echo $fila["eq_nombre"]?></h3>
                      <p><i class="fa fa-user"></i>   <?php echo $fila["e_nombre"]?> </p>
                      <p> <i class="fa fa-check"></i>  <?php echo $fila["d_nombre"]?> </p>
                      <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["idequipo"]?>)">
                           <i class="fa fa-paint-brush  fa-lg"></i> 
                        </a>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       <a class="btn btn-block btn-danger" onClick="eliminar(<?php echo $fila["idequipo"]?>)">
                        <i class="fa fa-trash-o fa-lg"></i> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>     
            </div>
          </div>
          <!--fin tabla de eequipos-->
          <?php }?>
        </body>
        </html>

