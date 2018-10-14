<?php
$sing1 = $_POST["SING1"];
$sing2 = $_POST["SING2"];
$a = $_POST["a"]; 
$b = $_POST["b"];
$x = $_POST["x"]; 
$y = $_POST["y"];

if ($a == "" || $b == "")  {
    $answer1 = "";
} elseif ($b == '0' && $sing1 == 'DIV') {
    $answer1 = "Делить на ноль низя";
} else {
    if ($sing1 == 'SUM') {
        $answer1 = $a + $b; 
    } elseif ($sing1 == 'SUB') {
        $answer1 = $a - $b;
    } elseif ($sing1 == 'MUL') {
        $answer1 = $a * $b;
    } elseif ($sing1 == 'DIV') {
        $answer1 = $a / $b;
    }
}

if ($x == "") {
    $answer2 = "";
} elseif ($y == "") {
    $answer2 = "";
} elseif (($y == 0) && ($sing2 == 'DIV')) {
    $answer2 = "Делить на ноль низя";
} else {
    if ($sing2 == 'SUM') {
        $answer2 = $x + $y; 
    } elseif ($sing2 == 'SUB') {
        $answer2 = $x - $y;
    } elseif ($sing2 == 'MUL') {
        $answer2 = $x * $y;
    } elseif ($sing2 == 'DIV') {
        $answer2 = $x / $y;
    }
}


?>