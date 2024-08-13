<?php
    $controlador = new controladorHistorial();
    if(isset($_GET['id_historial'])){
        $row= $controlador->consultar($_GET['id_historial']);
    }else{
        header('Location: index.php');
    }
    if(isset($_POST['registrar'])){
        $r=$controlador->editar($_GET['id_historial'],$_POST['diagnostico'],$_POST['nombre_mascota'],$_POST['tratamiento'],$_POST['nombre_vacuna'],$_POST['fecha_vacuna']);

        if($r){
                echo"

            <script languaje='JavaScript'>
            alert('Registro modificado');
            window.location.href='?cargar=inicioHistorial';
            </script>";
        }
    }
?>

<h1><b>Editar datos del Historial</b></h1>

<section>
    <div class="container">
        <div>
        <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-primary">
            <table width="100%">
            <form action="" method="post" id="frmeditar_Historial">

        <tr class="espacio">
            <td aling="right"> <label for="diagnostico">Diagnostico:</label></td><td><input type="text" class="form-control" name="diagnostico" id="diagnostico" Value="<?php echo $row['diagnostico']; ?>" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="nombre_mascota">Nombre de la mascota:</label></td><td><input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" Value="<?php echo $row['nombre_mascota']; ?>" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="tratamiento">Tratamiento:</label></td><td><input type="tratamiento" class="form-control" name="tratamiento" id="tratamiento" Value="<?php echo $row['tratamiento']; ?>" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="nombre_vacuna">Nombre de la vacuna:</label></td><td><input type="text" class="form-control" name="nombre_vacuna" id="nombre_vacuna" Value="<?php echo $row['nombre_vacuna']; ?>" pattern="[a-zA-Z0-9,\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_vacuna">Fecha de la vacuna:</label></td><td><input type="date" class="form-control" name="fecha_vacuna" id="fecha_vacuna" Value="<?php echo $row['fecha_vacuna']; ?>"></td>

        </tr>

        <td aling="center" colspan="2"><input type="submit" name="registrar" class="btn btn-primary" value="Registrar" title="Registrar"></td> 
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