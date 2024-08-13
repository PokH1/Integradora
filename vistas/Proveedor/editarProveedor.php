<?php
    $controlador = new controladorProveedor();
    if(isset($_GET['id_proveedor'])){
        $row= $controlador->consultar($_GET['id_proveedor']);
    }else{
        header('Location: index2.php');
    }
    if(isset($_POST['registrar'])){
        $r=$controlador->editar($_GET['id_proveedor'],  $_POST['nombre_farmaceutica'],   $_POST['direccion_farmaceutica'],$_POST['telefono_farmaceutica'],    $_POST['correo_farmaceutica'],    $_POST['contacto']);

        if($r){
                echo"

            <script languaje='JavaScript'>
            alert('Registro modificado');
            window.location.href='?cargar=inicioProveedor';
            </script>";
        }
    }
?>

<h1><b>Editar datos del proveedor</b></h1>

<section>
    <div class="container">
        <div>
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-primary">
            <table width="100%">
            <form action="" method="post" id="frmeditar_proveedor">

        <tr class="espacio">
            <td aling="right"> <label for="nombre_farmaceutica">nombre_farmaceutica:</label></td><td><input type="text" class="form-control" name="nombre_farmaceutica" id="nombre_farmaceutica" value=" <?php echo $row['nombre_farmaceutica']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="direccion_farmaceutica">direccion_farmaceutica:</label></td><td><input type="text" class="form-control" name="direccion_farmaceutica" id="direccion_farmaceutica" value=" <?php echo $row['direccion_farmaceutica']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="telefono_farmaceutica">telefono_farmaceutica:</label></td><td><input type="text" class="form-control" name="telefono_farmaceutica" id="telefono_farmaceutica" value="<?php echo $row['telefono_farmaceutica']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="correo_farmaceutica">correo_farmaceutica:</label></td><td><input type="text" class="form-control" name="correo_farmaceutica" id="correo_farmaceutica" value=" <?php echo $row['correo_farmaceutica']; ?>"></td>

        </tr>

        <tr class="espacio">
            <td aling="right"> <label for="contacto">Contacto:</label></td><td><input type="text" class="form-control" name="contacto" id="contacto" value=" <?php echo $row['contacto']; ?>"></td>

        </tr>


           
            
            <tr>
                <td aling="center" colspan="2"><input type="submit" name="registrar" class="btn btn-primary" value="registrar" title="registrar"></td> 
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