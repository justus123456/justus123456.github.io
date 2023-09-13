<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food scoop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="css/food.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/bodyfood.css?v=<?php echo time(); ?>">
</head>
</head>
<body>
    <?php require "modules/foodheader.php"; ?>
    <section>
        <div class="cold ">
            <div class="yo">
                <h1>are you starving?</h1>
                <p>within a few clicks, find meals that are accessible near you.</p>
                <div class="drop">
                    <div class="hope">
                        <h3 class="gom"> <i class="fas fa-bicycle"></i> delivery</h3>
                        <h3> <i class="fas fa-lock"></i> pick up</h3>
                    </div>
                    <div class="john">
                           <form action="configfood/foodpage.php" method="POST">
                           <i class="fas fa-map-marker-alt"></i> <input type="text" placeholder=" enter your address">
                            <button type="submit" name="but">find food</button>
                           </form>
                    </div>
                </div>
            </div>
             <img src="images/photocasewtmkt9z93.jpg" alt="logo">
             
        </div>
    </section>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
