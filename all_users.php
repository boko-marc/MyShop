<?php
include("connexionbase.php");
$users = $bdb->query ('select id, username from users');
$result = $users->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title></title>
</head>
<body>   <form class="form" action="index.php">
            <div class="input-group">
                <button type="submit" class="btn" name="connection">VOIR EN TANT UTILISATEUR</button>
            </div>
        </form>
    <div class="flex-container">
        <div>
            <h1 class="h_adimin_sup">ALL USERNAME</h1>
            <table>
                    <tr>
                        <td>ID</td>
                        <td>USERNAME</td>
                    </tr>
            </table>
                <?php foreach($result as $res) {  ?>
                <table>
                    <tr>
                        <td>
                            <?= $res['id'];?> 
                        </td>
                        <td>
                            <?= $res['username'];?> 
                        </td>
                    </tr>
                </table>
                <?php }?>
        </div>
       

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
        <html>
    <div>
            <?php if(isset($_POST["delete"]) && isset($return))  echo $return;?>
            <form action="delete_usrs.php" method = "post">
                <h1 class="h_adimin_sup">SUPPRIMER UN UTILISATEUR</h1>
                <?php if(isset($_POST["delete"]) && isset($return))  echo $return;?>
            <p><input type="text" , name="name",  placeholder="username" /></p>
            <p><input type="submit", name ="delete" , value ="Delete"></p>
            </form>
    </div>
 
</div>    

</html>
</body>
        