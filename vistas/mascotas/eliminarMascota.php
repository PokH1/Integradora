<?php
    $controlador = new controladorMascota();
        if(isset($_GET['id_masccota'])){

            $row=$controlador->consultar($_GET['id_mascota']);

        } else {

            echo"
            <script language='JavaScript'>
            aler('Registro modificado');
            window.location.href='?cargar=inicioMascota';
            </script>";

        }

        $controlador->eliminar($_GET['id_mascota']);
        echo"
        <script language='JavaScript'>
        alert('Registro eliminado');
        window.location.href='?cargar=inicioMascota';
       </script>";
       

?>