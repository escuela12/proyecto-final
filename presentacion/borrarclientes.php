<?php 

require "../negocio/Cliente.php"; 

?>

<html>
	<head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>    
<body>
			
<h2 class="text-center display-3 text-primary">BORRAR / MODIFICAR CLIENTES</h2>

<?php

    $Cliente = new Cliente();
    $arrayClientes = $Cliente -> Listar();
?>

<form action="borrarclientes.php" method="post">
    Clientes:
          <select name="slClientes">
            <option value=""></option>  
        <?php foreach ($arrayClientes as $Cli) {?>
                 <option value="<?php echo $Cli->getIDClientes(); ?>"><?php echo $Cli->getNombre(); 
                 ?></option>  
        <?php } ?>
        </select>
    <br><br>
    <input type="submit" value="Mostrar" name="btMostrar">

<?php
   if (isset($_POST['btMostrar'])) {
       $CliMostrar = $Cliente -> buscarPorIDClientes($_POST['slClientes']);
?>

<br><br>
        <table border='4'>
            <tr><td>Clientes: </td><td><input type="text" name="tbIDClientes" value=<?php echo $CliMostrar->getIDClientes(); ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $CliMostrar->getNombre(); ?>></td></tr>
            <tr><td>D.N.I: </td><td><input type="text" name="tbDni" value=<?php echo $CliMostrar->getDni(); ?>></td></tr>
            <tr><td>EMAIL: </td><td><input type="text" name="tbEmail" value=<?php echo $CliMostrar->getEmail(); ?>></td></tr>
            <tr><td>DIRECCION: </td><td><input type="text" name="tbDireccion" value=<?php echo $CliMostrar->getDireccion(); ?>></td></tr>
            <tr><td>TIPO: </td><td><input type="text" name="tbTipo" value=<?php echo $CliMostrar->getTipo(); ?>></td></tr>            
        </table>

        <br>
        <input type="submit" value="MODIFICAR CLIENTE" name="btModificar">
        <input type="submit" value="BORRAR CLIENTE" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $CliModifi = new Cliente ( $_POST['tbIDClientes'], $_POST['tbNombre'], $_POST['tbDni'], $_POST['tbEmail'], $_POST['tbDireccion'], $_POST['tbTipo']);

        if (isset($_POST['btModificar'])) {

            $consulta = $CliModifi -> Modificar(); 

            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $CliModifi -> Eliminar();
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