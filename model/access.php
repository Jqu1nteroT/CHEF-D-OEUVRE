<?php 
session_start();
include('model/conexion.php');

if (isset($_POST["usr"]) && isset($_POST["pwd"])){
    $pq = $_POST["usr"];
	$pw = $_POST["pwd"];
	$usOk = "";
	$pwOk = "";
	if (isset($_POST['usr'])) {
    $resultat = $bdd->query("SELECT * FROM login WHERE usuario ='$pq'");
    $row = $resultat->fetch();
    	$usOk = $row['usuario'];
    	$pwOk = $row['passwor'];
        $id = $row['idlogin'];
    var_dump($row);   
    if (isset($pq) && isset($pw)){
    	if ($pq == $usOk && $pw == $pwOk) {
	   	header('Location:index.php?blog=editor');
        $_SESSION['user']=$id;
    	}/*else{
    	header('Location:index.php?page=registrer');
   		}*/
    }
   }
}
?>