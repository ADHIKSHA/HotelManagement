
	<?php  
      //export.php  
	  
 if(isset($_POST["CONFIRM"]))  
 { 
      $connect = mysqli_connect("localhost:3307", "root", "", "table1");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Table1.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ItemNo','Quantity'));  
      $query = "SELECT * from tb1";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
	  exit($output);
	  close($connect);
	  exit;
	  
 }
 ?>
