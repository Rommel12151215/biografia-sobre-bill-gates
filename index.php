<!DOCTYPE html>
<html>
<head>
 <title>El multimillonario Bill Gates</title>
 <link rel="stylesheet" type="text/css" href="color.css">
</head>
<body>
 <?php
 function saludo() {
  date_default_timezone_set('America/Mexico_City');
  $hora = date('H');
  if ($hora < 12) {
      echo "¡Buenos días!";
  } elseif ($hora < 18) {
      echo "¡Buenas tardes!";
  } else {
      echo "¡Buenas noches!";
  }
 }
 saludo();
 ?>
 <h1>El multimillonario Bill Gates</h1>
 <p>
 William Henry Gates III, conocido como Bill Gates, nació el 28 de octubre de 1955. Es un eminente programador de computadoras, empresario y filántropo estadounidense. Gates es el fundador de Microsoft Corporation y la Fundación Bill & Melinda Gates. Desde 1987, Gates ha sido incluido en la lista de los millonarios del mundo de Forbes. Desde 1995 hasta 2017, mantuvo el título de Forbes de la persona más rica del mundo cada año, excepto en 2008 y de 2010 a 2013. En noviembre de 2023, Gates tiene una estimación de riqueza neto de US\$126 mil millones, lo que lo convierte en la cuarta persona más rica del mundo según el Índice de Millonarios de Bloomberg [stackoverflow.com](https://en.wikipedia.org/wiki/Bill_Gates).
 </p>
 <p>
 Gates y su fundación han donado cantidades significativas de dinero a diversas organizaciones benéficas y programas de investigación científica. A través de la fundación, Gates lideró una campaña de vacunación a principios del siglo XXI que contribuyó significativamente a la erradicación del poliovirus salvaje en África [stackoverflow.com](https://en.wikipedia.org/wiki/Bill_Gates).
 </p>
 
</body>
</html>

