  <form method="POST" action="">
     <label>Nombre de la mascota</label><input type="search" name="buscar">
</form>
 <table class='table table-striped'>
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
                <td><a href=?cargar=editar&id=<?php echo $row['id_mascota']; ?>>Editar</a></td>
                <td><a onClick='confirmar(<?php echo $row['id_mascota']; ?>)'>Eliminar</a></td>

            <tr>
        <?php endwhile; ?>
    </tbody>
 </table>

<script src="js/jquery.js"></script>

 <script language = "javascript">
            function confirmar(id_mascota){
                confirmar=confirm("Realmente deseas eliminar el registro?");
                if(confirmar)
                {

                    window.location.href='?cargar=eliminar&id_mascota='+id_mascota;
                    alert('Registro eliminado...');

                }
                else {
                    document.location="index.php";
                }
            }
</script>