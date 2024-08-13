<?php
    $controlador = new controladorVacuna();
    if(isset($_GET['id_vacuna'])){
        $row= $controlador->consultar($_GET['id_vacuna']);
    }else{
        header('Location: index2.php');
    }
    if(isset($_POST['registrar'])){
        $r=$controlador->editar($_GET['id_vacuna'],$_POST['nombre'],$_POST['fecha_expiracion'],$_POST['lote'],$_POST['fecha_elaboracion'],$_POST['cantidad'],$_POST['tipo_vacuna'],$_POST['descripcion']);

        if($r){
                echo"

            <script languaje='JavaScript'>
            alert('Registro modificado');
            window.location.href='?cargar=inicioVacuna';
            </script>";
        }
    }
?>

<h1><b>Editar datos de la Vacuna</b></h1>

<section>
    <div class="container">
        <div>
        <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-primary">
            <table width="100%">
            <form action="" method="post" id="frmeditar_Vacuna">

        <tr class="espacio">
            <td aling="right"> <label for="nombre">Nombre de la vacuna:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" Value="<?php echo $row['nombre']; ?>" pattern="[a-zA-Z0-9'\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellene el campo con una vacuna valida')" oninput="this.setCustomValidity('')" ></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_expiracion">Fecha de expiracion de la vacuna:</label></td><td><input type="date" class="form-control" name="fecha_expiracion" id="fecha_expiracion" Value="<?php echo $row['fecha_expiracion']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="lote">Lote:</label></td><td><input type="text" class="form-control" name="lote" id="lote" Value="<?php echo $row['lote']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_elaboracion">Fecha de elaboración de la vacuna:</label></td><td><input type="date" class="form-control" name="fecha_elaboracion" id="fecha_elaboracion" Value="<?php echo $row['fecha_elaboracion']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="cantidad">Cantidad:</label></td><td><input type="number" class="form-control" name="cantidad" id="cantidad" Value="<?php echo $row['cantidad']; ?>" placeholder="Ingresa la cantidad" pattern="[0-9\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan letras')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="tipo_vacuna">Tipo de vacuna:</label></td><td><input type="text" class="form-control" name="tipo_vacuna" id="tipo_vacuna" Value="<?php echo $row['tipo_vacuna']; ?>" placeholder="Ingresa el tipo" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan números y caracteres especiales')" oninput="this.setCustomValidity('')"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="descripcion">Descripcion:</label></td><td><input type="text" class="form-control" name="descripcion" id="descripcion" Value="<?php echo $row['descripcion']; ?>"></td>

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