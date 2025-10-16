<?php

//Calculadora de descuentos segun categoria
function calculadoraDescuento($precio, $catecoria) {
    switch ($catecoria) {
        case 'electronica':
            return $precio - ($precio * 0.15);
            break;
        case 'ropa':
            return $precio - ($precio * 0.1);
            break;
        case 'alimentacion':
            return $precio - ($precio * 0.05);
            break;
        default:
            break;
    }
}

//Juego numeros divisores de 3 y 5

function fizzBuzz($numero) {
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        return "FizzBuzz";
    } else if ($numero % 3 == 0) {
        return "Fizz";
    } else if ($numero % 5 == 0) {
        return "Buzz";
    } else {
        return (string)$numero;
    }
}
//Comprobador de la contraseña

function validadorContraseña($pass) {
    // Contraseña débil: 8 caracteres o menos
    if (strlen($pass) <= 8) {
        return "Debil";
    }
    // Contraseña fuerte: más de 8 caracteres + mayúscula + número
    if (strlen($pass) > 8 && preg_match('/[A-Z]/', $pass) && preg_match('/[0-9]/', $pass)) {
        return "Fuerte";
    }
    // Contraseña media: más de 8 caracteres pero falta mayúscula y/o número
    return "Media";
}


//Encontrar Valor Maximo


function encontrarMaximo($array) {

    $maximo = $array[0];

    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }

    return $maximo;
    
}


//Filtrar por criterios

function filtrarUsuariosActivosMayores($usuarios) {
    $resultado = [];

    foreach ($usuarios as $usuario) {
        if ($usuario['activo'] && $usuario['edad'] >= 18) {
            $resultado[] = $usuario;
        }
    }

    return $resultado;
}


//comprobaciones
//EJ1
$valor = 5;
$cat = "electronica";
echo calculadoraDescuento($valor, $cat);

//EJ2
$num = 5;
echo "<br>" . $num . ": " . fizzBuzz($num);
$num = 15;
echo "<br>" . $num . ": " . fizzBuzz($num);

//EJ3 - Pruebas del validador de contraseñas
echo "<br><br>Pruebas de contraseñas:";
$contra = "abc12345";  // 8 caracteres exactos
echo "<br>8 caracteres exactos: " . validadorContraseña($contra);
$contra = "abcdefghijk";  // >8 caracteres pero sin mayúscula ni número
echo "<br>Más de 8 chars sin mayúscula ni número: " . validadorContraseña($contra);
$contra = "abcdefghijK";  // >8 caracteres + mayúscula pero sin número
echo "<br>Más de 8 chars con mayúscula sin número: " . validadorContraseña($contra);
$contra = "Abcdef123456";  // >8 caracteres + mayúscula + número
echo "<br>Más de 8 chars con mayúscula y número: " . validadorContraseña($contra);

//EJ4
echo "<br><br>Pruebas encontrar máximo:";
$array = [3, 5, 7, 2, 8];
//EJ5
$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];
$resultado = filtrarUsuariosActivosMayores($usuarios);
echo "<br><br>Usuarios activos mayores de edad:";
foreach ($resultado as $usuario) {
    echo "<br>Nombre: " . $usuario['nombre'] . ", Edad: " . $usuario['edad'];
}
