<?php
$con = new mysqli("127.0.0.1","root","","silownia1");
$result = $con->query("SELECT GROUP_CONCAT(treningi.nazwa SEPARATOR ',')AS nazwy_treningow, profil.imie AS Imie, profil.id AS Id FROM profil 
LEFT JOIN profil_treningi ON profil_treningi.profil_id = profil.id 
LEFT JOIN treningi ON profil_treningi.treningi_id = treningi.id 
GROUP BY profil.id, profil.imie;");
$users = [];
while ($user = $result->fetch_array()) {
  $users[] = $user;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CedryFit - Wszyscy Użytkownicy</title>
    <link rel="shortcut icon" href="dumbbell.ico" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body background="suka.jpg">
  
	<p><marquee behavior=alternate bgcolor="black">CedryFit</marquee></p>


     <nav class="menu"style="top:50px;">
      <div class="dropdown" style="position:relative; z-index:10">
	

        <a href="#">Menu</a>
        <ul>
          <li><a href="profil_new.html">kutas</a></li>
          <li><a href="treningi.php">Trening</a></li>
          <li><a href="zajecia.html">Zajęcia</a></li>
          <li><a href="#">Trenerzy</a></li>
		  <li><a href="allusers.php">Wszyscy Użytkownicy</a></li>
        </ul>

</div>
      <a href="#">O nas </a> 
      <a href="#">Kontakt </a> 
    </nav>
	<div style="color: white;margin-top:90px;">
	<?php if (empty($users)): ?>
  <h2>Nie ma żadnych userów</h2>
<?php endif; ?>
		<?php foreach ($users as $user): ?>
	<div style="margin-bottom:20px;display: flex;">
		<?php echo htmlEntities( $user['Imie']); ?>
		-
		<?php echo htmlEntities( $user['nazwy_treningow'] ?? "BRAK"); ?>
		<form method="GET" action="delete.php">
		<input type="hidden" name="Uzytkownik_do_usuniecia" value="<?php echo htmlEntities( $user['Id']); ?>"/>
	<button style="border-radius:10px; border: 2px solid red;background:black; padding:5px;" >Usuń</button>
		</form>
		<form method="GET" action="profil_update.php">
		<input type="hidden" name="Uzytkownik_do_edytowania" value="<?php echo htmlEntities( $user['Id']); ?>"/>
	<button style="border-radius:10px; border: 2px solid lightblue;background:black; padding:5px;" >Edytuj</button>
		</form>
	</div>
		<?php endforeach; ?>
	</div>
  
  </body>
</html>