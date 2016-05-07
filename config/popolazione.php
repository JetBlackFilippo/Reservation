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
				insert into CAMPO()";

			
			//creazione query tabella GIOCATORE
			$query2 ="insert into GIOCATORE()";

			
			// creazione tabella PARTITA
			$query3 ="
				insert into PARTITA()";

			

			// creazione connessione
			
			echo "ciao </br>";
			echo $datiSql['col'];
			echo "</br>";
			
			try{
			$db=new PDO($datiSql['col'],$datiSql['user'],$datiSql['psw']);
			}catch(PDOException $e){
				
				echo "attenzione: ".$e->getMessage();
			}
		
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