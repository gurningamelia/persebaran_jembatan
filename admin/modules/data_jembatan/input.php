<?php 
$table = "data_jembatan";
if(!empty($_GET['key']) && !empty($_GET['val'])){ 
$sqlupdate = $conn->query("SELECT * FROM `$table` WHERE `$_GET[key]` = '$_GET[val]'"); 
$row = $sqlupdate->fetch_array(); 
$inputkey = '<input type="hidden" name="key" value="'.$_GET['key'].'" />'; 
$inputval = '<input type="hidden" name="val" value="'.$_GET['val'].'" />'; 
$act = 'process="update"'; 
$btnlihat = '<a class="btn btn-primary my-2" href="http://maps.google.com/maps?q='.$row['koordinat'].'" target="_blank">
<span class="fas fa-fw fa-map-marker-alt mr-1"></span>Lihat Lokasi</a>';

}else if(!empty($_GET['act'])){ 
$act = 'process="'.$_GET['act'].'"'; 
}else{ 
$act = 'process="insert"'; 
}?>
<div class="col-12">
<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title"> Input Data Jembatan </h3></div> 
<form class="needs-validation mb-0" novalidate enctype="multipart/form-data" id="mightywebForm" <?php echo $act; ?>> 
<input type="hidden" name="table" value="<?php echo $table; ?>"> 
<?php echo $inputkey; ?> 
<?php echo $inputval; ?> 
<div class="card-body">
<div class="row">
<div class="form-group col-lg-6 col-sm-12" id="fg_nama_jembatan">
<label for="nama_jembatan">Nama Jembatan</label>
<input type="text" class="form-control" required name="nama_jembatan" id="nama_jembatan" 
value="<?php echo $row['nama_jembatan']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>

<div class="form-group col-lg-6 col-sm-12" id="fg_koordinat">
<label for="koordinat">Koordinat</label>
<input type="text" class="form-control" required name="koordinat" id="koordinat" value="<?php echo $row['koordinat']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>

</div>

<div id='maps-view' style='width: 100%; height:250px;'><?php echo $btnlihat; ?></div>



<div class="card card-outline card-warning mt-2"> 
<div class="card-header"><h3 class="card-title">ALAMAT</h3></div> 
<div class="card-body p-2">
<div class="row">

<div class="form-group col-lg-4 col-sm-12" id="fg_nama_jalan">
<label for="nama_jalan">Nama Jalan</label>
<input type="text" class="form-control" required name="nama_jalan" id="nama_jalan" value="<?php echo $row['nama_jalan']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>

<div class="form-group col-lg-4 col-sm-12" id="fg_kecamatan">
<label for="kecamatan">Kecamatan</label>
<select class="form-control" required name="kecamatan" id="kecamatan">
<option value="<?php echo $row['kecamatan']; ?>"><?php echo $row['kecamatan']; ?></option>
<option value="">-Pilih-</option>
<option value="Alang- Alang Lebar">Alang- Alang Lebar</option>
<option value="Bukit Kecil">Bukit Kecil</option>
<option value="Gandus">Gandus</option>
<option value="Ilir Barat I">Ilir Barat I</option>
<option value="Ilir Barat II">Ilir Barat II</option>
<option value="Ilir Timur I">Ilir Timur I</option>
<option value="Ilir Timur II">Ilir Timur II</option>
<option value="Ilir Timur III">Ilir Timur III</option>
<option value="Jakabaring">Jakabaring</option>
<option value="Kalidoni">Kalidoni</option>
<option value="Kemuning">Kemuning</option>
<option value="Kertapati">Kertapati</option>
<option value="Plaju">Plaju</option>
<option value="Sako">Sako</option>
<option value="Seberang Ulu I">Seberang Ulu I</option>
<option value="Seberang Ulu II">Seberang Ulu II</option>
<option value="Sematang Borang">Sematang Borang</option>
<option value="Sukarami">Sukarami</option>
</select>
<div class="invalid-feedback">Harap isi data</div></div>

<div class="form-group col-lg-4 col-sm-12" id="fg_kelurahan">
<label for="kelurahan">Kelurahan</label>
<input type="text" class="form-control" required name="kelurahan" id="kelurahan" value="<?php echo $row['kelurahan']; ?>"><div class="invalid-feedback">Harap isi data</div></div>
</div>
</div>
</div>

<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title">DIMENSI</h3></div> 
<div class="card-body p-2">
<div class="row">
<div class="form-group col-lg-4 col-sm-12" id="fg_panjang">
<label for="panjang">Panjang (m)</label>
<input type="text" class="form-control" required name="panjang" id="panjang" value="<?php echo $row['panjang']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>
<div class="form-group col-lg-4 col-sm-12" id="fg_lebar">
<label for="lebar">Lebar (m)</label>
<input type="text" class="form-control" required name="lebar" id="lebar" value="<?php echo $row['lebar']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>
<div class="form-group col-lg-4 col-sm-12" id="fg_bentang">
<label for="bentang">Bentang (buah)</label>
<input type="text" class="form-control" required name="bentang" id="bentang" value="<?php echo $row['bentang']; ?>">
<div class="invalid-feedback">Harap isi data</div></div>
</div>
</div>
</div>

<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title">TIPE/KONDISI JEMBATAN</h3></div> 
<div class="card-body p-2">
<div class="row">
<div class="form-group col-lg-6 col-sm-12" id="fg_tipe_atas">
<label for="tipe_atas">Bangunan Atas</label>
<div class="input-group">
<select class="form-control" required name="tipe_atas" id="tipe_atas">
<option value="">-Pilih-</option>
<?php 
echo select_dataWhere('data_jembatan_tipe','id_tipe','tipe_bangunan','jenis_tipe','Bangunan Atas',$row['tipe_atas']); 
?>
</select>
<div class="input-group-append">
<span class="input-group-text">
<select  required name="kondisi_bangunan_atas" id="kondisi_bangunan_atas">
    <option value="">Kondisi</option>
    <option value="1" <?php if ($row['kondisi_bangunan_atas']== '1'){ echo 'selected'; } ?>>1.Baik</option>
    <option value="2" <?php if ($row['kondisi_bangunan_atas']== '2'){ echo 'selected'; } ?>>2.Sedang</option>
    <option value="3" <?php if ($row['kondisi_bangunan_atas']== '3'){ echo 'selected'; } ?>>3.Rusak Ringan</option>
    <option value="4" <?php if ($row['kondisi_bangunan_atas']== '4'){ echo 'selected'; } ?>>4.Rusak Berat</option>
    <option value="5" <?php if ($row['kondisi_bangunan_atas']== '5'){ echo 'selected'; } ?>>5.Runtuh</option>
</select>
</span>
</div>
</div>
<div class="invalid-feedback">Harap isi data</div></div>
<div class="form-group col-lg-6 col-sm-12" id="fg_tipe_bawah">
<label for="tipe_bawah">Bangunan Bawah</label>
<div class="input-group">
<select class="form-control" required name="tipe_bawah" id="tipe_bawah">
<option value="">-Pilih-</option>
<?php 
echo select_dataWhere('data_jembatan_tipe','id_tipe','tipe_bangunan','jenis_tipe','Bangunan Bawah',$row['tipe_bawah']); 
?>
</select>
<div class="input-group-append">
<span class="input-group-text">
<select  required name="kondisi_bangunan_bawah" id="kondisi_bangunan_bawah">
    <option value="">Kondisi</option>
    <option value="1" <?php if ($row['kondisi_bangunan_bawah']== '1'){ echo 'selected'; } ?>>1.Baik</option>
    <option value="2" <?php if ($row['kondisi_bangunan_bawah']== '2'){ echo 'selected'; } ?>>2.Sedang</option>
    <option value="3" <?php if ($row['kondisi_bangunan_bawah']== '3'){ echo 'selected'; } ?>>3.Rusak Ringan</option>
    <option value="4" <?php if ($row['kondisi_bangunan_bawah']== '4'){ echo 'selected'; } ?>>4.Rusak Berat</option>
    <option value="5" <?php if ($row['kondisi_bangunan_bawah']== '5'){ echo 'selected'; } ?>>5.Runtuh</option>
</select>
</span>
</div>
</div>
<div class="invalid-feedback">Harap isi data</div></div>
<div class="form-group col-lg-6 col-sm-12" id="fg_tipe_fondasi">
<label for="tipe_fondasi">Fondasi</label>
<div class="input-group">
<select class="form-control" required name="tipe_fondasi" id="tipe_fondasi">
<option value="">-Pilih-</option>
<?php 
echo select_dataWhere('data_jembatan_tipe','id_tipe','tipe_bangunan','jenis_tipe','Fondasi',$row['tipe_fondasi']); 
?>
</select>
<div class="input-group-append">
<span class="input-group-text">
<select  required name="kondisi_pondasi" id="kondisi_pondasi">
    <option value="">Kondisi</option>
    <option value="1" <?php if ($row['kondisi_pondasi']== '1'){ echo 'selected'; } ?>>1.Baik</option>
    <option value="2" <?php if ($row['kondisi_pondasi']== '2'){ echo 'selected'; } ?>>2.Sedang</option>
    <option value="3" <?php if ($row['kondisi_pondasi']== '3'){ echo 'selected'; } ?>>3.Rusak Ringan</option>
    <option value="4" <?php if ($row['kondisi_pondasi']== '4'){ echo 'selected'; } ?>>4.Rusak Berat</option>
    <option value="5" <?php if ($row['kondisi_pondasi']== '5'){ echo 'selected'; } ?>>5.Runtuh</option>
</select>
</span>
</div>
</div>
<div class="invalid-feedback">Harap isi data</div></div>
<div class="form-group col-lg-6 col-sm-12" id="fg_tipe_lantai">
<label for="tipe_lantai">Lantai</label>
<div class="input-group">
<select class="form-control" required name="tipe_lantai" id="tipe_lantai">
<option value="">-Pilih-</option>
<?php 
echo select_dataWhere('data_jembatan_tipe','id_tipe','tipe_bangunan','jenis_tipe','Lantai',$row['tipe_lantai']); 
?>
</select>
<div class="input-group-append">
<span class="input-group-text">
<select  required name="kondisi_lantai" id="kondisi_lantai">
    <option value="">Kondisi</option>
    <option value="1" <?php if ($row['kondisi_lantai']== '1'){ echo 'selected'; } ?>>1.Baik</option>
    <option value="2" <?php if ($row['kondisi_lantai']== '2'){ echo 'selected'; } ?>>2.Sedang</option>
    <option value="3" <?php if ($row['kondisi_lantai']== '3'){ echo 'selected'; } ?>>3.Rusak Ringan</option>
    <option value="4" <?php if ($row['kondisi_lantai']== '4'){ echo 'selected'; } ?>>4.Rusak Berat</option>
    <option value="5" <?php if ($row['kondisi_lantai']== '5'){ echo 'selected'; } ?>>5.Runtuh</option>
</select>
</span>
</div>
</div>
<div class="invalid-feedback">Data harus diisi.</div></div>
</div>
</div>
</div>


</div> 
<div class="card-footer"> 
<a class="btn border-dark" onClick="history.back()">Cancel</a>
<button type="submit" class="btn btn-primary float-right">Submit</button> 
</div> 
</form> 
</div></div>
<?php ob_start(); ?> 
<link href="plugins/leaflet/leaflet.css" rel="stylesheet" />
<script src="plugins/leaflet/leaflet.js"></script>
<script>
<?php if(!empty($_GET['key']) && !empty($_GET['val'])){  ?>
if (document.getElementById("maps-view")) {
var map = L.map('maps-view').setView([<?php echo $row['koordinat']; ?>], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([<?php echo $row['koordinat']; ?>]).addTo(map);
}
<?php }else{ ?>
let koordinat = "searching...";
if (document.getElementById("maps-view")) {
window.onload = function() {
var popup = L.popup();
var geolocationMap = L.map("maps-view", {
center: [40.731701, -73.993411],
zoom: 15,
});

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(geolocationMap);

function geolocationErrorOccurred(geolocationSupported, popup, latLng) {
popup.setLatLng(latLng);
popup.setContent(
geolocationSupported ?
"<b>Error:</b> Nyalakan Lokasi Anda!" :
"<b>Error:</b> This browser doesn't support geolocation."
);
popup.openOn(geolocationMap);
}

if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(
function(position) {
var latLng = {
lat: position.coords.latitude,
lng: position.coords.longitude,
};

var marker = L.marker(latLng).addTo(geolocationMap);
koordinat = position.coords.latitude + ", " + position.coords.longitude;
geolocationMap.setView(latLng);
$('#koordinat').val(koordinat);
},
function() {
geolocationErrorOccurred(true, popup, geolocationMap.getCenter());
koordinat = 'No Location';
}
);
} else {
//No browser support geolocation service
geolocationErrorOccurred(false, popup, geolocationMap.getCenter());
koordinat = 'No Location';
}
};
}
<?php } ?>
</script>
<?php include('modules/forminsert.php');?> 
<?php include('modules/formcall.php'); ?> 
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?>