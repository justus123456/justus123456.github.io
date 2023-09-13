<?php 
    require 'modules/foodsession.php';
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
    <link rel="stylesheet" href="css/signfood.css?v<?php echo time(); ?>">
</head>
    <style>
        .alertMsg{
            top: 10%;
            right: 10px;
            z-index: 999999999999999;
            color: white;
        }
    </style>
        
    
</head>

<body>
    <?php echo errorMsg(); echo successMsg(); ?>
    <?php require_once "modules/foodheader.php"; ?>
            <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6241b8ca0bfe3f4a87700f59/1fv8bjn69';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        <section>
            <div class="ford">

            </div>
            <div class="for">
                <div class="nic">

                </div>
                <h1 class="text-center">account login</h1>
                <form action="configfood/loginfoodcontrol.php" method="POST">
                    <div class="vo">
                        <label for="">Email:</label>
                        <input type="text" name="mail">
                    </div>

                    <div class="">
                        <label for="">password:</label>
                        <input type="text" name=" pass">
                    </div>

                    <div class="">
                        <button type="submit" name="login">submit</button>
                    </div>
                </form>
            </div>
        </section>
    

        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>