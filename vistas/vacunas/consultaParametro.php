  <form method="POST" action="">
     <label>Vacunas</label><input type="search" name="buscar">
</form>
 <table class='table table-striped'>
    <thead>

     <th class='success'>Id de la vacuna</th>
     <th class='success'>Nombre</th>
     <th class='success'>Fecha de expiración</th>
     <th class='success'>lote</th>
     <th class='success'>Fecha de elaboración</th>
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
                <td><a href=?cargar=editar&id=<?php echo $row['id_vacuna']; ?>>Editar</a></td>
                <td><a onClick='confirmar(<?php echo $row['id_vacuna']; ?>)'>Eliminar</a></td>

            <tr>
        <?php endwhile; ?>
    </tbody>
 </table>

<script src="js/jquery.js"></script>

 <script languaje = "javascript">
            function confirmar(id_vacuna){
                confirmar=confirm("Realmente deseas eliminar el registro?");
                if(confirmar)
                {

                    window.location.href='?cargar=eliminar&id_vacuna='+id_vacuna;
                    alert('Registro eliminado...');

                }
                else {
                    document.location="index.php";
                }
            }
</script>