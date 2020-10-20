<?php


$tamaño=$_REQUEST['tamaño'];
$grosor=$_REQUEST['grosor'];
$color=$_REQUEST['color'];

if($tamaño !=""){
    print "<p>Tamaño introducido</p>";
    }
else{
    print "<p>Tamaño introducido</p>";
    }

if($grosor !=""){
    print "<p>Grosor introducido</p>";
    }
else{
    print "<p>grosor no introducido</p>";
}

print "<svg width=\"400\" height=\"100\">
    <rect width=\"$tamaño\" height=\"$tamaño\" style=\"fill:$color;stroke-width:$grosor;stroke:rgb(0,0,0)\"\">
</svg>";

?>