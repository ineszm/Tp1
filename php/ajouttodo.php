<?php

$text=$_POST['txt'];
echo $text;

include "config.php";
$base=connect();
$text=$_GET['txt'];
$req="INSERT INTO todos(id_t,description,date_ajout,date_fin,completed,id_u) VALUES (null,'$text',null,null,null,null)";
$resp=$base->exec($req);
if ($resp==1) {
    echo "donnees bien inserer";
 } else {
     echo "requette erronée";
 
 }




?>
