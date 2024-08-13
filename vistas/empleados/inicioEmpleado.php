<?php

    //$controlador = new controladorEstudiante();
  $empleado = new Empleado();
  if (isset($_POST)){
    $buscar = @$_POST['buscar'];
    $resultado = $empleado->filtrar($buscar);

  } else {

        $resultado = $empleado->listar();
  }
?>

<form method="POST" action="">
    <label>Nombre del Empleado</label><input class="form-control" type="search" name="buscar" value="<?php echo $buscar ?>">

</form>

<table class='table table-striped table-dark'>

    <thead>


    <th class='success'>Id</th>
     <th class='success'>Nombre</th>
     <th class='success'>Direccion</th>
     <th class='success'>Fecha de nacimiento</th>
     <th class='success'>Lugar de nacimiento</th>
     <th class='success'>Puesto</th>
     <th class='success'>Sueldo</th>
     <th class='success'>Telefono</th>
     <th class='success'>Correo</th>
     <th class='success'>Editar</th>
     <th class='success'>Eliminar</th>



</thead>


    <tbody>

        <?php while($row = mysqli_fetch_assoc($resultado)): ?>

            <tr>

                <td><?php echo $row['id_empleado']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['lugar_nacimiento']; ?></td>
                <td><?php echo $row['puesto']; ?></td>
                <td><?php echo $row['sueldo']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><a href=?cargar=editarEmpleado&id_empleado=<?php echo $row['id_empleado']; ?>><center> <img src="icons/pen.png" width="25" alt="MDN" /></center></a></td>
                <td><a onClick='confirmar(<?php echo $row['id_empleado']; ?> )'><center> <img src="icons/trash.png" width="25" alt="MDN" /></center></a></td>


        </tr>

        <?php endwhile; ?>

    </tbody>

</table>


<script src="js/jquery.js"></script>

<script src="js/sweetalert.min.js"></script>


<script languaje = "javascript">
    function confirmar(id_empleado){
        var MyId = id_empleado;
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
            window.location.href='?cargar=eliminarEmpleado&id_empleado='+MyId;
        });
    }
</Script>