<!DOCTYPE html>
<html lang="en, id">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#211212">
	<meta property="og:title" content="Unduh Aplikasi">
	<meta property="og:image" content="https://osis.smkn1bws.sch.id/assets/img/logo.png">
	<meta property="og:description" content="Unduh Aplikasi Ketosin Smkn 1 Bondowoso">
	<meta property="og:url" content="https://osis.smkn1bws.sch.id/">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:type" content="article" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Download Aplikasi Ketosin . smkn1bws.sch.id</title>
	<!-- link shortcut icon -->
	<link rel="shortcut icon" type="ico/png" href="../assets/img/logo.png">
	<!-- link css -->
	<link rel="stylesheet" type="text/css" href="../lib/css/all.css">
	<!-- <link rel="stylesheet" type="text/css" href="../lib/css/aos.css"> -->
	<link rel="stylesheet" type="text/css" href="../public/css/ijendev.min.css">
	<!-- font css route link -->
	<script type="text/javascript" src="../lib/js/aos.js"></script>
	<!-- font link -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;800;900&family=Quicksand:wght@300;500;600;700&display=swap" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
	<!-- header -->
<header id="header">
	<div class="container-head">
		<a href=""><img src="../assets/img/logo.png" alt="logos"></a>
		<ul>
			<li><a href="#" onclick="window.close();">Beranda</a></li>
			<li><a href="#"  onclick="window.close();">Lomba </a></li>
			<li><a href="#visi-misi"  onclick="window.close();">Visi-misi</a></li>
			<li><a>Pilketos <b class="badge"  onclick="window.close();"><?php echo date('yy')?></b></a></li>
			<li><a href="">Unduh APK <i class="fab fa-android r-icon"></i></a></li>
		</ul>
		<a href="#" class="far fa-bars bars" onclick="bars();"></a>
	</div>
</header>
<!-- mobile sidebar -->
<div class="mobile">
		<a href="javascript:void(0);" class="closeN" onclick="closeN();">&times;</a>
		<a  onclick="window.close();">Beranda</a>
			<a  onclick="window.close();">Lomba </a>
			<a  onclick="window.close();">Visi-misi</a>
			<a  onclick="window.close();">Pilketos <b class="badge"><?php echo date('yy')?></b></a>
		<a  href="/download"  class="active" download>Unduh APK<i class="fab fa-android r-icon"></i></a>
		<br>
		<a href="/download/Ketosin.apk" id="download"  style="display: none;" download></a>
		<div class="lines"></div>
		<br>
<!-- 		<a href="#">DAFTAR</a>
		<a href="#" class="btn">MASUK</a> -->
		<p>osissmkn1bws.sch.id</p>
	</div>
	<!-- body -->
	<section class="body-wrap">
	<div class="box">
		<i class="fas fa-download"></i>
		<br><br>
		<h1>Aplikasi telah di Unduh!</h1>
		<br>
		<small>Unduhan Gagal atau tidak mengunduh? tekan tombol Unduh lagi.</small>
		<br><br>
		<button class="btn" onclick="download();" id="btn"><a id="countdown" >Coba lagi dalam 10 detik</a></button>
		<!-- <button class="btn">Panduan</button> -->
		<div class="padding"></div>
	</div>
	</section>
	<!-- footer -->
<div class="sub-footer">

		<div class="subf">
			<img src="../assets/img/logo.png">
			<p>Terima kasih telah mengunjugi situs osis smakensa, jika ingin melihat postingan follow kami di instagram!</p>
			<br>
			<button class="btn">Follow us <i class="fab fa-instagram right"></i><i class="fab fa-facebook right"></i></button>
		</div>
		<div class="subf">
			<h3>Menu</h3>
			<br>
			<div class="ul">
				<section><a href="#">Beranda</a></section>
				<section><a href="#">Lomba</a></section>
				<section><a href="#">Visi-misi</a></section>
				<section><a href="#">Pilketos</a></section>
				<section><a href="#">Pendaftaran</a></section>
			</div>

		</div>
		<div class="subf">
			<h3>Contact Us</h3>
			<br>
			<div class="ul2">
				<section><i class="fas fa-envelope"></i><a href="#">contohemail@gmail.com</a></section>
				<section><i class="fab fa-whatsapp"></i><a href="#">+62-000-000-000</a></section>
				<section><i class="fas fa-map-marked"></i><a href="#">Google maps</a></section>
				<section><i class="fab fa-instagram"></i><a href="#">@osissmkn1bondowoso</a></section>
				<section><a href="#"></a></section>
			</div>
		</div>
		<div class="subf">
		<div class="powered">
			<img src="../assets/img/smakensa.png" alt="">
			<br><br><br>
		</div>
		</div>
		<div style="padding: 30px; height: 50px;"></div>
	</div>
	<footer>
		<p>Powered by Smkn 1 Bondowoso and Ijendev SSE 2020 <i class="far fa-heart r-icon"></i></p>
		<br>
	</footer>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/js/main.js"></script>
<style type="text/css">
	.padding{
		padding: 20px;
		height: 5vh;
	}
	.box{
		color: #fff;
		text-align: center;
	}
	.box i{
		margin-top: 10%;
		font-size: 40px;
	}
	.box h1{
		color: #fff;
		font-size: 40px;
	}
</style>
<script type="text/javascript">
window.onload = function() {
        document.getElementById('download').click();
        document.getElementById("btn").disabled = true;
    }
let timeleft = 10;
 
function download() {
	 document.getElementById('download').click();
}

let downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Unduh Lagi";
    document.getElementById("btn").disabled = false;
   
  } else {
    document.getElementById("countdown").innerHTML = "Coba lagi dalam " + timeleft + " detik";
  }
  timeleft -= 1;
}, 1000);
</script>
<script type="text/javascript">
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      document.getElementById("header").style.transition = "0.4s ease-out";
      document.getElementById("header").style.boxShadow = "0px 8px 16px 0px rgba(0,0,0,0.2)";
      document.getElementById("header").style.backgroundColor = "#211212";

    } else {
      document.getElementById("header").style.transition = "0.4s ease-out";
      document.getElementById("header").style.boxShadow = "none";
      document.getElementById("header").style.backgroundColor = "transparent";

    }
  }
</script>