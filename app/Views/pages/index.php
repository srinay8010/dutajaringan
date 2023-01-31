<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<!-- banner -->
<section class="banner">
  <div class="banner_bg">
    <h1 class="banner_title">PT DUTA JARINGAN INDONESIA</h1>

    <p class="banner_text">Bergerak di bidang teknologi, jaringan, jasa, dan perawatan properti kantor, hotel, dan rumah dengan didukung tenaga kerja yang profesional. Duta
      Jaringan berdedikasi memberikan pelayanan yang terbaik untuk memenuhi kebutuhan para customer.</p>
  </div>
</section>
<!-- end banner -->

<!-- about -->
<!-- <section id="about" class="about">
  <div class="container">
    <div class="row d_flex">
      <div class="col-md-5">
        <div class="about_img">
          <figure><img src="<?= base_url('./images/about_index.jpeg'); ?>" alt="#" /></figure>
        </div>
      </div>

      <div class="col-md-7">
        <h1 class="titlepage">About <span class="blu">Company</span></h1>

        <p>PT DUTA JARINGAN INDONESIA didirikan pada bulan Juni 2021, berlokasi di
          Lagoon Avenue Bekasi Management Office Lantai G, Kawasan Grand Kamala \
          Lagoon, Jl. Chandrabaga, Kota Bekasi, Jawa Barat, 17141. Kami bergerak di bidang
          teknologi,jaringan, jasa, dan perawatan properti kantor, hotel, dan rumah dengan didukung tenaga kerja yang profesional.
          Duta Jaringan berdedikasi memberikan pelayanan yang terbaik untuk memenuhi kebutuhan para customer.
        </p>

        <a class="read_more" href="<?= base_url('/about'); ?>" role="button">More About Us</a>
      </div>
    </div>
  </div>
</section> -->
<!-- end about -->

<!-- choose  section -->
<section class="choose">
  <div class="choose_bg">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="titlepage text-center mb-4">Our <span class="white"> Services</span></h1>

        <!-- <div class="col-md-3 col-sm-12 pe-0">
          <ul class="easy">
            <li class="active"><a href="#">Construction</a></li>
            <li><a href="#">Implementation</a></li>
            <li><a href="#">Maintenance & Service</a></li>
            <li><a href="#">Rental</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div> -->

        <div class="col-md-4 col-sm-12 px-1 mb-2">
          <div class="choose_box">
            <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
            <h3>Construction</h3>
            <p>
              PT DUTA JARINGAN INDONESIA memberikan pelayanan dan solusi dalam sebuah bidang arsitektur sistem jaringan secara keseluruhan atau sebagian rangakaian kegiatan perencanaan dan atau
              pelaksanaan beserta pengawasan yang mencakup pekerjaan aristektural mekanikal, elektrikal, dan tata lingkungan masing-masing beserta kelengkapannya untuk mewujudkan suatu bangunan atau
              bentuk fisik lain.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 px-1 mb-2">
          <div class="choose_box">
            <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
            <h3>Implementation</h3>
            <p>
              PT DUTA JARINGAN INDONESIA menerapkan dan mewujudkan sebuah rencana yang
              tersusun agar bisa berwujud secara nyata.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 px-1 mb-2">
          <div class="choose_box">
            <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
            <h3>Maintenance & Service</h3>
            <p>
              PT DUTA JARINGAN INDONESIA bergerak di bidang maintenance dan
              service yaitu kegiatan memelihara dan menjaga fasilitas(properti)
              yang ada serta memperbaiki, melakukan penyesuaian, atau penggantian
              yang diperlukan untuk mendapatkan suatu kondisi yang sesuai dengan
              perencanaan yang ada.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 px-1 mb-2">
          <div class="choose_box">
            <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
            <h3>Rental</h3>
            <p>
              PT DUTA JARINGAN INDONESIA menyewakan alat untuk memenuhi dan memberikan solusi pada customer.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 px-1 mb-2">
          <div class="choose_box">
            <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
            <h3>Web Development</h3>
            <p>
              PT DUTA JARINGAN INDONESIA menawarkan jasa untuk membangun dan mendesain sebuah website untuk memenuhi kebutuhan bisnis Anda.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end choose  section -->


<!-- Product Section -->
<section class="product">
  <div class="container">
    <h1 class="titlepage my-5 text-center">Our <span class="blu">Product</span></h1>

    <div class="row mb-5 justify-content-center">
      <div class="col-3">
        <div class="card shadow rounded-4">
          <img src="<?= base_url('/images/' . $produk[0]['gambar_produk']); ?>" alt="<?= $produk[0]['nama_produk']; ?>" class="card-img-top rounded-4">
          <div class="card-body">
            <h3 class="card-title fs-6"><?= $produk[0]['nama_produk']; ?></h3>
            <p class="card-text">Rp. <?= $produk[0]['harga_produk']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card shadow rounded-4">
          <img src="<?= base_url('/images/' . $produk[1]['gambar_produk']); ?>" alt="<?= $produk[1]['nama_produk']; ?>" class="card-img-top rounded-4">
          <div class="card-body">
            <h3 class="card-title fs-6"><?= $produk[1]['nama_produk']; ?></h3>
            <p class="card-text">Rp. <?= $produk[1]['harga_produk']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card shadow rounded-4">
          <img src="<?= base_url('/images/' . $produk[2]['gambar_produk']); ?>" alt="<?= $produk[2]['nama_produk']; ?>" class="card-img-top rounded-4">
          <div class="card-body">
            <h3 class="card-title fs-6"><?= $produk[2]['nama_produk']; ?></h3>
            <p class="card-text">Rp. <?= $produk[2]['harga_produk']; ?></p>
          </div>
        </div>
      </div>

      <a href="<?= base_url('/products'); ?>">--> More</a>
    </div>
  </div>
</section>
<!-- End Product Section -->

<!-- request -->
<section id="contact" class="request py-5">
  <div class="container">
    <h1 class="titlepage my-5">Request <span class="white">A call Back</span></h1>

    <div class="row">
      <div class="col-md-6">
        <form id="request" class="main_form" action="" method="POST">
          <input class="contactus" placeholder="Full Name" type="text" name="Full Name">
          <input class="contactus" placeholder="Email" type="email" name="Email">
          <input class="contactus" placeholder="Phone Number" type="tel" name="Phone Number">
          <textarea class="textarea" placeholder="Message" Message="Name" rows="4"></textarea>

          <button class="send_btn">Send</button>
        </form>
      </div>

      <div class="col-md-6">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
<!-- end request -->

<?= $this->endSection(); ?>