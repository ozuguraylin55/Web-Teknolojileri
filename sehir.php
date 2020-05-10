<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.gomap-1.3.3.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" href="css/main.css">

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
        <li><a href="hakkimizda.php">Özgeçmiş</a></li>
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

<div class="container">
  <center>
  <h2>Benim Şehrim SAMSUN</h2>
  <center>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="https://www.tripadvisor.com.tr/Attraction_Review-g298035-d14958033-Reviews-Atakum_Sahili-Samsun_Turkish_Black_Sea_Coast.html">
          <img src="img/firstSlider.png" alt="Los Angeles" style="width:100%;"></a>
      </div>

      <div class="item">
        <a  href="https://www.samsun.com.tr/konum.aspx?id=312#.XrbQwmgzaUk">
          <img src="img/secondSlider.png" alt="Chicago" style="width:100%;"></a>
      </div>
    
      <div class="item">
        <a href="https://www.samsun.com.tr/moduller.aspx?modul=ortak-kultur-sanat#.XrbRomgzaUk">
          <img src="img/thirdSlider.png" alt="New york" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="https://www.samsun.com.tr/moduller.aspx?modul=ortak-kultur-sanat#.XrbRomgzaUk">
          <img src="img/fourthSlider.png" alt="sdsd" style="width:100%;"></a>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




<div class="container-fluid">
  <div class="row">
      <div class="col-md-6">
      <!-- MAPİN OLDUĞU YER -->
    <div class="Konteynır">
      <center>
        <h2>

         GENEL BİLGİLER

        </h2>
      </center>
    <p1>
        <ul>
            <li>Yüzölçümü : 9.579 kilometrekare</li>
            <li>Nüfusu : 1.269.989</li>
            <li>İl Trafik Kodu : 55</li>
            <li>Verimli Çarşamba ve Bafra Ovaları ile bu ovalara hayat veren Yeşilırmak ve Kızılırmak,
            Samsun'un belirgin coğrafi karakteristik özellikleridir. Bu ovalarda 
            yetiştirilen tarımsal ürünler, bölgemizin ticari ve sınai varlığının da asıl etkenleridir.</li>
            <li>İlimizin 957.888 ha. toprak büyüklüğünün % 46.87 si tarım alanı olup, 
            bu alanlarda başta tütün, buğday, pirinç, şekerpancarı, mısır, fındık, 
            ayçiçeği, meyve ve sebze olmak üzere, çok çeşitli ürün yetiştirilmektedir. 
            İlin tarımsal durumu nedeniyle, tarıma dayalı sanayinin teşviki ve geliştirilmesi gereklidir.</li>
            <li>Organize Sanayi Bölgesi büyük ölçüde tamamlanmış olup,
            Kavak ve Bafra Organize Sanayi Bölgelerinin bitirilme çalışmaları devam etmektedir.</li>
            <li>Her geçen yıl çeşitli bölüm ve fakültelerin eklenmesi ile gelişen Ondokuz
            Mayıs Üniversitesinin şu anki öğrenci sayısı 30,000’dur. Üniversitemiz Samsun’
            un kültür odağı ve gurur kaynağıdır.</li>
            <li>Coğrafi konumu itibariyle bölgenin merkezi durumunda bulunan 
            ilimizde hemen hemen tüm kuruluşları bölge müdürlükleri yer almaktadır.</li>
            <li>Karadeniz Bölgesinde yer alan Samsun, doğal tarihi ve kültürel
            zenginlikleri, deniz, kara, hava, demiryolu ulaşım olanakları ile bölgenin
            turizm potansiyeli en yüksek kentlerinden biridir. Anadolu'nun savunulmasını
            planlamak amacı ile Atatürk'ün 19 Mayıs, 1919'da gelmesi ile Samsun,
            Türk İstiklal Savaşı'nın başladığı yer olma özelliği ile önemini her zaman korumuştur</li>
            <li>Alaçam,Asarcık,Atakum,Ayvacık,Bafra,Çarşamba,Canik,Havza,Kavak,Ladik,
            19Mayıs,Salıpazarı,Tekkeköy,Terme,İlkadım,Vezirköprü,Yakakent olmak üzere 17 İlçesi vardır</li>
        </ul>
    </p1>
   </div>

      </div>
      <div class="col-md-6" id="bases">
        <div class="Konteynır">
        <center>
          <h3>

           GEZİLECEK YERLER

          </h3>
        </center>
          <p2>
            <ol>
              <li>Samsun Arkeoloji ve Etnografya Müzesi</li>
              <li>Samsun Kent Müzesi</li>
              <li>Gazi Müzesi</li>
              <li>Tütün İskelesi ve Kurtuluş Yolu</li>
              <li>Bandırma Vapuru ve Milli Mücadele Parkı Açık Hava Müzesi</li>
              <li>Milli Kurtuluş Anıtı</li>
              <li>Onur Anıtı</li>
              <li>İlkadım Anıtı</li>
              <li>Amazon Adası, Batı Park</li>
              <li>Amisos Tepesi</li>
              <li>Sevgi Gölü</li>
              <li>Kızılırmak Deltası Kuş Cenneti</li>
              <li>Ladik Gölü</li>
              <li>Şahinkaya Kanyonu Tabiat Parkı</li>
            </ol>
          </p2>
          <center>
          <h4>

            YEMEKLER

          </h4>
          </center>
          <p3>
            <ol>
              <li>Mısırlı Fasulye Çorbası</li>
              <li>Ispanak Çorbası</li>
              <li>Haluçka</li>
              <li>Bafra Pidesi</li>
              <li>Terme Pidesi</li>
              <li>Baklalı Sarma</li>
              <li>Kaz Pilavı</li>
              <li>Fasulye Turşu Kavurması</li>
              <li>Büryan</li>
              <li>Kağıtta Hamsi</li>
              <li>Mantarlı Pilav</li>
              
            </ol>
          </p3>
      </div>

      </div>

      
</div>
</div>

<footer id="altfooter">
<p>Copyright 2020 Aylin Özuğur | SAKARYA ÜNİVERSİTESİ | Tüm haklar saklıdır.</p>
</footer>

</body>

</html>





