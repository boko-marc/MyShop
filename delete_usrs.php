<?php
include_once("connexionbase.php");
if(isset($_POST["delete"]))
{
    if(!empty($_POST["name"]))
    {
        $username =$_POST["name"];
        $requete = $bdb->query('select id from users where username = "'.$username.'"');
        $resultat =$requete->rowCount();
        if($resultat >= 1)
        {   
            $query = $bdb->query('delete from users where username ="'.$username.'" ');
            $res=$query->rowCount();
            echo $res;
            if($res >= 1)
            {
                header('Location: all_users.php');
            exit;
            }
        }
        else
        {
            $return = "Le nom n'existe pas ou est incorrect!Revoyez svp";
        }

    }
    else
    {
      $return = "Le champ est vide!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>DELETE</title>
</head>
<body>
    
    <div class="input-group">
        <form action="delete_usrs.php" method = "post">
            <h1 class="h_admin_sup">Mettez le nom de l'utilisateur à supprimer</h1>
            <?php if(isset($_POST["delete"]) && isset($return))  echo $return;?>
        <p><input type="text" , name="name",  placeholder="username" /></p>
        <p><input type="submit", name ="delete" , value ="Delete"></p>
        </form>
    </div>
    
</body>
</html>