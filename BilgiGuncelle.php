
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
  <title>Makale Ekle</title>
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
      <a class="navbar-brand" href="http://cs.sakarya.edu.tr/">SAÜ</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Anasayfa</a></li>
        <li><a href="#">Hakkımızda</a></li>
        <li><a href="#">İletişim</a></li> 
        <li><a href="#">Şehir</a></li>   
        <li><a href="#">Miras</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Kullanıcı Girişi</a></li>
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
              <form action="BilgiGuncelle2.php" method="post" class="basic-grey">
    <h1>Makale bilgileri giriniz</h1>
        <span>*Tüm alanları doldurun.</span>
    </h1>
    <label>
        <span>Makale Adı:</span>
        <input id="MakaleAdi" type="text" name="MakaleAdi" placeholder="Makale Adı" />
        <input type="checkbox" checked />
    </label>

    <label>
        <span>Dergi Adı:</span>
        <input id="DergiAdi" type="text" name="DergiAdi" placeholder="Dergi Adı" />
        <input type="checkbox" checked />
    </label>

    <label>
        <span>Dergi Kategorisi:</span>
        <input id="DergiKategorisi" type="text" name="DergiKategorisi" placeholder="Dergi Kategorisi" />
        <input type="checkbox" checked />
    </label>
    
    <label>
        <span>Sayfa:</span>
        <input id="Sayfa" type="text" name="Sayfa" placeholder="Sayfa" />
        <input type="checkbox" checked />
    </label>
  
     <label>
        <span>ISBN:</span>
        <input id="ISBN" type="text" name="ISBN" placeholder="ISBN" />
        <input type="checkbox" checked />
    </label> 

    <label>
        <span>Tarih:</span>
        <input id="Tarih" type="text" name="Tarih" placeholder="Tarih" />
        <input type="checkbox" checked />
    </label> 
        <label>
        <span>&nbsp;</span> 
        <input type="submit" class="btn btn-danger" value="Gönder" /> 
        <input type="button" class="btn btn-danger" value="Temizle" /> 
    </label>    
</form>
          </div>
        
      <!--form BİTİŞİ -->
      </div>
    <div class="col-sm-2"></div>
</div>


</div>

<div class="linkler">
<a href="admin.php" class="btn btn-info" role="button">Anasayfa</a>
<a href="BilgiGuncelle.php" class="btn btn-info" role="button">Bilgi Güncelle</a>
<a href="ProjeEkle.php" class="btn btn-info" role="button">Proje Ekle</a>
<a href="logout.php" class="btn btn-danger" role="button">Çıkış</a>
</div>
</body>
</html>