<?php
require "../../model/controlDB.php";
$cod=$_GET["p"];
$obj=new controlDB();
$data=$obj->consultar("SELECT * FROM usuario where id=$cod");
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de deportes-->
 <script src="../ruteo/js/validacion_usuario.js"></script>
 <title>Modificar Usuarios</title>
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
          <form  action="../../controller/usuarios/capturar_usuarios.php" method="post"  id="usuario_form" enctype="multipart/form-data">
            <?php foreach($data as $fila){?>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">MODIFICAR USUARIOS</h4>
            </div>
            <!--FORMULARIO DE ENTRENADORES-->
            <div class="modal-body">
              <!--ITEMS-->
              <div class="row">
              <center>
              <img alt="User Pic" width="150" height="150" src="data:image/jpg;base64,<?php echo base64_encode($fila['u_imagen']);?>">
              </center>
              </div><!--fila--><br>
              <!--opciones modificables-->
              <div class="row">
                <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Nombre </label>  
                    <input  name="txtnombre" placeholder="Nombre" class="form-control"  
                    type="text" value="<?php echo $fila["u_nombre"]; ?>" disabled>
                  </div>
                </div>
                <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Nombre usario</label>  
                    <input  name="txtcorreo" placeholder="Nombre nuevo" class="form-control"  
                    type="text" value="<?php echo $fila["u_correo"]; ?>">
                  </div>
                </div>
              </div><!--fila-->
              <div class="row">
                <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                 <div class="form-group">
                   <label class="col-lg-12 control-label">Tipo de usuario</label> 
                   <select class="form-control" name="txtrol" value="<?php echo $fila["rol_user"]; ?>">
                    <option>Administrador</option>
                    <option>Secretaria</option>
                  </select>
                </div>
              </div>
              <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="col-md-4 control-label">Contraseña</label>  
                  <input  name="txtcontrasena" placeholder="Nueva contraseña" class="form-control"  
                  type="text" value="<?php echo $fila["u_contrasena"]; ?>">
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
              <input type="hidden" name="cod" value="<?php echo $fila["id"]; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>














