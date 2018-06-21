<?php 
require "../negocio/Empleado.php";
require "../negocio/Cliente.php";
?>

<html>
<head></head>
<body>
    
<h1>INSERTAR NUEVO EMPLEADO</h1>

<form action="insertarempleados.php" method="post">
    <table border='2'>
        <tr><td>Nombre: </td><td><input type="text" name="tbNombre"> </td></tr>
        <tr><td>D.N.I.: </td><td><input type="text" name="tbDni"></td></tr>
        <tr><td>Direccion: </td><td><input type="text" name="tbDireccion"></td></tr>
        <tr><td>Telefono: </td><td><input type="text" name="tbTelefono"></td></tr>
        <tr><td>Cargo: </td><td><input type="text" name="tbCargo"></td></tr>        
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertarEmpleado">
</form>

<?php

if (isset($_POST['btInsertarEmpleado'])) {
           
        
   $objgEmpleados = new Empleado(null, $_POST['tbNombre'], $_POST['tbDni'], $_POST['tbDireccion'], $_POST['tbTelefono'],$_POST['tbCargo']);
   
   $resultado = $objgEmpleados -> insertar();

   if ($resultado)
       echo "Registro Insertado";
   else
       echo "Error en la Inserción";   
}

?>

</body>
</html>
