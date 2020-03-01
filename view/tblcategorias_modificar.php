<?php require_once 'header.php';?>

    <?php foreach($consulta as $dato): ?>
        <h1>Modificar información</h1>
        <br>
        <form name="form1" method="post" action="./?accion=guardarCambiosCategoria">
            <p>Id: <input type="text" name="txtid" value="<?php echo $_REQUEST['id']; ?>" readonly></p>
            <p>Nombre: <input type="text" name="txtnombre" value="<?php echo $dato['nombre']; ?>"></p>
            <p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
        </form>
    <?php endforeach; ?>

<?php require_once 'footer.php'; ?>    