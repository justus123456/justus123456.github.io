 <?php
require "foodconnet.php";
require "../modules/foodsession.php";
//date_default_timezone_set("Africa/Lagos");



if (!isset($_POST['check'])) {
   redirect("../signupfood.php");
} else {

   $firstName = $_POST['finame'];
   $lastName = $_POST['lasname'];
   $phone = $_POST['phone'];
   $dob = $_POST['dob'];
   $email = $_POST['mail'];
   $role = 'user';
   $password = $_POST['pass'];

   if (strlen($password) < 8) {
      $_SESSION['error_msg'] = "Password must be greater than 8 characters";
      redirect("../signupfood");
   } else {
      $password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO customers(firstname,lastname,phone,dob,email,user_role,user_password) VALUES(?,?,?,?,?,?,?)";


      // 2: Initialize Connection to database
      $stmt = mysqli_stmt_init($dbconnect);

      // 3: Prepare SQL
      mysqli_stmt_prepare($stmt, $sql);

      // 4: Bind Our Values to Placeholders
      mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $phone, $dob, $email,$role, $password);

      $execute = mysqli_stmt_execute($stmt);


      if ($execute) {
         $_SESSION['success_msg'] = "Account created successfully, please login..";
         redirect("../loginfood.php"); 
      } else {
         $_SESSION['error_msg'] = "Something went wrong";
         redirect("../signupfood.php");
      }
   }
}
