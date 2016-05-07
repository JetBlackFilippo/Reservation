 <!DOCTYPE html>
<html>
	<head>
	<script>
		var dataGuardo= Date.now();
		var dataS=new Date(dataGuardo);
	
		function home() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					document.getElementById("contenuto").innerHTML = xhttp.responseText;
				}
			};	
			xhttp.open("GET", "home.php", true);
			xhttp.send();
			
		} 
		
		function Prenotazioni() {
			var xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					document.getElementById("contenuto").innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "Prenotazioni.php?time="+(dataGuardo /1000 |0), true);
			xhttp.send();
			
			
		}
		
		function nextCal(disc){
			var old =dataGuardo;
			var k=86400000;
			if (disc<0)
				k=k*(-1);
			while((new Date(dataGuardo)).getMonth() == (new Date(old)).getMonth())
				dataGuardo+=k;
			Prenotazioni();
		}
		
		function oggi(){
			
			dataGuardo=Date.now();
			Prenotazioni();
		}
		
		
	</script>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>tennis bovolone</title>
	</head>
	<body>
		<div id="container">
			<div id="menu">
				<ul>
					<li ><a href="#" onClick="home();">home</a></li>
					<li ><a href="#" onClick="Prenotazioni();">Prenotazioni</a></li>
					<li ><a href="#">Media</a></li>
					<li> <a href="#">Contatti</a></li>
				</ul>
			</div>
			<div id="contenuto"></div>	
			<div id="footer"></div>
		</div>

	</body>
</html> 

			