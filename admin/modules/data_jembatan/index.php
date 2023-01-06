<?php if($session['level']=='Admin'){ ?>
<p>
<button type="button" class="btn btn-outline-primary" 
onclick="location.href='?m=modules/data_jembatan/&p=input&act=insert';">
Tambah Data
</button>
</p> 
<?php } ?>
<div class="card"> 
<div class="card-header"><h3 class="card-title">Data Jembatan</h3>
<div class="card-tools">
<a href="./?m=modules/data_jembatan&p=maps" class="btn btn-tool">
<i class="fas fa-map-marked-alt"></i> Lihat Peta
</a>
</div>
</div>
<div class="card-body"> 
<?php 
$table = "data_jembatan";   
$result = $conn->query("SELECT * FROM `$table`");  ?> 
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
  <?php if($session['level']=='Admin'){ ?>
  <th rowspan="3">Actions</th>
  <?php } ?>
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
<th>Tipe BA</th>
<th>Kondisi BA</th>
<th>Tipe BB</th>
<th>Kondisi BB</th>
<th>Tipe Fondasi</th>
<th>Kondisi Fondasi </th>
<th>Tipe Lantai</th>
<th>Kondisi Lantai</th>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc()) { ?><tr>
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
<?php if($session['level']=='Admin'){ ?>
<td>
<a href="?m=modules/data_jembatan/&p=input&act=update&key=id_jembatan&val=<?php echo $row["id_jembatan"]; ?>" 
class="btn btn-info btn-xs" title="Update"><i class="fas fa-edit"></i></a> 
<a href="javascript:delData('<?php echo $row["id_jembatan"]; ?>')" 
class="btn btn-danger btn-xs" title="Delete"><i class="far fa-trash-alt"></i></a>
</td> 
<?php } ?>
</tr><?php } ?>
</tbody> 
</table> 
</div></div> 
<?php ob_start(); ?> 
<?php $setDTcolvis = "{extend: 'colvis', text: '<i class=\"fas fa-columns\"></i>'},"; ?> 
<?php $setDTenties = "{extend: 'pageLength', text: '<i class=\"fas fa-eye\"></i>'}, "; ?> 
<?php $setTableStyle = '"scrollX": true, "fixedColumns": true, '; ?> 
<?php $setScriptTools = '"searching": true,
"paging": true,
lengthMenu: [[ 10, 25, 50, -1 ],[ "10", "25", "50", "Show all" ]],
"ordering": true,
"info": true,'; ?> 
<?php $setDTbuttons = "{extend: 'copyHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'excelHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'pdfHtml5', download: 'open', exportOptions: { columns: ':visible' },orientation: 'landscape',pageSize: 'legal',title: 'Laporan Data Jembatan Kota Palembang'}, "; ?> 
<?php $setDTSearchCol = ""; ?>
<?php $setDTfooterScript = ''; ?>
<?php include('modules/dtscripts.php'); ?> 
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?>