<?php

    $controlador = new controladorEmpleado();
    if(isset($_POST['registrar'])){

        $r=$controlador->crear($_POST['nombre'],$_POST['direccion'],$_POST['fecha_nacimiento'],$_POST['lugar_nacimiento'],$_POST['puesto'],$_POST['sueldo'],$_POST['telefono'],$_POST['correo']);

    if($r){
        echo"

    <script>

        if(confirm(\"¿Desea realizar un nuevo registro?\")){
            window.location.href='?cargar=crearEmpleado';
        } else{
        window.location.href='?cargar=inicioEmpleado';

        }

    </script>";

        }
    }
?>

<h1><b>Registro de Empleados</b></h1>

<section>

    <div class="container">

    <div>

        <div class="col-md-10 col-md-offset-2">

        <div class="panel panel-primary">


        <table width="100%">

        <form action="" method="post" id="frmempleado" enctype="multipart/form-data">

        <tr class="espacio">
        <td aling="right"> <label for="nombre">Nombre:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa un nombre" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan numeros, ni caracteres especiales')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="direccion">Direccion:</label></td><td><input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresa una Direccion" pattern="[a-zA-Z0-9,#-\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellena este campo')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_nacimiento">Fecha de nacimiento:</label></td><td><input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Ingresa la fecha de nacimiento" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="lugar_nacimiento">Lugar de Nacimiento:</label></td><td><input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="Ingresa donde nacio" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan numeros')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>
        <tr class="espacio">
            <td aling="right"> <label for="puesto">Puesto:</label></td><td><input type="text" class="form-control" name="puesto" id="puesto" placeholder="Ingresa su puesto" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan numeros y caracteres especiales')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>
        <tr class="espacio">
            <td aling="right"> <label for="sueldo">Sueldo:</label></td><td><input type="text" class="form-control" name="sueldo" id="sueldo" placeholder="Ingresa el sueldo" pattern="[0-9\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Ingrese solo numeros')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="telefono">Telefono:</label></td><td><input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa el Telefono" pattern="[0-9\u00C0-\u017F ]{10}" oninvalid="this.setCustomValidity('Ingrese solo numeros y diez dijitos')" oninput="this.setCustomValidity('')" autofocus required></td>
        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="correo">Correo:</label></td><td><input type="email" class="form-control" name="correo" id="correo" placeholder="Ingresa el correo" pattern="[a-z0-9@.\u00C0-\u017F ]{2,254}" oninvalid="this.setCustomValidity('Rellene con un email valido')" oninput="this.setCustomValidity('')" autofocus required></td>

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