<?php
require "configfood/foodconnet.php";
require "modules/foodsession.php";
$currentUser = $_SESSION['id'];
$sql = "SELECT * FROM customers WHERE id = '$currentUser'";
$query = mysqli_query($dbconnect, $sql);
$row = mysqli_fetch_assoc($query);

auth();
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
    <div class="container-fluid border shadow p-3 mt-5 w-75 bg-dark mb-3 rounded">
        <?php echo errorMsg();
        echo successMsg(); ?>

        <div class="d-flex justify-content-end">
            <div class="">
                <img src="images/uploads/<?php
                                            $img = $row['profileimg'];
                                            if (empty($img)) {
                                                echo "user.png";
                                            } else {
                                                echo "$img?";
                                            }
                                            ?>" width="150" height="150" class="img-thumbnail d-block mx-auto p-1 border"><br>
                <form action="configfood/set.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" class="form-control mb-3">
                    <button type="submit" name="uploadFile" class="btn btn-warning text-light rounded mb-3 ">Upload</button>
                </form>
            </div>
        </div>
        <div class="card p-3 shadow-lg w-75 mx-auto">

            <form action="configfood/update.php" method="POST">
                <div>
                    <h2 class="text-center text-capitalize text-dark ">change yout details here</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 text-dark mb-3">
                        <label>First Name:</label>
                        <input type="text" placeholder="<?php echo $row['firstname'] ?>" name="fname" class="form-control bg-warning border border-bottom border-white text-dark rounded">
                    </div>

                    <div class="col-md-6 text-dark mb-3">
                        <label>Last Name:</label>
                        <input type="text" placeholder="<?php echo $row['lastname'] ?>" name="lname" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                    </div>
                    <div class="col-md-6 text-dark mb-3">
                        <label>Phone:</label>
                        <input type="tel" placeholder="<?php echo $row['phone'] ?>" name="phone" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                    </div>

                    <div class="col-md-6 text-dark mb-3">
                        <label>Email:</label>
                        <input type="email" value="<?php echo $row['email'] ?>" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded" readonly>
                    </div>
                    <div class="col-md-6 text-dark mb-3">
                        <label>Date of Birth:</label>
                        <input type="text" placeholder="<?php echo $row['dob'] ?>" onfocus="this.type='date'" name="dob" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                    </div>
                </div>
                <button type="submit" name="userUpdate" class="btn btn-warning rounded text-light my-3">Update</button>
            </form>

        </div>
        <div class="content-backdrop fade"></div>
        <div class="content-wrapper">
            <div class="container py-3">
                <div class="card p-3 shadow-lg w-75 mx-auto">
                    <form action="configfood/password.php" method="POST">
                        <h4 class="text-center text-capitalize">Change Password here</h4>
                        <div class="row mt-5">
                            <div class="col-md-6 text-dark mb-3">
                                <label>Old Password:</label>
                                <input type="text" name="old" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                            </div>

                            <div class="col-md-6 text-dark mb-3">
                                <label>New Password:</label>
                                <input type="text" name="new" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                            </div>

                            <div class="col-md-6 text-dark mb-3">
                                <label>Confirm Password:</label>
                                <input type="text" name="con" class="form-control bg-warning border-0 border-bottom border-white text-dark rounded">
                            </div>
                        </div>
                        <button type="submit" name="resetPassword" class="btn btn-warning rounded text-light my-3">Reset</button>
                    </form>

                </div>
            </div>


            <div class="content-backdrop fade"></div>
        </div>
        <style>
            ::placeholder {
                color: white !important;
            }
        </style>

    </div>



    <script src="js/dashhead.js"></script>
    <script src="js/loadfood.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>