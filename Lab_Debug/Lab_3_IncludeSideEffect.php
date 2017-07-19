<?php

// 為何變成 Hello! Guest ?

$userName = "Chien";
include("tools.php");

echo Tool::repeatString(20, "-"), "<br>";
echo "Hello! $userName <br>";
echo Tool::repeatString(20, "-"), "<br>";


?>