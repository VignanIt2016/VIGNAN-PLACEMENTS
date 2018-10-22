<?php

$link=mysql_connect ("localhost","root","0542");

if(!$link){die("Could not connect to MySQL");}

mysql_select_db("placements",$link) or die ("could not open db".mysql_error());
?>