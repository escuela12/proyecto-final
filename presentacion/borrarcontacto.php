<?php 

require "../negocio/Contacto.php";
   
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
    <?php foreach ($arrayContactos as $Contacto2) {?>
               <option value="<?php echo $Contacto2->getIDContacto(); ?>"><?php echo $Contacto2->getNombre(); ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
   if (isset($_POST['btMostrar'])) {
       $Contacto2 = $Contacto -> buscarPorIDContacto($_POST['slContactos']);
?>

<br><br>
        <table border='3' style=''>
            <tr><td>Tipo: </td><td><input type="text" name="tbTipo" value=<?php echo $Contacto2->getTipo(); ?>></td></tr>
            <tr><td>Nombre: </td><td><input type="text" name="tbNombre" value=<?php echo $Contacto2->getNombre(); ?>></td></tr>
            <tr><td>Email: </td><td><input type="text" name="tbEmail" value=<?php echo $Contacto2->getEmail(); ?>></td></tr>
            <tr><td>TELEFONO: </td><td><input type="text" name="tbTelefono" value=<?php echo $Contacto2->getTelefono(); ?>></td></tr>
            <tr><td>Texto: </td><td><input type="text" name="tbTexto" value=<?php echo $Contacto2->getTexto(); ?>></td></tr> 
            <tr><td>Respondido: </td><td><input type="text" name="tbRespondido" value=<?php echo $Contacto2->getRespondido(); ?>></td></tr>
            <tr><td>Respuesta: </td><td><input type="text" name="tbRespuesta" value=<?php echo $Contacto2->getRespuesta(); ?>></td></tr>           
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $Contacto2 = new Contacto ($_POST['tbTipo'], $_POST['tbTipo'], $_POST['tbNombre'], $_POST['tbEmail'], $_POST['tbTelefono'], $_POST['tbTexto'], $_POST['tbRespondido'], $_POST['tbRespuesta']);

        if (isset($_POST['btModificar'])) {

            $consulta = $Contacto2 -> Modificar(); 
            //echo $consulta->queryString ."</br>";
            if ($consulta)
                echo "Registro Modificado";

            else
                echo "Error en la Modificación: ";

        }

        else {

            $consulta = $Contacto2 -> Eliminar();
            if ($consulta)
                echo "Registro Elininado";
            else
                echo "Error en la Eliminacion: ";
        }        
       
    }
  
?> 
</form>