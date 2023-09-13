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
    <?php require "modules/dashboardheaderfood.php";

    ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6241b8ca0bfe3f4a87700f59/1fv8bjn69';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <?php

    if ($row['user_role'] == 'admin') {


        $num = 1;
    ?>
        <div>
            <div class="card p-3 shadow-lg w-75 mx-auto mt-5">
                <table class="table table-warning border-dark  table-bordered">
                    <thead class="border-dark">
                        <tr>
                            <th class="fs-5 text-warning text-capitalize">no:</th>
                            <th class="fs-5 text-warning text-capitalize">name:</th>
                            <th class="fs-5 text-warning text-capitalize">price:</th>
                            <th class="fs-5 text-warning text-capitalize">status:</th>
                            <th class="fs-5 text-warning text-capitalize">date ordered:</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                        $sql = "SELECT * FROM foodorder ORDER BY id DESC LIMIT 0,5";

                        $querd = mysqli_query($dbconnect, $sql);
                        $num = 1;
                       while ($jow = mysqli_fetch_assoc($querd)) {
                       ?>
                        <tr class="border-dark">
                            <td class="text-warning"><?php echo $num++; ?></td>
                            <td class="text-warning fs-5 text-capitalize"><?php echo $jow['username'] ?></td>
                            <td class="text-warning fs-5 text-capitalize"><?php echo $jow['price'] ?></td>
                            <td class="text-warning fs-5 text-capitalize"><?php echo $jow['food_status']  ?></td>
                            <td class="text-warning fs-5 text-capitalize"><?php echo $jow['date_created']  ?></td>
                        </tr>
                        <?php  }?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else{ ?>
        <div class="vor">
            <i class="fas fa-spinner"></i>
        </div>
        <section>
            <div class="cup">
                <div>
                    <img src="images/photo-1565299624946-b28f40a0ae38.jpeg" alt="">
                    <h4>15 <span>% off</span></h4>
                    <h3>pizza slingback</h3>
                    <p>6 days remaining</p>
                </div>
                <div>
                    <img src="images/grilled-chicken-legs-barbecue-sauce-with-pepper-seeds-parsley-salt-black-stone-plate-black-stone-table_1150-37858.jpg" alt="">
                    <h4>15 <span>% off</span></h4>
                    <h3>grilled chicken barbecue</h3>
                    <p>6 days remaining</p>
                </div>
                <div>
                    <img src="images/chicken-skewers-with-slices-sweet-peppers-dill_2829-18813.jpg" alt="">
                    <h4>15 <span>% off</span></h4>
                    <h3>chicken skewers</h3>
                    <p>6 days remaining</p>
                </div>
                <div>
                    <img src="images/front-view-burger-fries-plate_23-2148784444.jpg" alt="">
                    <h4>15 <span>% off</span></h4>
                    <h3>large hamburger</h3>
                    <p>6 days remaining</p>
                </div>
            </div>
        </section>
        <section>
            <div class="hike">
                <h2>how does it work</h2>
                <div class="click">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>select location</h4>
                        <p>choose the location where your food will be delivered</p>
                    </div>
                    <div>
                        <i class="fas fa-book"></i>
                        <h4>choose order</h4>
                        <p>check over hundreds of menus to pick your favorite food</p>
                    </div>
                    <div>
                        <i class="fas fa-money-check-alt"></i>
                        <h4>pay advanced</h4>
                        <p>it's quick, safe and simple, select several methods of payment</p>
                    </div>
                    <div>
                        <i class="fas fa-pizza-slice"></i>
                        <h4>enjoy meals</h4>
                        <p>food is made and delivered directly to your home</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="on">
                <h2>popular items</h2>
                <form action="configfood/order.php" method="POST">
                    <div class="roe">
                        <div>
                            <img src="images/default-pasta.jpg" alt="pic">
                            <h4>pasta yum</h4>
                            <p>$13</p>
                            <button type="submit" name="low">take your order</button>
                        </div>
                        <div>
                            <img src="images/crispy-fried-chicken-plate-with-salad-carrot_1150-20212.jpg" alt="pic">
                            <h4>crispy chicken</h4>
                            <p>$26.9</p>
                            <button type="submit" name="pro2">take your order</button>
                        </div>
                        <div>
                            <img src="images/pasta-spaghetti-with-shrimps-sauce_1220-5072.jpg" alt="pic">
                            <h4>spaghetti shrimps</h4>
                            <p>$100</p>
                            <button type="submit" name="pro3">take your order</button>
                        </div>
                        <div>
                            <img src="images/photo-1565958011703-44f9829ba187.jpeg" alt="pic">
                            <h4>vanilla cake</h4>
                            <p>$15.6</p>
                            <button type="submit" name="pro4">take your order</button>
                        </div>
                        <div>
                            <img src="images/top-view-vegetable-soup-with-meat-inside-plate-grey_140725-36040.jpg" alt="pic">
                            <h4>vegetable soup</h4>
                            <p>$19.8</p>
                            <button type="submit" name="pro5">take your order</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section>
            <form action="configfood/order.php" method="POST">
                <div class="flu">
                    <div>
                        <h2>best deals <span>crispy pancake</span></h2>
                        <p>enjoy the large size pancake, complete your meal with the perfect slice of pancakes.</p>
                        <button type="submit" name="pro6">proceed to order <i class="fas fa-chevron-right"></i></button>
                    </div>
                    <img src="images/Fluffy-Pancakes-New-CMS.jpg" alt="food">
                </div>
                <div class="dlu">
                    <img src="images/crispy-fried-chicken-plate-with-salad-carrot_1150-20212.jpg" alt="food">
                    <div>
                        <h2>celebrate parties with <span>fried chicken</span> </h2>
                        <p>get the best fried chicken with a lip smacking lemon chill flavour. check out the best deals for fried chicken</p>
                        <button type="submit" name="pro7">proceed to order <i class="fas fa-chevron-right"></i></button>
                    </div>

                </div>
                <div class="flu">
                    <div>
                        <h2>wanna eat hot & <span>spicy pizza?</span></h2>
                        <p>pair up with a friend and enjoy the hot and crispy pizza pops. try with the best deals</p>
                        <button type="submit" name="pro8">proceed to order <i class="fas fa-chevron-right"></i></button>
                    </div>
                    <img src="images/istockphoto-1133727757-612x612-1.jpg" alt="food">
                </div>
            </form>

        </section>
        <section>
            <div class="fot">

                <div class="top">
                    <div class="horn">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <p>box park433 al el waling road dubai, london.</p>
                        <p>po box 2122676</p>
                        <p>ph: +2393990000 +233489384877</p>
                        <p>E: info@food road.com</p>
                    </div>
                    <div class="son">
                        <a href="aboutfood.php" class="crop">about us</a>
                        <a href="#" class="crop">contact us</a>
                        <a href="#" class="crop">blog</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <script src="js/dashhead.js"></script>
    <script src="js/loadfood.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>