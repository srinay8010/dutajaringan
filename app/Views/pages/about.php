<?= $this->extend('partials/template'); ?>
<?= $this->section('content'); ?>

<!-- About -->
<!-- Upper -->
<main class="about_page">
  <section class="up_bg pt-5">
    <div class="container pb-4">
      <h1 class="pb-4 text-center">About</h1>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ex eleifend mi mattis dapibus. Praesent lobortis eu quam sit amet aliquet. Integer mollis auctor malesuada.
        Pellentesque aliquet, lacus nec ultricies dictum, augue arcu molestie elit, id efficitur lectus dui et mauris. Sed at mattis velit. Proin facilisis, lacus a viverra mattis, dui magna
        varius nisl, quis accumsan justo lectus maximus sapien. In vel pharetra erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt felis magna, ut dictum leo
        vestibulum eget. Fusce ut purus et augue pellentesque ornare. <br>
      </p>

      <p>
        Phasellus tincidunt viverra gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus iaculis, dui euismod fermentum tincidunt, neque metus
        interdum leo, ac dignissim arcu lectus at ex. In lacinia neque vel sem dignissim rutrum. Curabitur ac vestibulum nibh. Nunc tristique ut libero vitae blandit. Curabitur leo nunc,
        bibendum et laoreet in, rhoncus ut metus. Vivamus sit amet imperdiet purus, nec varius justo.
      </p>
    </div>
  </section>
  <!-- End of Upper -->

  <!-- Slider -->
  <div class="container">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('/publicimages/banner.jpg'); ?>" class="d-block w-100" alt="">
        </div>

        <div class="carousel-item">
          <img src="<?= base_url('/publicimages/banner.jpg'); ?>" class="d-block w-100" alt="">
        </div>

        <div class="carousel-item">
          <img src="<?= base_url('/publicimages/banner.jpg'); ?>" class="d-block w-100" alt="">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- End of Slider -->

  <!-- Mid -->
  <section class="mid_bg pb-5">
    <div class="container">
      <div class="desc_image">
        <p>Phasellus tincidunt viverra gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus iaculis, dui euismod fermentum tincidunt, neque
          metus interdum leo, ac dignissim arcu lectus at ex. In lacinia neque vel sem dignissim rutrum. Curabitur ac vestibulum nibh. Nunc tristique ut libero vitae blandit. Curabitur leo nunc,
          bibendum et laoreet in, rhoncus ut metus. Vivamus sit amet imperdiet purus, nec varius justo. <br>
        </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ex eleifend mi mattis dapibus. Praesent lobortis eu quam sit amet aliquet. Integer mollis auctor malesuada.
          Pellentesque aliquet, lacus nec ultricies dictum, augue arcu molestie elit, id efficitur lectus dui et mauris. Sed at mattis velit. Proin facilisis, lacus a viverra mattis, dui magna
          varius nisl, quis accumsan justo lectus maximus sapien. In vel pharetra erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt felis magna, ut dictum leo
          vestibulum eget. Fusce ut purus et augue pellentesque ornare.</p>
      </div>
    </div>
  </section>
  <!-- End of Mid -->
</main>
<!-- End of About Page -->
<?= $this->endSection(); ?>