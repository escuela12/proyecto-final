<?php
	if (isset($_POST['btEnviar'])) {          
       
                $objgContacto = new Contacto(null, null, $_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['mensaje'], null, null);  
                $objgContacto -> insertar();
                header('Location: estamos.html');  
                die();    
  		  
	}
?>