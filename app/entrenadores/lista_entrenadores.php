  <html lang="en">
  <head>
    <?php include ('../../controller/entrenadores/lista_entrenadores.php ');?>
    <script src="../ruteo/js/ruteo_entrenadores.js"></script>
    <script src="../ruteo/js/busqueda_lista_equipo.js"></script>
    <link rel="stylesheet" type="text/css" href="../ruteo/css/sweetalert.css">
    <script src="../ruteo/js/sweetalert.min.js"></script>
  </head>
  <body>
   <br><br><br>
   <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
      <input type="search" class="form-control" id="input-search" placeholder="Busqueda de Entrenadores">
    </div>
  </div>
  <br>
  <?php foreach($data as $fila){?>
    <div class="searchable-container container-fluid">
     <div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img class="img-responsive" height="" width="" alt="Error al cargar" src="data:image/jpg;base64,<?php echo base64_encode($fila['e_imagen']);?>">
              </figure><br>
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["identrenadores"]?>)">Modificar
                  <span class="fa fa-paint-brush fa-lg"></span>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <a class="btn btn-block btn-danger" onClick="eliminar(<?php echo $fila["identrenadores"]?>)">Eliminar
                <span class="fa fa-trash-o fa-lg"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <ul class="list-group">
            <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-cc"></i><?php echo $fila["e_codigo"]?></li>
              </div>
                <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-user"></i> <?php echo $fila["e_nombre"]?></li>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-user"></i> <?php echo $fila["e_apellido"]?></li>
              </div>
               <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-mars"></i> <?php echo $fila["e_sexo"]?></li>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-8">
               <li class="list-group-item"><i class="fa fa-tty"></i> <?php echo $fila["e_telefono"]?></li>
             </div>
               <div class="col-lg-6 col-xs-12 col-sm-8">
               <li class="list-group-item"><i class="fa fa-map-marker"></i> <?php echo $fila["e_direccion"]?></li>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-8">
              <li class="list-group-item"><i class="fa fa-suitcase"></i> <?php echo $fila["d_nombre"]?></li>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-8">
             <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $fila["e_ingreso"]?></li>
           </div>
         </di>
       </ul>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<?php }?>
</body>
</html>