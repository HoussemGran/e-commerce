<?php

session_start();

?>

<!doctype html>
<html>
<head>
    
<title></title>    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    
    <style>
    
    
        img{
            
         width: 100px;
        height: 100px;    
            
        }
        
        
        
    </style>
    
</head>
<body>    
    


    
    
<?php



include('db.php');

if(!isset($_SESSION['id'])){
    
    
    header("Location: login.html");
    
}

else{
    





$id_cl = $_SESSION['id'];

$id_art = $_POST['id_art'];

$quantite = $_POST['quantite'];


$req2 = "insert into panier values('' , $id_cl , $id_art,$quantite)";

$res2 = mysqli_query($con  , $req2);


$req = "select * from client cl , article art , panier p where p.id_client = cl.id_client and p.id_art = art.id_art";
    


$res = mysqli_query($con , $req);


}

?>    
    


            <div class="panel panel-info">
                <div class="panel-heading">Contenu du Panier  </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
							<tr> 
                               <th></th>
								<th>Article</th>
                                <th>Quantité commandée</th>
								<th>Prix UT</th>
								<th>Total</th>
								<th></th>
							</tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            
                            while($tab = mysqli_fetch_assoc($res)){
                                
                                
                            
                            
                            ?>
							<tr>
								
								<td>
									<img src="<?php echo $tab['img_art'] ?>" width="10%"> 
								</td>
                                <td> <?php echo $tab['libel_art']  ?> </td>
								<td> <?php echo $tab['quantite']  ?> </td>
								<td> <?php echo $tab['prix_art']." DNT" ?> </td>
								<td>  <?php echo $tab['prix_art'] * $tab['quantite']." DNT" ?> </td>
								
							</tr>
                            <?php
                                }
                                ?>
                            
                        </tbody>	
							
                    </table>

                </div>
            </div>
        </div>

    </body>
</html>
    