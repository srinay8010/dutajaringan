<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<!-- About -->
<div class="about_page">
  <!-- Upper -->
  <div class="up_bg">
    <div class="upper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage">
              <h1>Products</h1>
            </div>
          </div>

          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ex eleifend mi mattis dapibus. Praesent lobortis eu quam sit amet aliquet. Integer mollis auctor malesuada.
              Pellentesque aliquet, lacus nec ultricies dictum, augue arcu molestie elit, id efficitur lectus dui et mauris. Sed at mattis velit. Proin facilisis, lacus a viverra mattis, dui magna
              varius nisl, quis accumsan justo lectus maximus sapien. In vel pharetra erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt felis magna, ut dictum leo
              vestibulum eget. Fusce ut purus et augue pellentesque ornare. <br>
            </p>

            <p>Phasellus tincidunt viverra gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus iaculis, dui euismod fermentum tincidunt, neque metus
              interdum leo, ac dignissim arcu lectus at ex. In lacinia neque vel sem dignissim rutrum. Curabitur ac vestibulum nibh. Nunc tristique ut libero vitae blandit. Curabitur leo nunc,
              bibendum et laoreet in, rhoncus ut metus. Vivamus sit amet imperdiet purus, nec varius justo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Upper -->

  <!-- Banner -->
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner">
            <img src="<?= base_url('./images/banner.jpg'); ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Banner -->

  <!-- Mid -->
  <div class="mid_bg">
    <div class="mid">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="desc_image">
              <p>
                Phasellus tincidunt viverra gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus iaculis, dui euismod fermentum tincidunt, neque
                metus interdum leo, ac dignissim arcu lectus at ex. In lacinia neque vel sem dignissim rutrum. Curabitur ac vestibulum nibh. Nunc tristique ut libero vitae blandit. Curabitur leo nunc,
                bibendum et laoreet in, rhoncus ut metus. Vivamus sit amet imperdiet purus, nec varius justo. <br>
              </p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ex eleifend mi mattis dapibus. Praesent lobortis eu quam sit amet aliquet. Integer mollis auctor malesuada.
                Pellentesque aliquet, lacus nec ultricies dictum, augue arcu molestie elit, id efficitur lectus dui et mauris. Sed at mattis velit. Proin facilisis, lacus a viverra mattis, dui magna
                varius nisl, quis accumsan justo lectus maximus sapien. In vel pharetra erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt felis magna, ut dictum leo
                vestibulum eget. Fusce ut purus et augue pellentesque ornare.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Mid -->
</div>
<!-- End of About Page -->

<?= $this->endSection(); ?>