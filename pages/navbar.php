<nav class="main-header navbar navbar-expand-md navbar-dark navbar-success">
<div class="container">
<a href="./" class="navbar-brand">
<img src="<?php echo str_replace('../','',$logo); ?>" class="brand-image">
<span class="brand-text font-weight-light"><?php echo $company_name; ?></span>
</a>
<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse order-3" id="navbarCollapse">

</div>
<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
<li class="nav-item">
<a class="nav-link" href="./">
<i class="fas fa-home"></i> Dashboard
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./?m=pages&p=jembatan">
<i class="fas fa-road"></i> Data Jembatan
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./?m=pages&p=maps">
<i class="fas fa-map-marked-alt"></i> Maps Jembatan
</a>
</li>
</ul>
</div>
</nav>