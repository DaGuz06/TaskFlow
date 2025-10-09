<?php

echo "<h3>Ejercicio 1</h3><br>";
$Nombre = "David";
$Apellido = "Guzmán";
$Edad = 19;
$Altura = 1.65;
$Es_Estudiante = True;

if ($Es_Estudiante == True) {
    $impr = "si";
} else {
    $impr = "no";
}

echo $Nombre . " " . $Apellido . " " . $Edad . " " . $Altura . " " . $impr . " es estudiante";

echo "<hr><br><h3>Ejercicio 2</h3>";
$NombreProducto = "Ratón";
$Precio = 9.99;
$StockDisponible = 100;
$Oferta = False;

echo "<br>" . $NombreProducto . " " . $Precio . " " . $StockDisponible;

echo "<hr><br>Calculadora";


$Num1 = 10;
$Num2 = 5;
echo "<br>" . $Num1 . " + " . $Num2 . " = " . $Num1 + $Num2;
echo "<br>" . $Num1 . " - " . $Num2 . " = " . $Num1 - $Num2;
echo "<br>" . $Num1 . " * " . $Num2 . " = " . $Num1 * $Num2;
echo "<br>" . $Num1 . " / " . $Num2 . " = " . $Num1 / $Num2;

echo "<hr><br>Simulacion de Stock";

$StockDisponible = $StockDisponible - 25;
echo "<br> Hay " . $StockDisponible . " Unidades en Stock";
$pedido = 50;
echo "<br> Hay " . $pedido . " Unidades en Stock";
$StockDisponible = $StockDisponible + $pedido;
echo "<br> Hay " . $StockDisponible . " Unidades en Stock";

echo "<br><hr> Concatenacion de textos";

$Nombre = "Oskar";
$Apellido = "Calvo";
$Curso = "Desarrollo Web en Entorno Servidor";

$FraseCompleta = "El profesor " . $Nombre . " " . $Apellido . " Imparte el curso " . $Curso;
echo "<br>" . $FraseCompleta;

echo "<br><hr> Comparaciones Simples";

$edad = 20;
$edadMinima = 18;
$contraseñaGuardada = 1234;
$contraseñaUsuario = 123;

echo "<br>";
echo var_dump($edad, $edadMinima);
echo "<br>";
echo var_dump($contraseñaGuardada, $contraseñaUsuario);

echo "<br><hr> ¿Par o impar?";


$numero = 4;

if ($numero % 2 == 0) {
    echo "<br>El numero " . $numero . " es par";
}else{
    echo "<br>El numero " . $numero . " es impar";
}

echo "<hr>";

echo "<br> <h3>Ejercicio 3</h3>";
echo "<br>Control de acceso";

$Edad = 17;
if ($Edad >= 18){
    echo "<br>puedes pasar";
} else {
    echo "<br>No puedes pasar";
}

echo "<hr><br>Calificacion de examen";
$nota = 7.5;
if ($nota >=9) {
    echo "<br>Sobresaliente";
} elseif ($nota >= 7  || $nota < 9) {
    echo "<br>Notable";
} elseif ($nota >= 5 || $nota < 7) {
    echo "<br>Aprobado";
} else{
    echo "<br>Suspenso";
}

echo "<hr><br>Menu del dia";

$diaSemana = "Lunes";

switch ($diaSemana) {
    case 'Lunes':
        echo "<br> Lentejas";
        break;
    case 'Miercoles':
        echo "<br> Paella";
        break;
    case 'Viernes':
        echo "<br> Pescado al horno";
        break;
    
    default:
        echo "<br> No hay menú especial";
        break;
}

echo "<hr><br>Verificacion de usuario avanzada";

$rolUsuario = "admin";
$usuarioActivo = true;

if ($rolUsuario == "admin" && $usuarioActivo == true) {
    echo "<br> Acceso concedido";
} else {
    echo "<br> Acceso denegado";
}


echo " <hr><br> <h3>Ejercicio 4</h3>";

echo "<br> Tabla multiplicar";


$numero = 7;

for ($i=0; $i < 11; $i++) { 
        echo "<br> $i" . "x 7 = " . $i*7 ;
}

echo "<hr><br>Cuenta atras";

$i = 10;
while ($i <= 11 && $i >= 0) {
    echo "<br>$i";
    $i--;
    
}
echo "<br>Feliz año nuevo";


echo "<hr><br>Recorrer nombre";
$alumnos = ["Ana", "Juan", "Pedro", "Sofia"];

foreach ($alumnos as $key => $value) {
    echo "<br> Alumno: " . $value;
}

echo "<hr><br>Listado de productos";

$productos = [
    ["Nombre" => "Teclado", "Precio" => 50],
    ["Nombre" => "Raton", "Precio" => 25],
    ["Nombre" => "Monitor", "Precio" => 200]
];

foreach ($productos as $producto) {
    echo "<br> Nombre: " . $producto["Nombre"];
    echo "<br> Precio: " . $producto["Precio"];
}

echo "<hr><br><h3>Ejercicio 5</h3>";
echo "<hr><br>Ficha de usuario";


$Usuario = ["Nombre" => "David", "Edad" => 19, "Email" => "david@hola.com", "Estudiante" => True];
$estudia;

if ($Usuario["Estudiante"] == true) {
    $estudia = "Si";
} else {
    $estudia = "No";
}

echo "<br> Nombre: " . $Usuario["Nombre"];
echo "<br> Edad: " . $Usuario["Edad"];
echo "<br> Email: " . $Usuario["Email"];
echo "<br> Estudia?: " . $estudia;


echo "<hr><br>Filtrado de notas";


$notas = [9.5, 5.2, 7.0, 6, 4, 8, 10];

foreach ($notas as $Notas) {
    if ($Notas >= 5) {
        echo " <br>$Notas";
    }
}

echo "<hr><br>Lista compra avanzada";

$listaCompra = [
"Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
"Lácteos" => ["Leche", "Queso", "Leche de Mípalo"],
"Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $categoria => $items) {
    foreach ($items as $item) {
        echo "<br>$item";
    }
}

echo "<hr><br>Calcular total carro";

