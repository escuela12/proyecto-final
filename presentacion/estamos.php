<?php 
require_once "negocio/Contacto.php";

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
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="index.html">Home</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="trabajo.html">Nuestro trabajo <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="somos.html">Quienes Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="estamos.php">Contacto</a>
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
    <div class="row contacto">        
        <form name="contactform" method="post" action="insertar.php" class="col-6 form-inline" style='padding-bottom: 6%;'> 
            <table><!---Este tamaño en px es personalizable -->
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
                        <a href="insertar.php" class="btn btn-primary btn-lg">Enviar</a>
                    </td>
                </tr>
           </table>
           <div class="col-6">
                <h2 class="blockquote-footer text-center text-white">Puedes escribirnos para pedirnos información sin ningun tipo de compromiso y nos pondremos en contacto contigo lo mas pronto posible.</h2>
           </div>
        </form>               
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
<div class="subfooter top">
    <div class="lista">
        <ul>
            <li>
                <a href="index.html" class="link">Home</a>
            </li>
            <li>
                <a href="somos.html" class="link">Quienes Somos</a>
            </li>
            <li>
                <a href="contacto.html" class="link">Contacto</a>
            </li>
            <li>
                <a href="enlaces.html" class="link">Enlaces de Interes</a>
            </li>
        </ul>
    </div>
    <div class="logopie">
        <img src="logo/logo.jpg" class="logofooter" alt="">
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