<?php 
	$userDoEdycji = $_GET['Uzytkownik_do_edytowania'];
	

?>
<head>
<meta charset="UTF-8">
<style>
body{ 

color: rgb(248, 222, 126);
font-size: 20pt;
}
</style>
</head>
<body background="suka.jpg"> 
<form action="update.php" method="get" enctype="text/plain"><div>
<input type="hidden" name="id" value="<?php echo htmlEntities ($userDoEdycji);?>">
<p>Podaj nowe Imie i Nazwisko:</p>
<input name="imie">

<p>Podaj nową plec:</p>
<input type="radio" name="plec" value="Kobieta">Kobieta
<input type="radio" name="plec" value="Mezczyzna">Mezczyzna

<br>

<p>Podaj nową date urodzenia:</p>
<input type="number" name="data_dzien"  min="1" max="31" value="dzien">
<input type="number" name="data_miesiac"  min="1" max="12" value="miesiac">
<input type="number" name="data_rok"  min="1920" max="2010" value="rok">

<br>


<p>Podaj nową wage:</p>
<input type="number" name="waga"  min="10" max="200">
<br>

<p>Podaj nowy wzrost
<input type="number" name="wzrost"  min="100" max="230">
<br><br><br>

<input type="submit" value="Zapisz zmiany">
<a href = "index.php">Strona Glowna</a>


</div></form>
</body>