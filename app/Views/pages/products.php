<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<main class="container">
  <h1 class="my-4 text-center">Products</h1>

  <div class="row">
    <div class="col-3">
      <aside class="checkbox-filter">
        <section>
          <div class="text-bg-dark p-3">Filter</div>

          <ul class="p-2">
            <li>
              <input type="checkbox" name="Harddisk" id="Harddisk" value="Harddisk">
              <label for="Harddisk">Harddisk</label>
            </li>

            <li>
              <input type="checkbox" name="CCTV" id="CCTV" value="CCTV">
              <label for="CCTV">CCTV</label>
            </li>

            <li>
              <input type="checkbox" name="NVR" id="NVR" value="NVR">
              <label for="NVR">NVR</label>
            </li>

            <li>
              <input type="checkbox" name="Cable" id="Cable" value="Cable">
              <label for="Cable">Cable</label>
            </li>

            <li>
              <input type="checkbox" name="Grounding" id="Grounding" value="Grounding">
              <label for="Grounding">Grounding</label>
            </li>

            <li>
              <input type="checkbox" name="Media Converter" id="Media Converter" value="Media-Converter">
              <label for="Media Converter">Media Converter</label>
            </li>

            <li>
              <input type="checkbox" name="Abcent Machine" id="Abcent Machine" value="Abcent-Machine">
              <label for="Abcent Machine">Abcent Machine</label>
            </li>

            <li>
              <input type="checkbox" name="Access Control" id="Access Control" value="Access-Control">
              <label for="Access Control">Access Control</label>
            </li>

            <li>
              <input type="checkbox" name="IoT" id="IoT" value="IoT">
              <label for="IoT">IoT</label>
            </li>
          </ul>
        </section>

        <section class="mt-2">
          <div class="text-bg-dark p-3">Merk</div>

          <ul class="p-2">
            <li>
              <input type="checkbox" name="Seagate" id="Seagate" value="Seagate">
              <label for="Seagate">Seagate</label>
            </li>

            <li>
              <input type="checkbox" name="WD" id="WD" value="WD">
              <label for="WD">WD</label>
            </li>

            <li>
              <input type="checkbox" name="Hikvision" id="Hikvision" value="Hikvision">
              <label for="Hikvision">Hikvision</label>
            </li>

            <li>
              <input type="checkbox" name="Panasonic" id="Panasonic" value="Panasonic">
              <label for="Panasonic">Panasonic</label>
            </li>

            <li>
              <input type="checkbox" name="ACTi" id="ACTi" value="ACTi">
              <label for="ACTi">ACTi</label>
            </li>

            <li>
              <input type="checkbox" name="AMTEK" id="AMTEK" value="AMTEK">
              <label for="AMTEK">AMTEK</label>
            </li>

            <li>
              <input type="checkbox" name="Belden" id="Belden" value="Belden">
              <label for="Belden">Belden</label>
            </li>

            <li>
              <input type="checkbox" name="ANENG" id="ANENG" value="ANENG">
              <label for="ANENG">ANENG</label>
            </li>

            <li>
              <input type="checkbox" name="Dekko" id="Dekko" value="Dekko">
              <label for="Dekko">Dekko</label>
            </li>

            <li>
              <input type="checkbox" name="KYORITSU" id="KYORITSU" value="KYORITSU">
              <label for="KYORITSU">KYORITSU</label>
            </li>

            <li>
              <input type="checkbox" name="Fluke" id="Fluke" value="Fluke">
              <label for="Fluke">Fluke</label>
            </li>

            <li>
              <input type="checkbox" name="Sanwa" id="Sanwa" value="Sanwa">
              <label for="Sanwa">Sanwa</label>
            </li>

            <li>
              <input type="checkbox" name="SEW" id="SEW" value="SEW">
              <label for="SEW">SEW</label>
            </li>

            <li>
              <input type="checkbox" name="TP-Link" id="TP-Link" value="TP-Link">
              <label for="TP-Link">TP-Link</label>
            </li>

            <li>
              <input type="checkbox" name="netLink" id="netLink" value="netLink">
              <label for="netLink">netLink</label>
            </li>

            <li>
              <input type="checkbox" name="PREMIUM" id="PREMIUM" value="PREMIUM">
              <label for="PREMIUM">PREMIUM</label>
            </li>

            <li>
              <input type="checkbox" name="DELI" id="DELI" value="DELI">
              <label for="DELI">DELI</label>
            </li>

            <li>
              <input type="checkbox" name="ICON" id="ICON" value="ICON">
              <label for="ICON">ICON</label>
            </li>

            <li>
              <input type="checkbox" name="ZKTECO" id="ZKTECO" value="ZKTECO">
              <label for="ZKTECO">ZKTECO</label>
            </li>

            <li>
              <input type="checkbox" name="Solution" id="Solution" value="Solution">
              <label for="Solution">Solution</label>
            </li>

            <li>
              <input type="checkbox" name="EMLOCK" id="EMLOCK" value="EMLOCK">
              <label for="EMLOCK">EMLOCK</label>
            </li>

            <li>
              <input type="checkbox" name="FRAME" id="FRAME" value="FRAME">
              <label for="FRAME">FRAME</label>
            </li>

            <li>
              <input type="checkbox" name="Bardi" id="Bardi" value="Bardi">
              <label for="Bardi">Bardi</label>
            </li>

            <li>
              <input type="checkbox" name="SONOFF" id="SONOFF" value="SONOFF">
              <label for="SONOFF">SONOFF</label>
            </li>

            <li>
              <input type="checkbox" name="LUMI" id="LUMI" value="LUMI">
              <label for="LUMI">LUMI</label>
            </li>
          </ul>
        </section>
      </aside>
    </div>

    <div class="card-product col-9 row row-cols-5 position-relative">
      <?php foreach($products as $product) : ?>
      <div class="product-item col mb-3" data-product="<?= $product->jenis_produk . ' ' . $product->merek_produk; ?>">
        <a href="/product/<?= $product->id; ?>/detail">
          <div class="card shadow-sm">
            <img src="<?= base_url('/images/products/' . $product->gambar_produk); ?>" class="card-img-top" alt="<?= $product->nama_produk; ?>">
            <div class="card-body">
              <h3 class="card-title fs-6"><?= $product->nama_produk; ?></h3>
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
  </div>
</main>

<?= $this->endSection(); ?>