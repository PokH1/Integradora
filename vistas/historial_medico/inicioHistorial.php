<?php

    //$controlador = new controladorEstudiante();
  $historial = new Historial();
  if (isset($_POST)){
    $buscar = @$_POST['buscar'];
    $resultado = $historial->filtrar($buscar);

  } else {

        $resultado = $historial->listar();
  }
?>

<form method="POST" action="">
    <label>Historial medico</label><input class="form-control" type="search" name="buscar" value="<?php echo $buscar ?>">

</form>

<table class='table table-striped table-dark'>

    <thead>


        <th class='success'>Id</th>
        <th class='success'>Diagnostico</th>
        <th class='success'>Nombre de la mascota</th>
        <th class='success'>Tratamiento</th>
        <th class='success'>Nombre de la vacuna</th>
        <th class='success'>Fecha de la vacuna</th>
        <th class='success'>Editar</th>
        <th class='success'>Eliminar</th>

    </thead>


    <tbody>

        <?php while($row = mysqli_fetch_assoc($resultado)): ?>

            <tr>

                <td><?php echo $row['id_historial']; ?></td>
                <td><?php echo $row['diagnostico']; ?></td>
                <td><?php echo $row['nombre_mascota']; ?></td>
                <td><?php echo $row['tratamiento']; ?></td>
                <td><?php echo $row['nombre_vacuna']; ?></td>
                <td><?php echo $row['fecha_vacuna']; ?></td>
                <td><a href=?cargar=editarHistorial&id_historial=<?php echo $row['id_historial']; ?>><center> <img src="icons/pen.png" width="25" alt="MDN" /></center></a></td>
                <td><a onClick='confirmar(<?php echo $row['id_historial']; ?> )'><center> <img src="icons/trash.png" width="25" alt="MDN" /></center></a></td>

            </tr>

        <?php endwhile; ?>

    </tbody>

</table>


<script src="js/jquery.js"></script>

<script src="js/sweetalert.min.js"></script>


<script languaje = "javascript">
    function confirmar(id_historial){
        var MyId = id_historial;
        swal({
            title:"¿Estas seguro de eliminar el registro?",
            text: "Ya no podrás recuperarlo",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sí, borrar",
            closeOnConfirm: false
        },
        function(){
            window.location.href='?cargar=eliminarHistorial&id_historial='+MyId;
        });
    }
</Script>