<?php 
require "../negocio/Contacto.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contacto y Donde Estamos</title>
</head>
<body>
<div id="space" class="container header">
    <div class="logo">
        <a href="index.html"><img src="logo/logo.jpg" class="logo" alt=""></a>
    </div>
    <div class="home">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-link" href="index.html">Home</a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-4 mt-lg-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="trabajo.html">Nuestro Trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="somos.html">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="contacto.html">Contacto</a>
                    </li>
                </ul>            
            </div>
        </nav>
    </div>
</div> 
<div class="top">
    <div class="container">
        <div class="row p-3 mb-2 fondo">
            <div class="col-6">
                <h1 class="display-4 text-white">Contacto</h1>
            </div>
            <div class="col-6">
                <h2 class="display-4 text-white">Donde Estamos</h2>
            </div>
        </div>
    </div>
</div> 
<div class="containerfluid top">
    <div class="row top contacto">
        <form name="contactform" method="post" action="send_form_email.php" class="col-6 form-inline"> 
            <table width="500px"><!---Este tamaño en px es personalizable -->
                <tr>
                    <td valign="top">
                        <label for="nombre" class="table">Nombre *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="nombre" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="telefono" class="table">Teléfono *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="telefono" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="email" class="table">E-mail *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="email" maxlength="80" size="30">
                    </td>
                </tr>                
                <tr>
                    <td valign="top">
                        <label for="mensaje" class="table">Mensaje *</label>
                    </td>
                    <td valign="top">
                        <textarea  name="mensaje" maxlength="2000" cols="33" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <a href="" class="btn btn-primary btn-lg">Enviar</a>
                    </td>
                </tr>
           </table>
        </form>
	<?php
			if (isset($_POST['btInsertar'])) {
          
       
  			$objgContacto = new Contacto(null, $_POST['tbTipo'], $_POST['tbNombre'], $_POST['tbEmail'], $_POST['tbTelefono'], $_POST['tbTexto'], $_POST['tbRespondido'], $_POST['tbRespuesta']);
  
  			$resultado = $objgContacto -> insertar();
  			if ($resultado)
      			echo "<p class='text-center text-primary'>Gracias por ponerse enviar su solicitud en brebre nos pondremos en contacto con usted.</p>";
  			else
      			echo "<p class='text-center text-danger'>Por favor vuelva a intentarlo.</p>";   
		}
		?>
        <div class="containerfluid">
           <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11954.879336176673!2d2.1289920327052916!3d41.488673266449396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a496729cf77391%3A0x4baf89b2cb83ecc3!2s08290+Cerdanyola%2C+Barcelona!5e0!3m2!1ses!2ses!4v1528039335938"
                     width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0 text-white">Estamos en el Parc Tecnologic s/n.</p>
                       <footer class="blockquote-footer text-white">Cerdanyola del Valles-Barcelona. C.P. 08290</footer>
                    </blockquote>            
                </div>        
            </div>
        </div>           
   </div>  
</div>
<div class="containerfluid top style">
        <div class="row justify">
            <div class="list col-3">
                <ul class="col list-group">
                    <li class="list-group-item">
                        <a href="index.html" class="link">Home</a> 
                    </li>
                    <li class="list-group-item">
                        <a href="somos.html" class="link">Quienes Somos</a>
                    </li>
                    <li class="list-group-item">
                       <a href="contacto.html" class="link">Contacto</a> 
                    </li>
                    <li class="list-group-item">
                        <a href="empleo.html" class="link">Empleo</a>
                    </li>
                   <li class="list-group-item">
                        <a href="enlaces.html" class="link">Enlaces de Interes</a>
                    </li>
                </ul>
           </div>
            <div class="col-6">
                <img src="logo/logo.jpg" class="logopie" alt="">
            </div>
       </div>     
</div>
<footer class="footer top">
   <p class="copy text-secondary">&copy; copyright 2018 Jimena Luperdi Caballero</p>
</footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>