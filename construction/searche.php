 <?php  
include 'config.php' ;
 if(isset($_POST["query"]))  
 {  
  $item = $_POST["query"];
      $output = '';  
      $query = "SELECT * FROM products WHERE name LIKE '$item%'";  
      $result = $conn->query($query) ; 
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = $result->fetch_assoc())  
           {  
                $output .= '<li>'.$row["name"].'</li>';  
           }  
   }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  