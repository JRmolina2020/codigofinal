            <html lang="en">
            <head>
              <?php include ('../../controller/usuarios/lista_usuarios.php ');?>
              <script src="../ruteo/js/ruteo_usuarios.js"></script>
              <script src="../ruteo/js/busqueda_lista_equipo.js"></script>
              <link rel="stylesheet" type="text/css" href="../ruteo/css/sweetalert.css">
              <script src="../ruteo/js/sweetalert.min.js"></script>
              <body>
                <br><br><br>
             <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <input type="search" class="form-control" id="input-search" placeholder="Busqueda de Usuarios">
              </div>
            </div>
            <br>
            <?php foreach($data as $fila){?>
            <div class="panel panel-default">
              <div class="searchable-container container-fluid">
               <div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                <div class="panel-heading resume-heading">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="col-xs-12 col-sm-4">
                        <figure>
                          <img class="img-responsive" alt="Error al cargar" src="data:image/jpg;base64,<?php echo base64_encode($fila['u_imagen']);?>">
                        </figure><br>
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                           <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["id"]?>)">Modificar
                            <span class="fa fa-check-circle"></span>
                          </a>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                         <a class="btn btn-block btn-danger" onClick="">Eliminar
                          <span class="fa fa-trash-o "></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-8">
                    <ul class="list-group">
                     
                      <li class="list-group-item"><i class="fa fa-map-marker"></i> <?php echo $fila["u_nombre"]?></li>
                      <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $fila["u_correo"]?></li>
                      <li class="list-group-item"><i class="fa fa-ticket"></i> <?php echo $fila["u_fecha"]?></li>
                      <li class="list-group-item"><i class="fa fa-user"></i> <?php echo $fila["rol_user"]?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
            </body>
            </html>