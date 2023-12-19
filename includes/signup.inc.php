<?php
if(isset($_POST["submit"])){
    
    // grabbing the datas

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $pass = $_POST["pass"];
    $password = $_POST["password"];
    
    //instantiation
    include "../classes/signup.classes.php";
    include "../classes/signup-ctrl.php";
    $signup = new signupContr($nom,$prenom,$email,$tel,$pass,$password);


}