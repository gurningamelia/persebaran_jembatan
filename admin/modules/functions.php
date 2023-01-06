<?php 

/*
-------------------------------------
STRING functions
-------------------------------------
*/
// get path forlder always on main folder 
function mainpath($file){
$folder_depth = substr_count($_SERVER["PHP_SELF"] , "/");
if($folder_depth == false)
   $folder_depth = 1;

return str_repeat("../", $folder_depth - 2) . $file; // 2 berarti dalam htdocs
}

// call specific path > plugins 
function plugins_path($file='plugins/'){
$folder_depth = substr_count($_SERVER["PHP_SELF"] , "/");
if($folder_depth == false)
   $folder_depth = 1;
return str_repeat("", $folder_depth - 2) . $file; // 2 berarti dalam htdocs
}

function file_path($file){
$key 	= $_GET['key'];
$val 	= $_GET['val'];
$page 	= $_GET['page'];
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$thisPath = dirname($_SERVER['PHP_SELF']);
$onlyPath = str_replace($rootPath, '', $thisPath);
$host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$onlyPath";
//echo "$host/$page?$key=$val";
}
// replace characters and uppercase first words
function labeltext($data){
	$characters = array("_", "-");
	$replace = array(" ", " ");
	$filter = str_replace($characters, $replace, $data);
	return ucwords($filter);
}

function str_explode($data){
	$commas = explode(',',$data);
	foreach($commas as $key => $val) {    
		$commas_arr[] = "'".$val."'";    
	}
	$str_implode = implode(",", $commas_arr);
	return $str_implode;
}

function thisMonth($type){
	for($m=1; $m<=12;   $m){
		echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
	}
}

function MonthName($tgl){
	$monthNum  = $tgl;
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('F'); // March
	return $monthName;
		
}

function num_add_zero($number){ // untuk menambahkan nol di satuan tanggal 1 => 01
	return str_pad($number, 2, "0", STR_PAD_LEFT);
}

function count_alldate($month,$year){
	cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y tahun "); }
    if ($interval->m) { $result .= $interval->format("%m bulan "); }
    if ($interval->d) { $result .= $interval->format("%d hari "); }
    if ($interval->h) { $result .= $interval->format("%h jam "); }
    if ($interval->i) { $result .= $interval->format("%i menit "); }
    if ($interval->s) { $result .= $interval->format("%s detik "); }

    return $result;
}

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

// cut words to limit show
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

// read json file to some setting
function read_json($no,$data){
	$JSON = json_decode(file_get_contents("modules/settings.json"), true);
	$jsonIterator = $JSON['data_json'][$no][$data];
	foreach ($jsonIterator as $key => $val) {
		echo '<option value="'.$key.'">'.$key."</option>";
	}
}

function combine_arr($a, $b) { 
    $acount = count($a); 
    $bcount = count($b); 
    $size = ($acount > $bcount) ? $bcount : $acount; 
    $a = array_slice($a, 0, $size); 
    $b = array_slice($b, 0, $size); 
    return array_combine($a, $b); 
}

function number($value) {  
	return number_format($value , 0, ',', '.');
}

function select_months() {  
	for($mm=1;$mm<=12;$mm  ){$date = num_add_zero($mm);
		if($thismonth==$date){
			echo "<option value='$date' selected>".MonthName($date)."</option>";		
		}else{
			echo "<option value='$date'>".MonthName($date)."</option>";
		}
	}
}
function select_year($start_year,$currentyear) { 
	for($yy=$start_year;$yy<=date("Y");$yy  ){
		if($currentyear==$yy){
			echo "<option value='$yy' selected>$yy</option>";		
		}else{
			echo "<option value='$yy'>$yy</option>";
		}
	}
}
/* 
-------------------------------------
SQL Functions
-------------------------------------
*/
function maxmin_row($table,$row,$val){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SELECT $val(`$row`) AS value FROM `$table`"); 
	if($result->num_rows > 0) {
	    $data = $result->fetch_array();
	    return $data['value'];
	}else{
	    return '0';
	}
}
// get next auto increment
function next_autoincrement($table){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SHOW TABLE STATUS LIKE '$table'");
	$data = $result->fetch_assoc();
	return $data['Auto_increment'];
}
	
// relasi key table (primary) ke nama relasi yang dimaksud
function idkey_to_name($table,$keyname,$where,$text){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SELECT * FROM `$table` WHERE `$keyname` = '$where'"); 
	if($result->num_rows > 0) { 
		while($row = $result->fetch_array()) {
			return $row[$text];
		}
	}
}

function call(){ // funsi yang berkaitan dgn tdcol hanya 1. relasi data key, 2. thumbnail pic sisanya fungsi biasa butuh field while loop
	include(dirname(__DIR__,2).'/connection.php');
	global $keytoRelation; // sifatnya sama seperti idkey_to_name bedanya ini harus pakai global variable untuk bisa masuke ke while loop
	$GLOBALS['relation'] = $tdcol1_val; 
	$GLOBALS['thumbpic'] = '<a href="../uploads/'.$keytoRelation.'" data-toggle="lightbox">
	<img src="../uploads/'.$keytoRelation.'" width="50" height="50"></a>';

}

// <select> populate data row to <option>
function select_data($table,$value,$text,$selected){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SELECT * FROM `$table`"); 
	if($result->num_rows > 0) { 
		while($row = $result->fetch_array()) {
			if($selected==$row[$value]){
				echo '<option value="'.$row[$value].'"  selected="selected">'.$row[$text].'</option>';
			}else{
				echo '<option value="'.$row[$value].'">'.$row[$text].'</option>';
			}
		}
	}
}
// <select> populate data row to <option> with distinct
function select_dataDistinct($table,$value,$text,$selected){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SELECT DISTINCT `$value` FROM `$table`"); 
	if($result->num_rows > 0) { 
		while($row = $result->fetch_array()) {
			if($selected==$row[$value]){
				echo "<option value='$row[$value]' selected='selected'>$row[$text]</option> \n";
			}else{
				echo "<option value='$row[$value]'>$row[$text]</option> \n";
			}
		}
	}
}
// <select> populate data row to <option> WHERE 
function select_dataWhere($table,$value,$text,$whereKey,$whereVal,$selected){
	include(dirname(__DIR__,2).'/connection.php');
	$result = $conn->query("SELECT * FROM `$table` WHERE `$whereKey` = '".$whereVal."'"); 
	if($result->num_rows > 0) { 
		while($row = $result->fetch_array()) {
			if($selected==$row[$value]){
				echo "<option value='$row[$value]' selected='selected'>$row[$text]</option> \n";
			}else{
				echo "<option value='$row[$value]'>$row[$text]</option> \n";
			}
		}
	}
}


// sum row number value only
function sum_row($table,$row){
	include(dirname(__DIR__,2).'/connection.php');
	$sql = $conn->query("SELECT SUM(`$row`) as total FROM `$table`");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = $row['total'];
	}else{
		return $val = 0;	
	}
}

// sum row number value only
function sum_rowWhere($table,$row,$where,$where_val){
	include(dirname(__DIR__,2).'/connection.php');
	$sql = $conn->query("SELECT SUM(`$row`) as total FROM `$table` WHERE `$where` = '$where_val' ");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = $row['total'];
	}else{
		return $val = 0;	
	}
}

// where sql sum row number value
function sum_rowWhere_sql($table,$row,$whereSql){
	include(dirname(__DIR__,2).'/connection.php');
	$sql = $conn->query("SELECT SUM(`$row`) as total FROM `$table` $whereSql ");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = $row['total'];
	}else{
		return $val = 0;	
	}
}

// hitung single data row
function count_row($table,$row){
	include(dirname(__DIR__,2).'/connection.php');
	$sql = $conn->query("SELECT COUNT(`$row`) as total FROM `$table`");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = number_format($row['total']);
	}else{
		return $val = 0;	
	}
}

// hitung single data row where
function count_rowWhere($table,$row,$whereKey,$whereVal){
	include(dirname(__DIR__,2).'/connection.php');
	$sql =  $conn->query("SELECT COUNT(`$row`) AS total FROM `$table` WHERE `$whereKey` = '".$whereVal."'");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = number_format($row['total']);
	}else{
		return $val = 0;	
	}
}

// hitung single data row where custom
function count_rowWhere_sql($table,$row,$whereSql){
	//global $keytoRelation;
	include(dirname(__DIR__,2).'/connection.php');
	$sql =  $conn->query("SELECT COUNT(`$row`) AS total FROM `$table` $whereSql");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = number_format($row['total']);
	}else{
		return $val = 0;	
	}
}

function count_rowWhere_currentdate($table,$row,$whereKey1,$whereVal1,$datefield,$month,$year){
	include(dirname(__DIR__,2).'/connection.php');
	$sql =  $conn->query("SELECT COUNT(`$row`) AS total FROM `$table` WHERE `$whereKey1` = '".$whereVal1."' 
							AND MONTH($datefield) = '$month' AND YEAR($datefield) = '$year'");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = number_format($row ['total']);
	}else{
		return $val = 0;	
	}
}

// hitung single data row where between two date
function count_rowWhere_between($table,$row,$whereKey,$whereVal,$whereDate,$date1,$date2){
	include(dirname(__DIR__,2).'/connection.php');
	$sql =  $conn->query("SELECT COUNT(`$row`) AS total FROM `$table` WHERE `$whereKey` = '".$whereVal."' AND `$whereDate` between '".$date1."' AND '".$date2."'");
	if($sql->num_rows > 0) { 
		$row = $sql->fetch_array();
		return $val = number_format($row ['total']);
	}else{
		return $val = 0;
	}
}

// hitung relasi data row where field_key = value
function count_join_rowWhere($tabel1,$table2,$rowRelation,$rowKey,$rowVal){
	include(dirname(__DIR__,2).'/connection.php');
	$sql =  $conn->query('SELECT COUNT(`$row`) AS total 
						  FROM `$tabel1` INNER JOIN `$tabel2` ON `$tabel1`.`$rowRelation` = `$tabel2`.`$rowRelation`
						  WHERE `$tabel1`.`$rowKey` = "'.$rowVal.'"');
	$row = $sql->fetch_array();
	if($sql->num_rows > 0){
		return $val = number_format($row['total']);
	}else{
		return $val = 0;	
	}
}

// show single data between relation table
// key1 dan key2 bisa jadi beda nama tapi value sama
function table_join_single_row($table1,$table2,$key1,$key2,$field){
	include(dirname(__DIR__,2).'/connection.php');
	$sql = $conn->query('SELECT *
			FROM `'.$table1.'`
			INNER JOIN `'.$table2.'`
			ON `'.$table1.'`.`'.$key1.'` = `'.$table2.'`.`'.$key2.'`');
	$data = $sql->fetch_array();
	return $data[$field];
}

// convert enum filed to radio
function enum_Toradio($table,$column_name,$style){ // for bootstrap html structure only
		include(dirname(__DIR__,2).'/connection.php');
		$sql = $conn->query("SELECT * FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `table_name` = '$table' AND `table_schema` = '$dbname' AND `COLUMN_NAME` = '$column_name'");
		if($sql->num_rows > 0) { 
		$field = $sql->fetch_array(); 
		$num=1;
		$option_array = explode(",", str_replace("'", "", substr($field['COLUMN_TYPE'], 5, (strlen($field['COLUMN_TYPE'])-6))));
			foreach($option_array as $value) {
				echo '<div class="custom-control custom-radio custom-control-'.$style.'">';
				echo '<input class="custom-control-input" type="radio" id="'.$value.$num.'" name="'.$column_name.'" value="'.$value.'">';
				echo '<label for="'.$value.$num.'" class="custom-control-label">'.ucwords($value).'</label>';
				echo '</div>'; 
			}
		}
}
// convert enum field to checkbox
function enum_Tocheck($table,$column_name,$style){ // for bootstrap html structure only
		include(dirname(__DIR__,2).'/connection.php');
		$sql = $conn->query("SELECT * FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `table_name` = '$table' AND `table_schema` = '$dbname' AND `COLUMN_NAME` = '$column_name'");
		if($sql->num_rows > 0) { 
		$field = $sql->fetch_array(); 
		$num=1;
		$option_array = explode(",", str_replace("'", "", substr($field['COLUMN_TYPE'], 5, (strlen($field['COLUMN_TYPE'])-6))));
			foreach($option_array as $value) {
				echo '<div class="custom-control custom-checkbox">';
				echo '<input class="custom-control-input" type="checkbox" id="'.$value.$num.'" name="'.$column_name.'" value="'.$value.'">';
				echo '<label for="'.$value.$num.'" class="custom-control-label">'.ucwords($value).'</label>';
				echo '</div>'; 
			}
		}
}
// convert enum field to <option> select
function enum_Toselect($table,$column_name,$varselected){
		include(dirname(__DIR__,2).'/connection.php');
		$sql = $conn->query("SELECT * FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `table_name` = '$table' AND `table_schema` = '$dbname' AND `COLUMN_NAME` = '$column_name'");
		if($sql->num_rows > 0) { 
		$field = $sql->fetch_array(); 
		$option_array = explode(",", str_replace("'", "", substr($field['COLUMN_TYPE'], 5, (strlen($field['COLUMN_TYPE'])-6))));
			foreach($option_array as $value) {
				if($varselected==$value){
					echo $val."<option value=".$value." selected>".ucwords($value)."</option>"; 
				}else{
					echo $val."<option value=".$value.">".ucwords($value)."</option>"; 
				}
			}
		}
}

function searchAllDB($search){
    global $mysqli;
    
    $out = Array();
    
    $sql = "show tables";
    $rs = $mysqli->query($sql);
    if($rs->num_rows > 0){
        while($r = $rs->fetch_array()){
            $table = $r[0];
            $sql_search = "select * from `".$table."` where ";
            $sql_search_fields = Array();
            $sql2 = "SHOW COLUMNS FROM `".$table."`";
            $rs2 = $mysqli->query($sql2);
            if($rs2->num_rows > 0){
                while($r2 = $rs2->fetch_array()){
                    $column = $r2[0];
                    $sql_search_fields[] = "`".$column."` like('%".$mysqli->real_escape_string($search)."%')";
                }
                $rs2->close();
            }
            $sql_search .= implode(" OR ", $sql_search_fields);
            $rs3 = $mysqli->query($sql_search);
            $out[$table] = $rs3->num_rows."\n";
            if($rs3->num_rows > 0){
                $rs3->close();
            }
        }
        $rs->close();
    }
    
    return $out;
}

//print_r(searchAllDB("search string"));
/*
-------------------------------------
Sistem Functions
-------------------------------------
*/
// cutom TH head columns
function thcustomcol($data){
	$commas = explode(',',$data);
	foreach($commas as $key => $val) {
		if($field['COLUMN_NAME']==''.$val.''){
			return $col_val;
		}else{
			return labeltext($field['COLUMN_NAME']); 
		}
	}
	
}
// datatable-call
function DTbuttons_explode($data){
	$commas = explode(',',$data);
	foreach($commas as $key => $val) {    
		$commas_arr[] = "{extend: '".$val."', exportOptions: { columns: ':visible' }}";    
	}
	$str_implode = implode(",", $commas_arr);
	return $str_implode.",";
}
// datatable-call
function Exception_explode($data){
	$commas = explode(',',$data);
	foreach($commas as $key => $val) {
		$commas_arr[] = "AND `column_name` != '".$val."' ";
	}
	$str_implode = implode(" ", $commas_arr);
	return $str_implode;
	
}
// ini button action untuk edit di form default form builder untuk kasus tertentu edit di form custom masing-masing
function Actions_explode($data){
	$commas = explode(',',$data);
	foreach($commas as $key => $val) {
		if($val=='delete'){
			$link='<a href="../modules/actions.php?act=delete&id='.$idkey.'" class="btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>';
		}elseif($val=='update'){
			$link='<a href="#" class="btn btn-primary btn-sm" title="Update"><i class="fas fa-edit"></i></a>';
		}elseif($val=='detail'){
			$link='<a href="#" class="btn btn-success btn-sm" title="Detail"><i class="fas fa-eye"></i></a>';
		}
		$commas_arr[] = $link;
	}
	$str_implode = implode(" ", $commas_arr);
	return '<td id="btn-actions"><div class="btn-group">'.$str_implode.'</div></td>';
	
}

function count_dateToThisday($date,$format){ // use format as %y %m %d
	$today = date("Y-m-d");
	$diff = date_diff(date_create($date), date_create($today));
	return ''.$diff->format($format);
}

function count_dateFromTo($dataFrom,$dateTo){ // use format as %y %m %d
	$diff = date_diff(date_create($dataFrom), date_create($dateTo));
	return ''.$diff->days;
}

function count_DateRange($daterange){ // 04/28/2021 - 05/01/2021
	$ex = explode('-',$daterange);
	$diff = date_diff(date_create($ex[0]), date_create($ex[1]));
	return ''.$diff->days;
}

function sessionYES($script){
	if(!empty($_SESSION['email'])){
		return $script;
	}
}

function sessionNO($script){
	if(empty($_SESSION['email'])){
		return $script;
	}
}
?>