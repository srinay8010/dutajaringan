<!--  footer -->
<footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-12 col-sm-12">
                              <div class="address">
                                 <h3>Address </h3>
                              </div>
                              <ul class="location_icon">
                                 <li>PT Duta Jaringan Indonesia</li>
                                 <li>Lagoon Avenue Bekasi Management Office Lantai G, Kawasan Grand Kamala Lagoon, Jl. Chandrabaga, Kota Bekasi, Jawa Barat, 17141</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-5 col-sm-6">
                              <div class="address">
                                 <h3>Follow Us</h3>
                              </div>
                              <ul class="social_icon">
                                 <li><a href="https://facebook.com/dutajaringanindonesia">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="https://youtube.com"> Youtube<i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                 <li><a href="https://instagram.com/dutajaringanindonesia"> Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                 <li><a href="https://linkedin.com"> LinkedIn<i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="https://wa.me/0895332908555?text=Testing%20test"> WhatsApp<i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                           <div class="col-md-7 col-sm-6">
                              <div class="address">
                                 <h3>Newsletter </h3>
                              </div>
                              <form class="bottom_form">
                                 <input class="enter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                                 <button class="sub_btn">subscribe</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2022 All Right Reserved By Duta Jaringan Indonesia</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="<?= base_url('./js/jquery.min.js'); ?>"></script>
      <script src="<?= base_url('./js/popper.min.js'); ?>"></script>
      <script src="<?= base_url('./js/bootstrap.bundle.min.js'); ?>"></script>
      <script src="<?= base_url('./js/jquery-3.0.0.min.js'); ?>"></script>
      <!-- sidebar -->
      <script src="<?= base_url('./js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
      <script src="<?= base_url('./js/custom.js'); ?>"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {
               lat: 40.645037,
               lng: -73.880224
             },
           });
         
           var image = 'images/maps-and-flags.png';
           var beachMarker = new google.maps.Marker({
             position: {
               lat: 40.645037,
               lng: -73.880224
             },
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>