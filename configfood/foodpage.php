<?php

function redirect($loc){
    header("Location: ".$loc);
}


if (isset($_POST['but'])) {
    redirect("../loginfood.php");
}