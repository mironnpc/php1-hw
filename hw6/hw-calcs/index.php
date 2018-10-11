<?php
$temp_calc = file_get_contents('calc.tpl');
include "result.php";

$replace = array($answer1,$answer2);
$patterns = array('/{answer1}/','/{answer2}/');

echo preg_replace($patterns,$replace,$temp_calc);
?>