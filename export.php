 <?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $con = mysqli_connect("localhost", "root", "", "mycollection");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Id', 'Type', 'Value', 'Country'));  
      $query = "SELECT * from mybottles ORDER BY id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  