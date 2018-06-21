<?php 

require_once "../negocio/Cliente.php";

?>

<html>
<head></head>
<body>

  <h2>INSERTAR NUEVO CLIENTE</h2>

<form action="insertarcliente.php" method="post">
    <table border='3'>
        <tr><td>Nombre: </td><td><input type="text" name="tbNombre"></td></tr>
        <tr><td>D.N.I.: </td><td><input type="text" name="tbDni"></td></tr>
        <tr><td>Email: </td><td><input type="text" name="tbEmail"></td></tr>
        <tr><td>Direccion: </td><td><input type="text" name="tbDireccion"></td></tr>
        <tr><td>Tipo: </td><td><input type="text" name="tbTipo"></td></tr>        
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>

<?php

if (isset($_POST['btInsertar'])) {
           
        
   $objgCliente = new Cliente(null,$_POST['tbNombre'], $_POST['tbDni'], $_POST['tbEmail'], $_POST['tbDireccion'],$_POST['tbTipo']);
   
   $resultado = $objgCliente -> insertar();
   
   if ($resultado)
       echo "Registro Insertado";
   else
       echo "Error en la Inserción";   
}

?>

</body>
</html>