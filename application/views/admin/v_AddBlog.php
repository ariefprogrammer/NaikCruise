<?php $this->load->view("admin/_partialsAdmin/header")?>
<form method="post" class="form-horizontal formm">

		<div class="form-group">
			<label>Title</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="product_name" value="">
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="ckeditor" id="ckedtor" name="product_terms"></textarea>
			<!-- <input class="form-control" type="text" name="product_terms" placeholder="Input as the number" value="">-->
		</div>


		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="product_status">
		      <option>Draft</option>
		      <option>Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="submit_blog" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>