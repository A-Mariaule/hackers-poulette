<?php
if(isset($_POST["submit"])){
    if (!empty($_POST['hp'])) {
        die("Invalid request");
    }
    //récupération des variables
    $name = $_POST["name"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    //validation
    if (preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $name) && (preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $firstname)) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $comment)) {
        //sanitisation
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $comment = filter_var($comment,FILTER_SANITIZE_STRING);
        include "data.php";
        header("Location: contact.php");
        exit();
    }
    else{
        if (!preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $name)){
            $error_name="<p class='errorMsg'>Warning: incorrect name. It can only contain letters.</p>";
            }
        if (!preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $firstname)) {
            $error_firstname="<p class='errorMsg'>Warning: incorrect firstname. It can only contain letters.</p>";
            }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email="<p class='errorMsg'>Warning: the format of the e-mail address is incorrect</p>";
            }
        if (!preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/', $comment)) {
            $error_comment="<p class='errorMsg'>Warning: incorrect comment. It can only contain letters.</p>";
            }

    }
}
?>