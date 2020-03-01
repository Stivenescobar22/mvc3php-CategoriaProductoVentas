
 <?php require_once 'header.php';?>

   <h1>Menu Categorias</h1>
   <br>
 
   <form name="form1" method="POST" action="./?accion=guardarCategoria">
    
      <p>Nombre: <input type="text" name="txtnombre"></p>
      <p><input type="submit" name="btnguardarcategoria" value="Guardar Categoria"></p>

   </form>
   <br>

    <table>
       <thead>
         
        <th>Id</th>
        <th>Nombre</th>
        <th>Modificar</th>

       </thead>
        <tbody>

          <?php foreach($consulta as $dato): ?>
           <tr>
             
           <td><?php echo $dato['id']; ?></td>
           <td><?php echo $dato['nombre']; ?></td>
           <td><a href="./?accion=guardarCambiosCategoria=<?php echo $dato['id']; ?>">Modificar</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>


    </table>


   <br>
   <br>
   <br>

   <a href="index.php">Volver</a>

 <?php require_once 'footer.php'; ?>