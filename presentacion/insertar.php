<?php
 
        if (isset($_POST['btEnviar'])) {
        
        require_once "../negocio/Contacto.php";          
       
                $objgContacto = new Contacto(null, $_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['mensaje'], null, null);  
                $objgContacto -> insertar();
                header('Location: index.html');                
  		  
	}
?>