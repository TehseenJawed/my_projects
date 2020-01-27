
<?php
  $page_title = 'Manage City Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
 $city = join_city_table();

?>

<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
      <!-- <?php echo display_msg($msg); ?>-->
     </div>
  </div>
   <div class="div_1">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Manage Registrations</span>
         </strong>
        </div>
    


    <div class="panel-body" id="paypalformContainer">
<div class="form-group" >

<div style="overflow-x:auto">
<form id="ccform" method="POST" >
  
<table  class="table table-bordered table-hover" id="myTable">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> City ID. </th>
                <th class="text-center" style="width: 40%;"> City Title  </th>
                <th class="text-center" style="width: 20%;"> Province ID </th>
                <th class="text-center" style="width: 30%;"> Province Name </th>
                
              </tr>
            </thead>
            <tbody>

              <?php foreach ($city as $row1):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>

                <td> <?php echo remove_junk($row1['city_id']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['city_title']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['province_id']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1['province_name']); ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_product.php?id=<?php echo (int)$row1['city_id'];?>" class="btn btn-info btn-xs"  title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_product.php?id=<?php echo (int)$row1['city_id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>
             <?php endforeach; ?>
            </tbody>
</form>
</div>
</div>
</div>

  <?php 

$query1="SELECT * from city_reg";

$result1=$db->query($query1);


while($row1 = $result1->fetch_array(MYSQLI_NUM))
{  

  ?>
            <td class="text-center"> <?php echo remove_junk($row1[0]); ?></td>
            <td class="text-center"> <?php echo remove_junk($row1[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[2]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row1[3]); ?></td>


<td class="text-center">  
 <button type="submit" name="customer1"  class="btn btn-warning"><a href="n_edit_cityreg.php">&nbsp&nbsp Edit &nbsp&nbsp<</a></button>  </td>
<?php

?>


<td class="text-center">  
 


 <button type="submit" name="customer1"  class="btn btn-danger">&nbsp&nbsp Delete &nbsp&nbsp</button>  </td>

                </tr>


<?php


     } 






   
   

 

?>
 