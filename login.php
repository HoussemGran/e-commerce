

<?php
    
    include('db.php'); 
    
$email = $_POST['email'];

$mdp = $_POST['mdp'];    
    
    
$req = "select * from client where email = '$email'";
    
$res = mysqli_query($con , $req);
    

    if(mysqli_num_rows($res)>0){
        
        
        
  $req = "select * from client where email = '$email' and mdp = '$mdp'";
    
$res = mysqli_query($con , $req);   
        
     
        if(mysqli_num_rows($res)>0){
            
            $tab = mysqli_fetch_assoc($res);
            
           session_start();
            
            $_SESSION['id'] = $tab['id_client'];
            
            header("Location: article.php");
        }
        
        else{
            
            echo "<h1>mot de passe incorrect</h1>";
            
        }
        
    }

    else echo "<h1>user n'existe pas</h1>";
    
    
?>
    
    
