<?php

#IMPOSTAZIONI DATABASE
#host
$datiSql['host'] = "localhost";

#username
$datiSql['user'] = "admin";

#Password
$datiSql['psw'] = "admin";

#Nome DataBase
$datiSql['db'] = "tennis";

#collegamento al dtabese PDO
$datiSql['col'] = "mysql:host=".$datiSql['host'].";dbname=".$datiSql['db'];



#Nome della galleria per lo slideshow quando non impostato / testata
$datiSql['imgSlideDefault']="primoPiano";
#------------------------------------------------
#IMPOSTAZIONE NEW
#
#formato ora e data
$formato['FormData']="Y-m-d";
$formato['FormOra']="H:i:s";
?>