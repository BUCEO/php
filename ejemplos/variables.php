<?php
// 1. Declara tres variables: una con tu nombre, otra con tu edad y otra con tu ciudad de residencia.
$nombre = "Juan";
$edad = 25;
$ciudad = "Buenos Aires";

// 2. Muestra un mensaje que diga: "Hola, mi nombre es [nombre], tengo [edad] años y vivo en [ciudad]."
echo "Hola, mi nombre es $nombre, tengo $edad años y vivo en $ciudad.\n";

// 3. Declara una variable numérica y verifica si es mayor o menor que 18, mostrando un mensaje apropiado.
$numero = 20;
if ($numero >= 18) {
    echo "El número ingresado es mayor o igual a 18.\n";
} else {
    echo "El número ingresado es menor de 18.\n";
}

// 4. Usa una estructura de control para verificar si la edad ingresada es mayor a 60.
//    Si es así, muestra "Eres un adulto mayor". Si es menor de 18, muestra "Eres menor de edad".
//    En otros casos, muestra "Eres un adulto".
if ($edad > 60) {
    echo "Eres un adulto mayor.\n";
} elseif ($edad < 18) {
    echo "Eres menor de edad.\n";
} else {
    echo "Eres un adulto.\n";
}
?>
