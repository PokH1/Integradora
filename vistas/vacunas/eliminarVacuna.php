<?php
    $controlador = new controladorVacuna();
        if(isset($_GET['id_vacuna'])){

            $row=$controlador->consultar($_GET['id_vacuna']);

        } else {

            echo"
            <script languaje='JavaScript'>
            aler('Registro modificado');
            window.location.href='?cargar=inicioVacuna';
            </script>";

        }

        $controlador->eliminar($_GET['id_vacuna']);
        echo"
        <script languaje='JavaScript'>
        alert('Registro eliminado');
        window.location.href='?cargar=inicioVacuna';
       </script>";
       

?>