// Imprime una pirámide de asteriscos.

function asteriscos(a) {
    const nFilas = 5;

    let output = '';
    for (let i = 0; i < nFilas; i++) {
        const asteriscos = '*'.repeat(2 * i + 1);
        const linea = asteriscos;
        console.log(linea);
        output += asteriscos + '\n';
}
}

//Numeros del 1 al 100

function numeros(a) {
    for (let i = 1; i <= 100; i++) {
    if (i % 7 == 0 && i % 4 == 0) {
        console.log("FullStack");
    } else if (i % 7 == 0) {
        console.log("BackEnd");
    } else if (i % 4 == 0) {
        console.log("FrontEnd");
    } else {
        console.log(i);
    }
}
}

//Factorial

function Factorial(a) {
    n = 5;

    for (let i = 0; i < n; i++) {
        let resultado = 1;
        for (let j = 1; j <= i + 1; j++) {
            resultado *= j;
        }
        console.log(resultado);
    }
}

//multiplos de 8 entre 2 numeros

function multiplosDe8(a, b) {
    let num1 = parseInt(prompt("Ingrese el primer numero:"));
    let num2 = parseInt(prompt("Ingrese el segundo numero:"));
    let min = Math.min(num1, num2);
    let max = Math.max(num1, num2);
    console.log(`Multiplos de 8 entre ${min} y ${max}:`);
    for (let i = min; i <= max; i++) {
        if (i % 8 === 0) {
            console.log(i);
        }
    }
}

//Determinar si un numero es primo
function esPrimo(a) {
    let num = parseInt(prompt("Ingrese un numero:"));
    let esPrimo = true;
    if (num <= 1) {
        esPrimo = false;
    } else {
        for (let i = 2; i <= Math.sqrt(num); i++) {
            if (num % i === 0) {
                esPrimo = false;
                break;
            }
        }
    }
    if (esPrimo) {
        console.log(`${num} es un numero primo.`);
    } else {
        console.log(`${num} no es un numero primo.`);
    }
}

//adivinar numero aleatorio
function adivinarNumero(a) {
    const numeroAleatorio = Math.floor(Math.random() * 100) + 1;
    let intentos = 0;
    let adivinado = false;
    while (!adivinado) {
        let intento = parseInt(prompt("Adivina el numero (entre 1 y 100):"));
        intentos++;
        if (intento === numeroAleatorio) {
            adivinado = true
            console.log(`Felicidades! Adivinaste el numero ${numeroAleatorio} en ${intentos} intentos.`);
        } else if (intento < numeroAleatorio) {
            console.log("Demasiado bajo. Intenta de nuevo.");
        } else {
            console.log("Demasiado alto. Intenta de nuevo.");
        }
    }
}


//Numeros de armstrong
function esArmstrong(a) {
    let num = parseInt(prompt("Ingrese un numero:"));
    let suma = 0;
    let temp = num;
    const digitos = num.toString().length;
    while (temp > 0) {
        const digito = temp % 10;
        suma += digito ** digitos;
        temp = Math.floor(temp / 10);
    }
    if (suma === num) {
        console.log(`${num} es un numero de Armstrong.`);
    } else {
        console.log(`${num} no es un numero de Armstrong.`);
    }
}

//Contar numero de vocales de un texto
function contarVocales(a) {
    let texto = prompt("Ingrese un texto:");
    let contador = 0;
    const vocales = 'aeiouAEIOU';
    for (let char of texto) {
        if (vocales.includes(char)) {
            contador++;
        }
    }
    console.log(`El numero de vocales en el texto es: ${contador}`);
}


//Mostrar el Valor de PI con Cuatro Decimales
function mostrarPI(a) {
    const pi = Math.PI;
    console.log(pi.toFixed(4));
}

//Reemplazar Palabras en una Frase
function reemplazarPalabras(a) {
    let frase = prompt("Ingrese una frase:");
    let palabraAReemplazar = prompt("Ingrese la palabra a reemplazar:");
    let nuevaPalabra = prompt("Ingrese la nueva palabra:");
    let nuevaFrase = frase.replace(palabraAReemplazar, nuevaPalabra);
    console.log(`Frase original: ${frase}`);
    console.log(`Nueva frase: ${nuevaFrase}`);
}

//Llamadas a las funciones
console.log("Piramide de asteriscos:");
asteriscos();
console.log("Numeros del 1 al 100:");
numeros();
console.log("Factorial:");
Factorial();
//console.log("Multiplos de 8 entre dos numeros:");
//multiplosDe8();
//console.log("Determinar si un numero es primo:");
//esPrimo();
//console.log("Adivinar numero aleatorio:");
//adivinarNumero();
//console.log("Determinar si un numero es de Armstrong:");
//esArmstrong();
console.log("Contar numero de vocales en un texto:");
contarVocales();
