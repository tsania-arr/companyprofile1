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

      h2 {
        font-size: 48px;
        color: #10F5CC;
        z-index: 1;
      }

      h4 {
        font-size: 40px;
        color: #10F5CC;
        z-index: 1;
      }

      /* style visi dan misi */
      .p-visi{
        text-align: justify;
        color: #F5FEFD;
        margin-top:20px;
      }

      .p-misi{
        text-align: justify;
        color: #F5FEFD;
        margin-top:25px;
      }

      .box-visi{
        width: 100%;
        height: 100px;
        background-color: #3A4F52;
        border-radius: 10px;
      }

      .box-misi{
        width: 100%;
        height: 250px;
        background-color: #3A4F52;
        border-radius: 10px;
      }

      .ul-misi{
        color: #F5FEFD;
      }

    </style>

    <!-- navbar -->
        <div class="col-md">
          <nav class="navbar navbar-expand-lg bg-body-transparent">
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
                  <a class="nav-link mx-2"href="home.php">Home</a>
                  <a class="nav-link mx-2"href="profile.php">Profil</a>
                  <a class="nav-link mx-2 active" aria-current="page" href="visimisi.php">Visi dan Misi</a>
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
    <div class="sidebar ">
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

    <!-- visi dan misi -->
    <section id="vimi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b>Visi Dan Misi</b></h2>
                </div>
            </div>
            <!-- visi -->
            <div class="row mt-5">
                <div class="col-md-12">
                <div class="col-md-2" style="border-bottom: 4px solid #1B2326;">
                    <h4><b>Visi</b></h4>
                    <p></p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="box-visi">
                    <div class="col-md-12">
                        <p class="p-visi">
                        Menjadi komunitas motor yang unggul, memimpin dalam pelayanan rental motor, dan mendedikasikan diri untuk meningkatkan kualitas hidup masyarakat.
                        </p>
                    </div>
                </div>
                </div>
            </div>
            <!-- misi -->
            <div class="row mt-5">
                <div class="col-md-2" style="border-bottom: 4px solid #1B2326;">
                    <h4><b>Misi</b></h4>
                    <p></p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="box-misi">
                    <div class="col-md-12">
                        <p class="p-misi"> untuk mewujudkan visi komunitas kami ada beberapa misi yang akan kami lakukan yaitu sebagai berikut: 
                        <ul class="ul-misi">
                            <li>Memberikan kesempatan kepada siapapun untuk mencoba koleksi motor E-bike</li>
                            <li>Komunitas yang solid</li>
                            <li>Melibatkan komunitas dalam kegaitan kemanusiaan seperti program sosial dan kampanye kesalamatan berkendara</li>
                            <li>terus mengembangkan layanan rental motor agar menjangkau lebih banyak khalayak umum</li>
                            <li>melakukan kolaborasi dengan pihak eksternal seperti pemerintah, sekolah dan sebagainya</li>
                            <li>mengedepankan kesadaran keselamatan berkendara melakukan edukasi dan pelatihan.</li>
                        </ul>
                        </p>
                    </div>
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