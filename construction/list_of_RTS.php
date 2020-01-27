

<?php
 $page_title = 'List RTS';
  require_once('includes/load.php');
  
?>
<?php
 
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>

<?php include_once('layouts/header.php'); ?>



<style>
input[type=submit] {
    background-color: #6495ED;
    color: white;
    
}

#t1 {
    -moz-tab-size: 4; /* Firefox */
    -o-tab-size: 4; /* Opera 10.6-12.1 */
    tab-size: 4;
}
</style>


</head>

<div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbspList of RTs</h1>
         </strong>
        </div>
    <div class="panel-body">
          <div class="form-group">
          	<form action="/action_page.php">
	
  Order No <input type="text" name="Order">
 <input type="submit" value="show">

</form> 

</div>
</div>
</div>
