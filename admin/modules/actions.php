<?php
include('../../connection.php');
include('functions.php');
$table	= $_POST['table'];
$table2	= $_POST['table2'];
$prikey = $_POST['key'];
$prival = $_POST['val'];
$unfields = array('table','uplname','upldir','key','val');
if($_GET['act']=='insert'){ 
	$post1 = array_diff_key($_POST, array_flip($unfields));
	foreach ($post1 as $key => $val){
		if (!empty($val)){ 
			if(is_array($val)){
				$val = implode(', ',$val);
			}
			$fields1[] = "`".$key."`";
			$values1[] = "'".$val."'";
		}
	}
	if (!empty($_FILES)){ // sukses jika banyak input file yang nama nya berbeda2
	unset($_FILES['files']);
		foreach ($_FILES as $key => $val) {
			if (!empty($val)){ 
				$fileKey[] = ",`".$key."`";
				// check if has request new file name
				if($_POST['uplname']){
					$newname = $_POST['uplname']."_".date("Y-m-d_").(float)microtime()*100000000;
				}else{
					$newname = $table."_".date("Y-m-d_").(float)microtime()*100000000;
				}
				$extension = pathinfo( $_FILES["".$key.""]["name"], PATHINFO_EXTENSION );
				$rename = $newname.".".$extension;
				if($_POST['upldir']){
					$destination = $_POST['upldir']."/";
				}else{
					$destination = "../uploads/";
				}
				$fileVal[] = ",'".$destination.$rename."'";	
				$source = $_FILES["".$key.""]["tmp_name"];
				move_uploaded_file($source, "$destination/$rename");
			}
		}
		$keyUpload1 = implode('',$fileKey);
		$valUpload1 = implode('',$fileVal);
	}
	$sql1 = "INSERT INTO `$table` (".implode(',',$fields1).$keyUpload1.") VALUES (".implode(',',$values1).$valUpload1.")";
 	if ($conn->query($sql1) === TRUE) { 
		echo "Data successfully inserted"; 
	}else{ 
		echo "error data insert";
	}




}else if($_GET['act']=='update-m'){ 
	foreach (array_combine($_POST['id_upload'], $_POST['verifikasi']) as $keys => $vals){
        $conn->query("UPDATE `$table` SET `verifikasi` = '$vals' WHERE `id_upload` = '$keys'");
	}
	foreach (array_combine($_POST['id_upload'], $_POST['catatan']) as $keys => $vals){
        $conn->query("UPDATE `$table` SET `catatan` = '$vals' WHERE `id_upload` = '$keys'");
	}
	$sql = "UPDATE `data_pengajuan` SET `tanggal_survey` = '$_POST[tanggal_survey]' 
	            WHERE `id_pengajuan` = '$_POST[id_pengajuan]'";
	if ($conn->query($sql) === TRUE) { 
		echo 'Data successfully updated'; 
	}else{ 
		echo "error data updating";
	}

// update single data
}else if($_GET['act']=='update'){ 

	$post = array_diff_key($_POST, array_flip($unfields));
	foreach ($post as $key => $val){
		if (!empty($val)){ 
			if(is_array($val)){
				$val = implode(', ',$val);
			}
			$fields[] = "`".$key."` = '".$val."'";
		}
	}
	if (!empty($_FILES)){ 
		foreach ($_FILES as $key => $val) {
			if ($_FILES["".$key.""]["size"] > 0){
				// check old file name from table
				$result = $conn->query("SELECT * FROM `$table` WHERE `$prikey` = '$prival'"); 
				$row = $result->fetch_assoc();
				if(file_exists("$row[$key]")){  // check if has old file delete it
					unlink("$row[$key]"); 
				}
				// start with uploaded file images
				// check if has request new file name
				if($_POST['uplname']){
					$newname 	= $_POST['uplname']."_".date("Y-m-d_").(float)microtime()*100000000;
				}else{
					$newname 	= $table."_".date("Y-m-d_").(float)microtime()*100000000;
				}
				$extension  = pathinfo( $_FILES["".$key.""]["name"], PATHINFO_EXTENSION ); 
				$rename   = $newname . "." . $extension;
				if($_POST['upldir']){
					$destination = $_POST['upldir']."/";
				}else{
					$destination = "../uploads/";
				}
				$files[] = ", `".$key."` = '".$destination.$rename."'";	// give (, ) comma and space for because it first for one loop 
				$source = $_FILES["".$key.""]["tmp_name"];
				move_uploaded_file($source, "$destination/$rename");
				$uploads = implode(',',$files);
			}
		}
	}
	$sql = "UPDATE `$table` SET ".implode(', ',$fields).$uploads." WHERE `$prikey` = '$prival'"; 
	if ($conn->query($sql) === TRUE) { 
		echo 'Data successfully updated'; 
	}else{ 
		echo "error data updating";
	}
	
// general delete row



}else if($_GET['act']=='delete'){ 
    // this for single detail data [where]
	$sql = "DELETE FROM `$table` WHERE `$_POST[key]` = '$_POST[val]'"; 
	if ($conn->query($sql) === TRUE) { 
		echo 'data successfully deleted'; 
	}else{ 
		echo 'error data execute'; 
	}


}else if($_GET['act']=='getdata'){ 
	$result = $conn->query("SELECT * FROM `$table`  WHERE `$_POST[key]` = '$_POST[val]'");  
	if ($result->num_rows > 0) { 
		$row = $result->fetch_array(); 
		$sqlfield = $conn->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `table_name` = '$table'");  
		while($field = $sqlfield->fetch_array()) { 
			$data["$field[COLUMN_NAME]"] = $row["$field[COLUMN_NAME]"]; 
		} 
		echo json_encode($data); 
	} 

// general login

}else if($_GET['act']=='login'){ 
	$response = array();
	$ceklogin1 = $conn->query("SELECT * FROM `$table` 
	                    WHERE `$_POST[keylog]` = '$_POST[valog]' AND `password` = '$_POST[password]'");
	if ($ceklogin1->num_rows > 0){ 
		session_start();
	  	$data = $ceklogin1->fetch_array(); 
		$_SESSION["table"]  = $_POST['table'];
		$_SESSION["keylog"] = $_POST['keylog'];
		$_SESSION["valog"]  = $_POST['valog'];
		$_SESSION["$_POST[keylog]"] = $data["$_POST[keylog]"];
	    $response = array('status' => 'valid', 'message' => 'Success Login...', 
	                       'direction' => "$_POST[direction]");
	    
	}else{
    	$response = array('status' => 'invalid', 'message' => 'Error: email or password wrong', 'direction' => './');	
	}
	echo json_encode($response);


}else if($_GET['act']=='emailverification'){ 
    
}
$conn->close();// end if get
?>