<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> config</title>
    </head>
	<body>
		<?php
		
			// richiamo varibili di configurazione connesisone etc
			require ("configSQL.php");
			
			
			//creazione query tabella CAMPO
			$query1 ="
				CREATE TABLE CAMPO(
				id int auto_increment primary key,
				nome varchar(50),
				costo numeric not null
				);";
			
			//creazione query tabella GIOCATORE
			$query2 ="
				CREATE TABLE GIOCATORE(
				id int auto_increment primary key,
				mail varchar(50) not null,
				psswd varchar(50) not null,
				credito numeric not null
				);";
			
			// creazione tabella PARTITA
			$query3 ="
				CREATE TABLE PARTITA(
				id int auto_increment primary key,
				ora time,
				data date,
				campo int references CAMPO(id),
				giocatore int references GIOCATORE(id)
				);";
			

			// creazione connessione
			
			echo "ciao </br>";
			echo $datiSql['col'];
			echo "</br>";
			
			try{
			$db=new PDO($datiSql['col'],$datiSql['user'],$datiSql['psw']);
			}catch(PDOException $e){
				
				echo "attenzione: ".$e->getMessage();
			}
			/*
			insert into campo values (null ,'primo','5');
			insert into campo values (null ,'secondo','5');
			insert into campo values (null ,'terzo','5');
			insert into giocatore values(null,'filippo@altobel.com','ciao','45');
			insert into giocatore values(null,'altobel.f@gmail.com','ciao','100');
			insert into giocatore values(null,'filippoangeloaurelio@hotmail.it','ciao','0');
			insert into giocatore values(null,'jettblack@virgilio.it','ciao','45');
			insert into giocatore values(null,'filippoaurelioangelo@virgilio.it','ciao','45');
			*/
		
		//inizializzazione della transzione PDO
            $db->beginTransaction();
			
			echo $query1."</br>";
		//langio delle query				
			$db->exec($query1);
			$db->exec($query2);
			$db->exec($query3);		
			
			$db->commit();			
				
		?>
	</body>

</html>