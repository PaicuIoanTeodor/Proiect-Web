
<!DOCTYPE html>
<html>
<head>
  <link href="css/bottles.css" rel="stylesheet"></head>
<body>
<?php
$con=mysqli_connect("localhost","root","","mycollection");
if(!$con){
	die("cant connect" . $mysqli -> connect_error);
}

require_once 'showhint.php';


?>
<form method="post">
     <h2> <input type="text" name="firstName" placeholder="Name of the bottle" required autocomplete="off" type="char" onkeyup="showHint(this.value)"> </h2>
      <h3><span id="txtHint"></span></h3>
     <h2> <input type="submit" name="submit" value="AddToMyCollection"></h2>
    </form>
</body>
	<?php
  
if(isset($_POST['submit'])){

$firstName =$_POST['firstName'];
$file=fopen("file.txt", "a");
fwrite($file, $firstName);
fclose($file);

$filename="file.txt";   
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
$ex = preg_split('/\s+/', $contents);
foreach ($ex as $user) {   
  echo "$user";
  //replace to avoid duplicates
  $insertQuery="REPLACE INTO mybottles 
SELECT * FROM bottles
WHERE Id='{$user}'";
  mysqli_query($con,$insertQuery);
  file_put_contents("file.txt", "");
  }    
fclose($handle);

/*
$insertQuery="INSERT INTO mybottles
SELECT * FROM bottles
WHERE Id='3'";
mysqli_query($con,$insertQuery);*/
}
?>

