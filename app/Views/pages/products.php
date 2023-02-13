<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<main class="container">
  <h1 class="my-4 text-center">Products</h1>

  <div class="card-product row">
    <?php foreach($products as $product) : ?>
    <div class="product-item col-6 col-md-3 col-lg-2 mb-3" data-product="<?= $product->jenis_produk . ' ' . $product->merek_produk; ?>">
      <a href="/product/<?= $product->id; ?>/detail">
        <div class="card shadow-sm">
          <img src="<?= base_url('/images/products/' . $product->gambar_produk); ?>" class="card-img-top" alt="<?= $product->nama_produk; ?>">
          <div class="card-body px-2">
            <h3 class="card-title fs-6 fw-normal" title="<?= $product->nama_produk; ?>"><?= $product->nama_produk; ?></h3>
            <span class="badge text-bg-info m-2 position-absolute top-0 bg-opacity-50" style="left: 0;"><?= $product->jenis_produk; ?></span>
            <p class="card-text">
              <?php
                  $fmt = numfmt_create( 'id_ID', NumberFormatter::CURRENCY );
                  $fmt->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
                  echo numfmt_format_currency($fmt, $product->harga_produk, "IDR");
                ?>
            </p>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</main>

<?= $this->endSection(); ?>