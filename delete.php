<?php
$userDoUsuniecia = $_GET['Uzytkownik_do_usuniecia'];
$con = new mysqli("127.0.0.1","root","","silownia1");
$q = "DELETE FROM `profil` WHERE id=$userDoUsuniecia";
$con->query($q);
header("Location: index.php");