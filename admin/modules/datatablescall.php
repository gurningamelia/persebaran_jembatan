<?php 
if(!empty($addLink)){
	$showAdd = '<a href="'.$addLink.'" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Insert</a>';
}
if(!empty($DTcolExcept)){
	$DThideCol = Exception_explode($DTcolExcept);
}
if(!empty($DTbuttons)){
	$showDTbuttons = DTbuttons_explode($DTbuttons);
}
?>
<?php ob_start(); ?>
<!-- DataTables& Plugins -->
<script src="<?php echo plugins_path(); ?>datatables/jquery.dataTables.min.js"></script>
<?php if(empty($juitheme)){ ?>
<!-- DataTables BS4 -->
<link rel="stylesheet" href="<?php echo plugins_path(); ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo plugins_path(); ?>datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo plugins_path(); ?>datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo plugins_path(); ?>datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo plugins_path(); ?>datatables-rowgroup/css/rowGroup.bootstrap4.min.css">
<script src="<?php echo plugins_path(); ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo plugins_path(); ?>jszip/jszip.min.js"></script>
<script src="<?php echo plugins_path(); ?>pdfmake/pdfmake.min.js"></script>
<script src="<?php echo plugins_path(); ?>pdfmake/vfs_fonts.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script src="<?php echo plugins_path(); ?>datatables-rowgroup/js/dataTables.rowGroup.min.js"></script>
<?php }else{ ?>
<!-- DataTables jQueryui -->
<style>div.dt-button-collection{color: initial;}div.dt-button-collection{width:400px;}div.dt-button-collectionbutton.dt-button{display:inline-block;width:32%;}div.dt-button-collectionbutton.buttons-colvis{display:inline-block;width:49%;}div.dt-button-collectionh3{margin-top:5px;margin-bottom:5px;font-weight:100;border-bottom:1pxsolid#9f9f9f;font-size:1em;}div.dt-button-collectionh3.not-top-heading{margin-top:10px;}.ui-widget .ui-widget:not(label, button, span){padding:12px;}</style>
<link href="dist/themes/<?php echo $juitheme; ?>/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo plugins_path(); ?>datatables-jqueryui/css/dataTables.jqueryui.min.css" rel="stylesheet">
<link href="<?php echo plugins_path(); ?>datatables-jqueryui/css/buttons.jqueryui.min.css" rel="stylesheet">
<link href="<?php echo plugins_path(); ?>datatables-jqueryui/css/responsive.jqueryui.min.css" rel="stylesheet">

<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/dataTables.jqueryui.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/responsive.jqueryui.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/buttons.jqueryui.min.js" type="text/javascript"></script>

<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/buttons.colVis.min.js" type="text/javascript"></script>
<script src="<?php echo plugins_path(); ?>datatables-jqueryui/js/vfs_fonts.js" type="text/javascript"></script>
<?php } ?>
<?php $footerCTcallTables = ob_get_contents(); ob_clean();?>