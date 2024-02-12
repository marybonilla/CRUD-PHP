
<?php 
include("../../conexion.php");

//traer la base de datos alumnos
$stm=$conexion->prepare("SELECT * FROM alumnos");
$stm->execute();
// para recuperar los datos
$alumnos=$stm->fetchAll(PDO::FETCH_ASSOC);

// para eliminar un alumno por el DNI

if(isset($_GET['id'])){
    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("DELETE FROM alumnos WHERE Dni=:txtid");
    $stm->bindParam(":txtid", $txtid);
    $stm->execute();
    header("location:index.php");

}

?>


<?php include("../../template/header.php") ?>

<div
    class="table-responsive"
>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
  Nuevo Alumno
</button>
<br>
<br>
    <table
        class="table"
    >
        <thead class="table table-dark">
            <tr>
                <th scope="col">Dni</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Fecha</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($alumnos as $alumno){ ?>
                 <tr class="">
                <td scope="row"> <?php echo $alumno ['Dni']; ?></td>
                <td><?php echo $alumno ['Nombre']; ?></td>
                <td><?php echo $alumno ['Apellidos']; ?></td>
                <td><?php echo $alumno ['Telefono']; ?></td>
                <td><?php echo $alumno ['Fecha']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $alumno ['Dni']; ?>" class="btn btn-warning"> Editar</a>
                    <a href="index.php?id=<?php echo $alumno ['Dni']; ?>" class="btn btn-danger"> Eliminar</a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include("create.php") ?>











<?php include("../../template/footer.php") ?>