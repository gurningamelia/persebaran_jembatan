<div class="modal fade" id="mightywebModal" data-backdrop="static" data-keyboard="false"> 
<form class="needs-validation mb-0" novalidate enctype="multipart/form-data" id="mightywebForm" process="insert"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content ui-dialog-content ui-widget-content"> 
<div class="modal-header ui-widget-header"> 
<h4 class="modal-title ui-dialog-title">Input Data Jembatan Tipe</h4> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
<span aria-hidden="true">&times;</span> 
</button></div> 
<div class="modal-body"> 
<input type="hidden" name="key" /> 
<input type="hidden" name="val" /> 

<input type="hidden" name="table" value="data_jembatan_tipe">
<div class="card-body p-0"><div class="form-group" id="fg_jenis_tipe">
<label>Jenis Tipe</label><div class="col-12">
<div class="stacked custom-control-inline">
<input class="" type="radio" id="jenis_tipe-1" name="jenis_tipe" value="Bangunan Atas" required="required">
<label class="" for="jenis_tipe-1">Bangunan Atas</label>
</div>
<div class="stacked custom-control-inline">
<input class="" type="radio" id="jenis_tipe-2" name="jenis_tipe" value="Bangunan Bawah" required="required">
<label class="" for="jenis_tipe-2">Bangunan Bawah</label>
</div>
<div class="stacked custom-control-inline">
<input class="" type="radio" id="jenis_tipe-3" name="jenis_tipe" value="Fondasi" required="required">
<label class="" for="jenis_tipe-3">Fondasi</label>
</div>
<div class="stacked custom-control-inline">
<input class="" type="radio" id="jenis_tipe-4" name="jenis_tipe" value="Lantai" required="required">
<label class="" for="jenis_tipe-4">Lantai</label>
</div>
</div><div class="invalid-feedback">Error: this field is required.</div></div><div class="form-group" id="fg_tipe_bangunan">
<label for="tipe_bangunan">Tipe Bangunan</label><input type="text" class="text ui-widget-content ui-corner-all" required="required" name="tipe_bangunan" id="tipe_bangunan" value=""><div class="invalid-feedback">Error: this field is required.</div></div></div>
 
</div> 
<div class="modal-footer justify-content-between border-dark"> 
<button type="reset" class="ui-button ui-corner-all ui-widget" data-dismiss="modal">Cancel</button> 
<button type="submit" class="ui-button ui-corner-all ui-widget">Submit</button> 
</div> 
</div></div></form></div> 
