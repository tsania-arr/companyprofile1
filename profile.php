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

      /* style pengalaman */
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

      .p-pengalaman{
        text-align: justify;
        color: #F5FEFD;
        margin-top:20px;
      }

      .box-pengalaman{
        width: 100%;
        height: 200px;
        background-color: #3A4F52;
        border-radius: 10px;
      }

      /* style kelebihan */
      .ul-kelebihan{
        color: #F5FEFD;
      }
      .p-kelebihan{
        margin-top:40px;
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
                  <a class="nav-link mx-2 active" aria-current="page" href="profile.php">Profil</a>
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
            <ul class="menu" >
                <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                <li><a class="dropdown-item" href="event.php">Event</a></li>
                <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                <li><a class="dropdown-item" href="klien.php">Klient</a></li>
                <li><a class="dropdown-item" href="input.php">Input Data</a></li>
            </ul>
        </div>
        </div>
    </div>

    <!-- pengalaman -->
    <section id="pengalaman">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b>Profile E-Bike</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" style="border-bottom: 4px solid #1B2326;">
                    <h4><b>Pengalaman</b></h4>
                </div>
            </div>
            <div class="row mt-4 ktpengalaman">
                <div class="box-pengalaman">
                <div class="col-md-12 " >
                    <p class="p-pengalaman"><b>E-Bike</b> memiliki banyak pengalaman sejak didirikan pada 13 Juni 2013. <b>E-Bike</b> sudah memiliki banyak kegiatan yang mengispirasi banyak orang termasuk menggalang dana saat terjadi bencana dan penggalangan dana secara rutin yang nanti keuntungannya akan diberikan kepada mereka yang membutuhkan. <br>
                    kami memiliki pandangan bahwa komunitas motor tidak selalu lekat dengan balapan liar dan pelanggaran lalu lintas, kami ingin membuktikan pada khalayak banyak bahwa komunitas motor juga ada yang melakukan hal-hal yang bermanfaat dan berguna selain untuk menyalurkan hobi anggota kami juga melakukan kegiatan kemanusiaan sebagai rasa empati kami kepada sesama manusia.
                    </p>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-5" style="border-bottom: 4px solid #1B2326;">
                    <h4><b>Kelebihan</b></h4>
                </div>
            </div>
            <div class="row mt-4 ktpengalaman">
                <div class="box-pengalaman">
                <div class="col-md-12 " >
                    <p class="p-kelebihan"><b>E-Bike</b> memiliki banyak kelebihan diantara komunitas lain yaitu :
                    </p>
                    <ul class="ul-kelebihan">
                        <li>Rutin mengadakan acara bersama untuk mempererat hubungan antara anggota</li>
                        <li>Rutin menggalang dana untuk bencana dan kaum duafa</li>
                        <li>memiliki peraturan yang ketat untuk anggota yang suka melakukan hal illegal seperti balap liar</li>
                    </ul>
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