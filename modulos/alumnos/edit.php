<?php 
include("../../conexion.php");

//Editar los datos
if(isset($_GET['id'])){
    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("SELECT * FROM alumnos WHERE Dni=:txtid");
    $stm->bindParam(":txtid" ,$txtid);
    $stm->execute();
    
    //recuperar los datos
    $registro=$stm->fetch(PDO::FETCH_ASSOC);
    $dni=$registro['Dni'];
    $nombre=$registro['Nombre'];
    $apellidos=$registro['Apellidos'];
    $telefono=$registro['Telefono'];
    $fecha=$registro['Fecha'];

}

// Guardar los cambios

if($_POST){
    $txtid=(isset($_POST['Dni'])?$_POST['Dni']:"");
    $dni=(isset($_POST['Dni'])?$_POST['Dni']:"");
    $nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
    $apellidos=(isset($_POST['Apellidos'])?$_POST['Apellidos']:"");
    $telefono=(isset($_POST['Telefono'])?$_POST['Telefono']:"");
    $fecha=(isset($_POST['Fecha'])?$_POST['Fecha']:"");

    $stm=$conexion->prepare("UPDATE alumnos SET dni=:Dni, nombre=:Nombre,apellidos=:Apellidos, telefono=:Telefono, fecha=:Fecha WHERE Dni=:txtid");
    $stm->bindParam(":Dni",$dni);
    $stm->bindParam(":Nombre",$nombre);
    $stm->bindParam(":Apellidos",$apellidos);
    $stm->bindParam(":Telefono",$telefono);
    $stm->bindParam(":Fecha",$fecha);
    $stm->bindParam(":txtid",$txtid); // Aquí se asigna el valor de $txtid
    $stm->execute();
    header("location:index.php");
}

?>



<?php include("../../template/header.php") ?>



<form action="" method="POST">
      
        <label for=""></label>
        <input type="text" class="form-control" name="Dni" value="<?php echo $dni  ?>" placeholder="DNI">

        <label for=""></label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $nombre  ?>" placeholder="Ingresa nombre">

        <label for=""></label>
        <input type="text" class="form-control" name="Apellidos" value="<?php echo $apellidos  ?>" placeholder="ingresa apellidos">

        <label for=""></label>
        <input type="text" class="form-control" name="Telefono" value="<?php echo $telefono  ?>" placeholder="Ingresa el teléfono">

        <label for=""></label>
        <input type="date" class="form-control" name="Fecha" value="<?php echo $fecha  ?>" placeholder="Introduce la fecha">
       <br>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary" style="margin-right: 10px;"> cancelar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </div>
      </form>

      <?php include("../../template/footer.php") ?>