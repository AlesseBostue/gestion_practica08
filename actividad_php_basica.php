<?php

// Definición de constantes
define("EDAD_ADULTO", 18);

// Solicitud de datos al usuario
// Simulando una entrada manual para entorno web
$nombre = "Geancarlo"; // Cambiar por la entrada real de usuario
$edad = 22;            // Cambiar por la entrada real de usuario

// Mostrar nombre y edad del usuario
echo "Hola, $nombre. Tu edad es $edad años.\n";

// Estructura de control if...else para verificar mayoría de edad
if ($edad >= EDAD_ADULTO) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}

// Estructura de control switch para clasificar por grupo de edad
switch (true) {
    case ($edad < 13):
        $grupo = "niño";
        break;
    case ($edad >= 13 && $edad <= 17):
        $grupo = "adolescente";
        break;
    case ($edad >= 18 && $edad <= 64):
        $grupo = "adulto";
        break;
    default:
        $grupo = "adulto mayor";
        break;
}
echo "Perteneces al grupo de edad: $grupo.\n";

// Arreglo con actividades favoritas del usuario
$actividadesFavoritas = ["Leer", "Correr", "Jugar videojuegos", "Escuchar música", "Viajar"];

// Uso de foreach para mostrar las actividades favoritas
echo "Tus actividades favoritas son:\n";
foreach ($actividadesFavoritas as $indice => $actividad) {
    echo ($indice + 1) . ". $actividad\n";
}

// Ciclo for para calcular la suma de los números del 1 al 10
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo "La suma de los números del 1 al 10 es: $suma.\n";

// Uso de un ciclo while (ejemplo adicional)
$contador = 1;
echo "Cuenta regresiva con while:\n";
while ($contador <= 10) {
    echo $contador++ . "\n";
}

?>