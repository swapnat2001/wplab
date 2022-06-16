<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "june");  
 // This function takes a JSON string and converts it into a PHP variable that may be an array or an object
 $data = json_decode(file_get_contents("php://input"));  
  if(count(array($data)) > 0)  
  {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);  
      $query = "insert into june_table(first_name,last_name) values('$first_name', '$last_name')"; 
      $execval = mysqli_query($connect,$query); 
      if($execval == True)  
      {  
           echo "User Added...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
  }  
 ?>