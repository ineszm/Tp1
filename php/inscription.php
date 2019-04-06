<?php

include "config.php";
$base=connect();
$Nom=$_GET['txt'];
$prenom=$_GET['txt1'];
$num=$_GET['txt2'];
$genre=$_GET['txt3'];
$mail=$_GET['txt4'];
$date=$_GET['txt5'];
$mot=$_GET['mdp'];
$cmot=$_GET['cmdp'];
$req="INSERT INTO utlisateur(id_u,nom,prenom,num_tel,genre,adr_mail,date_naiss,nationnalite,interet,mdp,cmdp) VALUES (null,'$Nom','$prenom','$num',null,'$mail','$date',null,null,'$mot','$cmot')";
$resp=$base->exec($req);
if ($resp==1) {
    echo "donnees bien inserer";
 } else {
     echo "requette erronée";
 
 }


?>