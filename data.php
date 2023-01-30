<?php
include "connexion.php";
$add=$bdd->prepare("INSERT INTO data (name,firstname,email,comment) VALUES (:name,:firstname,:email,:comment)");
$add->bindValue(':name',$name);
$add->bindValue(':firstname',$firstname);
$add->bindValue(':email',$email);
$add->bindValue(':comment',$comment);
$add->execute();
?>