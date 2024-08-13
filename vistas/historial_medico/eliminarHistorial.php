<?php
    $controlador = new controladorHistorial();
        if(isset($_GET['id_historial'])){

            $row=$controlador->consultar($_GET['id_historial']);

        } else {

            echo"
            <script languaje='JavaScript'>
            aler('Registro modificado');
            window.location.href='?cargar=inicioHistorial';
            </script>";

        }

        $controlador->eliminar($_GET['id_historial']);
        echo"
        <script languaje='JavaScript'>
        alert('Registro eliminado');
        window.location.href='?cargar=inicioHistorial';
       </script>";
       

?>