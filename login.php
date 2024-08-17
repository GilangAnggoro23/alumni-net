<?php
include './koneksi.php';
session_start();
if (isset($_POST['post_login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // cek data
  $cekData = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
  $cekData  = mysqli_fetch_assoc($cekData);


  $_SESSION['name'] = $cekData['nama_lengkap'];
  $_SESSION['username'] = $cekData['username'];
  $_SESSION['status'] =  'login';


  header('location:dashboard');
  echo ('<script>alert("Login Berhasil")</script>');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Travisa - Visa & Immigration Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
  <div class="wadah_navbar">
    <div class="batas_navbar">
      <div class="wadah_content">
        <img src="./img/img_5.png" class="content_navbar" />
        <img src="./img/img_11.png" class="tambah_navbar" /><img
          src="./img/gmbr_3.png"
          class="plus_navbar" />
      </div>
    </div>
  </div>

  <div class="wadah_login">
    <div class="batas_login">
      <div class="row">
        <div class="col-xl-6" style="padding: 0px">
          <div class="wadah_img_login">
            <img src="./img/gambar_1.jpeg" class="img_login" />
          </div>
        </div>
        <div class="col-xl-4" style="padding: 0px">
          <div class="wadah_icon_login">
            <div
              class="display-3 fw-bold text-center my-4"
              style="color: black">
              Login
            </div>

            <img src="./img/gambar_2.jpeg" class="img_icon_login" />
            <div class="wadah_form_login_1">
              <form method="post" action="">
                <input type="hidden" name="post_login">
                <div class="wadah_form_login">

                  <input
                    type="text"
                    class="form-control mb-3"
                    placeholder="Nama Pengguna"
                    name="username"
                    required />

                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Kata Sandi"
                    required />
                </div>
                <button class="button_form_login" type="submit">Masuk</button>
                <p class="my-4 text-center">
                  Anda belum punya akun ? <a href="register.php">Register</a>
                </p>
                <div class="wadah_informasi">
                  <p class="info_penting">INFO PENTING</p>
                  <p class="deskripsi">
                    Lindungi akun Anda dengan tidak memberikan ID pengguna dan
                    kata sandi Anda pada siapapun
                  </p>
                  <p class="deskripsi">
                    Segala risiko akibat penyalahgunaan ID pengguna menjadi
                    tanggung jawab pengguna sepenuhnya.
                  </p>
                  <p class="deskripsi">
                    Kami menjamin kerahasiaan data setiap pengguna sebagai
                    bentuk penghargaan kami terhadap privasi pengguna
                    AlumniNet.
                  </p>
                  <p class="deskripsi_4">
                    Seluruh fitur dan layanan AlumniNet dapat diakses secara
                    gratis tanpa tambahan biaya apapun.
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>