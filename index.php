<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
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

  <title>Anasayfa</title>
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
        <li><a href="hakkimizda.php">Hakkımızda</a></li>
        <li><a href="iletisim.php">İletişim</a></li> 
        <li><a href="sehir.php">Şehir</a></li>   
        <li><a href="miras.php">Miras</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Kullanıcı Girişi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- SAYFA İÇERİĞİ -->

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2" id="bases"><h4><code>Baz Bilgileri:</code></h4><br></div>
      
      <div class="col-sm-8">
      <!-- MAPİN OLDUĞU YER -->
      <div id="map">MAP</div>
      <button type="button" class="btn btn-primary btn-block" name="add" id="add">Baz İstasyonlarını Göster</button>
      <!--MAP BİTİŞİ -->
      </div>
    <div class="col-sm-2" id="meas"><h4><code>En yakın Ölçümler:</code></h4></div>
    <div class="col-sm-2" id="meas2"><h4><code>Haritaya tıklanmadı</code></h4></div>
</div>

<div class="row">  
  <div class="col-md-7" id="olclist"><h3>Buraya ölçüm noktası bilgileri listelenecek.</h3></div>
    <div class="col-md-5"><h3>Risk Durumu <small><i>Bioinitiative Report 2012'ye göre</i></small></h3>
    D kademesi için 0.1-0.99 arası; (Kabul edilebilir risk)<br>
  C kademesi için 1 - 1.99 arası; (Sadece dış ortamlarda kabul edilebilir risk) <br>
  B kademesi için 2 - 2.99 arası; (İç ortamlar için risk mevcut) <br>
  A kademesi için 3 ve üzeridir.(Yüksek Risk) </div>
</div>
</div>

</body>

</html>





