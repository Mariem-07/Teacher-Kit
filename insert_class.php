<?php

$libelle = $_POST['libelle'];
if (!isset($libelle)) {
    $libelle = 'test';
}

//8889
$c = new PDO('mysql:host=127.0.0.1;port=3306;dbname=pfe1', 'root', '');
$sql = "INSERT INTO classe VALUES (NULL, 1, '$libelle')";
$c->exec($sql);
echo 'Succes de reponse('.$sql.')';
