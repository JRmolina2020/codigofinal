  
<!--menu-->
<!--fin menu-->
<!DOCTYPE html>
<html>
<head>
 <link rel="import" href="../ruteo/link.html">
 
 <!--validacion formulario de deportes-->
 <script src="../ruteo/js/validacion_deportes.js"></script>
<title>Registrar deportes</title>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
    <div class="container">
      <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
      <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
      <div class="container">
        <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo Deporte</button>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-small">
            <!-- MODAL CONTENIDO-->
            <div class="modal-content">
              <form  action="../../controller/deportes/capturar_deportes.php" method="post"  id="deportes_form">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">REGISTRAR DEPORTES</h4>
                </div>
                <!--FORMULARIO DE DEPORTES-->
                <div class="modal-body">
                  <!--ITEMS-->
                  <div class="row">
                    <div class="col col-lg-12 col-xs-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label class="col-md-4 control-label">Codigo del deporte</label>  
                        <input name="txtcodigo" placeholder="codigo" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col col-lg-12 col-xs-12 col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="col-md-4 control-label">Nombre del deporte</label>  
                      <input  name="txtnombre" placeholder="Nombre del deporte" class="form-control"  type="text">
                    </div>
                  </div>
                </div><!--fila-->
                <div class="row">
                 <div class="col col-lg-12 col-xs-12 col-md-12 col-sm-12">
                   <div class="form-group">
                     <label class="col-md-4 control-label">Estado del deporte</label> 
                     <select class="form-control" name="txtestado">
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
              <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up  fa-lg"></i> Guardar
              </button>
              <button type="button" class="btn btn-danger" 
              data-dismiss="modal"><i class="fa fa-times-circle  fa-lg"></i> Cancelar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include ("lista_deportes.php");?><br><br><br>
  </div>
  </div>
</body>
</html>














