<?php 

require "../negocio/Empleado.php";

?>

<html>
<head>
    
</head>
<body>
    
	<H1>EMPLEADOS</H1>

	<?php 

	$Empleados = new Empleado();
    $arrayEmpleados = $Empleados-> Listar(); 
    
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>NOMBRE</th>";
    echo "<th>D.N.I</th>";
    echo "<th>DIRECCION</th>";
    echo "<th>TELEFONO</th>";
    echo "<th>CARGO</th>";
    echo "</tr>";


    if($arrayEmpleados) {
        
        foreach($arrayEmpleados as $Emp ) {
        
            echo "<tr>";           
            echo "<td>" . $Emp->getNombre() . "</td>";
            echo "<td>" . $Emp->getDni() . "</td>";
            echo "<td>" . $Emp->getDireccion() . "</td>";
            echo "<td>" . $Emp->getTelefono() . "</td>";
            echo "<td>" . $Emp->getCargo() . "</td>";
            echo "</tr>";
        
        }        
   }
    
        echo "</table>"; 

	?>

</body>
</html>