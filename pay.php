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
        <div class="card shadow p-3 mx-auto w-50 mt-5 h-5 bg-dark">
            <div>
                <h3 class="text-capitalize text-light p-2">pay through this link</h3>

                <div class="card">


                    <small class="text-secondary fs-4 card p-3 text-center ">Pay online with your debit card</small>
                    <input type="submit" class="btn-success btn" style="cursor:pointer;" value="Pay Now" id="submit" />

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function(event) {
                            document.getElementById('submit').addEventListener('click', function() {

                                var flw_ref = "",
                                    chargeResponse = "",
                                    trxref = "FDKHGK" + Math.random(),
                                    API_publicKey = "FLWPUBK_TEST-83af4504f6370dc6576a13be3875e79b-X"; //Always change flutterwave public key to your own key

                                //   ENTER ALL ESSENTIAL VARIABLES
                                // var amount_ea = "50000";
                                var amount_ea = <?php echo $prow['price_value']; ?>;
                                var email_ea = <?php echo (json_encode($row['email'])); ?>;
                                var phone_ea = <?php echo (json_encode($row['phone'])); ?>;
                                var ref_ea = <?php echo (json_encode($ref)); ?>;

                                getpaidSetup({
                                    PBFPubKey: API_publicKey,
                                    customer_email: email_ea,
                                    amount: amount_ea,
                                    customer_phone: phone_ea,
                                    currency: "NGN",
                                    txref: ref_ea,
                                    meta: [{
                                        metaname: "EA-NG",
                                        metavalue: "NG"
                                    }],
                                    onclose: function(response) {},
                                    callback: function(response) {
                                        txref = response.data.txRef, chargeResponse = response.data.chargeResponseCode;
                                        if (chargeResponse == "00" || chargeResponse == "0") {
                                            //   if payment failed
                                            window.location = "";
                                        } else {
                                            //when successful
                                            window.location = "success?id=<?php $prow['id']; ?>";
                                        }
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <script src="js/dashhead.js"></script>
</body>

</html>