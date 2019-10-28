<?php $this->load->view("admin/_partialsAdmin/header")?>
	
<!-- <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">New Product</h2>

  <form method="post" class="login-container">
    <p><input type="email" placeholder="Email"></p>
    <p><input type="password" placeholder="Password"></p>
    <p><input type="submit" value="Log in"></p>
  </form>
</div> -->

	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>Product Name</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="product_name" value="">
		</div>

		<div class="form-group">
			<label>Product Code</label>
			<input class="form-control" type="text" name="product_code" placeholder="Input as the number" value="">
		</div>

		<button name="submit_product" class="btn btn-primary">Save</button>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>