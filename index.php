<?php include 'lib/scripts.php';  ?>

<body>

  <!--art gallery -->
  <div class="container-fluid bg1-home">
    <div class="row h100p bg-negro-blanco prelative">
      <p id="parrafo-izquierdo-primera-seccion-home" class="blanco size96 lh88 fw-black"> <span id="span_n" class="prelative">MODERN</span> <br>
        ART GAL<span class="negro15">LERY</span></p>
      <div class="col-12 col-sm-12 col-md-10 col-lg-9 mx-auto d-flex align-items-center justify-content-end" id="contenedor-derecho">
        <img src="images/mobile/image-hero.jpg" alt="hero imagen" class="img-fluid d-none-pc d-none-ipad d-block-mobile ">
        <p class="negro15 lh65 fw-black d-none-pc size70" id="parrafo-izquierdo-primera-seccion-home-ipad-mobile">MODERN</span> <br>
          ART GALLERY</span></p>
        <div class="contenedor-parrafo-derecho-primera-seccion-home">
          <p id="parrafo-derecho-primera-seccion-home" class="size22 fw-300 gris4">The arts in the collection of the Modern Art Gallery all started from a spark of inspiration. Will these pieces inspire you? Visit us and find out.</p>
          <div class="d-flex btn_location">
            <div class="d-flex justify-content-center align-items-center bg-negro15 blanco">
              <p class="mb0 blanco size20 fw-bold"> OUR LOCATION</p>
            </div>
            <div class="d-flex justify-content-center align-items-center bg-rosado" onclick="go('location')">
              <img src="images/icon/icon-arrow-right.svg" alt="flecha-adelante" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--your day at gallery-->
  <div class="container-fluid mt130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-4 d-flex flex-column justify-content-center order2mobile">
          <p class="size60 size50ipad lh60 negro15 fw-black text-uppercase" id="parrafo-yourdaygallery">Your Day at <br>the Gallery</p>
          <p class="size22 size18ipad gris4 fw-300 ls4">Wander through our distinct collections and find new insights about our artists. Dive into the details of their creative process.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
          <div class="owl-carousel owl-theme" id="carrousel1">
            <div class="item">
              <img src="images/desktop/image-grid-1.jpg" alt="galeria vista interna" class="img-fluid">
            </div>
            <div class="item">
              <img src="images/desktop/image-grid-1.jpg" alt="galeria vista interna" class="img-fluid">
            </div>
            <div class="item">
              <img src="images/desktop/image-grid-1.jpg" alt="galeria vista interna" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--come and inspire-->
  <div class="container-fluid mt20">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
          <img src="images/desktop/image-grid-2.jpg" alt="obra de arte" class="img-fluid d-none-ipad">
          <img src="images/tablet/image-grid-2.jpg" alt="obra de arte" class="img-fluid d-none-pc d-none-mobile">
          <img src="images/mobile/image-grid-2.jpg" alt="obra de arte" class="img-fluid d-none-pc d-none-ipad d-block-mobile mx-auto mb25">
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 d-flex flex-column justify-content-between">
          <div>
            <img src="images/desktop/image-grid-3.jpg" alt="obra de arte" class="img-fluid d-none-ipad">
            <img src="images/tablet/image-grid-3.jpg" alt="obra de arte" class="img-fluid d-none-pc d-none-mobile">
            <img src="images/mobile/image-grid-3.jpg" alt="obra de arte" class="img-fluid d-none-pc d-none-ipad d-block-mobile mx-auto mb25">
          </div>

          <div class="cuadrado-negro-inspirar">
            <div>
              <p class="size60 size50ipad lh60 blanco fw-black text-uppercase">COME & BE <br>INSPIRED</p>
              <p class="size22 size18ipad blanco fw-300 ls4">We’re excited to welcome you to our gallery and see how our collections influence you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include 'footer.php';  ?>


</body>

</html>