<html>
<head>
</head>
<style>
body{
padding-top:50px;
background:#0c0c4a;
font-family:'Helvetica';
color:#fff;
text-align:center;
}
a{
background:red;
color:#fff;
padding:5px;
border-radius:4px;
}
</style>

<body>

<?php
	if(isset($_FILES['UploadFileField'])){
	    
		// Creates the Variables needed to upload the file
		
		$UploadName = $_FILES['UploadFileField']['name'];
		//$UploadName = mt_rand(100000, 999999).$UploadName;
		$UploadTmp = $_FILES['UploadFileField']['tmp_name'];

echo $UploadType;
		$UploadType = $_FILES['UploadFileField']['type'];
		$FileSize = $_FILES['UploadFileField']['size'];
		
		// Removes Unwanted Spaces and characters from the files names of the files being uploaded
		
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		
		// Upload File Size Limit 
		
		if(($FileSize > 12500000000000000000000000000)){
			
			die("Error - File to Big");
			
		}
		
		// Checks a File has been Selected and Uploads them into a Directory on your Server
		
		if(!$UploadTmp){
			die("No File Selected, Please Upload Again<p><a href='index.php'>Return</a></p>");
		}else{
			move_uploaded_file($UploadTmp, "Upload/$UploadName");
		}
	
header("location: index.php");
	}
?>


</body>
</html>
