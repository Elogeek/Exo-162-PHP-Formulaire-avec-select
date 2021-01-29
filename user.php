<?php

//methode get
if(isset($_GET['name'], $_GET['prenom'])) {
    header('Location: index.php?error=1');
    header('Location: index.php?error =2');
    header('Location: index.php?error=3');
    $name = trim(strip_tags($_GET['name']));
    $prenom = trim(strip_tags($_GET['prenom']));
    echo $name . " " . $prenom;
  }


//methode post
if(isset($_POST['name'], $_POST['prenom'], $_POST['statut'], $_POST['fichier'])) {
    $name = trim (strip_tags($_POST['name']));
    $prenom = trim (strip_tags($_POST['prenom']));
    $file = trim (strip_tags($_POST['fichier']));
    $info = pathinfo($_POST['fichier']);

    echo $_POST['statut'] . " " . $name . " " . $prenom ."<br>";
    if($info['extension'] === "pdf") {
        echo $file;
    }

}
elseif(isset($_POST['name'], $_POST['prenom'])) {
    $name = trim (strip_tags($_POST['name']));
    $prenom = trim (strip_tags($_POST['prenom']));

    echo $name . " " . $prenom;
}