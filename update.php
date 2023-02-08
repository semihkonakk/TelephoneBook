<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>güncelleme</title>
</head>
<body>
<div class="w3-top w3-bar w3-green" style="height: 6%;">
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/telrehber.php" class="w3-bar-item w3-button">ANASAYFA</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/listele.php" class="w3-bar-item w3-button">LİSTE</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/hakkımızda.php#" class="w3-bar-item w3-button">HAKKIMDA</a>
<br>
</div>
    <?php
    $detay_id = $_GET['id'];
    $conn = mysqli_connect("localhost", "veri", "1234", "rehber");

    if(!$conn){
        die("Baglantida problem var: " . mysqli_connect_error());
    }
    echo "Baglanti basarili";
    echo "<br>";

    $sql = "select * from telefonrehberi where id=" . $detay_id;

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    </div>
<div class="container">
<div class="form-container">
    <br><br>
<style>
  .container {
    border: 1px solid #ccc;
    border-radius: 0px; 
    padding-left: 250px;
    padding-right: 250px;
    padding-top: 75px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(9,121,54,1) 93%);
  }
</style>
        <form action="updatekayit.php" method="GET"
        class="w3-container w3-card-4  w3-text-light-blue w3-margin">
<h2 class="w3-center">güncelle</h2><br>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-badge"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="id" type="text" value="<?php echo $row["id"]; ?>"> <br>
      <br>
    </div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="ad" type="text" value="<?php echo $row["ad"]; ?>"> <br>
    </div>
    <br>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="soyad" type="text" value="<?php echo $row["soyad"]; ?>"> <br>
    </div>
    <br>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="tel" type="number" value="<?php echo $row["numara"]; ?>"> <br>
    </div>
    <br>
</div>
<input type="submit" class="w3-button w3-block w3-section w3-cyan w3-ripple w3-padding" value="güncelle" name="submit">
        </form><br><br><br>
        </div> 
</form>   
</html>