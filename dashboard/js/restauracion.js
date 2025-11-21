var botones=document.getElementsByClassName("btnBorrar")
for(var i=0;i<botones.length;i++){
    botones[i].onclick=(evt)=>{
        var btn= evt.target
        var id= btn.getAttribute('data-id')
        //alert("ID: "+id)
        Swal.fire({
            title: "Eliminar",
            text: "¿Deseas borrar el producto y los datos relacionados?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2D2E2E",
            cancelButtonColor: "#716969",
            confirmButtonText: "Si, hazlo!"
          }).then((result) => {
            if (result.isConfirmed) {
                location.href="./php/remove-proyect.php?id="+id
            }
          });
    }
}

var botonesEditar = document.getElementsByClassName("btnEditar");

for (var i = 0; i < botonesEditar.length; i++) {
  botonesEditar[i].onclick = (evt) => {
    
    var btn = evt.target.closest("button");
   
    // Obtener los valores de los atributos data- del botón
    var n = btn.getAttribute("data-n");
    var marca = btn.getAttribute("data-m");
    var des = btn.getAttribute("data-d");
    var pre = btn.getAttribute("data-p");
    var c = btn.getAttribute("data-c");
    var id = btn.getAttribute("data-id");
   
    // Asignar los valores a los campos del modal de edición
    document.getElementById("nombreEdit").value = n;
    document.getElementById("marcaEdit").value = marca;
    document.getElementById("desEdit").value = des;
    document.getElementById("precioEdit").value = pre;
    document.getElementById("cantidadEdit").value = c;
    document.getElementById("idEdit").value = id;
  }
}
