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
	</div>
        <div id="box"><h1><strong>Computer</strong></h1>
		<table>		
			<tr>
				<td>	
					<div id="angebot1">
					<form action="#" method="post">
						<label for="checkbox"><img src="m_1.png" alt="m_1" width="280" height="200">
						<h3>Acer MON AC V246HLBMD</h3><br>
						<table>						
						<tr>
							<td>
							<strong>Zoll: </strong>
							</td>
							<td>
							<p>24''</p>
							</td>
						</tr>
						<tr>
							<td>
							<strong>Auflösung: </strong>
							</td>
							<td>
							<p>1920 x 1080</p>
							</td>
						</tr>
						<tr>
							<td>
							<strong>Preis (CHF): </strong>
							</td>
							<td>
							<p>146.80</p>
							</td>
						</tr>
						</table><br>
						<label>
						<?php
						$_SESSION['m_1'] = (isset($_SESSION['m_1']))?$_SESSION['m_1']:1;
						if(isset($_POST['m_1'])){
 							$_SESSION['m_1']++;
						}		
						echo $_SESSION['m_1'];			
						echo	"<input type='submit' name='m_1' value='In den Warenkorb'>";
						?>
					
					</form>						
					</div>
				</td>
				<td>	
					<div id="angebot1">
					<form action="#" method="post">
						<label for="checkbox"><img src="m_2.png" alt="m_2" width="280" height="200">
						<h3>Iiyama X2481HS-B1</h3><br><br>
						<table>						
						<tr>
							<td>
							<strong>Zoll: </strong>
							</td>
							<td>
							<p>24''</p>
							</td>
						</tr>
						<tr>
							<td>
							<strong>Auflösung: </strong>
							</td>
							<td>
							<p>1920 x 1080</p>
							</td>
						</tr>
						<tr>
							<td>
							<strong>Preis (CHF): </strong>
							</td>
							<td>
							<p>189.35</p>
							</td>
						</tr>
						</table><br>
						<label>
						<?php
						$_SESSION['m_2'] = (isset($_SESSION['m_2']))?$_SESSION['m_2']:1;
						if(isset($_POST['m_2'])){
 							$_SESSION['m_2']++;
						}		
						echo $_SESSION['m_2'];			
						echo	"<input type='submit' name='m_2' value='In den Warenkorb'>";
						?>
					
					</form>						
					</div>
				</td>
			</tr>
			<tr>
				<td><div id="angebot4">Hallo</div></td>	
				<td><div id="angebot5">Hallo</div></td>	
			</tr>
		</table>
		
	</div>	
<!--	<div id="warenkorb"><h1>Warenkorb</h1>
			<div id="cart1">Objekt 1 <br>Menge: <input type="text" size="3"><a href="" id="entfernen">entfernen</a></div>
				
			
	</div> -->
	<img src="linie.png" id="linie"><br>
    	<div id="box"><h1><strong>Drucker</strong></h1>
		<table>		
			<tr>
				<td>
					<div id="angebot1">
					<form>
						<label for="checkbox"><img src="bild.jpg" alt="test" width="280" height="200">
						<p>sdfaklsdfjalösdjfaödljaödkljfaöldkfjaödklfjaödklfjaösdklfajd</p>
						<label>
						<input type="checkbox" id="checkbox">
					</form>						
					</div>
				</td>
				<td><div id="angebot2">Hallo</div></td>
			</tr>
			<tr>
				<td><div id="angebot4">Hallo</div></td>	
				<td><div id="angebot5">Hallo</div></td>
			</tr>
		</table>
	</div>	
	<img src="linie.png" id="linie"><br>
    	<div id="box"><h1><strong>Monitore</strong></h1>
		<table>		
			<tr>
				<td><div id="angebot1">Hallo</div></td>
				<td><div id="angebot2">Hallo</div></td>
			</tr>
			<tr>
				<td><div id="angebot4">Hallo</div></td>	
				<td><div id="angebot5">Hallo</div></td>
			</tr>
		</table>
	</div>	
	<div id="footer"></div>
</body>
<footer>
    <div id="f1"></div>
</footer>
</html>?