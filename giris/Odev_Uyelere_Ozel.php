<?php
session_start();

if (isset($_SESSION["oturumSahibi"])) {
    echo "<h1>UYELERE OZEL </h1> <br/>";
    echo "Hosgeldin " . $_SESSION["oturumSahibi" ]."<br/>";
    $dosya = fopen("yemek_listesi.txt", "r");

    
}
else {
    echo "Yetkisiz Kullanicilar Giremez";
    header("refresh:5; url=ODEV_Login.php");  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEMEK LISTESI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <ul class="list-group">
        
        <?php
  while(!feof($dosya))
  {
          $satir = fgets($dosya);
        echo '
        <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            '.$satir.'
</li> 
';
}
?>
    </ul>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>