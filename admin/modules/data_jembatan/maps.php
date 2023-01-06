<div class="col-12">
<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title"> Data Persebaran Jembatan </h3>
<div class="card-tools">
<a href="./?m=modules/data_jembatan&p=input" class="btn btn-tool">
<i class="fas fa-plus"></i> Add Maker
</a>
</div>
</div> 
<div id='map' style='width: 100%; height:500px;'></div>
</div>
</div>
<?php ob_start(); ?>
<link href="plugins/leaflet/leaflet.css" rel="stylesheet" />
<script src="plugins/leaflet/leaflet.js"></script>
<link rel="stylesheet" href="plugins/cluster/dist/MarkerCluster.css" />
<link rel="stylesheet" href="plugins/cluster/dist/MarkerCluster.Default.css" />
<script src="plugins/cluster/dist/leaflet.markercluster-src.js"></script>
</head>
<script>
var locations = [
<?php 
$table = "data_jembatan";   
$result = $conn->query("SELECT * FROM `$table`"); 
while($row = $result->fetch_assoc()) { ?>
["<?php echo $row['nama_jembatan']; ?><br>Kecamatan: <?php echo $row['kecamatan']; ?><br><table class='table table-sm table-bordered mb-0'><thead><tr><td>Panjang</td><td>Lebar</td></tr></thead><tbody><tr><td><?php echo $row['panjang']; ?></td><td><?php echo $row['lebar']; ?></td></tr></tbody></table><br><a class='btn btn-sm btn-primary btn-block' href='http://maps.google.com/maps?q=<?php echo $row['koordinat']; ?>' target='_blank'>View on map</a>", <?php echo $row['koordinat']; ?>],
<?php } ?>
];

var map = L.map('map').setView([-2.976074, 104.775431], 12);
mapLink =
  '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
  }).addTo(map);

var markers = new L.markerClusterGroup();
  	
for (var i = 0; i < locations.length; i++) {
 var lokasi = new L.marker([locations[i][1], locations[i][2]])
    .bindPopup(locations[i][0]);
    	markers.addLayer(lokasi);

		map.addLayer(markers);
		map.fitBounds(markers.getBounds());
}
</script>
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?>