<?php 

require "../negocio/Contacto.php";


?>

<html>
<head></head>
<body>
	<H1>CONTACTOS</H1>

	<?php 
    //echo $consulta->ErrorInfo()[2];

	$Contacto = new Contacto();
    $arrayContactos = $Contacto-> Listar(); 
    
    echo "<table border='2'>";
    echo "<tr>";    
    echo "<th>NOMBRE</th>";
    echo "<th>EMAIL</th>";
    echo "<th>TELEFONO</th>";
    echo "<th>TEXTO</th>";
    echo "<th>RESPONDIDO</th>";
    echo "<th>RESPUESTA</th>";
    echo "</tr>";
    
    if($arrayContactos) {
        
        foreach($arrayContactos as $Con ) {
        
            echo "<tr>";                     
            echo "<td>" . $Con->getNombre() . "</td>";
            echo "<td>" . $Con->getEmail() . "</td>";
            echo "<td>" . $Con->getTelefono() . "</td>";
            echo "<td>" . $Con->getTexto() . "</td>";
            echo "<td>" . $Con->getRespondido() . "</td>";
            echo "<td>" . $Con->getRespuesta() . "</td>";
            echo "</tr>";
        
        }        
   }
        
        echo "</table>"; 
	?>
</body>
</html>    