<div id="content" class="site-content">
<div id="content-inside" class="container no-sidebar">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<article id="post-10" class="post-10 page type-page status-publish hentry">


<div class="entry-content">
<div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
    

<table id="dataMightyWeb" class="table table-striped table-bordered table-sm nowrap" width="100%"> 
<thead>
<tr>
  <th rowspan="3">Nama Jembatan</th>
  <th rowspan="3">Koordinat</th>
  <th rowspan="3">Nama Jalan</th>
  <th rowspan="3">Kecamatan</th>
  <th rowspan="3">Kelurahan</th>
  <th colspan="3">DIMENSI</th>
  <th colspan="8">TIPE/KONDISI</th>
  <th rowspan="3">Keterangan</th>
</tr>
<tr>
  <th rowspan="2">Panjang</th>
  <th rowspan="2">Lebar</th>
  <th rowspan="2">Bentang</th>
  <th colspan="2">BANGUNAN ATAS</th>
  <th colspan="2">BANGUNAN BAWAH</th>
  <th colspan="2">FONDASI</th>
  <th colspan="2">LANTAI</th>
  </tr>
<tr>
<th>TIPE BA</th>
<th>KONDISI BA</th>
<th>TIPE BB</th>
<th>KONDISI BB</th>
<th>TIPE Fondasi</th>
<th>KONDISI Fondasi</th>
<th>TIPE Lantai</th>
<th>KONDISI Lantai</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$result = $conn->query("SELECT * FROM `data_jembatan`");
while($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row["nama_jembatan"]; ?></td>
<td><?php echo $row["koordinat"]; ?></td>
<td><?php echo $row["nama_jalan"]; ?></td>
<td><?php echo $row["kecamatan"]; ?></td>
<td><?php echo $row["kelurahan"]; ?></td>
<td><?php echo $row["panjang"]; ?></td>
<td><?php echo $row["lebar"]; ?></td>
<td><?php echo $row["bentang"]; ?></td>
<td><?php echo idkey_to_name('data_jembatan_tipe','id_tipe',$row["tipe_atas"],'tipe_bangunan'); ?></td>
<td><?php echo $row["kondisi_bangunan_atas"]; ?></td>
<td><?php echo idkey_to_name('data_jembatan_tipe','id_tipe',$row["tipe_bawah"],'tipe_bangunan'); ?></td>
<td><?php echo $row["kondisi_bangunan_bawah"]; ?></td>
<td><?php echo idkey_to_name('data_jembatan_tipe','id_tipe',$row["tipe_fondasi"],'tipe_bangunan'); ?></td>
<td><?php echo $row["kondisi_pondasi"]; ?></td>
<td><?php echo idkey_to_name('data_jembatan_tipe','id_tipe',$row["tipe_lantai"],'tipe_bangunan'); ?></td>
<td><?php echo $row["kondisi_lantai"]; ?></td>
<td><?php echo $row["keterangan"]; ?></td>
</tr><?php } ?>
</tbody> 
</table>



</article>
</main>


</div>
</div>
</div>

<div data-elementor-type="wp-page" data-elementor-id="25" class="elementor elementor-25" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">

<section class="elementor-element elementor-element-57cf0479 elementor-section-content-middle elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="57cf0479" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-narrow">
<div class="elementor-row">
<div class="elementor-element elementor-element-5d9374b1 elementor-column elementor-col-50 elementor-top-column" data-id="5d9374b1" data-element_type="column">
<div class="elementor-column-wrap  elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-36d40946 elementor-widget elementor-widget-heading" data-id="36d40946" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-large">Kontak</h2></div>
</div>
<div class="elementor-element elementor-element-1aa582f elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="1aa582f" data-element_type="widget" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
<li class="elementor-icon-list-item" >
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-home"></i></span>
<span class="elementor-icon-list-text">DPUPR Kota Palembang</span>
</li>
<li class="elementor-icon-list-item" >
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-map-marker-alt"></i></span>
<span class="elementor-icon-list-text"> Jalan Kusuma Bangsa No.45 Palembang </span>
</li>
<li class="elementor-icon-list-item" >
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-envelope-square"></i></span>
<span class="elementor-icon-list-text">dpu@pekalongankota.go.id</span>
</li>
<li class="elementor-icon-list-item" >
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-phone-square"></i></span>
<span class="elementor-icon-list-text"> (0285) 423222</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-542db0d5 elementor-column elementor-col-50 elementor-top-column" data-id="542db0d5" data-element_type="column">
<div class="elementor-column-wrap  elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-53a6aeb5 elementor-widget elementor-widget-google_maps" data-id="53a6aeb5" data-element_type="widget" data-widget_type="google_maps.default">
<div class="elementor-widget-container">
<div class="elementor-custom-embed">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=DPU%20kota%20pekalongan&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" aria-label="DPU kota pekalongan"></iframe>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-element elementor-element-27fa097a elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="27fa097a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-element elementor-element-30511ea7 elementor-column elementor-col-100 elementor-top-column" data-id="30511ea7" data-element_type="column">
<div class="elementor-column-wrap  elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4809fbc1 elementor-widget elementor-widget-text-editor" data-id="4809fbc1" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix"><p>
APLIKASI PERSEBARAN JEMBATAN
<br></p></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>

<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- pace-progress -->
<script src="admin/plugins/pace-progress/pace.min.js"></script>
<!-- DataTables& Plugins -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- DataTables BS4 -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-rowgroup/css/rowGroup.bootstrap4.min.css">
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="admin/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script src="admin/plugins/datatables-rowgroup/js/dataTables.rowGroup.min.js"></script>

<script>
$(document).ready(function() {
var table = $('table#dataMightyWeb').DataTable( {
"lengthChange": false,
"pagingType": "full",
"searching": true,
"paging": true,
lengthMenu: [[ 10, 25, 50, -1 ],[ "10", "25", "50", "Show all" ]],
"ordering": true,
"info": true,"scrollX": true, buttons: [
{extend: 'colvis', text: '<i class="fas fa-columns"></i>'},{extend: 'pageLength', text: '<i class="fas fa-eye"></i>'}, {
	extend: 'collection',
	text: '<i class="fas fa-file"></i>',
	buttons: [ 
	{extend: 'copyHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'excelHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'pdfHtml5', download: 'open', exportOptions: { columns: ':visible' },orientation: 'landscape',pageSize: 'legal',title: 'Laporan Data Jembatan Kota Palembang'}, 	]
}
],
language: {
	searchPlaceholder: "Pencarian...",
	search: "",
},


});
table.buttons().container().appendTo('#dataMightyWeb_wrapper .col-md-6:eq(0)');
});
</script>