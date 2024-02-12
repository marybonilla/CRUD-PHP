<?php 

if($_POST){
    $dni=(isset($_POST['Dni'])?$_POST['Dni']:"");
    $nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
    $apellidos=(isset($_POST['Apellidos'])?$_POST['Apellidos']:"");
    $telefono=(isset($_POST['Telefono'])?$_POST['Telefono']:"");
    $fecha=(isset($_POST['Fecha'])?$_POST['Fecha']:"");

    $stm=$conexion->prepare("INSERT INTO alumnos(Dni, Nombre, Apellidos, Telefono,Fecha) VALUES(:Dni,:Nombre,:Apellidos, :Telefono, :Fecha)");
    $stm->bindParam(":Dni",$dni);
    $stm->bindParam(":Nombre",$nombre);
    $stm->bindParam(":Apellidos",$apellidos);
    $stm->bindParam(":Telefono",$telefono);
    $stm->bindParam(":Fecha",$fecha);
    $stm->execute();
    header("location:index.php");
}

?>



<!-- Modal Create-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        <label for="Dni"></label>
        <input type="text" class="form-control" name="Dni" placeholder="DNI">

        <label for="Nombre"></label>
        <input type="text" class="form-control" name="Nombre" placeholder="Ingresa nombre">

        <label for="Apellidos"></label>
        <input type="text" class="form-control" name="Apellidos" placeholder="ingresa apellidos">

        <label for="Teléfono"></label>
        <input type="text" class="form-control" name="Telefono" placeholder="Ingresa el teléfono">

        <label for="Fecha"></label>
        <input type="date" class="form-control" name="Fecha" placeholder="Introduce la fecha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>