  <form method="POST" action="">
     <label>proveedores</label><input type="search" name="buscar">
</form>
 <table class='table table-striped'>
    <thead>

     <th class='success'>Id_proveedor</th>
     <th class='success'>nombre_farmaceutica</th>
     <th class='success'>direccion_farmaceutica</th>
     <th class='success'>telefono_farmaceutica</th>
     <th class='success'>correo_farmaceutica</th>
     <th class='success'>contacto</th>
     


    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $row['id_proveedor']; ?></td>
                <td><?php echo $row['nombre_farmaceutica']; ?></td>
                <td><?php echo $row['direccion_farmaceutica']; ?></td>
                <td><?php echo $row['telefono_farmaceutica']; ?></td>
                <td><?php echo $row['correo_faramaceutica']; ?></td>
                <td><?php echo $row['contacto']; ?></td>
                <td><a href=?cargar=editar&id=<?php echo $row['id_proveedor']; ?>>Editar</a></td>
                <td><a onClick='confirmar(<?php echo $row['id_proveedor']; ?>)'>Eliminar</a></td>

            <tr>
        <?php endwhile; ?>
    </tbody>
 </table>

<script src="js/jquery.js"></script>

 <script languaje = "javascript">
            function confirmar(id_proveedor){
                confirmar=confirm("Realmente deseas eliminar el registro?");
                if(confirmar)
                {

                    window.location.href='?cargar=eliminar&id_proveedor='+id_proveedor;
                    alert('Registro eliminado...');

                }
                else {
                    document.location="index.php";
                }
            }
</script>