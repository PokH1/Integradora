<?php

    //$controlador = new controladorEstudiante();
  $vacuna = new Vacuna();
  if (isset($_POST)){
    $buscar = @$_POST['buscar'];
    $resultado = $vacuna->filtrar($buscar);

  } else {

        $resultado = $vacuna->listar();
  }
?>

<form method="POST" action="">
    <label>Vacunas</label><input class="form-control" type="search" name="buscar" value="<?php echo $buscar ?>">

</form>

<table class='table table-striped table-dark'>

    <thead>


        <th class='success'>Id</th>
        <th class='success'>Nombre</th>
        <th class='success'>Fecha de expiración</th>
        <th class='success'>Lote</th>
        <th class='success'>Fecha de elaboracion</th>
        <th class='success'>Cantidad</th>
        <th class='success'>Tipo de vacuna</th>
        <th class='success'>Descripción</th>
        <th class='success'>Editar</th>
        <th class='success'>Eliminar</th>

    </thead>
    
    <tbody>

        <?php while($row = mysqli_fetch_assoc($resultado)): ?>

            <tr>
                <td><?php echo $row['id_vacuna']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['fecha_expiracion']; ?></td>
                <td><?php echo $row['lote']; ?></td>
                <td><?php echo $row['fecha_elaboracion']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>
                <td><?php echo $row['tipo_vacuna']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><a href=?cargar=editarVacuna&id_vacuna=<?php echo $row['id_vacuna']; ?>><center> <img src="icons/pen.png" width="25" alt="MDN" /></center></a></td>
                <td><a onClick='confirmar(<?php echo $row['id_vacuna']; ?> )'><center><img src="icons/trash.png" width="25" alt="MDN" /></center></a></td>
            </tr>

        <?php endwhile; ?>

    </tbody>

</table>


<script src="js/jquery.js"></script>

<script src="js/sweetalert.min.js"></script>


<script language = "javascript">
    function confirmar(id_vacuna){
        var MyId = id_vacuna;
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
            window.location.href='?cargar=eliminarVacuna&id_vacuna='+MyId;
        });
    }
</Script>