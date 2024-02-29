<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Aplikasi Manajemen Pegawai FV-Universitas Brawijaya</title>
   
    <link href="<?= BASE_PATH ?>/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>/public/open-iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    
    <script src="<?= BASE_PATH ?>/public/js/jquery-3.3.1.min.js"></script>
  </head>
  <body class="h-100">
      <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
         <a class="navbar-brand" href="#">Manajemen Pegawai-D-III Teknologi Informasi-Univ. Brawijaya</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         
         <nav class="collapse navbar-collapse" id="sidebar">
            
<ul class="navbar-nav d-sm-none">
    <li class="nav-item"> 
        <a class="nav-link text-white" href="<?= BASE_PATH ?>/dashboard">
           <i class="oi oi-dashboard"></i> Dashboard
        </a> 
    </li>
    <li class="nav-item"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/pegawai">
          <i class="oi oi-person"></i> Data Pegawai
       </a> 
    </li>
    <li class="nav-item"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/jabatan">
          <i class="oi oi-sort-descending"></i> Data Jabatan
       </a> 
    </li>
    <li class="nav-item"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/login/logout">
          <i class="oi oi-account-logout"></i> Keluar
       </a> 
    </li>
</ul>

         </nav>
      </nav>
   
      <div class="container-fluid h-100">
        <div class="row h-100">
         <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
            
<ul class="list-group list-group-flush">
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/dashboard">
          <i class="oi oi-dashboard"></i> Dashboard
       </a>
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/pegawai">
          <i class="oi oi-person"></i> Data Pegawai
       </a> 
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/jabatan">
          <i class="oi oi-sort-descending"></i> Data Jabatan
       </a> 
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="<?= BASE_PATH ?>/login/logout">
          <i class="oi oi-account-logout"></i> Keluar
       </a> 
    </li>
</ul>
         
         </nav>

         <div  class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">  
           <section>
            
<?php
//Menampilkan konten halaman
  $view = new View($viewName);
  $view->bind('data', $data);
  $view->render();
?>     

           </section>
         </div>
        </div>
      </div>
     
     <script src="<?= BASE_PATH ?>/public/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>