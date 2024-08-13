<?php
    $controlador = new controladorProveedor();
        if(isset($_GET['id_proveedor'])){

            $row=$controlador->consultar($_GET['id_proveedor']);

        } else {

            echo"
            <script languaje='JavaScript'>
            aler('Registro modificado');
            window.location.href='?cargar=inicioProveedor';
            </script>";

        }

        $controlador->eliminar($_GET['id_proveedor']);
        echo"
        <script languaje='JavaScript'>
        alert('Registro eliminado');
        window.location.href='?cargar=inicioProveedor';
       </script>";
       

?>