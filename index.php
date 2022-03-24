    <?php include("connexionbase.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>home</title>
    <header>
        <?php include("header.php");
        ?>
    </header>
<body>  
        <div>
            <img src="images/banner1.jpg" alt="banner" class="banner">
        </div>
 <marquee behavior="alternate" direction="right"><h2>TOUS NOS ARTICLES</h2></marquee>
 <div class="flex-container">
  <div><img src="images/sneaker1.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
  <div><img src="images/sneaker2.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
  <div><img src="images/sneaker4.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
</div> 
<div class="flex-container">
  <div><img src="images/botine1.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
  <div><img src="images/botine2.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
  <div><img src="images/botine3.jpg" alt=""><input type="submit" value="INFORMATIONS"></div>
</div>
</body>
    <footer>
        <?php include("footer.php");
        ?>
    </footer>
</html>