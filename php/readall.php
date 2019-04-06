<?php

include "config.php";
$base=connect();
$req="SELECT * FROM utlisateur ";
$result=$base->query($req);
while($user=$result->fetchObject())
{
echo $user->mail." ".$user->mdp;



}



?>
