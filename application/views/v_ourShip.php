<?php $this->load->view("_partials/header")?>

<section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Our Ships</h2>
            <!-- <div class="devider-dark"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>
          
          <div class="sec-title-dark text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p>Many option for you to choose cruise. Select brand first</p>
          </div>
		
          <section style="margin-top: 5%">
          	<div class="row">
          		<div class="col-md-3">
          			<!-- single member -->
			            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
			              <div class="member-thumb" style="border: 1px solid #0D47A1; border-radius: 15px;">
			                <img src="<?php echo base_url('img3/costa.png')?>" alt="Costa Cruise" class="img-responsive">
			                <figcaption class="overlay" style="border-radius: 15px;">                  		              
			                	<p style="margin-top: 40%">Royal Caribbean Cruise</p>                        
			                	<div class="brands-dropdown" style="margin-top: 3%">
								  <button class="btn brands-dropbtn btn-block"><b>Details</b></button>
								  <div class="brands-dropdown-content">
								  <a href="#">Voyager Of The Seas</a>
								  <a href="#">Quantum Of The Seas</a>								  
								  </div>
								</div>
			                </figcaption>
			              </div>			              
			            </figure>
			        <!-- End single member -->

          		</div>

          		<div class="col-md-3">
          			<div>
          			<!-- single member -->
			            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
			              <div class="member-thumb" style="border: 1px solid #0D47A1; border-radius: 15px;">
			                <img src="<?php echo base_url('img3/dream.png')?>" alt="Costa Cruise" class="img-responsive">
			                <figcaption class="overlay" style="border-radius: 15px;">                  	              
			                	<p style="margin-top: 40%">Dream Cruise</p>                        
			                	<button class="btn btn-all btn-block" style="margin-top: 3%"><b>Details</b></button>
			                </figcaption>
			              </div>			              
			            </figure>
			        <!-- End single member -->
			        </div>         			
          		</div>

          		<div class="col-md-3">
          			<!-- single member -->
			            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
			              <div class="member-thumb" style="border: 1px solid #0D47A1; border-radius: 15px;">
			                <img src="<?php echo base_url('img3/costa.png')?>" alt="Costa Cruise" class="img-responsive">
			                <figcaption class="overlay" style="border-radius: 15px;">                  	              
			                	<p style="margin-top: 40%">Costa Cruise</p>                        
			                	<a href="<?php echo site_url('ourships/costa')?>"><button class="btn btn-all btn-block" style="margin-top: 3%"><b>Details</b></button></a>
			                </figcaption>
			              </div>			              
			            </figure>
			        <!-- End single member -->          			
          		</div>
          		<div class="col-md-3">
          			<!-- single member -->
			            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
			              <div class="member-thumb" style="border: 1px solid #0D47A1; border-radius: 15px;">
			                <img src="<?php echo base_url('img3/costa.png')?>" alt="Costa Cruise" class="img-responsive">
			                <figcaption class="overlay" style="border-radius: 15px;"> 
			                	<p style="margin-top: 40%">Norwegian Cruise</p>                        
			                	<button class="btn btn-all btn-block" style="margin-top: 3%"><b>Details</b></button>
			                </figcaption>
			              </div>			              
			            </figure>
			        <!-- End single member -->          			
          		</div>
          		
          	</div>
          </section>		          
          
        </div>
      </div>
    </section>
<?php $this->load->view("_partials/footer")?>