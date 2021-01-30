<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ciBlog</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <script src="https://kit.fontawesome.com/7416141269.js" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
  <style type="text/css">
   .navbar { background-color: #484848; }
   .navbar .navbar-nav .nav-link { color: #fff; }
   .navbar .navbar-nav .nav-link:hover { color: #fbc531; }
   .navbar .navbar-nav .active > .nav-link { color: #fbc531; }

   footer a.text-light:hover { color: #fed136!important; text-decoration: none; }
   footer .cizgi { border-right: 1px solid #535e67; }
   @media (max-width: 992px) { footer .cizgi { border-right: none; } }
 </style>
</head>
<body>
  <?php 
  $url = $_SERVER['REQUEST_URI'];
  $path = parse_url($url, PHP_URL_PATH);
  //echo $path;
  ?>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand text-white" href="<?php echo base_url() ?>"><i class="fa fa-graduation-cap fa-lg mr-2"></i>CI-Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nvbCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/") {echo "active"; } else  {echo "noactive";} ?>">
          <a class="nav-link" href="<?php echo base_url() ?>"><i class="fa fa-home fa-fw mr-1"></i>Anasayfa</a>
        </li>
        <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/posts") {echo "active"; } else  {echo "noactive";} ?>">
          <a class="nav-link" href="<?php echo base_url() ?>posts"><i class="fa fa-th-list fa-fw mr-1"></i>Blog</a>
        </li>
        <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/categories") {echo "active"; } else  {echo "noactive";} ?>">
          <a class="nav-link" href="<?php echo base_url() ?>categories"><i class="fas fa-list"></i> Kategoriler</a>
        </li>
        <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/about") {echo "active"; } else  {echo "noactive";} ?>">
          <a class="nav-link" href="<?php echo base_url() ?>about"><i class="fa fa-info-circle fa-fw mr-1"></i>Hakkımda</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <?php if(!$this->session->userdata('logged_in')):?>
          <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/users/register") {echo "active"; } else  {echo "noactive";} ?>">
            <a class="nav-link" href="<?php echo base_url() ?>users/register"><i class="fa fa-user-plus fa-fw mr-1"></i>Kayıt Ol</a>
          </li>
          <li class="nav-item pl-1 <?php if ($path=="/CodeIgniter-3-blog2/users/login") {echo "active"; } else  {echo "noactive";} ?>">
            <a class="nav-link" href="<?php echo base_url() ?>users/login"><i class="fa fa-sign-in fa-fw mr-1"></i>Oturum Aç</a>
          </li>
          <?php else:?>
            <li class="nav-item <?php if ($path=="/CodeIgniter-3-blog2/posts/create") {echo "active"; } else  {echo "noactive";} ?>">
              <a class="nav-link" href="<?php echo base_url() ?>posts/create">Gönderi Oluştur</a>
            </li>
            <li class="nav-item <?php if ($path=="/CodeIgniter-3-blog2/categories/create") {echo "active"; } else  {echo "noactive";} ?>">
              <a class="nav-link" href="<?php echo base_url() ?>categories/create">Kategori Oluştur</a>
            </li>
            <li class="nav-item <?php if ($path=="/CodeIgniter-3-blog2/users/logout") {echo "active"; } else  {echo "noactive";} ?>">
              <a class="nav-link" href="<?php echo base_url() ?>users/logout">Çıkış</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

