<div class="container">

<div class="row justify-content-md-center">
        <div class="col-md-4">   
        <h1 class="text-center"><?=$title?></h1>
<?php echo validation_errors(); ?>
    <?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label>Ad</label>
        <input type="text" class="form-control" name="name" placeholder="Ad" value="<?=set_value('name')?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?=set_value('email')?>">
    </div>
    <div class="form-group">
        <label>Kullanıcı Adı</label>
        <input type="text" class="form-control" name="username" placeholder="Kullanıcı adı" value="<?=set_value('username')?>">
    </div>
    <div class="form-group">
        <label>Şifre</label>
        <input type="password" class="form-control" name="password" placeholder="Şifre">
    </div>
    <div class="form-group">
        <label>Şifre Tekrarı</label>
        <input type="password" class="form-control" name="passconf" placeholder="Şifre">
    </div>
    
    <input type="submit" value="Kayıt ol" class="btn btn-primary btn-block">
<?php echo form_close(); ?>
</div>
    </div>
</div>
