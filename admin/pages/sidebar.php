<aside class="main-sidebar elevation-4 sidebar-dark-warning">
<a href="#" class="brand-link navbar-warning">
<img src="<?php echo $logo; ?>" alt="<?php echo $company_alt; ?>" class="brand-image" style="width: 30px; height: 30px;">
<span class="brand-text text-dark font-weight-dark"> <?php echo $company_alt; ?></span>
</a>
<div class="sidebar">
<div class="user-panel mt-3 pb-1 mb-3 d-flex">

<div class="info" style="line-height: 1.2em;">
<a href="#" class="d-block text-light">
<?php echo $session['nama_lengkap']; ?></a>
<small class="text-success">
<?php echo $session['level']; ?>
</small>
</div>
</div>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact nav-child-indent" 
data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-header">Data Sistem</li>
<?php if($session['level']=='Admin'){ ?>

<li class="nav-item">
<a href="./?m=modules/data_jembatan&amp;p=maps" class="nav-link">
<i class="nav-icon fas fa-location-arrow"></i> 
<p>Peta Jembatan</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan&p=index" class="nav-link">
<i class="nav-icon fas fa-road"></i> 
<p>Daftar Jembatan</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan_tipe&p=index" class="nav-link">
<i class="nav-icon fas fa-clipboard-list"></i> 
<p>Daftar Tipe Jembatan</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan/&p=input&act=insert" class="nav-link">
<i class="nav-icon fas fa-map-pin"></i> 
<p>Ambil Titik Jembatan</p></a></li>



<?php }else if($session['level']=='Kabid'){ ?>
<li class="nav-item">
<a href="./?m=modules/data_jembatan&amp;p=maps" class="nav-link">
<i class="nav-icon fas fas fa-location-arrow"></i> 
<p>All Maps</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_user&p=index" class="nav-link">
<i class="nav-icon fas fa-user"></i> 
<p>Data Login</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan&p=index" class="nav-link">
<i class="nav-icon fas fa-road"></i> 
<p>Daftar Jembatan</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan_tipe&p=index" class="nav-link">
<i class="nav-icon fas fa-clipboard-list"></i> 
<p>Daftar Tipe Jembatan</p></a></li>



<?php }else if($session['level']=='User'){ ?>
<li class="nav-item">
<a href="./?m=modules/data_jembatan&amp;p=maps" class="nav-link">
<i class="nav-icon fas fas fa-location-arrow"></i> 
<p>All Maps</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_user&p=index" class="nav-link">
<i class="nav-icon fas fa-user"></i> 
<p>Data Login</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan&p=index" class="nav-link">
<i class="nav-icon fas fa-road"></i> 
<p>Daftar Jembatan</p></a></li>

<li class="nav-item">
<a href="./?m=modules/data_jembatan_tipe&p=index" class="nav-link">
<i class="nav-icon fas fa-clipboard-list"></i> 
<p>Daftar Tipe Jembatan</p></a></li>

<?php } ?>


</ul>
</nav>
</div>
</aside>