<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="w3-top w3-bar w3-teal" style="height: 6%;">
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/telrehber.php" class="w3-bar-item w3-button">ANASAYFA</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/listele.php" class="w3-bar-item w3-button">LİSTE</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/hakkımızda.php#" class="w3-bar-item w3-button">HAKKIMIZDA</a>
<br>
</div>
        <?php
        echo "<style>
        body {
          text-align: center;
          padding: 200px 0;
          background: rgb(34,193,195);
          background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(9,121,54,1) 93%);
        }
          h1 {
            color: #88B04B;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color: #404F5E;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
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
      </style>";
            $s1 = $_POST['ad'];
            $s2 = $_POST['soyad'];
            $s3 = $_POST['numara'];
            echo "<div class='card'>
            <i class='checkmark'>✓</i>
              <h1>KAYIT BAŞARILI</h1> 
              <p>Adı: $s1</p>
              <p>Soyadı: $s2</p>
              <p>Numarası: $s3</p>
            </div>";
        ?>
         <?php
            $servername="localhost";
            $username="veri";
            $password="1234";
            $dbname = "rehber";
            $conn = new mysqli($servername, $username, $password, $dbname);
             $db = mysqli_connect("localhost", "veri","1234", "rehber");
             
             if (!$conn){
                die("bağlantida problem var:".mysqli_connect_error());
             }
             $sql="INSERT INTO telefonrehberi (ad,soyad,numara)
             VALUES ('$s1','$s2','$s3')";

             echo "<br>";
             
             if ($conn->query($sql)===TRUE){
             }
             ?>
    </body>
</html>