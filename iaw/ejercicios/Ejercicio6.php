<?php
/*tirada de dados */

$dados1  = rand(1,6);
$dados2 =  rand(1,6);

$suma= $dados1 + $dados2;

print "<img src=\"img/dados/$dados1.svg\">";
print "<img src=\"img/dados/$dados2.svg\">";
print "<p>La suma es</p>";

print "<p>Suma: $dados1 + $dados2 = $suma</p>";



?>