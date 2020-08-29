<?php


session_start();

include('db.php');

$reqCl = "select * from client where id_client = ".$_SESSION['id'];
$resCl = mysqli_query($con , $reqCl);

$client = mysqli_fetch_assoc($resCl);

?>

<!doctype html>
<html>
<head>
    
    <title></title>
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    
    .article{
        
        
    margin-top: 100px;    
        
    }    
    
    img{
        
    width: 100px;
        height: 100px;
        
    }
    
    input{
        
    width: 50px    
        
    }
    
        

        
    </style> 
</head>
<body>
<?php
    
 
    
$id_cat = $_GET['id'];    
    
$req = "select * from categorie order by nom_cat";
    
$res = mysqli_query($con ,$req);
    
    
    
?>    
    

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li><a href="article.php"> Tous les Articles </a></li>
    <?php 
      
    while($cat = mysqli_fetch_assoc($res)){    
        
    ?>    
      <li><a href="categorie.php?id=<?php echo $cat['id_cat'] ?>"><?php echo $cat['nom_cat']  ?></a></li>
<?php
        }
     ?>   
    </ul>
       <ul class="nav navbar-nav navbar-right">
    <li> <a href="#"> <?php echo ucwords($client['nom_prenom']) ?> </a> </li>  
        </ul>
  </div>
</nav>   
    
    
<?php 

$req = "select * from article where id_cat = $id_cat";
    
$res = mysqli_query($con, $req);
    
    
while($art = mysqli_fetch_assoc($res)){    
?>
    
     <form method="post" action="panier.php">
<div class="col-sm-6 article col-md-4">
    <div class="thumbnail">
      <img src="<?php echo  $art['img_art'] ?>" alt="...">
      <div class="caption">
        <h3 style="text-align:center"><?php  echo $art['libel_art'] ?></h3>
        
          <p> <?php  for($i = 0 ; $i < strlen($art['carac_art']);$i++) if($i==40) echo "<br>"; else echo $art['carac_art'][$i];  ?></p><hr>
       
          <p>Quantite en stock : <?php echo $art['quantite_art'] ?> </p> <hr> 
        <p> Prix Unitaire : <?php echo $art['prix_art']." " ?>TND </p> <hr> 
        quantite a commander <input type="number"><hr>
            <input type="hidden" name="id_art" value="<?php echo $art['id_art'] ?>">
       <button class="btn btn-primary" type="submit"> Ajouter Au panier</button> 
      </div>
    </div>
    
  </div>    
    <?php
    }
    ?>
    
    </form>
    
    
    
</body>

</html>