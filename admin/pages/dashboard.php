<div class="container-fluid">
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-12">
<h1 class="m-0"><?php echo $app_name; ?></h1>
<h5 class="mb-2"><?php echo $description; ?></h5>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="row">
<div class="col-3">
<!-- small box -->
<div class="small-box bg-info">
<div class="inner">
<h3>
<?php echo count_row('data_jembatan','id_jembatan'); ?>
</h3>

<p>Total Jembatan</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="./?m=modules/data_jembatan&p=index" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


</div>
</div>

<div class="card card-success">
<div class="card-header">
<h3 class="card-title">Jumlah per Kecamatan</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div id="kecamatanchart"</div>
</div>
</div>
</div>


<div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Tipe Bangunan Atas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div id="piechart_3d" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"</div>
</div>
</div>
</div>


<div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Tipe Bangunan Bawah</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div id="piechart_3d2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"</div>
</div>
</div>
</div>

<div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Tipe Fondasi</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div id="piechart_3d3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"</div>
</div>
</div>
</div>

<div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Tipe Lantai</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div id="piechart_3d4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"</div>
</div>
</div>
</div>

<?php 
$koneksi = new mysqli("localhost", "root", "", "id19311466_jembatan");
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
       ['Tipe Bangunan Bawah', 'Jumlah Jembatan',],
 ['3 Kolom/ lebih', <?php 
				$bk = mysqli_query($koneksi,"select * from data_jembatan where tipe_bawah='7'");
				echo mysqli_num_rows($bk);
				?>],
          ['Khusus', <?php 
				$ib1 = mysqli_query($koneksi,"select * from data_jembatan where tipe_bawah='8'");
				echo mysqli_num_rows($ib1);
				?>],
        ['Cap', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_bawah='9'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Dinding Penuh', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_bawah='10'");
				echo mysqli_num_rows($ib2);
				?>]
        ]);

        var options = {
          title: 'Jumlah Jembatan (%)',
          is3D: true,
        maintainAspectRatio : false,
      responsive : true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
    </script>
    
    

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
       ['Tipe Bangunan Atas', 'Jumlah Jembatan',],
 ['Gelagar Komposit', <?php 
				$bk = mysqli_query($koneksi,"select * from data_jembatan where tipe_atas='3'");
				echo mysqli_num_rows($bk);
				?>],
          ['Gorong Pelengkung', <?php 
				$ib1 = mysqli_query($koneksi,"select * from data_jembatan where tipe_atas='4'");
				echo mysqli_num_rows($ib1);
				?>],
        ['Gorong Persegi', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_atas='5'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Pelat', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_atas='6'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Gelagar', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_atas='19'");
				echo mysqli_num_rows($ib2);
				?>]
        ]);

        var options = {
          title: 'Jumlah Jembatan (%)',
          is3D: true,
              maintainAspectRatio : false,
      responsive : true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
       ['Tipe Fondasi', 'Jumlah Jembatan',],
 ['Cakar Ayam', <?php 
				$bk = mysqli_query($koneksi,"select * from data_jembatan where tipe_fondasi='11'");
				echo mysqli_num_rows($bk);
				?>],
          ['Sumur', <?php 
				$ib1 = mysqli_query($koneksi,"select * from data_jembatan where tipe_fondasi='12'");
				echo mysqli_num_rows($ib1);
				?>],
        ['Tiang Pancang', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_fondasi='13'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Tiang Ulir', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_fondasi='14'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Pondasi', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_fondasi='20'");
				echo mysqli_num_rows($ib2);
				?>]
        ]);

        var options = {
          title: 'Jumlah Jembatan (%)',
          is3D: true,
               maintainAspectRatio : false,
      responsive : true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
        chart.draw(data, options);
      }
    </script>
    
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
       ['Tipe Lantai', 'Jumlah Jembatan',],
 ['Aspal', <?php 
				$bk = mysqli_query($koneksi,"select * from data_jembatan where tipe_lantai='15'");
				echo mysqli_num_rows($bk);
				?>],
          ['Baja', <?php 
				$ib1 = mysqli_query($koneksi,"select * from data_jembatan where tipe_lantai='16'");
				echo mysqli_num_rows($ib1);
				?>],
        ['Beton bertulang', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_lantai='17'");
				echo mysqli_num_rows($ib2);
				?>],
		 ['Pipa baja berisi', <?php 
				$ib2 = mysqli_query($koneksi,"select * from data_jembatan where tipe_lantai='18'");
				echo mysqli_num_rows($ib2);
				?>]
        ]);

        var options = {
          title: 'Jumlah Jembatan (%)',
          is3D: true,
             maintainAspectRatio : false,
      responsive : true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d4'));
        chart.draw(data, options);
      }
    </script>
    
 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kecamatan', 'Jumlah Jembatan',],
          ['Bukit Kecil', <?php 
$bk = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Bukit Kecil'");
echo mysqli_num_rows($bk);
?>],
          ['Ilir Barat 1', <?php 
$ib1 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Ilir Barat I'");
echo mysqli_num_rows($ib1);
?>],
        ['Ilir Barat 2', <?php 
$ib2 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Ilir Barat II'");
echo mysqli_num_rows($ib2);
?>],
        ['Gandus', <?php 
$gan = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Gandus'");
echo mysqli_num_rows($gan);
?>],
        ['Ilir Timur 1', <?php 
$it1 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Ilir Timur I'");
echo mysqli_num_rows($it1);
?>],
        ['Ilir Timur 2', <?php 
$it2 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Ilir Timur II'");
echo mysqli_num_rows($it2);
?>],
        ['Ilir Timur 3', <?php 
$it3 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Ilir Timur III'");
echo mysqli_num_rows($it2);
?>],
        ['Kemuning', <?php 
$kem = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Kemuning'");
echo mysqli_num_rows($kem);
?>],
        ['Kalidoni', <?php 
$kal = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Kalidoni'");
echo mysqli_num_rows($kal);
?>], 
        ['Sako', <?php 
$sak = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Sako'");
echo mysqli_num_rows($sak);
?>], 
        ['Sematang Borang', <?php 
$sembor = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Sematang Borang'");
echo mysqli_num_rows($sembor);
?>], 
        ['Sukarami', <?php 
$suk = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Sukarami'");
echo mysqli_num_rows($suk);
?>], 
        ['Alang-alang lebar', <?php 
$albar = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Alang- Alang Lebar'");
echo mysqli_num_rows($albar);
?>], 
        ['Seb. Ulu 1', <?php 
$su1 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Seberang Ulu I'");
echo mysqli_num_rows($su1);
?>], 
        ['Seb. Ulu 2', <?php 
$su2 = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Seberang Ulu II'");
echo mysqli_num_rows($su2);
?>], 
        ['Jakabaring', <?php 
$jak = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Jakabaring'");
echo mysqli_num_rows($jak);
?>], 
        ['Kertapati', <?php 
$ker = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Kertapati'");
echo mysqli_num_rows($ker);
?>], 
        ['Plaju', <?php 
$pla = mysqli_query($koneksi,"select * from data_jembatan where kecamatan='Plaju'");
echo mysqli_num_rows($pla);
?>]
        ]);

      var options = {
        title: '',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Jumlah Jembatan',
          minValue: 0
        },
        vAxis: {
          title: 'Kecamatan'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('kecamatanchart'));

      chart.draw(data, options);
      }
    </script>
    



