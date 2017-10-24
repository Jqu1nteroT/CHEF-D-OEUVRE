<?php

session_start();
include('model/conexion.php');

    $resultat = $bdd->exec('INSERT INTO post( `titulo`, `subtitulo`, `texto`, `idcategoria`, `fecha`, `imagen1`, `imagen2`) VALUES ('.$bdd->quote($_POST["titulo"]).','.$bdd->quote($_POST["subtitulo"]).','.$bdd->quote($_POST["texto"]).','.$categoria.','.$bdd->quote($_POST["imagen1"]).','.$bdd->quote($_POST["imagen1"]).')');


?>