<?php
    $numTwo = 35;
    $string = "this is a boy";
    $float = 35.645;
    $null = null;
    $array = array(
        "me","we","she"
    );
    // print_r($array);

    define("MYname","Emmanuel");

    // echo MYname. "good day " . "good night";

     
    // $numTwo = 4;
    // $numTwo += 2;
    // $numTwo -= 1;
    // $numTwo *= 2;
    // $numTwo /= 2;
    // $numTwo %= 2;

    // echo $numTwo;


    // $num = 4;

    // $num++;
    // $num--;
    // ++$num;
    // --$num;
    // echo $num;



    /*
    ==
    ===
    >
    <
    >=
    <=
    !=
    !==

    AND &&
    OR ||

    */

    // $num = 'dean';
    // if ($num === "2" || $num === "sam" || $num === "david") {
    //     echo "condition is true";
    // }
    // elseif($num == "dean"){
    //     echo 'elseif';
    // }
    // else{
    //     echo 'general';
    // }

    /*
        simple array
        associative array
    */

    $allStudents = array("evelyn", "jennifer","daniel");

    $students = array(
        "name" => "john",
        "course" => "full stack",
        "students" => 12
    );
    /*
        title,
        genre,
        cast,
        year,
        premier,
        release
    */

    $movie  = array(
        "title" => "Flash",
        "genre" => "Sci-fi",
        "cast" => "Dc",
        "year" => "2021",
        "premier" => "15-05-2021",
        "release" => "07-07-2021"

    );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="card  w-50 mx-auto p-3 mt-5 text-success shadow">
    <div>
        <h1>Title: <?php echo $movie["title"] ?></h1>
        <h2>Genre: <?php  echo $movie["genre"] ?></h2>
        <h2>Cast: <?php echo $movie["cast"] ?></h2>
        <h3>Year: <?php echo $movie["year"] ?></h3>
        <h3>Premier: <?php echo $movie["premier"] ?></h3>
        <h3>Release date: <?php echo $movie["release"] ?></h3>
    </div>
        </div>
    </section>
</body>
</html>
