<?php


if(isset($_POST['formdata'])){
	$formdata=$_POST['formdata'];
	$label=$_POST['label'];

	
	$home_page_form=fopen( "Home_page_form.txt", "a") or die("Unable to open file!");

	if($label=='Email'){
		fwrite($home_page_form,"\n$formdata");
	}
	else{
		fwrite($home_page_form,"\t$formdata");	
	}

	

	fclose($home_page_form);

	
}


?>