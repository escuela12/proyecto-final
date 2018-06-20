<?php
	if (isset($_POST['btEnviar'])) {          
       
        $objgContacto = new Contacto(null, $_POST['tipo'], $_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['mensaje']);  
        $objgContacto -> insertar();
        header('Location: estamos.php');      
  		  
	}
?>