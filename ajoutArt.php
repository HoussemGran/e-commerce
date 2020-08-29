<!doctype html>
<html>
<head>
    
<title></title>    
    

</head>
<body>
<?php

include('db.php');
    
$req = "select * from categorie";

$res = mysqli_query($con , $req);
    
    
  
$id_cat = $_POST['id_cat'];

$nomArt = $_POST['nomArt'];    
    
$car = $_POST['car'];
    
$quantite = $_POST['quantite'];

$prix = $_POST['prix'];
    
$img = $_FILES['img']['name'];
    
$target = basename($img);    
    
    
move_uploaded_file($_FILES['img']['tmp_name'],$target);    
    
$req = "insert into article values('' , $id_cat ,  '$nomArt' ,'$car' , $quantite , $prix , '$img')";    
    
$res = mysqli_query($con , $req);
    
if($res) echo "article ajouter avec succes";    
    
?>    

    
    
    
    
    
</body>
</html>