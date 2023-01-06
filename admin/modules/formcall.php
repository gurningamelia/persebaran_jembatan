<style>
.text-sm .select2-container--default .select2-selection--single, select.form-control-sm~.select2-container--default .select2-selection--single{height: 38px;padding: 10px;}
</style>
<!-- Select2 -->
<script src="<?php echo plugins_path(); ?>select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo plugins_path(); ?>bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo plugins_path(); ?>moment/moment.min.js"></script>
<script src="<?php echo plugins_path(); ?>inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo plugins_path(); ?>daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo plugins_path(); ?>bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo plugins_path(); ?>tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo plugins_path(); ?>bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo plugins_path(); ?>bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo plugins_path(); ?>dropzone/min/dropzone.min.js"></script>
<!-- summernote -->
<script src="<?php echo plugins_path(); ?>summernote/summernote-bs4.min.js"></script>
<script>

function reverseNumber(input) {
return [].map.call(input, function(x) {
return x;
}).reverse().join(''); 
}

function plainNumber(number) {
 return number.split('.').join('');
}

function splitInDots(input) {

var value = input.value,
plain = plainNumber(value),
reversed = reverseNumber(plain),
reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
normal = reverseNumber(reversedWithDots);

console.log(plain,reversed, reversedWithDots, normal);
input.value = normal;
}

$('#retype-password').on('keyup', function () {
	if ($('#password').val() == $('#retype-password').val()) {
		$('.pass-msg').html('Password Matching').css('color', 'green');
	} else 
		$('.pass-msg').html('Password Not Matching').css('color', 'red');
});

$(function () {

// test editor
$('#html5Editor').summernote();
//Initialize Select2 Elements
$('.select2').select2();

//Initialize Select2 Elements
$('.select2bs4').select2({
theme: 'bootstrap4'
});

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
//Money Euro
$('[data-mask]').inputmask();

//Date range picker
$('#reservationdate').datetimepicker({
format: 'L'
});
//Date range picker
$('#reservation').daterangepicker()
//Date range picker with time picker
$('#reservationtime').daterangepicker({
timePicker: true,
timePickerIncrement: 30,
locale: {
format: 'MM/DD/YYYY hh:mm A'
}
});
//Date range as a button
$('#daterange-btn').daterangepicker({
ranges : {
'Today' : [moment(), moment()],
'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
'Last 30 Days': [moment().subtract(29, 'days'), moment()],
'This Month': [moment().startOf('month'), moment().endOf('month')],
'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
},
startDate: moment().subtract(29, 'days'),
endDate: moment()
},
function (start, end) {
$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
});

//Timepicker
$('#timepicker').datetimepicker({
format: 'LT'
});

//Bootstrap Duallistbox
$('.duallistbox').bootstrapDualListbox();

//Colorpicker
$('.my-colorpicker1').colorpicker();
//color picker with addon
$('.my-colorpicker2').colorpicker();

$('.my-colorpicker2').on('colorpickerChange', function(event) {
$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
});

$("input[data-bootstrap-switch]").each(function(){
$(this).bootstrapSwitch('state', $(this).prop('checked'));
});
});
</script>