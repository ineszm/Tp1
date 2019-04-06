<?php

include "config.php";
$base=connect();
$req="SELECT * FROM todos";
$result=$base->query($req);
while($user=$result->fetchObject())
{
echo $user->txt;



}



?>