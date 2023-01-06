<div class="modal fade" id="mightywebModal" data-backdrop="static" data-keyboard="false"> 
<form class="needs-validation mb-0" novalidate enctype="multipart/form-data" id="mightywebForm" process="insert"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content ui-dialog-content ui-widget-content"> 
<div class="modal-header ui-widget-header"> 
<h4 class="modal-title ui-dialog-title">Input Data User</h4> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
<span aria-hidden="true">&times;</span> 
</button></div> 
<div class="modal-body"> 
<input type="hidden" name="key" /> 
<input type="hidden" name="val" /> 

<input type="hidden" name="table" value="data_user">
<div class="card-body p-0">
<div class="form-group" id="fg_nip">
<label for="nip">Nip</label><input type="number" class="text ui-widget-content ui-corner-all" required="required" name="nip" id="nip" value=""><div class="invalid-feedback">Error: this field is required.</div></div><div class="form-group" id="fg_nama_lengkap">
<label for="nama_lengkap">Nama Lengkap</label><input type="text" class="text ui-widget-content ui-corner-all" required="required" name="nama_lengkap" id="nama_lengkap" value=""><div class="invalid-feedback">Error: this field is required.</div></div><div class="form-group" id="fg_username">
<label for="username">Username</label><input type="text" class="text ui-widget-content ui-corner-all" required="required" name="username" id="username" value=""><div class="invalid-feedback">Error: this field is required.</div></div><div class="form-group" id="fg_password">
<label for="password">Password</label><input type="text" class="text ui-widget-content ui-corner-all" required="required" name="password" id="password" value=""><div class="invalid-feedback">Error: this field is required.</div></div><div class="form-group" id="fg_level">
<label>Level</label><div class="col-12">
<div class="stacked custom-control-inline">
<input class="" type="radio" id="level-1" name="level" value="Kabid" required="required">
<label class="" for="level-1">Kabid</label>
</div>
<div class="stacked custom-control-inline">
<input class="" type="radio" id="level-2" name="level" value="Admin" required="required">
<label class="" for="level-2">Admin</label>
</div>
</div><div class="invalid-feedback">Error:Data harus diisi.</div></div></div>
 
</div> 
<div class="modal-footer justify-content-between border-dark"> 
<button type="reset" class="ui-button ui-corner-all ui-widget" data-dismiss="modal">Cancel</button> 
<button type="submit" class="ui-button ui-corner-all ui-widget">Submit</button> 
</div> 
</div></div></form></div> 
