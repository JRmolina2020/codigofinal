<?php
require "../../model/controlDB.php";
$cod=$_GET["p"];
$obj=new controlDB();
$data=$obj->consultar("SELECT * FROM eventos  where ideventos=$cod");
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de equipos-->
 <script src="../ruteo/js/validacion_eventos.js"></script>
 <!-- fin validacion de formulario de equipos -->
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
 <title>Modificar equipos</title>
 <style type="text/css">
 </style>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
  <div class="container">
    <div class="row">
     <div class="col-lg-2 col-sm-4 col-xs-1 col-md-3"></div>
     <div class="col-lg-10 col-sm-6 col-xs-11 col-md-8">
      <div class="modal-dialog modal-small">
        <div class="modal-content">
          <form  action="../../controller/eventos/capturar_eventos.php" method="post"  id="eventos_form">
            <?php foreach($data as $fila){?>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modificar eventos</h4>
            </div>
            <div class="modal-body">
              <div class="row">
              <center>
                <img alt="User Pic" width="150" height="150" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_eve']);?>">
                </center>
              </div><br>
              <div class="row">
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Nombre del evento</label>  
                    <input  name="txtnombre" placeholder="Nombre del evento" class="form-control"  
                    type="text" value="<?php echo $fila["nombre_eve"]; ?>">
                  </div>
                </div>
                 <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Direccion</label>  
                    <input  name="txtlugar" placeholder="Nombre del evento" class="form-control"  
                    type="text" value="<?php echo $fila["lugar_eve"]; ?>">
                  </div>
                  </div>
                  <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha</label>
                    <div class="col-10">
                      <input class="form-control" type="datetime-local" value="2017-06-19T13:45:00" name="txtfeho">
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-thumbs-up  fa-lg"></i> Modificar
              </button>
              <a type="button" href="index.php" class="btn btn-danger">
                <i class="fa fa-close  fa-lg"></i> Cancelar</a>
                <?php }?>
                <input type="hidden" name="funcion" value="modificar">
                <input type="hidden" name="cod" value="<?php echo $fila["ideventos"]; ?>">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>














