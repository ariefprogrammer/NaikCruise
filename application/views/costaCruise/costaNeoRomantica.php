<?php $this->load->view("_partials/header") ?>
    <section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Costa Neo Romantica</h2>
            <!-- <div class="devider-dark"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>
          
          <div class="sec-title-dark text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p>Lorem ipsum lorem ipsum lorem ipsum</p>
          </div>
        
          <section style="margin-top: 5%">
            <div class="row">
                <div class="row wow fadeInRight animated" data-wow-duration="100ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Ship Class</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>Premium Class</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="350ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Passenger Capacity</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>13.543</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="400ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Year Built</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>2002</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="450ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Gross Tonnage</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>16.780</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Decks</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>16</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="550ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Cabins</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>57</h4></div>
                </div> 

                <div class="row wow fadeInRight animated" data-wow-duration="900ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Number of Crews</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>13.243</h4></div>
                </div> 
            </div>
          </section>                      
        </div>
      </div>
    </section>

    <section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Facility</h2>
            <!-- <div class="devider-dark"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>        
        
          <section style="margin-top: 5%">
            <div class="row">
                <div class="facility-slideshow-container">
                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">1 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Text</div>
                    </div>

                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">2 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Two</div>
                    </div>

                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">3 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Three</div>
                    </div>

                    <a class="facility-prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="facility-next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                    <br>
                <div style="text-align:center">
                    <span class="facility-dot" onclick="currentSlide(1)"></span> 
                    <span class="facility-dot" onclick="currentSlide(2)"></span> 
                    <span class="facility-dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
          </section>                      
        </div>
      </div>
    </section>

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("facility-Slides");
  var dots = document.getElementsByClassName("facility-dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" facility-active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " facility-active";
}
</script>

<?php $this->load->view("_partials/footer") ?>