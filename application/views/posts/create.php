<div class="container">
<?php $this->load->view('templates/ms'); ?>
<h2><?=$title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Başlık</label>
    <input type="text" class="form-control" placeholder="" name="title">
  </div>
  <div class="form-group">
  <label>İçerik</label>
  <textarea id="editor" class="form-control" name="body" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <select name="category_id" class="form-control">
      <?php
      foreach ($categories as $cat) {
        echo '<option value="'.$cat->id.'">'.$cat->name.'</option>';
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label>Resim Yükle</label>
    <input type="file" class="form-control-file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Kaydet</button>
  <?php echo form_close(); ?>

</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>