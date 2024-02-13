  <center>
  <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</center>

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
<body  background=""
background-size="cover";>
  <marquee direction="right" width="900"><h1 align="center"><font color="aqua"><em><tt>BIODATA DIRI</tt></em></font></h1></marquee>
  <hr width="1200"></hr>
  <br><center> <img src="poto ira.jpeg" width="200" height="200"><p align="center"><b><i><mark><U><big>iranuroktaviani</big></U></mark></i></b></p></center></br>
  <table border="1" cellspacing="0" cellpadding="5" align="center" width="1020">
    <tr align="center" bgcolor="navyblue">
      <td width="500"><form size="4"><strong>DataSiri</strong></form></td>
      <td width="500"><form size="4"><strong>Keterngan</strong></form></td>
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

</body>
</html>