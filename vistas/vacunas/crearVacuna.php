<?php

    $controlador = new controladorVacuna();
    if(isset($_POST['registrar'])){

        $r=$controlador->crear($_POST['nombre'],$_POST['fecha_expiracion'],$_POST['lote'],$_POST['fecha_elaboracion'],$_POST['cantidad'],$_POST['tipo_vacuna'],$_POST['descripcion']);

    if($r){
        echo"

    <script>

        if(confirm(\"¿Desea realizar un nuevo registro?\")){
            window.location.href='?cargar=crearVacuna';
        } else{
        window.location.href='?cargar=inicioVacuna';

        }

    </script>";

        }
    }
?>

<h1><b>Registro de Vacunas</b></h1>

<section>

    <div class="container">

    <div>

        <div class="col-md-10 col-md-offset-2">

        <div class="panel panel-primary">


        <table width="100%">

        <form action="" method="post" id="frmvacunas" enctype="multipart/form-data">
        <tr class="espacio">
        <td aling="right"> <label for="nombre">Nombe de la vacuna:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa la vacuna" pattern="[a-zA-Z0-9'\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Rellene el campo con una vacuna valida')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_expiracion">Fecha de expiracion:</label></td><td><input type="date" class="form-control" name="fecha_expiracion" id="fecha_expiracion" placholder="Ingresa la fecha de expiración"  autofocus required required min="<?php $hoy = date('Y-m-d'); echo $hoy; ?>"td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="lote">Lote:</label></td><td><input type="text" class="form-control" name="lote" id="lote" placeholder="Ingresa el lote"  autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_elaboracion">Fecha de elaboración:</label></td><td><input type="date" class="form-control" name="fecha_elaboracion" id="fecha_elaboracion" placeholder="Ingresa la fecha de elaboración" autofocus required required min="<?php $hoy = date('Y-m-d'); echo $hoy; ?>"td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="cantidad">Cantidad:</label></td><td><input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresa la cantidad" pattern="[0-9\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan letras')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="tipo_vacuna">Tipo de vacuna:</label></td><td><input type="text" class="form-control" name="tipo_vacuna" id="tipo_vacuna" placeholder="Ingresa el tipo" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('No se aceptan números y caracteres especiales')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="descripcion">Descripción:</label></td><td><input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresa la descripción" autofocus required></td>

        </tr>

        <td aling="center" colspan="2"><input type="submit" onclick="ValidarFechas()" name="registrar" class="btn btn-primary" value="Registrar" title="Registar"></td>
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
<script>
    function ValidarFechas()
    {
        var fecha_inicial = document.getElementById("fecha_elaboracion").value;
        var fecha_final = document.getElementById("fecha_expiracion").value;

        if(Date.parse(fecha_final) <= Date.parse(fecha_inicial)){
            alert("la fecha de elaboración debe ser menor a la fecha de caducidad");
        }
    }
</script>