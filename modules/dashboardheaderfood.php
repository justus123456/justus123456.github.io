<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <link rel="stylesheet" href="../css/dashheadfood.css?v=<?php echo time(); ?>">
</head>

<body>
    <section>
        <div class="one">
            <nav class="two">
                <ul class="run">
                    <li>
                        <i class="fas fa-align-justify" id="glow"></i>
                        <i class="fas fa-align-justify" id="jopp"></i>
                    </li>
                    <li>
                        <a href="dashboardfood.php" class="dop">
                            food road
                        </a>

                    </li>
                    <li>
                        <a href="aboutfood.php" class="flop">about us</a>
                    </li>
                </ul>

            </nav>
        </div>

    </section>

    <div class="fun">
        <div class="xop">
            <ul>
                <li>
                    <i class="fas fa-times"></i>
                </li>
            </ul>
        </div>
        <ul class="jo">
            <li>
                <div class="card w-50 p-2">
                    <img src="images/uploads/<?php
                                                $img = $row['profileimg'];
                                                if (empty($img)) {
                                                    echo "user.png";
                                                } else {
                                                    echo "$img?";
                                                }
                                                ?>" alt="" height="120px" width="120px">
                </div>
            </li>
            <li>
                <select name="menu" id="raw">
                    <option> our menu </option>
                    <option>chicken</option>
                    <option>salad</option>
                    <option>fried chips</option>
                    <option>indomie</option>
                    <option>roasted fish</option>
                    <option>pepper soup</option>
                </select>
            </li>
            <li>
            <li>
                <a href="https://api.whatsapp.com/send?text=Hello, FOOD ROAD, I would like to enquire about the Price&phone=+2347036849564"> <i class="fab fa-whatsapp text-success"></i> Contact</a>
            </li>
            </li>
            <li>
                <a href="settingsfood.php">
                    <i class="fas fa-cog"></i> settings

                </a>
            </li>
            <li>
                <a href="configfood/logoutfood">
                    <i class="fas fa-power-off"></i> logout

                </a>
            </li>
        </ul>
    </div>
    <script src="../js/dashhead.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>