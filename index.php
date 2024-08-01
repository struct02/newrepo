
<html>
<head>
<title>Upload File</title>
<link href="css/font-awesome.min.css" rel="stylesheet">
<style>
body{

background:#223a81;
font-family:'Helvetica';
color:#fff;
//text-align:center;
padding-top:5%;
margin:0px;
}
form{
border-radius:5px;
max-width:300px;
margin:0 auto;
padding:40px;
background:#0e0338;
text-align:center;
}

input[type=file]{
margin: 0 auto;
display: block;
background:#1f3698;
padding: 20px;
text-transform:uppercase;
color:#fff;
cursor:pointer;
width:100%;
}

input[type=submit]{
    background: #8d00ff;
    border: none;
    color: #fff;
    padding: 10px 40px;
cursor:pointer;

}

input[type=reset]{
    background:#ff006c;
    border: none;
    color: #fff;
    padding: 10px 40px;
cursor:pointer;

}

img{

position:absolute;
top:20px;
	left:10px;
}


.folder{
    border-radius: 2px;
box-shadow: -1px 0px 3px 0px #333;
background:#4787c6;
max-width:980px;
padding:10px;
position:relative;
border:14px solid #fff;
height:200px;
overflow-y:auto;
margin:0 auto;

}

.inner{
background:#223a81;
padding:10px;
font-size:12px;

}

a{
color:#fff;
font-size:13px;
}

.rem{
text-decoration:none;
font-size:10px;
background:red;
padding:2px 4px;
border-radius:2px;
float:right;
margin-left: 3px;
}

.dnl{
text-decoration:none;
font-size:10px;
background:#50f250;
padding:2px 4px;
border-radius:2px;
float:right;
margin-left: 3px;
}


.left{
top:0;
width:50px;
height:100%;
background:black;
position:absolute;
}

.xc{
color:#0aaeff;
font-size:35px;
padding:12px;
}
</style>
</head>
<body>




<form action="FileUpload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
    <label for="UploadFileField"></label>
    <input required type="file" name="UploadFileField" id="UploadFileField" /><br/><br/>
    <input type="submit" onsubmit="upload_success()" name="UploadButton" id="UploadButton" value="Upload" />
<input type="reset" value="Clear" />

  </form>
<br/><br/>
<div class="folder"><p align=center><img src="icon.jpg" class="img" height="30px"/> CURRENT FILES</p>

<div id="inner" class="inner">

</div>
</div>

<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#inner').load('load.php')
			}, 500);
		});
	</script>

<div class="left"><a href="..\marketer_panel.php"><i class="fa xc fa-home"></i></a></div>

<script>
function upload_success(){

alert('file upload Successful');
}
</script>
</body>
</html>
