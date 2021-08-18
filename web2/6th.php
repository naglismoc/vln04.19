<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET 
ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai,
 kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->

<?php
// echo "<pre>";
// // print_r($_SERVER);

//     print_r( array_keys($_SERVER) );
// echo "</pre>";

$color = "green";
if( $_SERVER['REQUEST_METHOD'] == "POST"){
    $color = "yellow";
    header("location:./6th.php");
    die;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-color{
            background-color:<?=$color?>
        }
    </style>
</head>
<body class="bg-color">
    <form action="" method="get">
        <button type="submit">get</button>
    </form>
    <form action="" method="post">
        <button type="submit">post</button>
    </form>
</body>
</html>