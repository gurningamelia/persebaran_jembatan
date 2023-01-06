<footer class="main-footer">
<div class="float-right d-none d-sm-inline">
<?php echo $created; ?>
</div>
<strong><?php echo $copyright; ?></strong>
</footer>
</div>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- pace-progress -->
<script src="plugins/pace-progress/pace.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<!-- Page Scripts -->
<?php echo $footerCTcallTables; // datatable index ?>
<?php echo $footerCTcallForms; // form input ?>
<?php echo $footerCTcallScripts; // dtscripts ?>
<?php echo $footerCTcallScript_custom; // custom input / index ?>
<style>
.table thead th{
vertical-align: middle !important;   
}
.image > img {
height: 2.1rem;
border: 1.5px solid #f6f7f8;	
}  
</style>
</body>
</html>