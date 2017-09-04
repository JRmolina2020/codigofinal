
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
  window.location="../../controller/usuarios/capturar_usuarios.php?p="+cod+"&funcion=eliminar";
  } else {
    swal("CANCELADO", "VOLVE AL INICIO", "error");
  }
});
      
}










    