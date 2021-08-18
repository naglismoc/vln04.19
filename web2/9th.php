<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) 
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, 
forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->
<?php
$color = "gray";
$letters = ['A','B','C','D','E','F','G','H','I','J'];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkbox'])){
    echo count(($_POST['checkbox']))."/".$_POST['times'];
    $color = "white";
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
        .lbl{
            color:white;
        }
    </style>
</head>
<body style="background-color:<?=$color?>;">

<?php if($_SERVER['REQUEST_METHOD'] == "GET"){ ?>
    <form action="" method="post">
    <?php for ($i=0; $i < rand(3,10); $i++) { ?>
        <label class="lbl" for="a <?=$i?>" > <?=$letters[$i]?> </label>
        <input type="checkbox" name="checkbox[]" id="a <?= $i ?>">
        <br>
    <?php } ?>
    <input type="hidden" name="times" value=" <?=$i?> ">
      <br> <button type="submit">generate</button>
    </form>
<?php } ?>
</body>
</html>

<script>



</script>