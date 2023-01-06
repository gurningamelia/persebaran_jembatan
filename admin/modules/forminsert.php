<style>
.imgprev{border:1px solid #666;}
</style>
<link rel="stylesheet" href="<?php echo plugins_path(); ?>toastr/toastr.min.css">
<script src="<?php echo plugins_path(); ?>toastr/toastr.min.js"></script>
<script src="<?php echo plugins_path(); ?>loading/loadingoverlay.min.js"></script>
<script> 
$(document).ready(function(){
	$('.needs-validation').on('submit', function(e) {
	if (!this.checkValidity()) {
		e.preventDefault();
		e.stopPropagation();
	}else{
		e.preventDefault();
		var form = $('#mightywebForm')[0];
		var data = new FormData(form);
		var acts = $('#mightywebForm').attr('process');
		$.ajax({
			type: "POST",
			enctype: "multipart/form-data",
			url: "modules/actions.php?act="+acts,
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			timeout: 600000,
			beforeSend: function(response){
				$("body").LoadingOverlay("show", {
					<?php echo $loading; ?>
				});
			},
			complete: function() { $("body").LoadingOverlay("hide", true); },
			success: function (data) {
				toastr.success(data+'<br /><button class="btn btn-primary btn-block" onClick="window.location.reload()">Refresh</button>');	
				console.log(data)
			},
			error: function (data) {
				toastr.warning(data);
			}
		}).done(function(){
		   <?php if(empty($customDirec)){ ?>
			$(':input','#mightywebForm')
			.not(':button, :submit, :reset, :hidden')
			.val('')
			.prop('checked', false)
			.prop('selected', false);
			$('#mightywebForm').removeClass('was-validated');
			<?php }else{ echo $customDirec; } ?>
		});
		$('#mightywebModal').modal("hide");
	}
	$(this).addClass('was-validated');
	});
	
<?php if(!empty($juitheme)){ ?>
$(function(){
$("button[type='submit']").click(function() {
	$('input[required="required"], textarea, select').each(function(){
		if($(this).val() == ""){
			$(this).addClass('ui-state-error');
			$(this).next('.invalid-feedback').css('display','block');
		}else{
			$(this).removeClass('ui-state-error');
			$(this).next('.invalid-feedback').css('display','none');
		}
	});
});

$("input[type='radio'], input[type='checkbox']").checkboxradio();
$("select").selectmenu();
$("input[type='number']").spinner();
$("button").button();
$("input[type='date']").datepicker({
changeMonth: true,
changeYear: true
});

$(".select2").each(function () {$(this).select2();}); 
});
<?php } ?>
});
</script>
<?php if(!empty($juitheme)){ ?>
<link href="dist/themes/<?php echo $juitheme; ?>/jquery-ui.min.css" rel="stylesheet">
<link href="dist/css/inlinestyles.css" rel="stylesheet">
<?php } ?>