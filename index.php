<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Males Ngoding</title>
	
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="./css/all.css">

		<!-- -------------- Favicon -------------------------- -->
		<link rel="shortcut icon" href="assets/icon.ico">

		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<!-- navebar -->
		<!-- akhir nabar -->

		
		<!-- bagian header -->
		<header>
			<div class="nav navbar-fixed-top">
			<div class="navbar"> 
				<div class="nav-menu flex-row">
				<h1><a href="index.html">WahyuRyanRefany</a></h1>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- akhir header -->

				<!-- menu mobile -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>
		<!-- akhir mobile -->

		<!-- bagian banner -->
		<section class="banner">
			<div class="container">
				<div class="banner-left">
					<img src="https://i.postimg.cc/Pr9Grqmf/1.jpg">
					<h2>Assalamualaikum<br>
						Saya adalah seorang <span class="efek-ngetik"></span></h2>
					<p>Selamat datang di website portfolio saya!</p>
				</div>
			</div></div>
		</section>
	</div>
	<!-- akhir banner -->

		<!-- Ini Abuot -->
		<section id="about">
			<div class="container" id="about">
				  <h3>About</h3>
				  <p>"Jika kamu tidak mencintai diri sendiri, tidak ada yang akan mencintaimu. Tidak hanya itu, kamu tidak akan pandai mencintai orang lain. Mencintai dimulai dengan diri sendiri."</p>
				  <p>"Jangan berusaha tampil sempurna. Tampil apa adanya dan jadi diri sendiri. Karena kita diciptakan unik dengan kelebihan masing-masing."</p>
				</div>
		  </section>
		  <!-- Akhir About -->

		<!-- bagian skills -->
		<section id="skills">
			<div class="container" id="skills">
				<h3>Skills</h3>
				<h4>HTML</h4>
				<div class="bar">
					<span class="nilai html">60%</span>
				</div>

				<h4>CSS</h4>
				<div class="bar">
					<span class="nilai css">50%</span>
				</div>

				<h4>Javascript</h4>
				<div class="bar">
					<span class="nilai js">30%</span>
				</div>

				<h4>Gaming</h4>
				<div class="bar">
					<span class="nilai Gaming">95%</span>
				</div>

				<h4>Desain</h4>
				<div class="bar">
					<span class="nilai Desain">45%</span>
				</div>
			</div>
		</section>
		<!-- akhir skills -->


		<!-- bagian portfolio -->
		<section id="portfolio">
			<div class="container">
				<h3>Portfolio</h3>
				<div class="col-4">
					<a href="">
						<img src="https://i.postimg.cc/mLssHhKt/3.jpg">
						<span>Portfolio 1</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="https://i.postimg.cc/zfY9KPt9/4.jpg">
						<span>Portfolio 2</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="https://i.postimg.cc/9f2nrwz2/11.jpg">
						<span>Portfolio 3</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="https://i.postimg.cc/bwk5y9yL/8.jpg">
						<span>Portfolio 4</span>
					</a>
				</div>
		</section>
		<!-- akhir portofolio -->


		<!-- bagian contact -->
		<section id="contact">
			<div class="container">
				<h3>Contact</h3>
				<div class="col-3">
					<h4>Alamat</h4>
					<p>Sidorejo Wetan, Yosomulyo,  Gambiran, Banyuwangi</p>
				</div>

				<div class="col-3">
					<h4>Email</h4>
					<p>wahyu.re38@gmail.com</p>
				</div>

				<div class="col-3">
					<h4>Telp/Hp</h4>
					<p>08994563075</p>
				</div>	
			</div>
		</section>

		<!-- bagian footer -->
		<footer>
			<div class="container">
				<small>Copyright &copy; 2021 - WahyuRyanRefany.</small>
			</div>
		</footer>
		<!-- akhir bagian footer -->
		<script src="js/script.js"></script>
	</body>
</html>

<!-- 		<script>
			var respond = prompt("Masukkan Nama Anda: ");
			var no_absen = prompt("Masukkan Nomor Absen ");
			 if(respond != "")
			 {
			 window.alert("Selamat datang di web saya " + respond + " Anda adalah pengujung ke -" + (no_absen * 3 + 2) + " pada web saya :)" );
			 }
			 else
			 {
			 window.alert("Kenapa Tidak Memasukkan Kalimat Apapun?");
			 }
		   </script>

      <body>
  <canvas id="myCanvas" style="border: 1px solid"></canvas>
  <script>
    let canvasKita = document.getElementById("myCanvas");
    canvasKita.width = 300;
    canvasKita.height = 300;
    let ctx = canvasKita.getContext("2d");

    let x = 50,
      y = 0,
      r = 50;
    let keatas = false;
    let kebawah = true;
    let kekanan = true;
    let kekiri = false;

    function animasi() {
      ctx.save();
      ctx.clearRect(0, 0, canvasKita.width, canvasKita.height);

      ctx.beginPath();
      ctx.fillStyle = "yellow";
      ctx.strokeStyle = "green";
      ctx.fillRect(50, y, 50, 50);
      ctx.fillRect(x, 60, 50, 50);
      ctx.arc(x + r, y + r, r, 0, Math.PI * 2);
      ctx.fill();
      ctx.stroke();

      cekPosisi();

      if (keatas) {
        y--;
      }
      if (kebawah) {
        y++;
      }
      if (kekanan) {
        x++;
      }
      if (kekiri) {
        x--;
      }
      ctx.restore();
    }
    setInterval(animasi, 8);

    function cekPosisi() {
      if (y + r == canvasKita.height - r) {
        keatas = true;
        kebawah = false;
      } else if (y == 0) {
        keatas = false;
        kebawah = true;
      }
      if (x + r == canvasKita.width - r) {
        kekanan = false;
        kekiri = true;
      } else if (x == 0) {
        kekanan = true;
        kekiri = false;
      }
    }
  </script> -->
</body>

		<script src="js/script.js"></script>
	</body>
</html>
