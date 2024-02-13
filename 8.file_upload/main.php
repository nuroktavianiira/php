<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>
<!DOCTYPE HTML>  
<html>
<head>
  <title>BIODATA</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    img{
      border-radius: 50%;
    }
    </style>
</head>
<body>
  <h1 align="center">BIODATA DIRI</h1>
  <hr width="1200"></hr>
  <br><center> <img src="poto ira.jpeg" width="200" height="200"></center></br>
  <table border="1" cellspacing="0" cellpadding="5" align="center" width="1020">
    <tr align="center">
      
      <td width="500">data diri</td>
      <td width="500">keterangan</td>
  </tr>
  <tr>
   
    <td>nama lengkap</td>
    <td>iranuroktaviani</td>
  </tr>
  <tr>
   
   <td>alamat</td>
   <td>babakan sawah </td>
 </tr>
 <tr>
   
   <td>sekolah</td>
   <td>smkn 2 subang</td>
 </tr>
 <tr>
   
   <td>jurusan</td>
   <td>RPL</td>
 </tr>

  </body>  
  </html>
