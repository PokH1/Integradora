  <form method="POST" action="">
     <label>Historial medico</label><input type="search" name="buscar">
</form>
 <table class='table table-striped'>
    <thead>

     <th class='success'>Id de historial medico</th>
     <th class='success'>Diagnostico</th>
     <th class='success'>Nombre de la mascota</th>
     <th class='success'>Tratamiento</th>
     <th class='success'>Nombre de la vacuna</th>
     <th class='success'>Fecha de la vacuna aplicada</th>
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
                <td><a href=?cargar=editar&id=<?php echo $row['id_historial']; ?>>Editar</a></td>
                <td><a onClick='confirmar(<?php echo $row['id_historial']; ?>)'>Eliminar</a></td>

            <tr>
        <?php endwhile; ?>
    </tbody>
 </table>

<script src="js/jquery.js"></script>

 <script languaje = "javascript">
            function confirmar(id_historial){
                confirmar=confirm("Realmente deseas eliminar el registro?");
                if(confirmar)
                {

                    window.location.href='?cargar=eliminar&id_historial='+id_historial;
                    alert('Registro eliminado...');

                }
                else {
                    document.location="index.php";
                }
            }
</script>