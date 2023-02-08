<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SİLME İŞLEMİ</title>
</head>
<body>
<div class="w3-top w3-bar w3-teal" style="height: 6%;">
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/telrehber.php" class="w3-bar-item w3-button">ANASAYFA</a>
<a style="font-size:  x-large; " href="http://localhost/php/benimornek/listele.php" class="w3-bar-item w3-button">LİSTE</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/hakkımızda.php#" class="w3-bar-item w3-button">HAKKIMIZDA</a>
<br>
</div>
<?php
$silinecek_id = $_GET['id'];

$conn = mysqli_connect("localhost", "veri", "1234", "rehber");

if(!$conn){
    die("bağlantıda problem var: " . mysqli_connect_error());
}
$sql = "DELETE FROM telefonrehberi WHERE id=$silinecek_id";

if($conn->query($sql)===TRUE){
}
?>
<style>
      body {
        text-align: center;
        padding: 200px 0;
        background: rgb(34,193,195);
        background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(9,121,54,1) 93%);
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <br><br><br><br>
<div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
      </div>
        <h1>başarılı</h1> 
        <p>Kişi başarı ile kaldırıldı.</p>
      </div>
</body>
</html>
