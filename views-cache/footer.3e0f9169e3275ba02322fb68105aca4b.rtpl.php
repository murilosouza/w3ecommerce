<?php if(!class_exists('Rain\Tpl')){exit;}?><!--  footer -->
<footer>
  <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="footer_top">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <a href="index.html"> <img class="logo1" src="/views-src/store/images/logo1.png" /></a>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <ul class="sociel">
                                  <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                  <li> <a href="#"><i class="fab fa-whatsapp"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="row">
                      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                          <div class="address">
                              <h3>Contate-nos </h3>
                              <ul class="loca">
                                  <li>
                                      <a href="#"><i class="fas fa-map-marked-alt"></i></a> Porto Alegre - RS | Brasil </li>
                                  <li>
                                      <a href="#"><i class="fas fa-phone-alt"></i></a></a> +55 51 99521 5615 </li>
                                  <li>
                                      <a href="#"><i class="fas fa-envelope"></i></a> contato@wcubo.com.br </li>
                              </ul>

                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="address">
                              <h3>Clientes</h3>
                              <ul class="Menu_footer">
                                  <li class="active"> <a href="#"><i class="fas fa-user-circle"></i> Minha conta</a> </li>
                                  <li><a href="#"><i class="fas fa-heart"></i> Lista de desejos</a> </li>
                                  <li><a href="#"><i class="fas fa-shopping-cart"></i> Meu carrinho</a> </li>
                                  <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a> </li>
                                  <li><a href="#"><i class="fas fa-sign-in-alt"></i> Entrar</a> </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="address">
                              <h3>Fornecedores</h3>
                              <ul class="Links_footer">
                                  <li class="active"><a href="#"><i class="fas fa-briefcase"></i> Meu painel</a> </li>
                                  <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a> </li>
                                  <li><a href="#"><i class="fas fa-sign-in-alt"></i> Entrar</a> </li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                          <div class="address">
                              <h3>Por que escolher a W3 Store</h3>
                              <p>Desenvolvemos uma interface intuitiva, que vai facilitar a consulta e compra dos seus produtos, pelo seu cliente </p>
                              <form class="newtetter">
                                  <input class="tetter" placeholder="Seu e-mail" type="text" name="Seu e-mail">
                                  <button class="submit">Assine</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
     
      <div class="copyright"> 
          <div class="container">
          <p>Desenvolvido por <a href="https://www.wcubo.com.br">WCubo</a> @ 2022</p>
      </div>
    </div>
  </div>

</footer>
<!-- end footer -->


</div>

<div class="overlay"></div>

<!-- Javascript files-->
<script src="/views-src/store/js/jquery.min.js"></script>
<script src="/views-src/store/js/popper.min.js"></script>
<script src="/views-src/store/js/bootstrap.bundle.min.js"></script>
<script src="/views-src/store/js/jquery-3.0.0.min.js"></script>

<!-- sidebar -->
<script src="/views-src/store/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/views-src/store/js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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

      var image = '/views-src/store/images/maps-and-flags.png';
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