<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php var_dump($product)?> -->
<div class="container" style="margin-top: 35px;">
  <div class="row">
    <div class="col-md-3">
      ID
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->id?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Product Name
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_name?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Product Code
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_code?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Position Order
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->position_order?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Slug
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_slug?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Collection
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_collection?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Max Child Age
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_maximum_child_age?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Highlight Date
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_highlight_date?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Total Days
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_total_days?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Total Nights
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_total_nights?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Starting Price
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_starting_price?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Price Info
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_price_info?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Cruise
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_transportation?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Accomodation
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_accomodation?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Included
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_included?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Excluded
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_excluded?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Terms
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_terms?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Thumbnail
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_thumbnail?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Flyer
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_flyer?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      Status
    </div>
    <div class="col-md-9">
      <?php echo ":    " .$product->product_status?>
    </div>
  </div>

</div>
<?php $this->load->view("admin/_partialsAdmin/footer")?>