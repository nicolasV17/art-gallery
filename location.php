<?php include 'lib/scripts.php';  ?>

<body>

    <!--location mapa sin leaflet -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 pl0 pr0 bg-mapa-location prelative">
                <div class="d-flex btn_location location">
                    <div class="d-flex justify-content-center align-items-center bg-negro15 blanco order2">
                        <p class="mb0 blanco size20 fw-bold"> BACK TO HOME</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center bg-rosado" onclick="go('home')">
                        <img src="images/icon/icon-arrow-left.svg" alt="flecha-atras" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--location mapa con leaflet -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 pl0 pr0  prelative" id="map">
                <div class="d-flex btn_location location">
                    <div class="d-flex justify-content-center align-items-center bg-negro15 blanco order2">
                        <p class="mb0 blanco size20 fw-bold"> BACK TO HOME</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center bg-rosado" onclick="go('home')">
                        <img src="images/icon/icon-arrow-left.svg" alt="flecha-atras" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our-location-->
    <div class="container-fluid bg-negro15" id="contenedor-our-location">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center justify-content-start-mobile">
                <p id="our-location-location" class="size70 blanco fw-black d-none-mobile">OUR <br> LOCATION</p>
                <p id="our-location-location-mobile" class="size70 blanco fw-black d-none-ipad d-none-pc d-block-mobile">OUR LOCATION</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <p id="king-street-location" class="size36 rosado fw-bold text-uppercase">99 King Street</p>

                <p class="size22 blanco king-street-info fw-300 outfit">Newport <br>
                    RI 02840 <br>
                    United States of America</p>

                <p id="our-newly-location" class="size22 blanco king-street-info fw-300 outfit">
                    Our newly opened gallery is located near the Edward King House on 99 King Street, the Modern Art Gallery is free to all visitors and open seven days a week from 8am to 9pm.
                </p>
            </div>
        </div>
    </div>


    <?php include 'footer.php';  ?>
    <script src="js/location/main.js"></script>

</body>

</html>