<?php
    $controlador = new controladorMascota();
    if(isset($_GET['id_mascota'])){
        $row= $controlador->consultar($_GET['id_mascota']);
    }else{
        header('Location: index.php');
    }
    if(isset($_POST['registrar'])){
        $r= $controlador->editar($_GET['id_mascota'],  $_POST['nombre_mascota'],    $_POST['fecha_nacimiento'],    $_POST['tipo_animal'],    $_POST['raza'],  $_POST['peso'],   $_POST['size'],  $_POST['genero'],$_POST['nombre_persona'],  $_POST['telefono_persona'],  $_POST['correo_persona']);

        if($r){
                echo"

            <script languaje='JavaScript'>
            alert('Registro modificado');
            window.location.href='?cargar=inicioMascota';
            </script>";
        }
    }
?>

<h1><b>Editar datos de la Mascota</b></h1>

<section>
    <div class="container">
        <div>
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-primary">
            <table width="100%">
            <form action="" method="post" id="frmeditar_mascota">

            <tr class="espacio">
        <td aling="right"> <label for="nombre_mascota">Nombre de la Mascota:</label></td><td><input type="text" class="form-control" name="nombre_mascota" id="nombre_mascota" value="<?php echo $row['nombre_mascota']; ?>"  pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" required></td>

        </tr>


        <tr class="espacio">
            <td aling="right"> <label for="fecha_nacimiento">Fecha de Nacimiento:</label></td><td><input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" ></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="tipo_animal">Tipo de animal:</label></td><td><input type="text" class="form-control" name="tipo animal" id="tipo_animal" value="<?php echo $row['tipo_animal']; ?>" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" required></td>

        </tr>
        
            <tr class="espacio">
        <td aling="right"> <label for="raza">Raza:</label></td><td><input type="text" class="form-control" name="raza" id="raza" value="<?php echo $row['raza']; ?>" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="peso">Peso:</label></td><td><input type="text" class="form-control" name="peso" id="peso" value="<?php echo $row['peso']; ?>" pattern="[0-9kg\u00C0-\u017F ]{1,254}" required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="size">Tamaño:</label></td><td><input type="text" class="form-control" name="size" id="size" value="<?php echo $row['size']; ?>" pattern="[0-9m\u00C0-\u017F ]{1,254}" required></td>

        </tr>
        
        <tr class="espacio">
            <td aling="right"> <label for="genero">Genero del animal:</label></td><td><select class="form-control" name="genero" id="genero">
                <option value="<?php echo $row['genero'];?>"><?php echo $row['genero'];?></option>
                <?php if ($row['genero'] == 'MACHO')

                {

                    echo"<option value='HEMBRA'>HEMBRA</option>";

                }

                else if ($row['genero']=='HEMBRA')

                {

                    echo"<option value='MACHO'>MACHO</option>";

                }

                ?>
            </select>
            </td>

            <tr class="espacio">
        <td aling="right"> <label for="nombre_persona">Nombre de la Persona:</label></td><td><input type="text" class="form-control" name="nombre_persona" id="nombre_persona" value="<?php echo $row['nombre_persona']; ?>" pattern="[a-zA-Z\u00C0-\u017F ]{1,254}" required></td>

        </tr>

            <tr class="espacio">
        <td aling="right"> <label for="telefono_persona">Telefono de la Persona:</label></td><td><input type="text" class="form-control" name="telefono_persona" id="telefono_persona" value="<?php echo $row['telefono_persona']; ?>" pattern="[0-9\u00C0-\u017F ]{1,254}" required></td>

        </tr>

        <tr class="espacio">
        <td aling="right"> <label for="correo_persona">Correo de la Persona:</label></td><td><input type="email" class="form-control" name="correo_persona" id="correo_persona" value="<?php echo $row['correo_persona']; ?>" pattern="[a-z@.\u00C0-\u017F ]{1,254}" required></td>

        </tr>    
            <tr>
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