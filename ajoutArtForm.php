<!doctype html>
<html>
<head>
    
<title></title>    
    
    
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
    
    
        form{
            
        margin-top:150px;
            
        width: 50%;
            
        margin-left: 25%;   
            
        }
    
    </style>
</head>
<body>
<?php

include('db.php');
    
$req = "select * from categorie";

$res = mysqli_query($con , $req);
    
  
    
?>    

    
<form method="post" action="ajoutArt.php" enctype="multipart/form-data">
    

<select name="id_cat" class="form-control">
    <option disabled selected> Choisir la categorie </option>
<?php    

while($cat = mysqli_fetch_assoc($res)){    
    
?>    
<option value="<?php  echo $cat['id_cat'] ?>"> <?php  echo $cat['nom_cat'] ?> </option>
    <?php
    }
    ?>
</select>   <br>
    
<input type="text" placeholder="Tapper le Nom de l'article" class="form-control" name="nomArt"><br>   
<textarea placeholder="tapper les carecteristiques de cet article" class="form-control" name="car"></textarea><br>    
<input type="number" placeholder="Tapper la Quantité disponible" min="0"  class="form-control" name="quantite"><br>
<input type="number" step=".10" min="1" placeholder="Tapper le prix" name="prix" class="form-control"><br>
<input type="file" class="form-control" name="img"><br>    
    
<button type="submit" class="form-control btn btn-success"> Ajouter  </button>    
    
    
</form>      
    
    
    
</body>
</html>