<div class="col-lg-4 col-sm-12">
<div class="card card-outline card-warning"> 
<div class="card-header"><h3 class="card-title"> Login Pengadaan </h3></div> 
<form role="form" class="needs-validation mb-0" novalidate process="login" id="mightywebForm">
<input type="hidden" value="data_user" name="table" />
<input type="hidden" value="username" name="keylog" />
<input type="hidden" value="admin/" name="direction" />
<div class="card-body"> 
<div class="login-box-msg pb-0 text-center"></div>
<div class="form-group" id="fg_username">
<label for="username">username</label>
<input type="text" name="valog" class="form-control" placeholder="username" autocomplete="off">
<div class="invalid-feedback">Error: this field is required.</div></div> 

<div class="form-group" id="fg_password">
<label for="password">Password</label>
<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
<div class="invalid-feedback">Error: this field is required.</div></div> 


</div> 
<div class="card-footer"> 
<button type="submit" class="btn btn-primary btn-block bg-blue">Login</button> 
</div> 
</form> 
</div>
</div>
<?php ob_start(); ?>
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
		var adminurl = $('input[name="direction"]').val();
		$.ajax({
			type: "POST",
			dataType: "JSON",
			enctype: "multipart/form-data",
			url: "admin/modules/actions.php?act="+acts,
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			timeout: 600000,
			beforeSend: function(data){ 
				$('button[type="submit"]').text('Connecting...'); 
				$(':input').attr("disabled",true); 
			},
			success: function(response){
			console.log(response.status);
				if(response.status == 'valid'){
    				setTimeout(function(){ 
    				    window.location = 'admin/';
    				}, 2000);
					$(".login-box-msg").html("<span style='color:green'>"+response.message+"</span>");
					$('button[type="submit"]').text('Connected'); 
				}else if(response.status == 'invalid'){
					$(".login-box-msg").html("<span style='color:red'>"+response.message+"</span>");
					$('#card-front').effect('shake');
					$(':input').attr("disabled",false); 
					$('button[type="submit"]').text('Login');
				}
			}
		});
		
		$(this).addClass('was-validated');
	}
	$(this).addClass('was-validated');
	});
});
</script>
<?php $footerCTcallScript_custom = ob_get_contents(); ob_clean(); ?>