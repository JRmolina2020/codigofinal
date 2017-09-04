
<!DOCTYPE html>
<html>
<head>
  <link rel="import" href="../ruteo/link.html">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <!--validacion formulario de Eventos-->
  <script src="../ruteo/js/validacion_eventos.js"></script>
  <link rel="stylesheet" type="text/css" href="../ruteo/css/bootstrap-datetimepicker.min">
  <title>Registrar Eventos</title>
</head>
<body>
<!--menu-->
<?php include ("../assets/index.php");?><br><br><br>
<!--fin menu-->
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
      <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
        <div id="content">
          <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#evento" data-toggle="tab">Gestion Evento</a></li>
          </ul>
          <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="evento"><br><br><br>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo Evento</button>
              <!-- MODAL -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-small">
                  <!-- MODAL CONTENIDO-->
                  <div class="modal-content">
                    <form  action="../../controller/eventos/capturar_eventos.php" method="post"  id="eventos_form" enctype="multipart/form-data">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">GESTION DE EVENTOS</h4>
                      </div>
                      <!--FORMULARIO DE EVENTOS-->
                      <div class="modal-body">
                        <!--ITEMS-->
                        <div class="row">
                          <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                            <div class="form-group">
                              <label class="col-lg-12 control-label">Codigo</label>  
                              <input name="txtcodigo" placeholder="codigo del evento" class="form-control"  type="text">
                            </div>
                          </div>
                          <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                            <div class="form-group">
                              <label class="col-lg-12 control-label">Nombre</label>  
                              <input  name="txtnombre" placeholder="Nombre del evento" class="form-control"  type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                         
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha</label>
                            <div class="col-10">
                            <input class="form-control" type="datetime-local" value="2017-06-19T13:45:00" name="txtfeho">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                          <div class="form-group">
                            <label class="col-lg-12 control-label">Direccion</label>  
                            <input  name="txtlugar" placeholder="Direccion del evento" class="form-control"  type="text">
                          </div>
                        </div>
                      </div><!--fila-->
                      <div class="row">
                        <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                         <div class="form-group">
                           <div class="row-fluid">
                             <label class="col-lg-8 control-label">Categoria</label> 
                             <select class="selectpicker form-control" name="txtcategoria" data-show-subtext="true" data-live-search="true">
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
                     <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label class="col-lg-12 control-label">Imagen</label>  
                        <input class="form-control"  type="file" name="imagen" id="imagen" required>
                      </div>
                    </div>
                  </div>
                  <!--FIM ITEMS-->
                </div>
                <!--FIN FORMULARIO EVENTOS-->
                <!--FOOTER-->
                <div class="modal-footer">
                 <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up  fa-lg"></i> Guardar
                 </button>
                 <button type="button" class="btn btn-danger" 
                 data-dismiss="modal"><i class="fa fa-times-circle  fa-lg"></i> Cancelar</button>
               </div>
             </form>
           </div>
         </div>
       </div>
       <?php include ("lista_eventos.php");?><br><br><br>
     </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>














