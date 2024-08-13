<?php

  $mascota = new Mascota();
  if (isset($_POST)){
    $buscar = @$_POST['buscar'];
    $resultado = $mascota->filtrar($buscar);

  } else {

        $resultado = $mascota->listar();
  }
?>

<form method="POST" action="">
    <label>Nombre de la mascota</label><input class="form-control" type="search" name="buscar" value="<?php echo $buscar ?>">

</form>

<table class='table table-striped table-dark'>

    <thead>


        <th class='success'>Id</th>
        <th class='success'>Nombre de la Mascota</th>
        <th class='success'>Fecha de Nacimiento</th>
        <th class='success'>Tipo de Animal</th>
        <th class='success'>Raza</th>
        <th class='success'>Peso</th>
        <th class='success'>Tamaño</th>
        <th class='success'>Genero</th>
        <th class='success'>Nombre de la Persona</th>
        <th class='success'>Telefono de la Persona</th>
        <th class='success'>Correo de la Persona</th>
        <th class='success'>Editar</th>
        <th class='success'>Eliminar</th>


</thead>


    <tbody>

        <?php while($row = mysqli_fetch_assoc($resultado)): ?>

            <tr>

                <td><?php echo $row['id_mascota']; ?></td>
                <td><?php echo $row['nombre_mascota']; ?></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['tipo_animal']; ?></td>
                <td><?php echo $row['raza']; ?></td>
                <td><?php echo $row['peso']; ?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['nombre_persona']; ?></td>
                <td><?php echo $row['telefono_persona']; ?></td>
                <td><?php echo $row['correo_persona']; ?></td>
                <td><a href=?cargar=editarMascota&id_mascota=<?php echo $row['id_mascota']; ?>><center> <img src="icons/pen.png" width="25" alt="MDN" /></center></a></td>
                <td><a onClick='confirmar(<?php echo $row['id_mascota']; ?> )'><center> <img src="icons/trash.png" width="25" alt="MDN" /></i></center></a></td>


        </tr>

        <?php endwhile; ?>

    </tbody>

</table>


<script src="js/jquery.js"></script>

<script src="js/sweetalert.min.js"></script>


<script language = "javascript">
    function confirmar(id_mascota){
        var MyId = id_mascota;
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
            window.location.href='?cargar=eliminarMascota&id_mascota='+MyId;
        });
    }
</Script>