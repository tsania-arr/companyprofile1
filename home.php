<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- title -->
    <title>E-Bike</title>

    <!-- logo -->
    <link rel="icon" href="gambar/logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <!-- style css -->
    <style>

      /* style navbar */
      body{
        font-family: 'Poppins', sans-serif;
      }
      .rownav{
        z-index: 3;
      }

      *{
        z-index: 2;
      }

      .sidebar{
        z-index: 3;
      }

      .img-banner{
        z-index: 1;
      }

      .navbar-brand{
        font-size: 20px;
      }

      .nav-link {
        font-size : 16px;
      }

      .nav-link.active{
        font-weight: 700;
      }

      /* style sidebar */
      .btn-custom{
        background-color: #10F5CC;
      }

      /* style hero section */
      #hero{
        background: linear-gradient(90deg, #1B2326,#3A4F52);
        height: 100vh;
        width: 100%;
      }

      .hero-tagline{
        margin-top: 100px;
        z-index: 1;
      }

      .hero-tagline h1{
        color: #10F5CC;
        font-weight: 700;
        font-size: 46px;
        line-height: 72px;
        z-index: 1;
      }

      .hero-tagline p {
        font: size 20px;
        color: #10F5CC;
        margin-top: 20px;
        margin-bottom: 60px;
        line-height: 30px;
      }

      .button-hero-primary{
        width: 237px;
        height: 70px;
        background-color: #F5FEFD;
        color: #3A4F52;
        border: none;
        border-radius: 10px; 
        font-size: 20px;
      }

      /* kegiatan section */
      #kegiatan{
        padding: 100px 0;
        z-index: 1;
      }

      h2 {
        font-size: 48px;
        color: #10F5CC;
        z-index: 1;
      }

      .sub-kegiatan{
        font-size: 18px;
        color: black;
      }

      .card-kegiatan{
        margin-top: 60px;
        width: 100%;
        height: 400px;
        border-radius: 10px;
        background-color: #F5FEFD;
        padding: 40px;
        box-shadow: 0 0 8px 5px rgba(0,0,0,0.06);

        transition: all .2s ease-in;
      }

      .circle-icon{
        width: 150px;
        height: 150px;
        background-color: #F5FEFD;
        border-radius: 50%;
        z-index: 1;

        transition: all .1s ease-in;
      }

      .card-kegiatan h3{
        color:#1B2326;
        font-size: 24px;
        z-index: 1;

        transition: all .2s ease-in;
      }

      .card-kegiatan p {
        color: #1B2326;
        font-size: 15px;
        z-index: 1;

        transition: all .3s ease-in;
      }

      /* Hover */
      .card-kegiatan:hover{
        margin-top: 60px;
        width: 100%;
        height: 400px;
        border-radius: 10px;
        background-color: #3A4F52;
        padding: 40px;
        box-shadow: 0 0 8px 5px rgba(0,0,0,0.06);
        z-index: 1;
        transition: all .2s ease-in;
      }

      .circle-icon:hover{
        width: 150px;
        height: 150px;
        background-color: #F5FEFD;
        border-radius: 50%;
        z-index: 1;
        transition: all .2s ease-in;
      }

      .card-kegiatan:hover h3{
        color:#F5FEFD;
        font-size: 24px;
        z-index: 1;
        transition: all .2s ease-in;
      }

      .card-kegiatan:hover p {
        color: #F5FEFD;
        font-size: 15px;
        z-index: 1;
        transition: all .2s ease-in;
      }

      /* style kata pengantar */
      #katapengantar{
        padding: 100px 0;
        background: linear-gradient(90deg, #1B2326,#3A4F52);
        color:#F5FEFD;
        width: 100%;
      }

      .katpeng{
        text-align: justify;
      }

    </style>

    <!-- logo, nama perusahaan, dan navbar -->
    <div class="rownav">

      <!-- logo dan nama -->
      <!-- <div class="col-md-4">
        <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <center>
            <img src="gambar/logo.png" alt="" style="width: 100px;">
            </center>
          </div>
          <div class="col row align-items-center" style="margin-left: -12px;">
            <h1>E-Bike</h1>
          </div>
        </div>
        </div>
      </div> -->

        <!-- navbar -->
        <div class="col-md">
          <nav class="navbar navbar-expand-lg bg-body-transparent position-fixed w-100">
            <div class="container">
            <a class="navbar-brand" href="#">
            <img src="gambar/logo.png" alt="Bootstrap" width="50" class="d-inline-block align-text-center me-3" >
              <b>E-Bike</b>
            </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                  <a class="nav-link mx-2 active" aria-current="page" href="home.php">Home</a>
                  <a class="nav-link mx-2" href="profile.php">Profil</a>
                  <a class="nav-link mx-2" href="visimisi.php">Visi dan Misi</a>
                  <a class="nav-link mx-2" href="jasa.php">Jasa Kami</a>
                  <a class="nav-link mx-2" href="kontak.php">Kontak Kami</a>
                  <a class="nav-link mx-2" href="tentang.php">Tentang Kami</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      
    </div>
       
<!-- sidebar -->
<div class="sidebar position-fixed">
<a class="btn btn-custom" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style=" margin-top: 50px; margin-left: -21px;">
      <img src="gambar/Forward.png" alt="" width=40px>
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Sidebar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
          <ul class="menu">
                <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                <li><a class="dropdown-item" href="event.php">Event</a></li>
                <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                <li><a class="dropdown-item" href="klien.php">Klient</a></li>
                <li><a class="dropdown-item" href="input.php">Input Data</a></li>
          </ul>
      </div>
    </div>
</div>

    <!-- hero section -->
    <section id="hero">
      <div class="container" h-100>
        <div class="row" h-100>
          <div class="col-md-6 hero-tagline">
            <h1>Nikmati Waktu Hobimu Dengan E-Bike</h1>
            <p><b>E-Bike</b> Hadir untuk temani semua moment saat kamu menikmati hobi yang kamu gemari. Temukan teman dan motor impianmu disini.</p>

            <!-- button header -->
            <a href="profile.php"><button class="button-hero-primary"><b>Selengkapnya</b></button></a>
            
            <!-- <a href="#">
              <img src="gambar/Forward.png" alt="">
            </a> -->
          </div>
        </div>
        <img src="gambar/motor.png" alt="" class="position-absolute end-0 bottom-0 img-banner" >
        <!-- <img src="gambar/pattern.png" alt="" class="h-100 position-absolute start-0 top-0 img-pattern"> -->
      </div>
    </section>

    <!-- kegiatan kami -->
    <section id="kegiatan">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">  
            <h2>Kegiatan Kami</h2>
            <span class="sub-kegiatan"><b>E-Bike</b> siap membuat harimu penuh dengan kenangan yang berharga</span>
          </div>
        </div>

        <div class="row">
          <!-- kegiatan 1 -->
          <div class="col-md-4 text-center">
            <div class="card-kegiatan">
              <div class="circle-icon position-relative mx-auto">
                <img src="gambar/kegiatan1.png" alt="" width="130" class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Touring</h3>
              <p class="mt-3">Kegiatan touring dilakukan rutin selama 1 bulan sekali untuk semua anggota dan dibuka juga untuk umum</p>
            </div>
          </div>
          <!-- kegiatan 2 -->
          <div class="col-md-4 text-center">
            <div class="card-kegiatan">
              <div class="circle-icon position-relative mx-auto">
                <img src="gambar/kegiatan2.png" alt="" width="150" class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Kemah Bersama</h3>
              <p class="mt-3">Kegiatan Kemah bersama dilakukan setiap akhir tahun untuk meningkatkan solidaritas dari para anggota.</p>
            </div>
          </div>
          <!-- kegiatan 3 -->
          <div class="col-md-4 text-center">
            <div class="card-kegiatan">
              <div class="circle-icon position-relative mx-auto">
                <img src="gambar/kegiatan3.png" alt="" width="130" class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Sewa Motor</h3>
              <p class="mt-3">Selain menyalurkan hobi anggota dapat menyewakan motornya untuk anggota atau pengga lainnya.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- kata pengantar -->
    <section id="katapengantar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <center><h2><b>Selamat Datang!!</b></h2></center>
              <p class="katpeng mt-3 text-justify">
                Selamat datang di Komunitas E-Bike, tempat di mana semangat petualangan bertemu dengan inovasi modern! Kami dengan bangga mempersembahkan layanan penyewaan motor E-Bike dari berbagai jenis motor mulai dari jadul hingga listrik. <br><br>

                Komunitas E-Bike bukan sekadar klub motor biasa. Kami adalah komunitas yang menghargai kebebasan, kecepatan, dan koneksi sosial. Dengan koleksi motor E-Bike terbaik kami, kami tidak hanya menawarkan kendaraan bertenaga listrik yang efisien atau motor jadul yang kece , tetapi juga pengalaman berkendara yang tak terlupakan. <br><br>

                Setiap detik bersama Komunitas E-Bike adalah petualangan baru yang menanti untuk dijelajahi. Apakah kamu seorang pengendara berpengalaman atau sedang mencari sensasi baru, klub kami membuka pintu bagi kamu. Nikmati kebebasan berkendara di tempat-tempat indah, rangkul kecepatan tanpa batas, dan bergabunglah dengan komunitas yang berbagi semangat petualangan. <br><br>

                Jelajahi website kami, temukan koleksi motor E-Bike yang canggih, dan rasakan kegembiraan menyewa motor bersama komunitas E-Bike. Bersiaplah untuk merasakan sensasi berkendara yang belum pernah kamu alami sebelumnya. Selamat bergabung di dunia seru komunitas E-Bike! 
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-body text-center py-3">
      <p class="m-0">Copyright@2023 Tsania</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

