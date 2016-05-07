
<div id="new" >
	
	<p id="Ttabella">
	<?php
	$myDate= getDate($_GET['time']);
	echo $myDate['month'];
	echo " , ";
	echo $myDate['year'];
?>
	</p>

<TABLE>

	<tr><td class="giorno">lu</td><td class="giorno">ma</td><td class="giorno">me</td><td class="giorno">gi</td><td class="giorno">ve</td><td class="giorno">sa</td><td class="giorno">do</td></tr>
	<?php
	
	$timestamp = $_GET['time'];
		$timestamp-=idate("d", $timestamp)*86400; //giorno del mese
			$timestamp-=idate("w", $timestamp)*86400-86400;
		

		for( $i=0 ; $i<6 ; $i++){
			echo"<tr>";
			for( $j=0;$j<7;$j++){
				$tb=idate("d", $timestamp);
				echo "<td class='num'><a> $tb </a></td>";
				$timestamp+=86400;
			}
			echo"</tr>";
		}
	?>	
</TABLE>
</div>
<button type="button" onClick="nextCal()">succ</button>
<button type="button" onClick="oggi()">oggi</button>
<button type="button" onclick="nextCal(-1)">prec</button>