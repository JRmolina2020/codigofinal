<?php
require "../../model/controlDB.php";
$cod=$_GET["p"];
$obj=new controlDB();
$data=$obj->consultar("SELECT * FROM entrenadores where identrenadores=$cod");
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de deportes-->
 <script src="../ruteo/js/validacion_entrenadore.js"></script>
 <title>Modificar entrenadores</title>
 <style type="text/css">
 </style>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
  <div class="container">
    <div class="row">
     <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
     <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
      <!-- MODAL -->
      <div class="modal-dialog modal-small">
        <!-- MODAL CONTENIDO-->
        <div class="modal-content">
          <form  action="../../controller/entrenadores/capturar_entrenadores.php" method="post"  id="entrenadores_form">
            <?php foreach($data as $fila){?>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">MODIFICAR ENTRENADORES</h4>
            </div>
            <!--FORMULARIO DE ENTRENADORES-->
            <div class="modal-body">
              <!--ITEMS-->
              <div class="row">
                <div class="col">
                </div>
                <div class="col-lg-4">
                  <img alt="User Pic" width="150" height="150" src="data:image/jpg;base64,<?php echo base64_encode($fila['e_imagen']);?>">
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-6">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Cedula</label>  
                    <input  name="txtcodigo" placeholder="Cedula" class="form-control"  
                    type="text" value="<?php echo $fila["e_codigo"]; ?>">
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-6">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>  
                    <input  name="txtnombre" placeholder="Nombre" class="form-control"  
                    type="text" value="<?php echo $fila["e_nombre"]; ?>" disabled>
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Apellido</label>  
                    <input  name="txtapellido" placeholder="Nombre" class="form-control"  
                    type="text" value="<?php echo $fila["e_apellido"]; ?>" disabled>
                  </div>
                </div>
              </div><!--fila--><br>
              <!--opciones modificables-->
              <div class="row">
               <div class="col col-lg-12 col-xs-12 col-md-12 col-sm-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Telefono</label>  
                  <input  name="txttelefono" placeholder="Telefono" class="form-control"  
                  type="text" value="<?php echo $fila["e_telefono"]; ?>">
                </div>
              </div>
            </div><!--fila-->
            <div class="row">
             <div class="col col-lg-12 col-xs-12 col-md-12 col-sm-6">
              <div class="form-group">
                <label class="col-md-4 control-label">Direccion</label>  
                <input  name="txtdireccion" placeholder="Direccion" class="form-control"  
                type="text" value="<?php echo $fila["e_direccion"]; ?>">
              </div>
            </div>
          </div><!--fila-->
          <!--fin opciones mdofiicables-->
          <!--FIM ITEMS-->
        </div>
        <!--FIN FORMULARIO ENTRENADORES-->
        <!--FOOTER-->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-thumbs-up  fa-lg"></i> Modificar
          </button>
          <a type="button" href="index.php" class="btn btn-danger">
            <i class="fa fa-close  fa-lg"></i> Cancelar</a>
            <?php }?>
            <input type="hidden" name="funcion" value="modificar">
            <input type="hidden" name="cod" value="<?php echo $fila["identrenadores"]; ?>">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>














