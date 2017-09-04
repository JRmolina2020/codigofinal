<?php
require "../../model/controlDB.php";
$cod=$_GET["p"];
$obj=new controlDB();
$data=$obj->consultar("SELECT   *
  FROM equipos INNER JOIN deportes
  ON equipos.id_deportes = deportes.id
  INNER JOIN entrenadores 
  ON entrenadores.identrenadores = equipos.id_entrenadores where idequipo=$cod");
  ?>
  <!DOCTYPE html>
  <html>
  <head>
   <link rel="import" href="../ruteo/link.html">
   <!--validacion formulario de equipos-->
   <script src="../ruteo/js/validacion_equipos.js"></script>
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
     <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
     <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
      <div class="modal-dialog modal-small">
        <div class="modal-content">
          <form  action="../../controller/equipos/capturar_equipos.php" method="post"  id="equipos_form">
            <?php foreach($data as $fila){?>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">MODIFICAR EQUIPOS</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <center>
               <img alt="User Pic" width="150" height="150" src="data:image/jpg;base64,<?php echo base64_encode($fila['eq_imagen']);?>">
                </center>
              </div>
              <div class="row">
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Nombre del equipo</label>  
                    <input  name="txtnombre" placeholder="Nombre del equipo" class="form-control"  
                    type="text" value="<?php echo $fila["eq_nombre"]; ?>">
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                  <div class="form-group">
                    <label class="col-lg-12 control-label">Categoria</label>  
                    <input  name="txtiddeportes" placeholder="Categoria" class="form-control"  
                    type="text" value="<?php echo $fila["d_nombre"]; ?>" disabled>
                  </div>
                </div>
                <div class="col col-lg-4 col-xs-12 col-md-12 col-sm-10">
                 <div class="form-group">
                   <div class="row-fluid">
                     <label class="col-lg-12 control-label">Entrenador</label> 
                     <select class="selectpicker form-control" value="<?php echo $fila["e_nombre"]; ?>" name="txtidentrenadores" data-show-subtext="true" data-live-search="true">
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
            <input type="hidden" name="cod" value="<?php echo $fila["idequipo"]; ?>">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>














