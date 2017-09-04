
<!DOCTYPE html>
<html>
<head>
  <link rel="import" href="../ruteo/link.html">
  <!--validacion formulario de equipos-->
  <script src="../ruteo/js/validacion_equipos.js"></script>
  <!-- fin validacion formulario de equipos -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <title>Registrar Equipos</title>
</head>
<body>
<!--menu-->
<?php include ("../assets/index.php");?><br><br><br>
<!--fin menu-->
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
      <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Nuevo Equipo</button>
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog modal-small">
            <div class="modal-content">
              <form  action="../../controller/equipos/capturar_equipos.php" method="post" id="equipos_form" enctype="multipart/form-data">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Registrar Equipos</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label class="col-lg-8 control-label">Nombre del equipo </label>  
                        <input name="txtnombre" placeholder="Nombre completo" class="form-control"  type="text">
                      </div>
                    </div>
                    <!--deportes id select-->
                    <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                     <div class="form-group">
                       <div class="row-fluid">
                         <label class="col-lg-8 control-label">Deporte ha cargo</label> 
                         <select class="selectpicker form-control" name="txtiddeportes" data-show-subtext="true" data-live-search="true">
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
               </div><!--fila-->
               <!--entrenadores id select-->
               <div class="row">
                 <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                   <div class="form-group">
                     <div class="row-fluid">
                       <label class="col-lg-8 control-label">Entrenador ha cargo</label> 
                       <select class="selectpicker form-control" name="txtidentrenadores" data-show-subtext="true" data-live-search="true">
                         <?php require("../../controller/entrenadores/consultas/consulta_entrenadores.php");
                         $con =Conectar2();
                         $sql="SELECT identrenadores,e_nombre FROM entrenadores";
                         $stmt =$con->prepare($sql);
                         $result =$stmt->execute();
                         $rows=$stmt->fetchAll(\PDO::FETCH_OBJ);
                         foreach ($rows as $row ) {?>
                         <option value="<?php print($row->identrenadores);?>"><?php print($row->e_nombre); ?></option>  
                         <?php
                       }
                       ?>              
                     </select>


                   </div>
                 </div>
               </div>
               <div class="col col-lg-6 col-xs-12 col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="col-lg-8 control-label">Escudo</label>  
                  <input class="form-control"  type="file" name="imagen" id="imagen" required="por favor">
                </div>
              </div>
            </div>
          </div>
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
  <?php include ("lista_equipos.php");?><br><br><br>
</div>
</div>
</body>
</html>




