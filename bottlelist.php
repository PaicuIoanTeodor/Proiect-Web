<?php
include_once 'header.php';
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    //search
    $query = "SELECT * FROM `bottles` WHERE CONCAT(`Id`, `Image`, `Type`, `Value`, `Country`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bottles`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mycollection");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
    <link href="css/bottles.css" rel="stylesheet">
    <style>
        
     h1{
text-align:center;
}
   
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
    </head>
    <body>
    <h1>Bottle List </h1>
        <h1><form action="bottlelist.php" method="post">
            <input type="text" name="valueToSearch" placeholder="search" required autocomplete="off"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
</h1> 
            <table>
                <tr>
                    <th>Id</th>
                    
                    <th>Type</th>
                    <th>Value</th>
                    <th>Country</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Id'];?></td>
                    
                    <td><?php echo $row['Type'];?></td>
                    <td><?php echo $row['Value'];?></td>
                    <td><?php echo $row['Country'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <?php
        require_once 'addtocollection.php'; ?>
    </body>
</html>

