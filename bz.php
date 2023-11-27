<?php 
echo "<br><b>Zadanie 1</b><br>";
// Zadanie 1

$a = 9;
$b = 3;

if ($b != 0) {
    $x = $a / $b;
    echo "Wynik to: ".$x;
}
else {

    echo "Dzielnik jest równy 0";
}
echo "<br>"

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 2</b><br>";
// Zadanie 2

$a = 5;
$b = 3;
$c = 26;
$d = 6;

if ($b != 0 && $d != 0) {
    $x = ($a / $b) + ($c / $d);
    echo "Wynik to: ".$x;
}
elseif ($d == 0 && $b != 0) {
    echo "Dzielnik 'd' jest równy 0";
} 
elseif ($b == 0 && $d != 0) {
    echo "dzielnik 'b' jest równy 0";
} 
else {
    echo "Oba dzielniki są równe 0";
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 3</b><br>";
// Zadanie 3

$a = 9;
$b = 5;

if ( ($b - 4) != 0) {
    $x = ($a + 6) / ($b - 4);
    echo "Wynik to: ".$x;
} 
else {
    echo "'b - 4' -> jest równe 0, a przez zero nie dzielimy :)";
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 4</b><br>";
// Zadanie 4

$a = 81;

if ($a %2 == 0) {
    echo "Ta liczba jest parzysta";
}    
else {
    echo "Ta liczba jest nieparzysta";
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 5</b><br>";
// Zadanie 5

$a = 31;
$b = 20;

if ($b != 0) {
    echo "Tak, pierwsza liczba jest podzielna przez drugą i ich dzielenie wynosi: ".($a/$b);
} 
else {
    echo "Nie, pierwsza liczba nie jest podzielna przez drugą, ponieważ nie można dzielić przez 0";
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 6</b><br>";
// Zadanie 6

$a = -31;

if ($a == 0) {
    echo "Ta liczba jest równa 0";
}
elseif($a > 0) {
    echo "Ta liczba jest dodatnia";
}
else {
    echo "Ta liczba jest ujemna";
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 7</b><br>";
// Zadanie 7

$a = 15;
$b = 12;
$c = 512;

if($b > $a) {
    if ($c > $b) {
        echo "Najwiekszą liczbą jest liczba 'c', która jest równa: ".$c;
    }
    else {
        echo "Największą liczbą jest liczba 'b', która jest równa: ".$b;
    }
} 
else {
    if ($c > $a) 
    {
        echo "Największą liczbą jest liczba 'c', która jest równa: ".$c;
    }
    else 
    {
        echo "Największą liczbą jest liczba 'a', która jest równa: ".$a;
    }
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php 
echo "<br><b>Zadanie 8</b><br>";
// Zadanie 8

$a = 5;
$b = 0;
$c = -10;

$x = array($a, $b, $c);
rsort($x);
$x2 = implode("  ",$x);

echo "Kolejnośc to: "."  ".$x2;
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php
echo "<br><b>Zadanie 9</b><br>";
// Zadanie 9

$dzien = 24;
$miesiac = 11;
$rok = 2005;

$data = array(
    2 => date("d"),
    1 => date("m"),
    0 => date("Y"),
);

if(($rok - $data[0]) >= 18) {
    echo "Ta osoba jest niepełnoletnia";
}
else {
    // 8 <= 11
    if ($miesiac <= $data[1]) {
        if ($dzien <= $data[2]) {
            echo "Ta osoba jest pełnoletnia";
        }
        else {
            echo "Ta osoba jest niepełnoletnia";
        }
    }
    else {
        echo "Ta osoba jest niepełnoletnia";
    }
}
echo "<br>";
echo "<br>";

// Autor -> Bartosz Zakrzewski
?>

<?php
echo "<br><b>Zadanie 10</b><br>";
// Zadanie 10

$a = "a";

if (strlen($a) == 1) {
if(ctype_lower($a)) {
    echo "Ten znak jest małą literą";
}
elseif (ctype_upper($a)) {
    echo "Ten znak jest dużą literą";
}
elseif (ctype_digit($a)) {
    echo "Ten znak jest cyfrą";
}
else {
    echo "Ten znak jest 'innym znakiem'";
}
}
elseif(strlen($a) > 1) {
    echo "To miał być znak, a nie kilka. POPRAW SIĘ !";
}
else {
    echo "Ale miałeś coś wpisać...";
}

// Autor -> Bartosz Zakrzewski
?>