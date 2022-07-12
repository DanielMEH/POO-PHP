function error(id){
    swal({
      title: "Estas seguro de eliminar este dato",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        swal("El dato fue eliminado", {
          icon: "success",
        });
      } else {
        swal("Se ha canselado");
      }
    });

}