<?php
// Level 1
// function direBonjour()
// {
//     echo "Bonjour ! :)";
// }
// direBonjour();

// Level 2

// function saluer($mot)
// {
//     echo "Salut " . $mot;
// }

// saluer("Kevin");

// Level 3

// function carre($nombre)
// {
//     return $nombre * $nombre;
// }

// echo carre(25);

// Level 4

// function estPair($nombre)
// {
//     if ($nombre % 2 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }

// echo estPair(3);

// Level 5

// function somme($a, $b)
// {
//     return $a + $b;
// }

// echo somme(2, 4);

// Level 6

// function maximum($a, $b)
// {
//     if ($a > $b) {
//         return $a;
//     } else {
//         return $b;
//     }
// }

// echo maximum(11, 2);

// Level 6.5

// $tabNombres = [
//     1,
//     2,
//     3,
//     4,
//     5,
//     6,
//     7,
//     8192,
//     9,
//     10,
//     11,
//     12,
//     13,
//     14,
//     15,
//     16
// ];
// function maximumMulti($tab)
// {
//     return max($tab);
// }

// echo maximumMulti($tabNombres);

// function maximumMulti(...$nombres)
// {
//     var_dump($nombres);
//     echo "Le nombre le plus grand est : " . max($nombres);
// }

// maximumMulti(45, 23, 987, 789, 45, 65, 8, 11);

// Level 7

function longueur($chaine)
{
    return mb_strlen($chaine, 'UTF-8');
}

$chaine = "Kevin";

echo "Le nombre de lettres dans le mot : " . $chaine . " est de " . longueur($chaine);
?>