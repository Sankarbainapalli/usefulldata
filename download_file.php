<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      require_once("includes/logics.php"); 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','branch_name','venture_name', 'Plot Nos'));  
      $query = "SELECT * FROM `plot_list` ORDER BY id DESC";  
      $result = mysqli_query($cnect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  