<?php

    $controlador = new controladorMascota();
    if(isset($_POST['registrar'])){

        $r=$controlador->crear($_POST['nombre_mascota'],$_POST['fecha_nacimiento'],$_POST['tipo_animal'],$_POST['raza'],$_POST['peso'],$_POST['size'],$_POST['genero'],$_POST['nombre_persona'],$_POST['telefono_persona'],$_POST['correo_persona']);

    if($r){
        echo"

    <script>

        if(confirm(\"¿Desea realizar un nuevo registro?\")){
            window.location.href='?cargar=crearMascota';
        } else{
        window.location.href='?cargar=inicioMascota';

        }

    </script>";

        }
    }
?>

<h1><b>Registro de Mascotas</b></h1>

<section>

    <div class="container">

    <div>

        <div class="col-md-10 col-md-offset-2">

        <div class="panel panel-primary">


        <table width="130%">

        <form action="" method="post" id="frmmascota" enctype="multipart/form-data">
        <tr class="espacio">
        <td aling="right"> <label for="nombre_mascota">Nombre de la Mascota:</label></td><td><input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" placeholder="Ingresa el nombre de tu mascota" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Solo letras')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="fecha_nacimiento">Fecha de Nacimiento:</label></td><td><input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"  autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="tipo_animal">Tipo de animal:</label></td><td><input type="text" class="form-control" name="tipo_animal" id="tipo_animal" placeholder="ingrese que tipo de animal ingresará" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Solo letras')" oninput="this.setCustomValidity('')" autofocus required></td>
                
                
        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="raza">Raza:</label></td><td><input type="text" class="form-control" name="raza" id="raza" placeholder="Ingresa la raza del animal" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Solo letras')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="peso">Peso:</label></td><td><input type="text" class="form-control" name="peso" id="peso" placeholder="Ingrese el peso en kg" pattern="[0-9kg\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Escribir solo cantidades en kg')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="size">Tamaño:</label></td><td><input type="text" class="form-control" name="size" id="size" placeholder="Ingrese el tamaño en centimetros" pattern="[0-9m\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Escribir solo cantidades en cm')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="genero">Genero del animal:</label></td><td><select class="form-control" name="genero" id="genero">
                <option value="MACHO">MACHO</option>
                <option value="HEMBRA">HEMBRA</option>
                </select>
            </td>
        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="nombre_persona">Nombre de la Persona:</label></td><td><input type="text" class="form-control" name="nombre_persona" id="nombre_persona" placeholder="Ingresa el nombre de la persona" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\u00C0-\u017F ]{1,254}" oninvalid="this.setCustomValidity('Solo letras')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="telefono_persona">Telefono de la Persona:</label></td><td><input type="text" class="form-control" name="telefono_persona" id="telefono_persona" placeholder="Ingresa el telefono de la persona" pattern="[0-9\u00C0-\u017F ]{1o}" oninvalid="this.setCustomValidity('Ingrese solo números y diez dijitos')" oninput="this.setCustomValidity('')" autofocus required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="correo_persona">Correo de la Persona:</label></td><td><input type="email" class="form-control" name="correo_persona" id="correo_persona" placeholder="Ingresa el correo de la persona" pattern="[a-z@.\u00C0-\u017F ]{1,254}" autofocus required></td>

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