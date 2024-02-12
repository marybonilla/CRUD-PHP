

<?php include("template/header.php") ?>
        
      
        
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Actividad "BASES DE DATOS"</h1>
                    <p class="col-md-8 fs-4">
                    En esta actividad va a comenzar a trabajar con las bases de datos de MySQL, 
                    para ello se le pide que, 
                    una vez configurado el servidor para trabajar con las bases de datos:
                    </p>
                    <ul>
                        <li>Cree una base de datos para guardar los datos de unos alumnos</li>
                        <li>La base de datos tendrá una tabla con los siguientes campos:</li>
                        <ol>Nombre_alumno.</ol>
                        <ol>Apellidos_alumno</ol>
                        <ol>Dni_alumno. Será la clave primaria.</ol>
                        <ol>Teléfono_alumno.</ol>
                        <li>Rellene la tabla con varios registros.</li>
                        <li>Haga varias consultas de la tabla.</li>
                    </ul>
                    <button class="btn btn-info btn-lg" type="button">
                    <a class="nav-link" href="<?php echo $url_base; ?>modulos/alumnos/">Alumnos</a>
                    </button>
                </div>
            </div>
            

            <?php include("template/footer.php") ?>        
