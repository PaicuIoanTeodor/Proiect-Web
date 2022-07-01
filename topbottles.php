<?php
include_once 'header.php';
?>
<html>
<head>
<link href="css/mycollection.css" rel="stylesheet">
	<style>
table {
  border-collapse: collapse;
  border: 1px solid black;
  margin: 15px auto 10px auto;
} 

th,td {
  border: 1px solid black;
  text-align: center;
width:180px;

}

#table {
  table-layout: auto;
  width: 180px;  
  text-align:center;

}

		</style>
<h1>My Collection </h1>
<body>

<?php
$con=mysqli_connect("localhost","root","","mycollection");
if(!$con){
	die("cant connect" . $mysqli -> connect_error);
}
$sql="SELECT* FROM bottles ORDER BY Fav DESC ";
$mydata=mysqli_query($con,$sql);
echo "<table border=1>
<tr>
<th>Id</th>

<th>Type</th>
<th>Value</th>
<th>Country</th>
<th>Fav</th>
</tr>";
while($record=mysqli_fetch_array($mydata)){
	echo "<form action=MyCollection.php method=post>";
	echo "<tr>";	
echo "<td>". $record['Id'] . "</td>";
//echo "<td>". $record['Image'] . "</td>";
echo "<td>". $record["Type"] . "</td>";
echo "<td>". $record['Value'] . "</td>";
echo "<td>". $record['Country'] . "</td>";
echo "<td>". $record['Fav'] . "</td>";
echo "</tr>";
echo "</tr>";
echo "</form>";

}
echo "</table>";

mysqli_close($con);
?>