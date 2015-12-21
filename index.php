  <!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="login">
		<form action="angemeldet.php" method="post">
			<lable for="benutzername">Benutzername </lable><input type="text" id="benutzername" name="benutzername" required>
			<lable for="passwort">Passwort </lable><input type="password" id="passwort" name="passwort" required>
			<input type="submit" id="anmelden" value="Anmelden">
			<input type="submit" id="registrieren" value="Registrieren">
		</form>
	
	<?php	
		session_start();
		if(isset($_SESSION['benutzername'])){
			if(isset($_SESSION['passwort'])){
		$_SESSION['benutzername'] = $_POST['benutzername'];
		$_SESSION['passwort'] = $_POST['passwort'];
			echo $_POST['benutzername'];
			echo $_POST['passwort'];
		}
		else {
		}
		}
	?>
	</div>
    	<div id="Nav1">
        	<ul>
            		<li><a href="index.php"><strong>TANG</strong> </a></li><br />
            		<li><a href="angebote.php">ANGEBOTE</a></li><br />
            		<li><a href="warenkorb.php">WARENKORB</a></li><br />
            		<li><a href="">KONTAKT</a></li><br />
        	</ul>
        <img src="" id="layout" /> 
    	</div>
<!--	<div id="warenkorb"><h1>Warenkorb</h1>
			<div id="cart1">Objekt 1 <br>Menge: <input type="text" size="3"><a href="" id="entfernen">entfernen</a></div>
				
			
	</div> -->
	<img src="linie.png" alt="line" id="linie"><br>
    	<div id="box"><h1><strong>Top Angebote</strong></h1>
		<table>		
			<tr>
				<td>	<div id="angebot1">
					<form>
						<label for="checkbox"><img src="m_1.png" alt="m_1" width="280" height="200">
						<p>sdfaklsdfjalösdjfaödljaödkljfaöldkfjaödklfjaödklfjaösdklfajd</p>
						<label>
						<input type="checkbox" id="checkbox">
						
					</form>						
					</div>
				<td>	<div id="angebot2">
					<form>
						<label for="checkbox"><img src="m_2.png" alt="m_2" width="280" height="200">
						<p>sdfaklsdfjalösdjfaödljaödkljfaöldkfjaödklfjaödklfjaösdklfajd</p>
						<label>
						<input type="checkbox" id="checkbox">
						
					</form>						
					</div>
				</td>
			</tr>
			<tr>
				<td><div id="angebot3">Hallo</div></td>
				<td><div id="angebot4">Hallo</div></td>	
			</tr>
			<tr>
				<td><div id="angebot5">Hallo</div></td>
				<td><div id="angebot6">Hallo</div></td>	
			</tr>
		</table>
	</div>	

	<div id="footer"></div>
</body>
<footer>
    <div id="f1"></div>
</footer>
</html>‏