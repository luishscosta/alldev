<?php

error_reporting(E_ERROR | E_PARSE);

echo "<h1 style='color: green;' >PHP " . phpversion() . " - OK</h1>";

$mysqli = new mysqli('db', 'root', 'alldev', 'mysql');

if ($mysqli->connect_error) {
    echo "<h1  style='color: red;'>BANCO - ERRO => " . $mysqli->connect_error . "</h1>";
} else {
    echo "<h1  style='color: green;'>BANCO - OK</h1>";
}
