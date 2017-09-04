<?php
require "../../model/controlDB.php";
$cod=$_GET["p"];
$obj=new controlDB();
$data=$obj->consultar("SELECT * FROM deportes where id=$cod");
?>
<!--menu-->
<!--fin menu-->
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de deportes-->
 <script src="../ruteo/js/validacion_deportes2.js"></script>
 <title>Modificar deportes</title>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
      <div class="col-lg-10 col-sm-6 col-xs-11 col-md-8">
        <!-- MODAL -->
        <div class="modal-dialog modal-small">
          <!-- MODAL CONTENIDO-->
          <div class="modal-content">
            <form  action="../../controller/deportes/capturar_deportes.php" method="post"  id="deportes_form">
              <?php foreach($data as $fila){?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modificar Deportes</h4>
              </div>
              <!--FORMULARIO DE DEPORTES-->
              <div class="modal-body">
                <!--ITEMS-->
                <div class="row">
                 <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Codigo del deporte</label>  
                    <input  name="txtnombre" placeholder="Nombre del deporte" class="form-control"  
                    type="text" value="<?php echo $fila["d_codigo"]; ?>" disabled>
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Nombre del deporte</label>  
                    <input  name="txtnombre" placeholder="Nombre del deporte" class="form-control"  
                    type="text" value="<?php echo $fila["d_nombre"]; ?>">
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                 <div class="form-group">
                   <label class="col-lg-12 control-label">Estado del deporte</label> 
                   <select class="form-control" name="txtestado" value="<?php echo $fila["d_estado"]; ?>">
                    <option>Activo</option>
                    <option>Inactivo</option>
                  </select>
                </div>
              </div>
            </div><!--fila-->
            <!--FIM ITEMS-->
          </div>
          <!--FIN FORMULARIO DEPORTES-->
          <!--FOOTER-->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-thumbs-up  fa-lg"></i> Modificar
            </button>
            <a type="button" href="index.php" class="btn btn-danger">
            <i class="fa fa-close  fa-lg"></i> Cancelar</a>
              <?php }?>
              <input type="hidden" name="funcion" value="modificar">
              <input type="hidden" name="cod" value="<?php echo $fila["id"]; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>














