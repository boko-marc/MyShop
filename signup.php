  <?php
  
  include_once("connexionbase.php");
    if(isset($_POST["inscription"]))
    {
        $nom =$_POST["name"];
        $email =$_POST["email"];
        $pass =$_POST["password"];
        $hash = md5($pass);
        $passc =$_POST["password_confirmation"];
        if(!empty($nom)  && !empty($email) && !empty($pass) && !empty($passc))
        {
            if(strlen($nom) <25)
        {
            if(filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                if($pass == $passc) 
                {
                    $test_exist = $bdb->prepare('select id from users where username = :mom ' );
                    $test_exist->execute(array(':mom' => $nom));
                    $test_existe = $bdb->prepare('select id from users where email = :mo ' );
                    $test_existe->execute(array(':mo' => $email));
                    if($test_existe->rowCount() <1  &&  $test_exist->rowCount() <1 )
                    { $return = "hello word";
                       $complete = $bdb->prepare("INSERT INTO users (username,password,email) VALUES (:name,:mdphash,:mail)");
                       $complete->bindParam(':name',$nom);
                       $complete->bindParam(':mdphash',$hash);
                       $complete->bindParam(':mail',$email);
                       $complete->execute();
                        // $complete =$bdb->query('insert into users (username,password,email,created_at) values ("'.$nom.'", "'.$hash.'" , "'.$email.'" , NOW())');
                        if($complete->rowCount() ==1)
                        {  $return = "hello word waouh";
                             $return = "Vous êtes bien inscrit monsieur/madame ".$nom." Connectez vous svp avec votre email et votre mot de passe !";
                             header('Location: signin.php');
                        exit;
                        }
                       
                    
                    }
                    else
                    {
                        $return ="Votre nom ou email existe déjà!";
                    }
                }
                else
                {
                    $return ="Mot de passe invalide ou revoyez la confirmation de mot de passe!";
                }
            }
            else
            {
                $return = "Email invalide ! Essayez un bon email svp !";
            }
        }
        else
        {
            $return = "Mettez un nom valide !";
        }
    }
    else
    {
        $return = "Des champs sont manquants ! Complètez tous les champs svp !";
    }
} 
?>
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>INSCRIPTION</title>
</head>
    <header>
        <?php include("header.php");
        ?>
    </header>
<body> 
    <div class="connexion">
        <label> <marquee behavior="alternate" direction="left">C'est rapide et facile !</marquee></label>         
   <div class="header1">
  	<h2>INSCRIPTION</h2>
      <?php  if(isset($_POST["inscription"])  && isset($return)) echo $return; ?>
  </div>
  <form class="form" action="signup.php" method="post">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="name"  placeholder ="Votre nom">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder = "Votre email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_confirmation">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="inscription">Valider</button>
  	</div>
  	<p>
  		Êtes-vous déjà membre ? <a href="signin.php">Connectez-vous</a>
  	</p>
  </form> <br><br>
</body>
    <footer>
        <?php include("footer.php");
        ?>
    </footer>
</html>
