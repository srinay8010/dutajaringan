<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<main class="container">
  <h1 class="my-4">Products</h1>

  <div class="row row-cols-5 position-relative" style="z-index: -1;">
    <?php foreach($products as $product) : ?>
    <div class="col mb-3">
      <div class="card">
        <img src="<?= base_url('/images/' . $product['gambar_produk']); ?>" class="card-img-top" alt="<?= $product['nama_produk']; ?>">
        <div class="card-body">
          <h3 class="card-title fs-6"><?= $product['nama_produk']; ?></h3>
          <span class="badge text-bg-info m-2 position-absolute top-0 bg-opacity-50" style="left: 0;"><?= $product['jenis_produk']; ?></span>
          <p class="card-text">Rp. <?= $product['harga_produk']; ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</main>

<?= $this->endSection(); ?>