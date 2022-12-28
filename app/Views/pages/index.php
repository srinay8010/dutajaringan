<!-- banner -->
<div class="banner">
  <div class="banner_bg">
    <div class="container">
      <div class="row"></div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- about -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row d_flex">
      <div class="col-md-5">
        <div class="about_img">
          <figure><img src="<?= base_url('./images/about_index.jpeg'); ?>" alt="#" /></figure>
        </div>
      </div>

      <div class="col-md-7">
        <div class="titlepage">
          <h2>About <span class="blu">Company</span></h2>

          <p>PT DUTA JARINGAN INDONESIA didirikan pada bulan Juni 2021, berlokasi di
            Lagoon Avenue Bekasi Management Office Lantai G, Kawasan Grand Kamala \
            Lagoon, Jl. Chandrabaga, Kota Bekasi, Jawa Barat, 17141. Kami bergerak di bidang
            teknologi,jaringan, jasa, dan perawatan properti kantor, hotel, dan rumah dengan didukung tenaga kerja yang profesional.
            Duta Jaringan berdedikasi memberikan pelayanan yang terbaik untuk memenuhi kebutuhan para customer.
          </p>

          <a class="read_more" href="<?= base_url('/about'); ?>">More About Us</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end about -->

<!-- choose  section -->
<div class="choose ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Our <span class="blu"> Services</span></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="choose_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right">
              <ul class="easy">
                <li class="active"><a href="#">Construction</a></li>
                <li><a href="#">Implementation</a></li>
                <li><a href="#">Maintenance & Service</a></li>
                <li><a href="#">Rental</a></li>
                <li><a href="#">Web Development</a></li>
              </ul>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 padding_left0">
              <div class="choose_box">
                <i><img src="<?= base_url('./images/admin.png'); ?>" alt="#" /></i>
                <h3>Rental</h3>
                <p>
                  PT DUTA JARINGAN INDONESIA menawarkan jasa untuk membangun dan mendesain sebuah website untuk memenuhi kebutuhan bisnis Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end choose  section -->

<!-- request -->
<div id="contact" class="request">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Request <span class="white">A call Back</span></h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <form id="request" class="main_form">
          <div class="row">
            <div class="col-md-12 ">
              <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
            </div>

            <div class="col-md-12">
              <input class="contactus" placeholder="Email" type="type" name="Email">
            </div>

            <div class="col-md-12">
              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
            </div>

            <div class="col-md-12">
              <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
            </div>

            <div class="col-md-12">
              <button class="send_btn">Send</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-6">
        <div id="map"></div>
      </div>
    </div>
  </div>
</div>
<!-- end request -->