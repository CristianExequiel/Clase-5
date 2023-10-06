<?php 
//Clase 5
//Ejercicio N°1
echo "Ej 1" . "<br>";
$numero=1;  

while($numero < 10){
    echo $numero. "<br>"; //concat..
    $numero = $numero+1; //sumarle 1 a lo que habia en la variable.
}

//Ejercicio N°2
echo "Ej 2" . "<br>";

while($numero > 0){
    echo $numero. "<br>";
    $numero = $numero-1; //restarle 1 a lo que habia en la variable.
}

//Ejercicio N°3
echo "Ej 3" . "<br>";
//este ejercicio lo voy a desarrollar de dos formas:
//en este caso, como pide un numero mínimo (1), puedo indicarle que arranque en 2 y vaya subiendo de dos en dos. 

    $numero = 2;

while ($numero <= 20) {
        echo $numero . "<br>";
        $numero += 2;
    }

//otra forma, puede ser utilizando el bucle y la condicion (if) indicando que si es par, que lo incremente

echo "otra forma". "<br>";
$numero = 1;

while ($numero <= 20) {
    if ($numero % 2 == 0) {
        echo $numero . "<br>";
    }
    $numero++;
}

    //Ejercicio N°4
echo "Ej 4" . "<br>";

$numero = 1;

while ($numero <= 20) {
    echo $numero . "<br>";
    $numero += 2;
}

//otra forma, puede ser utilizando el bucle y la condicion (if) indicando que si es impar, que lo incremente

echo "otra forma". "<br>";
$numero = 1;

while ($numero <= 20) {
    if ($numero % 2!=0) {
        echo $numero . "<br>";
    }
    $numero++;
}


    //Ejercicio N°5
echo "Ej 5" . "<br>";

$suma = 0;
$numero = 1;

while ($numero <= 20) {
    $suma += $numero;
    $numero++;
}

echo "La suma es: " . $suma . "<br>";

    //Ejercicio N°6
    echo "Ej 6" . "<br>";

$suma = 0;
$num = 1;

while ($num <= 20) {
    if ($num % 2 == 0) {
        $suma += $num;
    }
    $num++; 
}

echo "La suma de los números pares es: " . $suma;


?>