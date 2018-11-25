<?php
ob_start();
$page_title = "Project View";
  include "includes/header.php";
  if (isset($_GET['hid'])) {
      $project = viewProject($conn, $_GET['hid']);


  extract($project);

  }else{
   header("Location:project");
 }
   $recent = recentProjectPost($conn);

 ?>

      <section class="section-md bg-white">
        <div class="shell">
          <div class="range range-30 range-center range-md-right">
            <div class="cell-md-8 cell-sm-6">
              <h2>Project Post</h2>
            </div> z
          </div>
          <div class="range range-50 range-center">
            <div class="cell-md-4 cell-sm-6 cell-xs-8"><div style="background:url(<?php echo $image_1 ?>); height:300px; width: 300px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div>
              <div class="post-big-aside">
                <div class="post-autor-wrap">
                  <ul class="list-inline">
                    <li><a class="fa fa-facebook text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-google-plus text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-linkedin text-primary fa-xs" href="#"></a></li>
                    <li><a class="fa fa-twitter text-primary fa-xs" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-md-8 post-big">
              <div class="post-meta-default group-post-meta">
                <time datetime="2018-03-05"><span class="mdi mdi-xsm mdi-clock text-primary"></span><span><?php echo $date_created; ?></span></time>
                <a><b><span>Location-</span><b/></span></a> <span><?php echo $project_location; ?></span>
              </div>
              <h3><?php echo $project_name; ?></h3>
              <p class="big"><?php echo $about; ?></p>
            </div>
          </div>
        </div>
      </section>
      <!-- Material Parallax-->
      <section class="parallax-container" data-parallax-img="images/parallax-6-1920x1100.jpg">
        <div class="parallax-content">
          <div style="min-height: 160px; padding-bottom: 39.45%;"></div>
        </div>
      </section>

      <!-- Page Footer-->
   <?php
    include "includes/footer.php";
    ?>
