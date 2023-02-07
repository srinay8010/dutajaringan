<!-- header -->
<header class="position-sticky top-0 z-1">
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
            <div>Products</div>
            <div class="dropdown-navbar-content shadow">
              <div class="dropdown dropend">
                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Absent Machine</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">PREMIUM</a></li>
                    <li><a href="/products" class="dropdown-item">DELI</a></li>
                    <li><a href="/products" class="dropdown-item">ICON</a></li>
                    <li><a href="/products" class="dropdown-item">ZKTECO</a></li>
                    <li><a href="/products" class="dropdown-item">Solution</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Access Control</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">Hikvision</a></li>
                    <li><a href="/products" class="dropdown-item">ZKTECO</a></li>
                    <li><a href="/products" class="dropdown-item">EMLOCK</a></li>
                    <li><a href="/products" class="dropdown-item">FRAME</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Cables</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">Belden</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>CCTV</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">Hikvision</a></li>
                    <li><a href="/products" class="dropdown-item">Panasonic</a></li>
                    <li><a href="/products" class="dropdown-item">ACTi</a></li>
                    <li><a href="/products" class="dropdown-item">AMTEK</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Grounding</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">ANENG</a></li>
                    <li><a href="/products" class="dropdown-item">Dekko</a></li>
                    <li><a href="/products" class="dropdown-item">KYORITSU</a></li>
                    <li><a href="/products" class="dropdown-item">Fluke</a></li>
                    <li><a href="/products" class="dropdown-item">Sanwa</a></li>
                    <li><a href="/products" class="dropdown-item">SEW</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Harddisk</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">WD</a></li>
                    <li><a href="/products" class="dropdown-item">Seagate</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Internet of Things</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">Bardi</a></li>
                    <li><a href="/products" class="dropdown-item">SONOFF</a></li>
                    <li><a href="/products" class="dropdown-item">LUMI</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>Media Converter</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">TP-Link</a></li>
                    <li><a href="/products" class="dropdown-item">netLink</a></li>
                  </ul>
                </div>

                <div>
                  <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <span>NVR</span>
                    <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                  </div>

                  <ul class="dropdown-menu p-2">
                    <li><a href="/products" class="dropdown-item">Hikvision</a></li>
                    <li><a href="/products" class="dropdown-item">Panasonic</a></li>
                    <li><a href="/products" class="dropdown-item">ACTi</a></li>
                    <li><a href="/products" class="dropdown-item">AMTEK</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown-navbar">
            <div>Services</div>

            <div class="dropdown-navbar-content shadow">
              <div class="dropright">
                <a href="<?= base_url('services/#construction'); ?>" class="d-flex align-items-center text-light-emphasis">
                  <span>Construction</span>
                  <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#implementation'); ?>" class="d-flex align-items-center text-light-emphasis">
                  <span>Implementation</span>
                  <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#maintenance'); ?>" class="d-flex align-items-center text-light-emphasis">
                  <span>Maintenance & Service</span>
                  <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#rental'); ?>" class="d-flex align-items-center text-light-emphasis">
                  <span>Rental</span>
                  <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                </a>

                <a href="<?= base_url('/services/#web-development'); ?>" class="d-flex align-items-center text-light-emphasis">
                  <span>Web Development</span>
                  <i class="fa fa-angle-right ms-auto" aria-hide="true"></i>
                </a>
              </div>
            </div>
          </li>

          <a href="<?= base_url('/about'); ?>" class="nav-item">About</a>
          <a href="/#contact" class="nav-item">Contact</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end header inner -->
</header>
<!-- end header -->