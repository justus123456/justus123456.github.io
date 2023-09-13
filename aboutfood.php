<?php 
            require "configfood/foodconnet.php";
            require "modules/foodsession.php";
            $currentUser = $_SESSION['id'];
        $sql = "SELECT * FROM customers WHERE id = '$currentUser'";
        $query = mysqli_query($dbconnect, $sql);
        $row = mysqli_fetch_assoc($query);
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="css/food.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/bodyfood.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/signfood.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/dashfood.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/dashheadfood.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    require "modules/dashboardheaderfood.php";
    ?>
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
        <div class="card shadow  mx-auto w-75 mt-5 p-2 bg-warning">
            <div class="card shadow p-3 mx-auto w-50  bg-light">
                <h1 class="text-center text-capitalize text-warning">about us</h1>
                <img src="images/front-view-burger-fries-plate_23-2148784444.jpg" alt="food " class="rounded">
                <h2 class="card bg-dark mt-4"></h2>
                <p class="text-warning text-capitalize">
                    Today, celebrating 25 years of happy customers, it is that affection for Islanders that continues to set FOOD ROAD apart. It’s why all those smiles greet you when you arrive! At FOOD ROAD you will always be welcomed with kindness and your complete satisfaction is our top priority every time you return.

                    As the next generation of family business owners, we promise FOOD ROAD will continue to specialize in the hand-crafted hamburgers that made us famous. Made fresh daily from 100% local PEI beef, FOOD ROADs are cooked to order — never pre-cooked — and served sizzling hot with a mouthwatering choice of toppings. Our cheeseburgers and bacon burgers feature fresh bacon and real cheddar cheese. These are the best tasting burgers you can ever bite into and exactly what we mean by fabulous food.

                    But did you know FOOD ROAD just got bigger? Bigger choice and bigger value! In addition to all the other favourites for which we are famous — poutine, fries with the works, fish & chips, hot hamburger, home-made gravy, wraps, salads, sandwiches and classic milkshakes made with real hard ice cream — our bigger new menu features BBQ Bacon & Onion Cheeseburger, Sweet Chili Crispy Chicken and the opportunity to combo any burger, wrap or sandwich you wish... all made to order, the way you like!
                </p>
            </div>
        </div>
    </section>




    <script src="js/dashhead.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>