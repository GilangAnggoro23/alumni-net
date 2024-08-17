  <?php
    require './function.php';

    ?>
  <nav
      class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
      <a href="" class="navbar-brand p-0">
          <h1 class="display-6 text-secondary m-0">
              <img src="img/gmbr_3.png" class="img-fluid" alt="" />
              <span style="font-size: 30px; font-weight: lighter">Alumni</span>NET
          </h1>
          <!-- <img src="img/logo.png" alt="Logo"> -->
      </a>
      <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
              <a href="index.php" class="nav-item nav-link <?= getUriSegmentFile() == 'index.php' || getUriSegmentFile() == '' ? 'active' : '' ?>">Home</a>
              <a href="about.php" class="nav-item nav-link  <?= getUriSegmentFile() == 'about.php' ? 'active' : '' ?>">About</a>
              <a href="service.php" class="nav-item nav-link  <?= getUriSegmentFile() == 'service.php' ? 'active' : '' ?>">Service</a>
              <a href="contact.php" class="nav-item nav-link  <?= getUriSegmentFile() == 'contact.php' ? 'active' : '' ?>">Contact</a>
          </div>

          <a
              href="login.php"
              class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Login</a>
      </div>
  </nav>