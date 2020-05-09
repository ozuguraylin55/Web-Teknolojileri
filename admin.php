<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Kullanıcı Sayfası</title>
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

<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
?>


<h3> Hoşgeldiniz, <?php echo $_SESSION['username']?></h3>
<hr>
<div id="admin">

<div class="row">
 <div class="col-md-4">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Kimlik Bilgileri</h3>
  </div>
  <div class="panel-body">
     <p>TC Kimlik: ***********</p>
     <p>İsim: ***********</p>
     <p>Soyisim: ***********</p>
  </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Okul Bilgileri</h3>
  </div>
  <div class="panel-body">
     <p>Okul No: ***********</p>
     <p>Kayıt Tarihi: 2013</p>
     <p>Durumu: Aktif</p>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Yapılan Projeler</h3>
  </div>
  <div class="panel-body">
     1. <a href="#">Nesnelerin İnterneti</a><br>
     2. <a href="#">Makine Öğrenmesi</a><br>
     3. <a href="#">C# ile Oyun Tasarımı</a><br>
     4. <a href="#">Java ile Oyun Tasarımı</a><br>
     5. <a href="#">Javascript ile Web Tasarımı</a><br>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Ölçüm Ekle</h3>
  </div>
  <div class="panel-body">
         1. <a href="add_points.php">Kadıköy/İSTANBUL</a><br>
         2. <a href="add_points_nil.php">Nilüfer/BURSA</a><br>
		     3. <a href="add_points_maltepe.php">Maltepe/İSTANBUL</a>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Kadıköy Toplam Ölçüm Sayısı</h3>
  </div>
  <div class="panel-body">
          | <a href="fetch_p.php">Ölçümleri Gör</a>
  </div>
  </div>
  </div>

  <div class="col-md-4">
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Nilüfer Toplam Ölçüm Sayısı</h3>
  </div>
  <div class="panel-body">
         | <a href="fetch_p_nil.php">Ölçümleri Gör</a>
  </div>
  </div>
  </div>

</div>

<a href="BilgiGuncelle.php" class="btn btn-info" role="button">Bilgi Güncelle</a>
<a href="ProjeEkle.php" class="btn btn-info" role="button">Proje Ekle</a>
<a href="MakaleEkle.php" class="btn btn-info" role="button">Makale Ekle</a>
<a href="logout.php" class="btn btn-danger" role="button">Çıkış</a>
</div>



</body>
</html>
