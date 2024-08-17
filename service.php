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
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-secondary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid nav-bar p-0">
    <?php include('./component/navbar.php') ?>
  </div>
  <!-- Navbar & Hero End -->

  <!-- Modal Search Start -->
  <div
    class="modal fade"
    id="searchModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">
            Search by keyword
          </h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center">
          <div class="input-group w-75 mx-auto d-flex">
            <input
              type="search"
              class="form-control p-3"
              placeholder="keywords"
              aria-describedby="search-icon-1" />
            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Search End -->

  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
      <h1
        class="text-white display-3 mb-4 wow fadeInDown"
        data-wow-delay="0.1s">
        Our Services
      </h1>
    </div>
  </div>
  <!-- Header End -->

  <!-- Services Start -->
  <div class="container-fluid service overflow-hidden pt-5">
    <div class="container py-5">
      <div
        class="section-title text-center mb-5 wow fadeInUp"
        data-wow-delay="0.1s">
        <h1 class="display-5 mb-4">Progam Pelatihan</h1>
        <p class="mb-0">Berikut adalah semua rincian Progam Pelatihan</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/otomotif_1.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Listrik</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/otomotif_3.jpeg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Bisnis Manajemen</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/listrik.webp"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Industri Kreatif</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/building_1.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Las</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Teknologi Pengolahan Pertanian</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Otomotif</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Refrigerasi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Teknologi Informasi Dan Komunikasi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Fashion Technology</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Pariwisata</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item">
            <div class="service-inner">
              <div class="service-img">
                <img
                  src="img/gmbr_7.jpg"
                  class="img-fluid w-100 rounded"
                  alt="Image" />
              </div>
              <div class="service-title">
                <div class="service-title-name">
                  <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                    <a href="#" class="h4 text-white mb-0">Manufaktur</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services End -->

  <!-- Footer Start -->
  <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
      <div class="row justify-content-center g-5">
        <div class="col-md-6 col-lg-6">
          <div class="footer-item d-flex flex-column">
            <h4 class="text-secondary mb-4">Contact Info</h4>
            <a href=""><i class="fa fa-map-marker-alt me-2"></i>Jl. Raya Kebaron No.1,
              Kebaron Dua, Kebaron, Kec. Tulangan, Kabupaten Sidoarjo, Jawa
              Timur 61273</a>
            <a href=""><i class="fas fa-envelope me-2"></i>@blksidoarjo.id</a>
            <a href=""><i class="fas fa-phone me-2"></i>(031) 99622626</a>
            <div class="d-flex align-items-center">
              <i class="fas fa-share fa-2x text-secondary me-2"></i>
              <a
                class="btn mx-1"
                href="https://www.facebook.com/share/iKEawR6gZgsZV3yv/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
              <a
                class="btn mx-1"
                href="https://www.instagram.com/bpvpsidoarjo?igsh=MTN0cXhzMGdoeGt4YQ=="><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="footer-item d-flex flex-column justify-content-center">
            <h4 class="text-secondary mb-4">Jam Kerja</h4>
            <div class="mb-3">
              <h6 class="text-muted mb-0">Senin - Kamis :</h6>
              <p class="text-white mb-0">07.30 - 16.00</p>
            </div>
            <div class="mb-3">
              <h6 class="text-muted mb-0">Jumat :</h6>
              <p class="text-white mb-0">07.30 - 16.30</p>
            </div>
            <div class="mb-3">
              <h6 class="text-muted mb-0">Sabtu - Minggu :</h6>
              <p class="text-white mb-0">Setiap Sabtu Minggu libur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

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