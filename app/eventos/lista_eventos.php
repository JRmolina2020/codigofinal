      <html lang="en">
      <head>
        <?php include ('../../controller/eventos/lista_eventos.php ');?>
        <link rel="stylesheet" type="text/css" href="../ruteo/css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="../ruteo/css/list_event.css">
        <script src="../ruteo/js/ruteo_eventos.js"></script>
        <script src="../ruteo/js/sweetalert.min.js"></script>
        <script src="../ruteo/js/busqueda_lista_equipo.js"></script>
      </head>
      <body><br><br><br>
        <!--tabla equipos-->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <input type="search" class="form-control" id="input-search" placeholder="Busqueda de eventos" >
          </div>
        </div><br>
        <!--contenido-->
        <?php foreach($data as $fila){?>
         
          <div class="searchable-container container-fluid">
           <div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
            <div class="panel-heading resume-heading">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-xs-12 col-sm-4">
                    <figure>
                      <img class="img-responsive" width="672" height="440" alt="Error al cargar" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_eve']);?>">
                    </figure>
                  </div>
                  <div class="col-xs-12 col-sm-8">
                    <ul class="list-group">
                      <li class="list-group-item"><i class="fa fa-check-square"></i> <?php echo $fila["nombre_eve"]?></li>
                      <li class="list-group-item"><i class="fa fa-map-marker"></i> <?php echo $fila["lugar_eve"]?></li>
                      <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $fila["feho_eve"]?></li>
                      <li class="list-group-item"><i class="fa fa-ticket">CATEGORIA :</i> <?php echo $fila["d_nombre"]?></li>
                    </ul>
                  </div>
                  <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                     <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["ideventos"]?>)">Modificar
                      <span class="fa fa-paint-brush  fa-lg"></span>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                   <a class="btn btn-block btn-danger" onClick="eliminar(<?php echo $fila["ideventos"]?>)">Eliminar
                    <span class="fa fa-trash-o fa-lg"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php }?>
  <!--fin tabla de eequipos-->
</body>
</html>

