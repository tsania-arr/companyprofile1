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

      /* style input data */
      .button-inputdata{
        width: 70px;
        height: 40px;
        background-color: #1B2326;
        color: #10F5CC;
        border: none;
        border-radius: 5px; 
        font-size: 17px;
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
                  <a class="nav-link mx-2" href="home.php">Home</a>
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

    <!-- input data -->
    <div class="container">
        <form action="input.php" method="POST" enctype="multipart/form-data"> 
            <b style="color: #1B2326;">Nama</b>
            <input type="text" name="name_a" class="form-control">
            <br>
            <b style="color: #1B2326;">Deskripsi</b>
            <input type="text" name="deskripsi" class="form-control">
            <br>
            <b style="color: #1B2326;">Harga</b>
          <input type="number" name="harga" id="harga" class="form-control" min="0">
          <br>

            <b style="color: #1B2326;">Foto Produk</b>
            <br>
            <input type="file" name="userfile" id="userfile" onchange="tampilkanPreview(this, 'preview')">
            <br>
            <img id="preview" src="gambar/noimage.png" style="width: 100px;">
            <br><br>
            <input type="submit" name="oksubmit" value="Input" class="button-inputdata">
        </form>
      
        <?php
include "koneksi.php";

if (isset($_POST['oksubmit'])) {
    $judul = mysqli_real_escape_string($koneksi, $_POST['name_a']);
    
    $deskripsi_singkat = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

    $fileName = $_FILES['userfile']['name'];
    $fileTmpName = $_FILES['userfile']['tmp_name'];
    $fileError = $_FILES['userfile']['error'];

    if ($fileError === 0) {
        $fileDestination = 'gambar/' . $fileName;
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            $stmt = mysqli_prepare($koneksi, "INSERT INTO `data`(`nama`, `deskripsi`, `harga`, `gambar`) VALUES (?, ?, ?, ?)");
            if ($stmt === false) {
                // Prepare statement error
                die("Error preparing statement: " . mysqli_error($koneksi));
            }

            mysqli_stmt_bind_param($stmt, "ssis", $judul, $deskripsi_singkat, $harga, $fileName);
            if (!mysqli_stmt_execute($stmt)) {
                // Execution error
                die("Error executing statement: " . mysqli_error($koneksi));
            }

            mysqli_stmt_close($stmt);
        } else {
            // Handle file upload error
            die("Error uploading file.");
        }
    } else {
        // Handle file error
        die("Error in file: Error code " . $fileError);
    }
}
?>

    </div>

    <!-- footer -->
    <footer class="bg-body text-center py-3">
        <p class="m-0">Copyright@2023 Tsania</p>
    </footer>

    <!-- menampilkan priview gambar -->
    <script type="text/javascript">
      
        function tampilkanPreview(userfile, idpreview)
        {
            var gb = userfile.files;
            for (var i = 0; i < gb.length; i++)
            {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType))
                {
                    //jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element)
                    {
                        return function(e)
                        {
                            element.src = e.target.result;
                        };
                    }) (preview);
                    //membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                }
                else
                {
                    //jika tipe data tidak sesuai
                    alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                }
            }
        }
    </script>
<!-- Place this script just before your closing </body> tag -->
<script>
document.getElementById('harga').addEventListener('input', function(e) {
    var value = parseInt(this.value.replace(/\D/g, '')); // Remove non-digit characters
    if (isNaN(value)) {
        this.value = '';
    } else {
        this.value = value.toLocaleString('id-ID');
    }
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    </body>
</html>