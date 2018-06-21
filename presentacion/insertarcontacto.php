<?php 
require_once "../negocio/Contacto.php";

?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    
<h1 class="text-center">INSERTAR NUEVO CONTACTO</h1>
<div class="containerfluid row justify-content-center">
    <form action="insertarcontacto.php" method="post">
        <table border='2' class="table table-striped">
            <tr><td scope="col">Tipo: </td><td><input type="text" name="tbTipo"> </td></tr>
            <tr><td scope="col">Nombre: </td><td><input type="text" name="tbNombre"> </td></tr>
            <tr><td scope="col">Email: </td><td><input type="text" name="tbEmail"></td></tr>
            <tr><td scope="col">Telefono: </td><td><input type="text" name="tbTelefono"></td></tr>
            <tr><td scope="col">Texto: </td><td><input type="text" name="tbTexto"></td></tr>
            <tr><td scope="col">Respondido: </td><td><input type="text" name="tbRespondido"></td></tr>
            <tr><td scope="col">Respuesta: </td><td><input type="text" name="tbRespuesta"></td></tr>         
        </table>
        <br>
        <input type="submit" class="btn btn-primary " value="INSERTAR" name="btInsertar">
    </form>
</div>
<?php

if (isset($_POST['btInsertar'])) {
           
        
   $objgContacto = new Contacto(null, $_POST['tbTipo'], $_POST['tbNombre'], $_POST['tbEmail'], $_POST['tbTelefono'], $_POST['tbTexto'], $_POST['tbRespondido'], $_POST['tbRespuesta']);
   
   $resultado = $objgContacto -> insertar();

   if ($resultado)
       echo "<p class='text-center text-primary'>Registro Insertado</p>";
   else
       echo "<p class='text-center text-danger'>Error en la Inserción</p>";   
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 
</body>
</html>