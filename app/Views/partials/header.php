<!-- header -->
<header class="position-sticky top-0">
  <!-- header inner -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container">
      <div class="logo">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url('./images/logo.png'); ?>" alt="#" width="200" />
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 align-items-center gap-lg-4 fs-5">
          <li class="nav-item dropdown-navbar">
            <a href="#">Products</a>
            <div class="dropdown-navbar-content">
              <div class="dropright">
                <div class="dropdown dropright">
                  <a href="#" data-toggle="dropdown">Absent Machine
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </a>

                  <div class="dropdown-menu">
                    <a class="drodown-item">Item 1</a>
                    <a class="drodown-item">Item 2</a>
                    <a class="drodown-item">Item 3</a>
                    <a class="drodown-item">Item 4</a>
                    <a class="drodown-item">Item 5</a>
                  </div>


                  <a href="#" data-toggle="dropdown">Access Control
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">Cables
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">CCTV
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">Grounding
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">Harddisk
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">Internet of Things
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">Media Converter
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>

                  <a href="#" data-toggle="dropdown">NVR
                    <i class="fa fa-angle-right" aria-hide="true"></i>
                    <div class="dropdown-menu">
                      <a class="drodown-item">Item#$1</a>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown-navbar">
            <a href="<?= base_url('/services'); ?>">Services</a>

            <div class="dropdown-navbar-content">
              <div class="dropright">
                <a href="<?= base_url('/services/#Construction'); ?>">Construction
                  <i class="fa fa-angle-right" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#Implementation'); ?>">Implementation
                  <i class="fa fa-angle-right" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#Maintenance'); ?>">Maintenance & Service
                  <i class="fa fa-angle-right" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#Rental'); ?>">Rental
                  <i class="fa fa-angle-right" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#Webdev'); ?>">Web Development
                  <i class="fa fa-angle-right" aria-hide="true"></i>
                </a>
              </div>
            </div>
          </li>

          <a href="<?= base_url('/about'); ?>" class="nav-item">About</a>
          <a href="#contact" class="nav-item">Contact</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end header inner -->
</header>
<!-- end header -->