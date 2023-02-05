<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<main class="container my-5">
  <div class="row">
    <div class="col-5">
      <picture class="d-flex justify-content-center">
        <img src="<?= base_url('images/products/' . $product->gambar_produk); ?>" alt="<?= $product->nama_produk; ?>" class="product-image w-75">
      </picture>
    </div>

    <div class="col-7">
      <div class="product-detail">
        <p><?= $product->jenis_produk; ?></p>
        <h3 class="fw-semibold blu"><?= $product->nama_produk; ?></h3>

        <p class="fw-light"><?= $product->merek_produk; ?></p>
        <hr class="border-3">
        <p class="price"></p>

        <div class="description my-3">
          <h4 class="text-dark">Deskripsi</h4>

          <div><?= $product->deskripsi_produk; ?></div>
        </div>

        <button type="button" class="bg-transparent">
          <a href="https://api.whatsapp.com/send?phone=62383499425&amp;text=Hello, I have a question about your products and services" role="button" target="_blank" title="WhatsApp"
             class="wa-chat-box-content-send-btn m-0 px-4"><i class="fa-brands fa-whatsapp me-2"></i> Beli
          </a>
        </button>
      </div>
    </div>
  </div>
</main>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
const price = document.querySelector('.price'),
  priceNumber = <?= $product->harga_produk; ?>

let priceFormat = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR'
}).format(priceNumber)

price.innerText = priceFormat
</script>
<?= $this->endSection(); ?>