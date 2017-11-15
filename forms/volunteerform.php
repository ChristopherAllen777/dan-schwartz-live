<?php

//echo "testwithtout";
if(isset($_POST['formdata'])){
	$formdata=$_POST['formdata'];
	//$form=(json_decode($formdata));

	$volunteerForm=fopen( "Volunteer_Page_Form.txt", "a") or die("Unable to open file!");
	
	$dataline=array();
	foreach($formdata as $data){

		$datavalue= $data['formvalue'];
		array_push($dataline,$datavalue);
	}
	$date=date("m/d/Y");
	array_push($dataline,$date);
	fputcsv($volunteerForm, $dataline, "\t");
	//fwrite($volunteerForm,"\n");

	// if($label=='Email'){
	// 	fwrite($volunteerForm,"\n$formdata");
	// }
	// else{
	// 	fwrite($volunteerForm,"\t$formdata");	
	// }

	

	fclose($volunteerForm);

	
}


?>