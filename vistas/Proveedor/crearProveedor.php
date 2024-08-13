<?php

    $controlador = new controladorProveedor();
    if(isset($_POST['registrar'])){

        $r=$controlador->crear($_POST['nombre_farmaceutica'],$_POST['direccion_farmaceutica'],$_POST['telefono_farmaceutica'],$_POST['correo_farmaceutica'],$_POST['contacto']);

    if($r){
        echo"

    <script>

        if(confirm(\"¿Desea realizar un nuevo registro?\")){
            window.location.href='?cargar=crearProveedor';
        } else{
        window.location.href='?cargar=inicioProveedor';

        }

    </script>";

        }
    }
?>

<h1><b>Registro de proveedores</b></h1>

<section>

    <div class="container">

    <div>

        <div class="col-md-10 col-md-offset-2">

        <div class="panel panel-primary">


        <table width="100%">

        <form action="" method="post" id="frmproveedor" enctype="multipart/form-data">
        <tr class="espacio">
            <td aling="right"> <label for="nombre_farmaceutica">Nombre de la farmaceutica:</label></td><td><input type="text" class="form-control" name="nombre_farmaceutica" id="nombre_farmaceutica" placeholder="Ingresa el nombre" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="direccion_farmaceutica">Direccion de la farmaceutica:</label></td><td><input type="text" class="form-control" name="direccion_farmaceutica" id="direccion_farmaceutica" placeholder="Ingresa la direccion" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="telefono_farmaceutica">Telefono de la farmaceutica:</label></td><td><input type="text" class="form-control" name="telefono_farmaceutica" id="telefono_farmaceutica" placeholder="Ingresa el telefono" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="correo_farmaceutica">Correo de la farmaceutica:</label></td><td><input type="email" class="form-control" name="correo_farmaceutica" id="correo_farmaceutica" placeholder="Ingresa el correo" autofocus required></td>

        </tr>
        
        <tr class="espacio">
            <td aling="right"> <label for="contacto">Contacto:</label></td><td><input type="text" class="form-control" name="contacto" id="contacto" placeholder="Ingresa el contacto" autofocus required></td>

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