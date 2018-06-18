<?php 

require "../negocio/Empleado.php";
require "../negocio/Cliente.php";    
?>

<html>
<head></head>
<body>
    
    <h1>BORRAR / MODIFICAR EMPLEADOS</h1>

<?php
    $Empleado = new Empleado();
    $arrayEmpleados = $Empleado -> Listar();
?>

<form action="borrarempleados.php" method="post">
    Empleados:
    <select name="slEmpleados">
        <option value=""></option>  
    <?php foreach ($arrayEmpleados as $Empleado2) {?>
               <option value="<?php echo $Empleado2->getIDEmpleados(); ?>"><?php echo $Empleado2->getNombre(); ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
   if (isset($_POST['btMostrar'])) {
       $Empleados2 = $Empleado -> buscarPorIDEmpleados($_POST['slEmpleados']);
?>

<br><br>
        <table border='3'>
            <tr><td>Empleados: </td><td><input type="text" name="tbIDEmpleado" value=<?php echo $Empleado2->getIDEmpleados(); ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $Empleado2->getNombre(); ?>></td></tr>
            <tr><td>D.N.I: </td><td><input type="text" name="tbDni" value=<?php echo $Empleado2->getDni(); ?>></td></tr>
            <tr><td>DIRECCION: </td><td><input type="text" name="tbDireccion" value=<?php echo $Empleados->getDireccion(); ?>></td></tr>
            <tr><td>TELEFONO: </td><td><input type="text" name="tbTelefono" value=<?php echo $Empleados->getTelefono(); ?>></td></tr>
            <tr><td>CARGO: </td><td><input type="text" name="tbCargo" value=<?php echo $Empleados->getCargo(); ?>></td></tr>            
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $Empleado2 = new Empleado ($_POST['tbNombre'], $_POST['tbDni'], $_POST['tbDireccion'], $_POST['tbTelefono'], $_POST['tbCargo']);

        if (isset($_POST['btModificar'])) {

            $consulta = $Empleado2 -> Modificar(); 

            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $Empleados2 -> Eliminar();
            if ($consulta)
                echo "Registro Elininado";
            else
                echo "Error en la Eliminacion: ";
        }        
       
    }
  
?> 
</form>

<hr>

<h2>BORRAR / MODIFICAR CLIENTES</h2>

<?php
    $Cliente = new Cliente();
    $arrayClientes = $Cliente -> Listar();
?>

<form action="presentacion3.php" method="post">
    Clientes:
          <select name="slClientes">
            <option value=""></option>  
        <?php foreach ($arrayClientes as $Cliente2) {?>
                 <option value="<?php echo $Cliente2->getIDCliente(); ?>"><?php echo $Cliente2->getNombre(); 
                 ?></option>  
        <?php } ?>
        </select>
    <br><br>
    <input type="submit" value="Mostrar" name="btMostrar">

<?php
   if (isset($_POST['btMostrar'])) {
       $Cliente2 = $Cliente -> buscarPorIDClientes($_POST['slClientes']);
?>

<br><br>
        <table border='4'>
            <tr><td>Clientes: </td><td><input type="text" name="tbIDClientes" value=<?php echo $Cliente2->getIDCliente(); ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $Cliente2->getNombre(); ?>></td></tr>
            <tr><td>D.N.I: </td><td><input type="text" name="tbDni" value=<?php echo $Cliente2->getDni(); ?>></td></tr>
            <tr><td>EMAIL: </td><td><input type="text" name="tbEmail" value=<?php echo $Cliente2->getEmail(); ?>></td></tr>
            <tr><td>DIRECCION: </td><td><input type="text" name="tbDireccion" value=<?php echo $Cliente2->getDireccion(); ?>></td></tr>
            <tr><td>TIPO: </td><td><input type="text" name="tbTipo" value=<?php echo $Cliente2->getTipo(); ?>></td></tr>            
        </table>

        <br>
        <input type="submit" value="MODIFICAR CLIENTE" name="btModificar">
        <input type="submit" value="BORRAR CLIENTE" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $Cliente2 = new Cliente ($_POST['tbNombre'], $_POST['tbDni'], $_POST['tbEmail'], $_POST['tbDireccion'], $_POST['tbTipo']);

        if (isset($_POST['btModificar'])) {

            $consulta = $Cliente2 -> Modificar(); 

            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $Cliente2 -> Eliminar();
            if ($consulta)
                echo "Registro Elininado";
            else
                echo "Error en la Eliminacion: ";
        }        
       
    }
  
?> 
</form>

</body>
</html>       