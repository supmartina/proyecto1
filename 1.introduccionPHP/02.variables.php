<?php

#Variable Númerica
$numero = 5;
echo "Su numero es: $numero";
echo "<br></br>";

#Variable String
$palabra = "hola";
echo "Su palabra es: $palabra ";
echo "<br></br>";

#Varibale boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana";
echo "<br></br>";

#Variable arreglo 
$colores = array("rojo","amarillo","azul");
echo "Estos son sus colores: $colores[0], $colores[1]";
echo "<br></br>";

#Variable arreglo con propiedades 
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"tomate");
echo "Su verdura es: $verduras[verdura2]";
echo "<br></br>";

#Variable objeto
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "La fruta elegida es: $frutas->fruta2";


?>