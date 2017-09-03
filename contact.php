<!doctime html>

<html>
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale">

     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
<title></title>

</head>

<body>
<?php require 'header.php' ?>

<form>

<center>
Ingrese su pregunta <input type="text" name="txtMensaje"><br>
Ingrese su mail     <input type="text" name="txtMail"><br>
                    <input type="submit" name="btnAceptar" value="Aceptar"><br>
</center>

</form>

<?php


echo "Se ha mandado un mail con el siguiente mensaje a admin@domain.com :<br>";
echo $_REQUEST['txtMensaje'];
echo "<br>";
echo "Gracias por ayudarnos a mejorar la pagina, le enviaremos una respuesta inmediata a ";
echo $_REQUEST['txtMail'];
echo "<br>";

?>

</body>

</html>