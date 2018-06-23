<?php 

require_once "../negocio/Contacto.php";
   
?>

<html>
<head></head>
<body>
    
    <h1>BORRAR / MODIFICAR CONTACTOS</h1>

<?php
    $Contacto = new Contacto();
    $arrayContactos = $Contacto -> Listar();
?>

<form action="borrarcontacto.php" method="post">
    Contactos:
    <select name="slContactos">
        <option value=""></option>  
    <?php foreach ($arrayContactos as $Conta) {?>
               <option value="<?php echo $Conta->getIDContacto(); ?>"><?php echo $Conta->getNombre(); ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
   if (isset($_POST['btMostrar'])) {
       $ContMostar = $Contacto -> buscarPorIDContacto($_POST['slContactos']);
?>

<br><br>
        <table border='3'>
            <input type="hidden" name="tbIDContacto" value=<?php echo $ContMostar->getIDContacto(); ?>            
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $ContMostar->getNombre(); ?>></td></tr>
            <tr><td>Email: </td><td><input type="text" name="tbEmail" value=<?php echo $ContMostar->getEmail(); ?>></td></tr>
            <tr><td>Telefono: </td><td><input type="text" name="tbTelefono" value=<?php echo $ContMostar->getTelefono(); ?>></td></tr>
            <tr><td>Texto: </td><td><input type="text" name="tbTexto" value=<?php echo $ContMostar->getTexto(); ?>></td></tr> 
            <tr><td>Respondido: </td><td><input type="text" name="tbRespondido" value=<?php echo $ContMostar->getRespondido(); ?>></td></tr>
            <tr><td>Respuesta: </td><td><input type="text" name="tbRespuesta" value=<?php echo $ContMostar->getRespuesta(); ?>></td></tr>           
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $ContaModi = new Contacto ($_POST['tbIDContacto'], $_POST['tbNombre'], $_POST['tbEmail'], $_POST['tbTelefono'], $_POST['tbTexto'], $_POST['tbRespondido'], $_POST['tbRespuesta']);

        if (isset($_POST['btModificar'])) {

            $consulta = $ContaModi -> Modificar(); 
           
            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $ContaModi -> Eliminar();
            if ($consulta)
                echo "Registro Elininado";
            else
                echo "Error en la Eliminacion: ";
        }        
       
    }
  
?> 
</form>