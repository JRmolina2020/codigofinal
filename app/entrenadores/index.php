  
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 <!--validacion formulario de entrenadores-->
 <script src="../ruteo/js/validacion_entrenadore.js"></script>
 <!--fin validacion de entrenadores-->
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
 <title>Registrar Entrenador</title>
</style>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
  <div class="container">
    <div class="row">
     <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
     <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
       <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Nuevo Entrenador
      </button>
      <!-- MODAL -->
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- MODAL CONTENIDO-->
          <div class="modal-content">
            <form  action="../../controller/entrenadores/capturar_entrenadores.php" method="post" id="entrenadores_form" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">REGISTRAR ENTRENADOR</h4>
              </div>
              <!--FORMULARIO DE ENTRENADORES-->
              <div class="modal-body">
                <!--ITEMS-->
                <div class="row">
                  <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label class="col-md-4 control-label">Cedula</label>  
                      <input name="txtcodigo" placeholder="Cedula" class="form-control"  type="text">
                    </div>
                  </div>
                  <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label class="col-md-4 control-label">Nombre </label>  
                      <input  name="txtnombre" placeholder="Nombre completo" class="form-control"  type="text">
                    </div>
                  </div>
                  <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label class="col-md-4 control-label">Apellido </label>  
                      <input  name="txtapellido" placeholder="Apellido" class="form-control"  type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                 <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                   <div class="form-group">
                     <label class="col-md-4 control-label">Sexo</label> 
                     <select class="form-control" name="txtsexo">
                      <option>H</option>
                      <option>M</option>
                      <option>Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Telefono</label>  
                    <input  name="txttelefono" placeholder="Telefono" class="form-control"  type="text">
                  </div>
                </div>

                <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Direccion</label>  
                    <input  name="txtdireccion" placeholder="Direccion" class="form-control"  type="text">
                  </div>
                </div>
              </div><!--fila-->
              <div class="row">
               <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
                 <div class="form-group">
                   <div class="row-fluid">
                     <label class="col-md-4 control-label">Cargo</label> 
                     <select class="selectpicker form-control" name="txtdeporte" data-show-subtext="true" data-live-search="true">
                       <?php require("../../controller/deportes/consultas/consulta_deportes.php");
                       $con =Conectar();
                       $sql="SELECT id,d_nombre FROM deportes";
                       $stmt =$con->prepare($sql);
                       $result =$stmt->execute();
                       $rows=$stmt->fetchAll(\PDO::FETCH_OBJ);
                       foreach ($rows as $row ) {?>
                       <option value="<?php print($row->id);?>"><?php print($row->d_nombre); ?></option>  
                       <?php
                     }
                     ?>                      
                   </select>
                 </div>
               </div>
             </div>
             <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
               <div class="form-group">
                 <label class="col-md-4 control-label">Estado</label> 
                 <select class="form-control" name="txtestado">
                  <option>Activo</option>
                  <option>Inactivo</option>
                </select>
              </div>
            </div>
            <div class="col col-lg-4 col-xs-12 col-md-4 col-sm-12">
              <div class="form-group">
                <label class="col-md-4 control-label">Imagen</label>  
                <input class="form-control"  type="file" name="imagen" id="imagen" required>
              </div>
            </div>
          </div><!--fila-->
          <!--FIM ITEMS-->
        </div>
        <!--FIN FORMULARIO ENTRENADORES-->
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
<?php include ("lista_entrenadores.php");?><br><br><br>
</div>
</div>
</body>
</html>














