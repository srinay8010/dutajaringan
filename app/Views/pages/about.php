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

  <!-- Banner -->
  <section class="banner">
    <div class="container">
      <img src="<?= base_url('./images/banner.jpg'); ?>">
    </div>
  </section>
  <!-- End of Banner -->

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