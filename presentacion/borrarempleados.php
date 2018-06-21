<?php 

require_once "../negocio/Empleado.php";

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
    <?php foreach ($arrayEmpleados as $Emp) {?>
               <option value="<?php echo $Emp->getIDEmpleado(); ?>"><?php echo $Emp->getNombre(); ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
   if (isset($_POST['btMostrar'])) {
       $EmpMostrar = $Empleado -> buscarPorIDEmpleado($_POST['slEmpleados']);
?>

<br><br>
        <table border='3'>
            <tr><td>Empleados: </td><td><input type="text" name="tbIDEmpleado" value=<?php echo $EmpMostrar->getIDEmpleado(); ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $EmpMostrar->getNombre(); ?>></td></tr>
            <tr><td>D.N.I: </td><td><input type="text" name="tbDni" value=<?php echo $EmpMostrar->getDni(); ?>></td></tr>
            <tr><td>DIRECCION: </td><td><input type="text" name="tbDireccion" value=<?php echo $EmpMostrar->getDireccion(); ?>></td></tr>
            <tr><td>TELEFONO: </td><td><input type="text" name="tbTelefono" value=<?php echo $EmpMostrar->getTelefono(); ?>></td></tr>
            <tr><td>CARGO: </td><td><input type="text" name="tbCargo" value=<?php echo $EmpMostrar->getCargo(); ?>></td></tr>            
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $EmpModificar = new Empleado ($_POST['tbIDEmpleado'], $_POST['tbNombre'], $_POST['tbDni'], $_POST['tbDireccion'], $_POST['tbTelefono'], $_POST['tbCargo']);

        if (isset($_POST['btModificar'])) {

            $consulta = $EmpModificar -> Modificar(); 

            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $EmpModificar -> Eliminar();
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