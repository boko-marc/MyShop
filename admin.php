<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin panel</title>
</head>
<body>
    <div class="bordure">
        <h2 class="h_adimin">PANEL DE L'ADMINISTRATEUR </h2>
        <form class="form" action="all_users.php">
            <div class="input-group">
                <button type="submit" class="btn" name="connection">ALL USERS</button>
            </div>
        </form>  <br>
        
        <form class="form" action="delete_usrs.php">
            <div class="input-group">
                <button type="submit" class="btn" name="connection">DELETE USERS</button>
            </div>
        </form> <br>
        <form class="form" action="edit_user.php">
            <div class="input-group">
                <button type="submit" class="btn" name="connection">EDIT USERS</button>
            </div>
        </form>
    </div>
   
    
 
</body>
</html>