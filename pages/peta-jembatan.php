<div id="content" class="site-content">
<div id="content-inside" class="container no-sidebar">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<article id="post-10" class="post-10 page type-page status-publish hentry">


<div class="entry-content">
<div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
    


<div class="col-12">
<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title"> Data Persebaran Jembatan </h3>
</div> 
<div id='map' style='width: 100%; height:500px;'></div>
</div>
</div>



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

<link href="admin/plugins/leaflet/leaflet.css" rel="stylesheet" />
<script src="admin/plugins/leaflet/leaflet.js"></script>
<link rel="stylesheet" href="admin/plugins/leaflet-search/leaflet-search.css" />
<script src="admin/plugins/leaflet-search/leaflet-search.js"></script>
<script>

navigator.geolocation.getCurrentPosition(function(location) {
var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

//map view
console.log(location.coords.latitude, location.coords.longitude);

   //sample data values for populate map
    
	var data = [
	<?php 
    $table = "data_jembatan";   
    $result = $conn->query("SELECT * FROM `$table`"); 
    while($row = $result->fetch_assoc()) { ?>
		{
		"loc":[<?php echo $row['koordinat']; ?>], 
		"title":"<?php echo $row['nama_jembatan']; ?>",
		"panjang": "<?php echo $row['panjang']; ?>",
		"lebar":"<?php echo $row['lebar']; ?>",
		"button":"<?php echo $row['koordinat']; ?>'"
		}, 
	<?php } ?>
	];


	var map = new L.Map('map', {zoom: 12, center: new L.latLng(data[0].loc) });	//set center from first location

	map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

	var markersLayer = new L.LayerGroup();	//layer contain searched elements
	map.addLayer(markersLayer);

	var controlSearch = new L.Control.Search({
		position:'topright',		
		layer: markersLayer,
		initial: false,
		zoom: 30,
		marker: false
	});

	map.addControl( controlSearch );

	for(i in data) {
		var title = data[i].title;	//value searched
		var loc = data[i].loc;		//position found

		var panjang = data[i].panjang;	//value searched
		var lebar = data[i].lebar;
		var button = data[i].button;
		

		var marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
		marker.bindPopup("<b>"+title +"<br>Panjang: "+panjang+"m"+ "<br>Lebar: "+lebar+"m" +"<a href='https://www.google.com/maps/dir/?api=1&origin="+location.coords.latitude+","+location.coords.longitude+"&destination="+button+  "class='btn btn-sm btn-primary btn-block' target='_blank'>Lihat Rute</a>");
		markersLayer.addLayer(marker);
	}
	
});
</script>