<div class="container">
<?php $this->load->view('templates/ms'); ?>
    <h2><?=$title?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('categories/create'); ?>
<div class="form-group">
    <label>Kategori Adı</label>
    <input type="text" class="form-control" placeholder="Kategori adı" name="name">
  </div>

<button type="submit" class="btn btn-primary">Kaydet</button>

<?php echo form_close(); ?>
</div>