function modificar(cod){
  swal({
  title: "NOTIFICACION",
  text: "ESTA SEGURO DE MODIFICAR EL REGISTRO",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true

}, function () {
  setTimeout(function () {
    window.location="view.php?p="+cod;
  }, 2000);
});
  }
function eliminar(cod)
{
   swal({
  title: "NOTIFICACION",
  text: "Desea eliminar este registro?!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: " Eliminar",
   cancelButtonColor: "#000",
  cancelButtonText: " Cancelar",

  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
  window.location="../../controller/deportistas/capturar_deportistas.php?p="+cod+"&funcion=eliminar";
  } else {
    swal("CANCELADO", "VOLVE AL INICIO", "error");
  }
});
      
}










    