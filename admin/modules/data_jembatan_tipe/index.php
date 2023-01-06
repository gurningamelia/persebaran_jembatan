<?php if($session['level']=='Admin'){ ?>
<p><button type="button" class="ui-button ui-corner-all ui-widget ml-2" data-toggle="modal" data-target="#mightywebModal"><span class="ui-icon ui-icon-plus"></span>Insert</button></p> 
<?php } ?>
<div class="col-12"> 
<h3 class="mb-2">Data Jembatan Tipe</h3> 
<?php $table = "data_jembatan_tipe"; $sql = "SELECT * FROM `$table`"; 
$result = $conn->query($sql); ?> 
<table id="dataMightyWeb" class="ui-widget" width="100%"> 
<thead class="ui-widget-header">
<tr><th>Jenis Tipe</th>
<th>Tipe Bangunan</th>
<?php if($session['level']=='Admin'){ ?>
<th>Actions</th>
<?php } ?>
</tr>
</thead>
<tbody class="ui-widget-content">
<?php while($row = $result->fetch_assoc()) { ?><tr>
<td><?php echo $row["jenis_tipe"]; ?></td>
<td><?php echo $row["tipe_bangunan"]; ?></td>
<?php if($session['level']=='Admin'){ ?>
<td><a href='javascript:getData("<?php echo $row["id_tipe"]; ?>")' class="ui-button ui-corner-all ui-widget ui-button-icon-only"><span class="ui-button-icon ui-icon ui-icon-pencil"></span></a> 
<a href='javascript:delData("<?php echo $row["id_tipe"]; ?>")' class="ui-button ui-corner-all ui-widget ui-button-icon-only"><span class="ui-button-icon ui-icon ui-icon-close"></span></a></td> 
<?php } ?>
</tr><?php } ?>
</tbody> 
</table> 
</div> 
<?php include("input.php"); ?> 
<?php ob_start(); ?> 
<?php $juitheme = "ui-lightness"; ?> 
<?php $setDTcolvis = "{extend: 'colvis', text: '<i class=\"fas fa-columns\"></i>'},"; ?> 
<?php $setDTenties = "{extend: 'pageLength', text: '<i class=\"fas fa-eye\"></i>'}, "; ?> 
<?php $setTableStyle = '"responsive": true,'; ?> 
<?php $setScriptTools = '"searching": true,
"paging": true,
lengthMenu: [[ 10, 25, 50, -1 ],[ "10", "25", "50", "Show all" ]],
"ordering": true,
"info": true,'; ?> 
<?php $setDTbuttons = "{extend: 'copyHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'excelHtml5', exportOptions: { columns: ':visible' }}, 
{extend: 'pdfHtml5', download: 'open', exportOptions: { columns: ':visible' },orientation: 'landscape',pageSize: 'legal',title: 'Laporan'}, "; ?>
<?php $setDTSearchCol = ""; ?>
<?php $setDTfooterScript = ''; ?>

<?php include('modules/dtscripts.php'); ?> dt-button ui-button ui-state-default ui-button-text-only buttons-collection custom-html-collection ui-corner-all ui-widget
<script> 
function getData(ID){ dt-button ui-button ui-state-default ui-button-text-only buttons-collection custom-html-collection ui-corner-all ui-widget
$('#mightywebModal').modal('show'); 
$('#mightywebForm').attr('process','update'); 
var val = ID; 
var key = '<?php echo $pri_name; ?>'; 
var tbl = '<?php echo $table; ?>'; 
$('input[name="key"]').val('<?php echo $pri_name; ?>'); 
$('input[name="val"]').val(ID); 
$.ajax({ 
type		: "POST", 
url		: "modules/actions.php?act=getdata", 
data		: "key="+key+"&val="+val+"&table="+tbl, 
dataType 	: "json", 
success	: function(data){ 
$('input[name="jenis_tipe"]').each(function(){if($(this).val() == data.jenis_tipe){ $(this).prop("checked", true); } }); 
$('input[name="tipe_bangunan"]').val(data.tipe_bangunan); 
 
 
return false; } }); } 
 
 
</script> 
<?php include('modules/forminsert.php');  ?> 
<?php include('modules/formcall.php'); ?> 
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?>