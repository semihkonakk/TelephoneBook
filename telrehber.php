
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Telefon rehberi</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="th.css">
<body>
    <br><br>
    <div class="w3-top w3-bar w3-teal " style="height: 6%;">
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/listele.php" class="w3-bar-item w3-button">LİSTE</a>
<a style="font-size:  x-large;" href="http://localhost/php/benimornek/hakkımızda.php#" class="w3-bar-item w3-button">HAKKIMDA</a>
<a style="font-size:  x-large;" href="#contact" class="w3-bar-item w3-button">BANA ULAŞIN</a>
<br>
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
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(9,121,54,1) 93%);
  }
</style>
        <form  action="kaynak.php" method="post"
        class="w3-container w3-card-4  w3-text-light-blue w3-margin">
        <div class="phone">
	<ul class="content">
		<li></li>
	</ul>
	<div class="cover"></div>
	<div class="cover"></div>
	<div class="cover"></div>
</div>
<h2 class="w3-center">Telefon rehberi kayıt ekranı</h2><br>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="ad" type="text" placeholder="adınızı giriniz">
    </div>
    <br>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="soyad" type="text" placeholder="Soyadınızı giriniz">
    </div>
    <br>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="numara" type="number" placeholder="telefon numaranızı giriniz">
    </div>
    <br>
</div>
<input type="submit" class="w3-button w3-block w3-section w3-cyan w3-ripple w3-padding" value="gönder" name="submit">
        </form><br><br><br>
            <div id="contact" class="w3-container w3-center w3-padding-32">
            <h2 class="w3-wide">iletişim</h2>
                İstanbul, TR<br>
                Phone: +90 541 977 6153<br>
                Email: semih.konak60@icloud.com<br>
            <p class="w3-opacity w3-center"><i>TAVSİYELERİNİZ!</i></p><br><br>
             <form action="/action_page.php" target="_blank">
             <input class="w3-input" type="text" placeholder="Name" required name="Name">
             <input class="w3-input" type="text" placeholder="Email" required name="Email">
             <input class="w3-input" type="text" placeholder="Message" required name="Message"><br>
             <button class="w3-button w3-black" type="submit">SEND</button>
        </div> 
</form>   <br><br>
</body>
</html>
