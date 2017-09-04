  
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de deportes-->
 <script src="../ruteo/js/validacion_usuario.js"></script>
 <title>Registrar Usuarios</title>
</head>
<body>
<!--menu-->
<?php include ("../assets/index.php");?><br><br><br>
<!--fin menu-->
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
      <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Nuevo Usuario</button>
        <!-- MODAL -->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog modal-small">
            <!-- MODAL CONTENIDO-->
            <div class="modal-content">
              <form  action="../../controller/usuarios/capturar_usuarios.php" method="post"  id="usuario_form" enctype="multipart/form-data">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">REGISTRAR USUARIOS</h4>
                </div>
                <!--FORMULARIO DE DEPORTES-->
                <div class="modal-body">
                  <!--ITEMS-->
                  <div class="row">
                    <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label class="col-lg-6 control-label">Nombre </label>  
                        <input name="txtnombre" placeholder="Nombre completo" class="form-control"  type="text">
                      </div>
                    </div>
                    <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label class="col-lg-6 control-label">Correo</label>  
                        <input  name="txtcorreo" placeholder="Gmail/Hotmail" class="form-control"  type="text">
                      </div>
                    </div>
                  </div><!--fila-->
                  <div class="row">
                   <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="col-lg-6 control-label">Contaseña</label>  
                      <input  name="txtcontrasena" placeholder="*********" class="form-control"  type="password">
                    </div>
                  </div>
                  <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                   <div class="form-group">
                     <label class="col-md-4 control-label">Tipo</label> 
                     <select class="form-control" name="txtrol">
                      <option>Administrador</option>
                      <option>Secretaria</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="col-lg-6 control-label">Imagen</label>  
                      <input class="form-control"  type="file" name="imagen" id="imagen" required>
                    </div>
                  </div>
                </div><!--fila-->
                <!--FIM ITEMS-->
              </div>
              <!--FIN FORMULARIO DEPORTES-->
              <!--FOOTER-->
              <div class="modal-footer">
               <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up  fa-lg"></i> Guardar
               </button>
               <button type="button" class="btn btn-danger" 
               data-dismiss="modal"><i class="fa fa-times-circle  fa-lg"></i> Cancelar</button>
             </form>
           </div>
         </div>
       </div>
     </div>
     <?php include ("lista_usuarios.php");?><br><br><br>
   </div>
 </div>
</body>
</html>




