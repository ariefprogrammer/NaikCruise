<?php $this->load->view("admin/_partialsAdmin/header")?>

    <div class="container">
      <h2>Tambah User</h2>
      <div class="row">
        <form action="<?=base_url()?>/banner/add_process" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="name" value=""><br><br>
          <label>Slug</label><br>
          <input type="text" name="slug"><br><br>
          <label>foto</label><br>
          <input type="file" name="fotopost"><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>


<?php $this->load->view("admin/_partialsAdmin/footer")?>