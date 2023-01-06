<p><button type="button" class="ui-button ui-corner-all ui-widget ml-2" data-toggle="modal" data-target="#mightywebModal"><span class="ui-icon ui-icon-plus"></span>Insert</button></p> 
<div class="col-12"> 
<h3 class="mb-2">Data User</h3> 
<?php $table = "data_user"; $sql = "SELECT * FROM `$table`"; 
$result = $conn->query($sql); ?> 
<table id="dataMightyWeb" class="ui-widget" width="100%"> 
<thead class="ui-widget-header">
<tr><th>Nip</th>
<th>Nama Lengkap</th>
<th>Username</th>
<th>Password</th>
<th>Level</th>
<th>Actions</th></tr>
</thead>
<tbody class="ui-widget-content">
<?php while($row = $result->fetch_assoc()) { ?><tr>
<td><?php echo $row["nip"]; ?></td>
<td><?php echo $row["nama_lengkap"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["level"]; ?></td>
<td><a href='javascript:getData("<?php echo $row["nip"]; ?>")' class="ui-button ui-corner-all ui-widget ui-button-icon-only"><span class="ui-button-icon ui-icon ui-icon-pencil"></span></a> 
<a href='javascript:delData("<?php echo $row["nip"]; ?>")' class="ui-button ui-corner-all ui-widget ui-button-icon-only"><span class="ui-button-icon ui-icon ui-icon-close"></span></a></td> 
</tr><?php } ?>
</tbody> 
</table> 
</div> 
<?php include("input.php"); ?> 
<?php ob_start(); ?> 
<?php $juitheme = "ui-lightness"; ?> 
<?php $setDTcolvis = ""; ?> 
<?php $setDTenties = "{extend: 'pageLength', text: '<i class=\"fas fa-eye\"></i>'}, "; ?> 
<?php $setTableStyle = '"responsive": true,'; ?> 
<?php $setScriptTools = '"searching": true,
"paging": true,
lengthMenu: [[ 10, 25, 50, -1 ],[ "10", "25", "50", "Show all" ]],
"ordering": true,
"info": true,

'; ?> 
<?php $setDTbuttons = ""; ?> 
<?php $setDTSearchCol = ""; ?>
<?php $setDTfooterScript = ''; ?>
<?php include('modules/dtscripts.php'); ?> 
<script> 
function getData(ID){ 
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
$('input[name="nip"]').val(data.nip); 
$('input[name="nama_lengkap"]').val(data.nama_lengkap); 
$('input[name="username"]').val(data.username); 
$('input[name="password"]').val(data.password); 
$('input[name="level"]').each(function(){if($(this).val() == data.level){ $(this).prop("checked", true); } }); 
 
 
return false; } }); } 
 
 
</script> 
<?php include('modules/forminsert.php');  ?> 
<?php include('modules/formcall.php'); ?> 
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?> 
