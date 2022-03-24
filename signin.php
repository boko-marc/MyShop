<?php
// connection bases de donnes
include_once("connexionbase.php");
if(isset($_POST["connection"]))

{   if(!empty($_POST["email"]) && !empty($_POST["password"]))   
    {
        $mail = $_POST["email"];
         $mdp = $_POST["password"];
         $Mdp = md5($mdp);
         if(filter_var($mail,FILTER_VALIDATE_EMAIL))
         {
             $test =$bdb->prepare('select username from users where email = :mon AND password = :pim');
             $test->execute( array(
            ':mon' => $mail,
            ':pim' => $Mdp
              ));
              $result = $test->rowCount();
              $res =$test->fetch(); 
             if($result == 1)
            {
                $_SESSION["connecter"] = $res["username"];
                
                $admin = $bdb->query('select admin from users where email = "'.$mail.'" ');
                $op = $admin->fetch();
                if($op['admin'] == 0)
                {
                    header('Location: index2.php');
                exit;
                }
                else
                {
                    header('Location: admin.php');
                    exit;
                }
            }
            else
            {   
                $return = "Vous aviez mis de fauses informations!Checkez encore!";
            }
         }
       else
         {
             $return = "Revoyez votre email svp!";
         }
    }
    else
    {
        $return = "Des champs sont manquants!";
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
    <title>Connexion</title>
</head>
    <header>
        <?php include("header.php");
        ?>
    </header>
<body>
    <div class="header1">
  	<h2>CONNEXION</h2>
      <?php if(isset($_POST["connection"]) && isset($return)) echo $return;?>
  </div>
  <form class="form" action="signin.php" method="post">
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" placeholder="marc@gmail.com">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder ="Mot de passe">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="connection">Login</button>
  	</div>
  	<p>
  		Pas encore membre ? <a href="signup.php">Enregistrez-vous</a>
  	</p>
  </form> <br><br>


</body>
    <footer>
        <?php include("footer.php");
        ?>
    </footer>
</html>