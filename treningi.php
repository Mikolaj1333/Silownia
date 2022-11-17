<?php
$con = new mysqli("127.0.0.1","root","","silownia1");
$result = $con->query("SELECT * FROM treningi");
$trenings = [];
while ($trening = $result->fetch_array()) {
  $trenings[] = $trening;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CedryFit - Treningi</title>
    <link rel="shortcut icon" href="dumbbell.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body background="suka.jpg">
  
	<p><marquee behavior=alternate bgcolor="black">CedryFit</marquee></p>


     <nav class="menu"style="top:50px;">
      <div class="dropdown" style="position:relative; z-index:10">
	

        <a href="#">Menu</a>
        <ul>
          <li><a href="profil_new.html">Nowy Użytkownik</a></li>
          <li><a href="#">Trening</a></li>
          <li><a href="zajecia.html">Zajęcia</a></li>
          <li><a href="#">Trenerzy</a></li>
		  <li><a href="allusers.php">Wszyscy Użytkownicy</a></li>
        </ul>

</div>
      <a href="#">O nas </a> 
      <a href="#">Kontakt </a> 
    </nav>
	<div style="color: white;margin-top:90px;">
		<?php foreach ($trenings as $trening): ?>
	<div style="margin-bottom:20px;">
		<?php echo htmlEntities( $trening['Nazwa']); ?>
		-
		<?php echo htmlEntities( $trening['Trening']); ?>
	</div>
		<?php endforeach; ?>
	</div>
  
  </body>
</html>