<?php
$id=$_GET["id"];
$imie=$_GET["imie"]??"";
$plec=$_GET["plec"]??"";
$data_dzien=$_GET["data_dzien"]??"";
$data_miesiac=$_GET["data_miesiac"]??"";
$data_rok=$_GET["data_rok"]??"";
$waga=$_GET["waga"]??"";
$wzrost=$_GET["wzrost"]??"";
$data = $data_rok . '-' . $data_miesiac . '-' . $data_dzien;

$con = new mysqli("127.0.0.1","root","","silownia1");
$q = "UPDATE `profil` SET `Id`='$id',`Imie`='$imie',`DataUrodzenia`='$data',`Waga`='$waga',`Wzrost`='$wzrost',`Plec`='$plec' WHERE id = $id";
$con->query($q);
header("Location: index.php");
