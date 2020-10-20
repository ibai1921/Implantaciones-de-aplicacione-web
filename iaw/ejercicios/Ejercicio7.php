<?php
/*tirada de dados */

$jugador1_1 = rand(1,6);
$jugador1_2 = rand(1,6);
$jugador1_3 = rand(1,6);

$trio1 = false; 
$trio1 = true;

$jugador2_1 = rand(1,6);
$jugador2_2 = rand(1,6);
$jugador2_3 = rand(1,6);

$trio2 = false;
$trio2 = true


print "<img src=\"img/dados/$jugador1_1.svg\">";
print "<img src=\"img/dados/$jugador1_2.svg\">";
print "<img src=\"img/dados/$jugador1_3.svg\">";

print "<img src=\"img/dados/$jugador2_1.svg\">";
print "<img src=\"img/dados/$jugador2_2.svg\">";
print "<img src=\"img/dados/$jugador2_3.svg\">";

/* primer trio */

if ($jugador1_1 == $jugador1_2 && $jugador1_1 == $jugador1_3) 

{

$trio1 = true;

}

if ($jugador2_1 == $jugador2_2 && $jugador2_1 == $jugador2_3) 

{

$trio2 = true;

}

if ($trio1 == true and $trio2 == true)
{

 if ($jugador1_1>$jugador2_1) 
 {  

print "<p>Gana el jugador1</p>";

 }
else 
{

print "<p>Gana jugador2</p>";

}

}


?>