<?php

    //$controlador = new controladorEstudiante();
  $proveedor = new Proveedor();
  if (isset($_POST)){
    $buscar = @$_POST['buscar'];
    $resultado = $proveedor->filtrar($buscar);

  } else {

        $resultado = $proveedor->listar();
  }
?>

<form method="POST" action="">
    <label>Nombre de proveedores</label><input class="form-control" type="search" name="buscar" value="<?php echo $buscar ?>">

</form>

<table class='table table-striped table-dark'>

    <thead>


        <th class='success'>ID</th>
        <th class='success'>Nombre Farmaceutica</th>
        <th class='success'>Direccion Farmaceutica</th>
        <th class='success'>Telefono Farmaceutica</th>
        <th class='success'>Correo Farmaceutica</th>
        <th class='success'>Contacto</th>
        <th class='success'>Editar</th>
        <th class='success'>Eliminar</th>


</thead>


    <tbody>

        <?php while($row = mysqli_fetch_assoc($resultado)): ?>

            <tr>

                <td><?php echo $row['id_proveedor']; ?></td>
                <td><?php echo $row['nombre_farmaceutica']; ?></td>
                <td><?php echo $row['direccion_farmaceutica']; ?></td>
                <td><?php echo $row['telefono_farmaceutica']; ?></td>
                <td><?php echo $row['correo_farmaceutica']; ?></td>
                <td><?php echo $row['contacto']; ?></td>
                <td><a href=?cargar=editarProveedor&id_proveedor=<?php echo $row['id_proveedor']; ?>><center><img src="icons/pen.png" width="25" alt="MDN" /></center></a></td>
                <td><a onClick='confirmar(<?php echo $row['id_proveedor']; ?> )'><center><img src="icons/trash.png" width="25" alt="MDN" /></center></a></td>


        </tr>

        <?php endwhile; ?>

    </tbody>

</table>


<script src="js/jquery.js"></script>

<script src="js/sweetalert.min.js"></script>


<script languaje = "javascript">
    function confirmar(id_proveedor){
        var MyId = id_proveedor;
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
            window.location.href='?cargar=eliminarProveedor&id_proveedor='+MyId;
        });
    }
</Script>