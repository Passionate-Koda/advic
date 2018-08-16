<?php
ob_start();
$page_title = "Services";
include "includes/header.php";
$services =  getServices($conn);
$service =  getFirstServices($conn);

 ?>

      <section class="section-md bg-white text-left">
        <div class="shell">
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-services tabs-vertical" id="tabs-3">
            <!-- Nav tabs-->
            <ul class="nav-custom nav-custom-tabs group-tabs">
              <?php foreach ($service as $key => $value) {
                    extract($value);
               ?>
              <li class="active"><a href="#tabs-3-<?php echo $id ?>" data-toggle="tab"><?php echo strtoupper($title); ?><span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></li>
              <?php } ?>
              <?php foreach ($services as $key => $value) {
                    extract($value);
               ?>
              <li><a href="#tabs-3-<?php echo $id ?>" data-toggle="tab"><?php echo strtoupper($title); ?><span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></li>
              <?php } ?>
            </ul>



            <div class="tab-content text-left">
              <?php foreach ($service as $key => $show) {
                    extract($show);
               ?>
              <div class="tab-pane fade in active counter-index-sec"  id="tabs-3-<?php echo $id ?>">
                <div class="inset-right-lg-150">
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $body; ?></p>

                </div>
                <div class="range range-30">

                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="bookings?hid=<?php echo $hash_id?>">Book this service<span class='icon-arrow icon-rotate-90 material-icons-keyboard_backspace'></span></a></div>
                  </div>
                  </div>
                   <?php } ?>


              <?php foreach ($services as $key => $show) {
                    extract($show);
               ?>
               <div class="tab-pane fade"  id="tabs-3-<?php echo $id ?>">
                 <div class="inset-right-lg-150">
                   <h2><?php echo $title; ?></h2>
                   <p><?php echo $body; ?></p>

                 </div>
                 <div class="range range-30">

                   <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="bookings?hid=<?php echo $hash_id?>">Book this service<span class='icon-arrow icon-rotate-90 material-icons-keyboard_backspace'></span></a></div>
                   </div>
                   </div>
                   <?php } ?>





                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:08067353063">08067353063</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>

      </section>
      <!-- Page Footer-->
     <?php include "includes/footer.php"; ?>
