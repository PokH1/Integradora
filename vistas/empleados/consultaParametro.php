  <form method="POST" action="">
     <label>Nombre del empleado</label><input type="search" name="buscar">
</form>
 <table class='table table-striped'>
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
                
                <td><a href=?cargar=editar&id=<?php echo $row['id_empleado']; ?>>Editar</a></td>
                <td><a onClick='confirmar(<?php echo $row['id_empleado']; ?>)'>Eliminar</a></td>

            <tr>
        <?php endwhile; ?>
    </tbody>
 </table>

<script src="js/jquery.js"></script>

 <script languaje = "javascript">
            function confirmar(id_empleado){
                confirmar=confirm("Realmente deseas eliminar el registro?");
                if(confirmar)
                {

                    window.location.href='?cargar=eliminar&id_empleado='+id_empleado;
                    alert('Registro eliminado...');

                }
                else {
                    document.location="index.php";
                }
            }
</script>