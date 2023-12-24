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

      .button-jasa{
        border: none;
        background-color: #1B2326;
        color: #10F5CC;
        border-radius:5px;
      }

      h2 {
        font-size: 40px;
        color: #10F5CC;
        z-index: 1;
        font-weight: 700px;
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
                  <a class="nav-link mx-2"  href="visimisi.php">Visi dan Misi</a>
                  <a class="nav-link mx-2 active" aria-current="page" href="jasa.php">Jasa Kami</a>
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

    <!-- sewa -->
    <section class="sewa">
        <div class="container">
            <?php
                // Assuming you have a connection to your database in 'koneksi.php'
                include 'koneksi.php';
                include 'hapus.php';

                // Check if the 'id' parameter is set in the GET request
                if (isset($_GET['id'])) {
                    $selectedId = $_GET['id'];

                    // SQL query to fetch data for the selected motorbike
                    $sql = "SELECT * FROM data WHERE id = $selectedId";
                    $result = mysqli_query($koneksi, $sql);

                    // Check if there are any rows returned
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Use data from the row to display the selected motorbike details
                            echo '<div class="container mt-5">';
                            echo '<div class="row">';
                            echo '<div class="col-md-6">';
                            echo '<img src="gambar/' . htmlspecialchars($row['gambar']) . '" class="img-fluid" alt="Motorbike Image">';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<h2>' . htmlspecialchars($row['nama']) . '</h2>';
                            echo '<p>' . htmlspecialchars($row['harga']) . '</p>';
                            echo '<p>' . htmlspecialchars($row['deskripsi']) . '</p>';
                            echo '<button class="btn button-jasa" onclick="sewaMotor(' . $selectedId . ')">Sewa Sekarang</button>';
                            echo '</div></div></div>';
                        }
                    } else {
                        echo "Motorbike not found";
                    }
                } else {
                    echo "Invalid request";
                }
                ?>
        </div>
    </section>

        <script>
            function sewaMotor(selectedId) {
                // Confirm with the user before proceeding with the deletion
                if (confirm("Apakah Anda yakin ingin menyewa motor ini?")) {
                    // Send an AJAX request to the server to handle the deletion
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "hapus.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Handle the response from the server
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                alert("Motor berhasil disewa!");
                                // Redirect the user back to the jasa.php page
                                window.location.href = "jasa.php";
                            } else {
                                alert("Gagal menyewa motor. Silakan coba lagi.");
                            }
                        }
                    };
                    xhr.send("id=" + selectedId);
                }
            }
        </script>
    <!-- footer -->
    <footer class="bg-body text-center py-3">
      <p class="m-0">Copyright@2023 Tsania</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>