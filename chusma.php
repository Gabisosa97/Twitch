<?php
$r1 = "Sí"; 
$r2 = "Claro que sí"; 
$r3 = "No lo sé"; 
$r4 = "Tal vez"; 
$r5 = "Obviamente no"; 
$r6 = "No."; 
$respuestas = array($r1, $r2, $r3, $r4, $r5, $r6);
$random = array_rand($respuestas); 
echo $respuestas[$random];
?>
