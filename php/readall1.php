<?php

include "config.php";
$base=connect();
$req="SELECT * FROM utlisateur ";
$result=$base->query($req);
while($user=$result->fetchObject())
{
echo $user->txt." ".$user->txt1." ".$user->txt2." ".$user->txt3." ".$user->txt4." ".$user->txt5." ".$user->mdp." ".$user->cmdp;



}



?>
