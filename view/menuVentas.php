<?php require_once 'header.php';?>



<h1>Menu Ventas</h1>
<br>

<form name="form2" method="POST" action="./?accion=guardarVenta">

   <p>Producto:
        <select name="selproducto">
           <option value="">Seleccione...</option>
           <?php foreach($consultaProductos as $datos): ?>

              <option value="<?php echo $datos['id'] ?>"><?php echo $datos['nombre'] ?></option>

           <?php endforeach; ?>
        </select>

   </p> 
   <p>Cantidad: <input type="text" name="txtcantidad"></p>
   <p><input type="submit" name="btnguardarproducto" value="Guardar Venta"></p>

</form>
<br>

<table>
       <thead>
         
        <th>Id</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        
        <th>Eliminar</th>

       </thead>
        <tbody>

          <?php foreach($consultaProductos as $dato): ?>
           <tr>
             
           <td><?php echo $dato['id']; ?></td>
           <td><?php echo $dato['nombre']; ?></td>
           <td><?php echo $dato['cantidad']; ?></td>
           <td><?php echo $dato['precio']; ?></td>
           
           
           <td><a href="./?accion=EliminarVenta&id=<?php echo $dato['id']; ?>">Eliminar</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>


    </table>

<br>
<br>
<br>

<a href="index.php">Volver</a>

<?php require_once 'footer.php'; ?>