<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='detay.css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>
<div class='col-xl-6 col-md-12'>
<div class="w3-top w3-bar w3-teal" style="height: 6%;">
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/telrehber.php" class="w3-bar-item w3-button">ANASAYFA</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/listele.php" class="w3-bar-item w3-button">LİSTEYE DÖN</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/hakkımızda.php#" class="w3-bar-item w3-button">HAKKIMDA</a>
<br><br>
</div>
<?php
$detay_id = $_GET['id'];
$conn=mysqli_connect('localhost','veri','1234','rehber');

if(!$conn){
    die('baglantida sorun var: ' . mysqli_connect_error());
}
$sql = 'select * from telefonrehberi where id=' . $detay_id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<br><br>";
echo 
    "<div class='page-content page-container' id='page-content'>
    <div class='padding'>
        <div class='row container d-flex justify-content-center'>
    <div class='card user-card-full'>
<div class='row m-l-0 m-r-0'>
    <div class='col-sm-4 bg-c-lite-green user-profile'>
        <div class='card-block text-center text-white'>
            <div class='m-b-75'>
                <img src='https://img.icons8.com/bubbles/100/000000/user.png' class='img-radius' alt='User-Profile-Image'>
            </div>
            <i class='mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16'></i>
        </div>
    </div>
    <div class='card user-card-full'>
<div class='row m-l-0 m-r-0'>
    <div <a style='background-color: white';</a>
        <div class='card-block text-center text-white'>
    <div class='col-sm-8'>
        <div class='card-block'>
            <h2 class='m-b-20 p-b-5 b-b-default f-w-600'>Detaylar</h2>
            <div class='row'>
                <div class='col-sm-6'>
                    <h4 class='m-b-10 f-w-600'>ID</h4>
                    <h6 class='text-muted f-w-400'>$row[id]</h6>
                </div>
                <div class='col-sm-6'>
                    <h4 class='m-b-10 f-w-600'>AD</h4>
                    <h6 class='text-muted f-w-400'>$row[ad]</h6>
                </div>
                <div class='col-sm-6'>
                    <h4 class='m-b-10 f-w-600'>SOYAD</h4>
                    <h6 class='text-muted f-w-400'>$row[soyad]</h6>
                </div>
                <div class='col-sm-6'>
                    <h4 class='m-b-10 f-w-600'>NUMARA</h4>
                    <h6 class='text-muted f-w-400'>$row[numara]</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>";
?>
</body>
</html>