<?php  
 $connect = mysqli_connect("localhost", "root", "", "MyCollection");  
 $query ="SELECT * FROM mybottles ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          
           
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:600px;">  
                           
                <br />  
                <form method="post" action="export.php" align="right">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
               
                     <?php       
                       
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  