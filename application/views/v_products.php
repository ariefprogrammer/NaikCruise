<?php $this->load->view("_partials/header")?>
<!--
        Products
        ==================================== -->    
    
    <section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms" style="margin-bottom: 2.5%">
            <h2>Products</h2>
            <!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>
          
          <?php foreach($allProducts as $all):?>
          <!-- single member -->
          <a href="#">
	          <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
	            <div class="member-thumb">
	              <img src="<?php echo $all->product_thumbnail?>" alt="Product Thumbnail" class="img-responsive">
	              <figcaption class="overlay">	                
	                <h5 style="text-align: left; margin-top: 40%;"><?php echo $all->product_transportation?></h5>
	                <h5 style="text-align: left"><?php echo $all->product_highlight_date?></h5>
	                <p style="text-align: left"><?php echo "IDR " .$all->product_starting_price?></p>
	                <button class="btn bg-navy-blue btn-block" style="margin-top: 7%;"><b>Details</b></button>
<!-- 	                <ul class="social-links text-center">
	                  <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
	                  <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
	                  <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
	                </ul> -->
	              </figcaption>
	            </div>
	            <h4><?php echo $all->product_name?></h4>
	          </figure>
          </a>
          <!-- end single member -->
        <?php endforeach;?>
          
        </div>
      </div>
    </section>
    
        <!--
        Products End
        ==================================== -->

<?php $this->load->view("_partials/contact")?>
<?php $this->load->view("_partials/footer")?>