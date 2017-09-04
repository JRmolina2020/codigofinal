  <html lang="en">
  <head>
    <?php include ('../../controller/deportistas/lista_deportistas.php ');?>
    <script src="../ruteo/js/ruteo_deportista.js"></script>
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
                <img class="img-responsive" alt="Error al cargar" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_depor']);?>">
              </figure><br>
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <a class="btn btn-block btn-primary" onClick="modificar(<?php echo $fila["iddeportista"]?>)">Modificar
                  <span class="fa fa-paint-brush fa-lg"></span>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <a class="btn btn-block btn-danger" onClick="eliminar(<?php echo $fila["iddeportista"]?>)">Eliminar
                <span class="fa fa-trash-o fa-lg"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <ul class="list-group">
            <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-cc"></i> Ni: <?php echo $fila["ni"]?></li>
              </div>
                <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-user"></i> NOMBRE : <?php echo $fila["nombre"]?></li>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-user"></i> APELLIDO :<?php echo $fila["apellido"]?></li>
              </div>
               <div class="col-lg-6 col-xs-12 col-sm-8">
                <li class="list-group-item"><i class="fa fa-mars"></i> <?php echo $fila["sexo"]?></li>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-8">
               <li class="list-group-item"><i class="fa fa-tty"></i> <?php echo $fila["edad"]?></li>
             </div>
               <div class="col-lg-6 col-xs-12 col-sm-8">
               <li class="list-group-item"><i class="fa fa-map-marker"></i> <?php echo $fila["direccion"]?></li>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-8">
              <li class="list-group-item"><i class="fa fa-suitcase"></i> <?php echo $fila["telefono"]?></li>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-8">
             <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $fila["carrera"]?></li>
           </div>
           </div>
           <div class="row">
             <div class="col-lg-6 col-xs-12 col-sm-8">
              <li class="list-group-item"><i class="fa fa-suitcase"></i> <?php echo $fila["semestre"]?></li>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-8">
             <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $fila["eq_nombre"]?></li>
           </div>
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