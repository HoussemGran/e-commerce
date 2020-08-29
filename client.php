<?php


include('db.php');

$nomPre = $_POST['nomPre'];

$adr = $_POST['adr'];

$tel = $_POST['tel'];

$email = $_POST['email'];

$mdp = $_POST['mdp'];


$req = "insert into client values ('', '$nomPre' , '$adr' , '$tel' ,'$email' , '$mdp')";

$res = mysqli_query($con , $req);



session_start();

$_SESSION['client'] = $nomPre;

header("Location: article.php");