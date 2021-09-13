<!-- Counter testimonial company Start -->
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="style/images/art/bg15.jpg">
      <div class="container inner text-center">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="row counter">
              <div class="col-md-4 text-center">
                <h3 class="text">1000+</h3>
                <p><strong>Clients</strong></p>
              </div>
              <!--/column -->
              <?php 
                $cert_count = 2578381;
                $tree_count = ($cert_count/2400);
                $tree_count = (int)$tree_count;
              ?>
              <div class="col-md-4 text-center">
                <h3 class="value"><?php echo $cert_count ?></h3>
                <p><strong>Documents sent</strong></p>
              </div>
              <!--/column -->
              <div class="col-md-4 text-center">
                <h3 class="value"><?php echo $tree_count ?></h3>
                <p><strong>Trees Saved</strong></p>
              </div>
              
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="space120"></div>
      </div>
      <!-- /.container -->
    </div>
    <!-- Counter end-->
    