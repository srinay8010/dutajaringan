<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<!-- About -->
<main class="container my-5">
  <div class="row">
    <div class="col-3">
      <div class="list-group" id="list-tab" role="tablist">
        <a href="#construction" class="list-group-item active" id="construction-list" data-bs-toggle="list" role="tab" aria-controls="list-construction">Construction</a>

        <a href="#implementation" class="list-group-item" id="implementation-list" data-bs-toggle="list" role="tab" aria-controls="list-implementation">Implementation</a>

        <a href="#maintenance" class="list-group-item" id="maintenance-list" data-bs-toggle="list" role="tab" aria-controls="list-maintenance">Maintenance & Services</a>

        <a href="#rental" class="list-group-item" id="rental-list" data-bs-toggle="list" role="tab" aria-controls="list-rental">Rental</a>

        <a href="#web-development" class="list-group-item" id="web-development-list" data-bs-toggle="list" role="tab" aria-controls="list-web-development">Web Development</a>
      </div>
    </div>

    <article class="col-9">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="construction" role="tabpanel" aria-labelledby="construction-list">
          <h1 class="titlepage text-center">Construction</h1>

          <p>PT DUTA JARINGAN INDONESIA memberikan pelayanan dan solusi dalam sebuah bidang arsitektur sistem jaringan secara keseluruhan atau sebagian rangakaian kegiatan perencanaan dan atau
            pelaksanaan
            beserta pengawasan yang mencakup pekerjaan aristektural mekanikal, elektrikal, dan tata lingkungan masing-masing beserta kelengkapannya untuk mewujudkan suatu bangunan atau bentuk fisik
            lain.
          </p>
        </div>

        <div class="tab-pane fade" id="implementation" role="tabpanel" aria-labelledby="implementation-list">
          <h1 class="titlepage text-center">Implementation</h1>

          <p>PT DUTA JARINGAN INDONESIA menerapkan dan mewujudkan sebuah rencana yang tersusun agar bisa berwujud secara nyata.</p>
        </div>

        <div class="tab-pane fade" id="maintenance" role="tabpanel" aria-labelledby="maintenance-list">
          <h1 class="titlepage text-center">Maintenance & Service</h1>

          <p>PT DUTA JARINGAN INDONESIA bergerak di bidang maintenance dan service yaitu kegiatan memelihara dan menjaga fasilitas(properti) yang ada serta memperbaiki, melakukan penyesuaian, atau
            penggantian yang diperlukan untuk mendapatkan suatu kondisi yang sesuai dengan perencanaan yang ada.</p>
        </div>

        <div class="tab-pane fade" id="rental" role="tabpanel" aria-labelledby="rental-list">
          <h1 class="titlepage text-center">Rental</h1>

          <p>PT DUTA JARINGAN INDONESIA menyewakan alat untuk memenuhi dan memberikan solusi pada customer.</p>
        </div>

        <div class="tab-pane fade" id="web-development" role="tabpanel" aria-labelledby="web-developmentettings-list">
          <h1 class="titlepage text-center">Web Development</h1>

          <p>PT DUTA JARINGAN INDONESIA menawarkan jasa untuk membangun dan mendesain sebuah website untuk memenuhi kebutuhan bisnis Anda.</p>
        </div>
      </div>
    </article>
  </div>
</main>

<?= $this->endSection(); ?>