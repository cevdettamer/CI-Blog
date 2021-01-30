<div class="container">
        <?php $this->load->view('templates/ms'); ?>
        <div class="row justify-content-md-center">
                <div class="col-md-4">   
<h1 class="text-center"><?=$title?></h1>

<?php echo validation_errors(); ?>
    <?php echo form_open('users/login'); ?>
    
    <div class="form-group">
        <label>Kullanıcı adı</label>
        <input type="text" class="form-control" name="username" placeholder="Kullanıcı adınızı giriniz" value="<?=set_value('username')?>" required autofocus>
    </div>
    <div class="form-group">
        <label>Şifre</label>
        <input type="password" class="form-control" name="password" placeholder="Şifre giriniz">
    </div>    
    <input type="submit" value="Giriş" class="btn btn-primary btn-block">
    
<?php echo form_close(); ?>
</div>
</div>
</div>
