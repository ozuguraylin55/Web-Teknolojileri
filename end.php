<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
//echo 'Welcome, '.$_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
  <title>Kullanıcı ekle</title>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.gomap-1.3.3.min.js"></script>


<link rel="stylesheet" href="css/main.css">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<nav class="navbar" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.semam.org">SEMAM</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">Anasayfa</a></li>
        <li><a href="map.php">KADIKÖY</a></li>
        <li><a href="#">İletişim</a></li> 
        <li><a href="#">S.S.S.</a></li>      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Başvur </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Kullanıcı Girişi</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- FORM -->

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <!-- MAPİN OLDUĞU YER -->
        <div class="content">
              <form action="user_create2.php" method="post" class="basic-grey">
    <h1>Kullanıcı oluşturmak için değerleri girin</h1>
        <span>*Tüm alanları doldurun.</span>
    </h1>
    <label>
        <span>Kullanıcı Adı:</span>
        <input id="enlemboylam" type="text" name="isim" placeholder="Kullanıcı Adı" />
    </label>
    
    <label>
        <span>Şifre:</span>
        <input id="enlemboylam" type="password" name="sifre1" placeholder="Şifre" />
    </label>
    <br>
  
     <label>
        <span>Şifre Tekrar:</span>
        <input id="def" type="password" name="sifre2" placeholder="Şifre Tekrar" />
    </label> 

        <label>
        <span>&nbsp;</span> 
        <span>&nbsp;</span> 
        <input type="submit" class="btn btn-danger" value="Oluştur" /> 
    </label>    
</form>
          </div>
        
      <!--form BİTİŞİ -->
      </div>
    <div class="col-sm-2"></div>
</div>


</div>

<div class="linkler">
<a href="admin.php" class="btn btn-primary" role="button">Anasayfa</a>
</div>

<footer>
<p>Copyright 2020 Aylin Özoğuz | SAKARYA ÜNİVERSİTESİ | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>