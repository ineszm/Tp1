<?php


include "config.php";
$base=connect();
$email=$_GET['mail'];
$m=$_GET['mdp'];

$req="INSERT INTO utlisateur(id_u,nom,prenom,num_tel,genre,adr_mail,date_naiss,nationnalite,interet,mdp,cmdp) VALUES (null,null,null,null,null,'$email',null,null,null,'$mdp',null)";
$resp=$base->exec($req);
if ($resp==1) {
    echo "donnees bien inserer";
 } else {
     echo "requette erronée";
 
 }


?>