<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
//echo 'Welcome, '.$_SESSION['username']; 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title> Tüm baz istasyonları </title>

<!-- BOOTSTRAP and DATATABLES -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css">
<!-- MY CSS -->
<link rel="stylesheet" href="css/main.css">
<!-- JS FILES -->
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>



<!-- GOOGLE FONT : OPEN SANS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
<script type="text/javascript" language="javascript" src="js/tablo.js"></script>


</head>

<body>
<nav class="navbar" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.sakarya.edu.tr/">SAU</a>
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Başvur </a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Kullanıcı Girişi</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
	echo '<div class="container">';
	echo '<h1 class="baslik">MAKALELER</h1>';

	echo '<table id="tablo" cellspacing="0" class="display table table-striped table-bordered">';
	echo "<thead>";
	echo "<tr>";
			echo "<th>";
			echo "Makale Adi";
			echo "</th>";
			echo "<th>";
			echo "Dergi Adi";
			echo "</th>";
			echo "<th>";
			echo "Dergi Kategorisi";
			echo "</th>";
			echo "<th>";
			echo "Sayfa";
			echo "</th>";
			echo "<th>";
			echo "ISBN";
			echo "</th>";
			echo "<th>";
			echo "Tarih";
			echo "</th>";
			echo "<th>";
			echo "Sil";
			echo "</th>";
			echo "<th>";
			echo "Düzenle";
			echo "</th>";
	echo "</tr>";	
	echo "</thead>";
	echo "<tbody>";

		echo "<tr>";
		echo "<td>";
		echo $_POST['MakaleAdi'];
		echo "</td>";
		echo "<td>";
		echo $_POST['DergiAdi'];
		echo "</td>";
		echo "<td>";
		echo $_POST['DergiKategorisi'];
		echo "</td>";
		echo "<td>";
		echo $_POST['Sayfa'];
		echo "</td>";
		echo "<td>";
		echo $_POST['ISBN'];
		echo "</td>";
		echo "<td>";
		echo $_POST['Tarih'];
		echo "</td>";
		echo "<td>";
		echo 'Tasarlanmadi';
		echo "</td>";
		echo "<td>";
		echo 'Tasarlanmadi';
		echo "</td>";
	echo "</tr>";
	echo "</tbody>";

	echo "</table>";
	




?>
<hr>
<div id="butonlar">
<a href="admin.php" class="btn btn-warning" role="button">Admin Sayfam</a>
<a href="logout.php" class="btn btn-warning" role="button">Çıkış</a>
</div>
</div>

<footer id="altfooter">
<p>Copyright 2020 Aylin Özuğur | SAKARYA ÜNİVERSİTESİ | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>