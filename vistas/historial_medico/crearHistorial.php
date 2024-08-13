<?php

    $controlador = new controladorHistorial();
    if(isset($_POST['registrar'])){

        $r=$controlador->crear($_POST['diagnostico'],$_POST['nombre_mascota'],$_POST['tratamiento'],$_POST['nombre_vacuna'],$_POST['fecha_vacuna']);

    if($r){
        echo"

    <script>

        if(confirm(\"¿Desea realizar un nuevo registro?\")){
            window.location.href='?cargar=crearHistorial';
        } else{
        window.location.href='?cargar=inicioHistorial';

        }

    </script>";

        }
    }
?>

<h1><b>Registro de Historial medico</b></h1>

<section>

    <div class="container">

    <div>

        <div class="col-md-10 col-md-offset-2">

        <div class="panel panel-primary">


        <table width="100%">

        <form action="" method="post" id="frmempleado" enctype="multipart/form-data">
        <tr class="espacio">
        <td aling="right"> <label for="diagnostico">Diagnostico:</label></td><td><input type="text" class="form-control" name="diagnostico" id="diagnostico" placeholder="Ingresa el diagnostico" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="nombre_mascota">Nombre de Mascota:</label></td><td><input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" placeholder="Ingresa el nombre"  pattern="[a-zA-Z0-9\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo pofa')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="tratamiento">Tratamiento:</label></td><td><input type="text" class="form-control" name="tratamiento" id="tratamiento" placeholder="Ingresa el tratamiento" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="nombre_vacuna">Nombre de la vacuna:</label></td><td><input type="text" class="form-control" name="nombre_vacuna" id="nombre_vacuna" placeholder="Ingresa el nombre" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_vacuna">Fecha de la vacuna:</label></td><td><input type="date" class="form-control" name="fecha_vacuna" id="fecha_vacuna" placeholder="Ingresa la fecha" autofocus required></td>

        </tr>

        <td aling="center" colspan="2"><input type="submit" name="registrar" class="btn btn-primary" value="Registrar" title="Registar"></td>
            </tr>
        </form>
        </table>
        <!-- termina la tabla -->
        </div>
        </div>
            </div>
        </div>
    </div>
</section>