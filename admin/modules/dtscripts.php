<?php 
include('modules/datatablescall.php'); 
$sq = $conn->query("SHOW index FROM `$table` WHERE `Key_name` = 'PRIMARY'");
$data = $sq->fetch_array();
$pri_name = $data['Column_name'];
?>
<?php ob_start(); ?>

<script>
<?php if(empty($juitheme)){ ?>
$(document).ready(function() {
var table = $('table#dataMightyWeb').DataTable( {
"lengthChange": false,
"pagingType": "full",
<?php if(empty($setScriptTools)){ ?>
"autoWidth": true,
"ordering": true,
<?php }else{ echo $setScriptTools; } ?>
<?php echo $setTableStyle; ?>
<?php if(!empty($setDTcolvis) && !empty($setDTcolvis)){ ?>
buttons: [
<?php echo $setDTcolvis; ?>
<?php echo $setDTenties; ?>
{
	extend: 'collection',
	text: '<i class="fas fa-file"></i>',
	buttons: [ 
	<?php echo $setDTbuttons; ?>
	]
}
],
<?php }else{ ?>
buttons: [ 
	<?php echo $setDTbuttons; ?>
],
<?php } ?>
language: {
	searchPlaceholder: "Pencarian...",
	search: "",
},

<?php echo $customSCBottom; ?>

});
table.buttons().container().appendTo('#dataMightyWeb_wrapper .col-md-6:eq(0)');
});

<?php echo $setDTSearchCol; ?>
<?php echo $setDTfooterScript ?>

<?php }else{ ?>
$(document).ready(function() {
var table = $('#dataMightyWeb').DataTable( {
"lengthChange": false,
"pagingType": "full",
<?php if(empty($setScriptTools)){ ?>
"autoWidth": true,
"ordering": true,
<?php }else{ echo $setScriptTools; } ?>
<?php echo $setTableStyle; ?>
buttons: [
	{
		extend: 'collection',
		className: 'custom-html-collection',
		buttons: [
			'<h3>Export</h3>',
			<?php echo $setDTbuttons; ?>
			'<h3 class="not-top-heading">Options</h3>',
			{ extend: 'colvis', text: 'Kolom' },
			{ extend: 'pageLength', text: 'Shown' },
		]
	}
],
language: {
searchPlaceholder: "Pencarian...",
search: "",
}
<?php echo $customSCBottom; ?>
}); 
table.buttons().container().insertBefore('#dataMightyWeb_filter');
});
<?php echo $setDTSearchCol; ?>
<?php echo $setDTfooterScript ?>
/*DATA TABLE STYLE*/
(function ($) {
$.fn.styleTable = function (options) {
var defaults = {
css: 'ui-styled-table'
};
options = $.extend(defaults, options);
return this.each(function () {
$this = $(this);
$this.addClass(options.css);
$this.on('mouseover mouseout', 'tbody tr', function (event) {
$(this).children().toggleClass("ui-state-hover", event.type == 'mouseover');
});
$this.find("th").addClass("ui-state-default");
$this.find("td").addClass("ui-widget-content");
$this.find("tr:last-child").addClass("last-child");
});
};
$("table").styleTable();
})(jQuery);
<?php } ?>

// umum jika modal close maka reset form
$("#mightywebModal").on("hidden.bs.modal", function (e) {
	e.preventDefault();
	$('#mightywebForm').attr('process','insert');
	$('#mightywebForm').trigger('reset');
});
$('button[type="reset"]').on("click", function (e) { 
	e.preventDefault();
	$('#mightywebForm').attr('process','insert');
	$('#mightywebForm').trigger('reset');
	
	$('#dataTable-tab').tab('show');
	$('#collapseData').collapse('show');
	
	$('#accordion').accordion({active:0});
	$('#tabs').tabs('option','active',0);
});
function delData(ID) {
var val = ID; 
var key = "<?php echo $pri_name; ?>";
var tbl = "<?php echo $table; ?>";
var pilih = confirm('Anda yakin ingin menghapus data?');
if(pilih==true) {
$.ajax({
type: "POST",
url: "modules/actions.php?act=delete",
data: "key="+key+"&val="+val+"&table="+tbl,
success: function(response){
toastr.success(response+' <br /><button class="btn btn-info btn-block btn-sm" onClick="window.location.reload()">Refresh</button>');
} }); } }
</script>

<?php $footerCTcallScripts = ob_get_contents(); ob_clean();?>