<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REHBER</title>
    <a class="btn btn-info btn-lg btn-block" role="button" href="http://localhost/php/benimornek/telrehber.php">Kayıt sayfasına geri dön</a>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
                <?php
                $conn = mysqli_connect("localhost", "veri", "1234", "rehber");

                if(!$conn){
                    die("Baglantida problem var: ") . mysqli_connect_error();
                }
                $sql = "select * from telefonrehberi";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table class='table table-dark' border = 1 >
                    <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>İsim</th>
                    <th scope='col'>Soyisim</th>
                    <th scope='col'>Numara</th>
                   
                
                    </tr>";
                while($row=$result->fetch_assoc()){
                    $link1 = "http://localhost/php/benimornek/delete.php?id=" . $row["id"];
                    $link2 = "http://localhost/php/benimornek/detay.php?id=" . $row["id"];
                    $link3 = "http://localhost/php/benimornek/update.php?id=" . $row["id"];
                    echo "<tbody class='table table-dark' border >
                    <tr><td>".$row["id"]."</td><td>".$row["ad"]."</td><td>".$row["soyad"]."</td><td>".$row["numara"]."</td>
                    <td><a href= $link1 <button type='button' class='btn btn-danger btn-lg btn-block'>Sil </a></td>
                    <td><a href= $link2 <button type='button' class='btn btn-info btn-lg btn-block'>detay </a></td>
                    <td><a href= $link3 <button type='button' class='btn btn-success btn-lg btn-block'>güncelle </a></td>
                    </tr>";
                    
                }
                echo "</table>";
                } else {
                echo "0 results";
                }
                $conn->close();
                ?>      
</body>
</html>


