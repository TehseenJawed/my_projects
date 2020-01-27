
<html>

<head>

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
<?php
require_once('includes/load.php');
 include_once('layouts/header.php'); ?>


</head>
 <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="col-md-11">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <h1 style="text-align: center; color: #c4cfe4;"><span class="glyphicon glyphicon-th"></span>&nbsp GL Opening Balance</h1>
         </strong>
        </div>
    <div class="panel-body">
          <div class="form-group">
<form action="/action_page.php">
  
	<pre id="t1">Select Accoount:                      <input type="text" name="Contact" placeholder="Acc ID">  <input type="submit" value="Select Acc"></pre>  
   <pre id="t1">Debit:                                <input type="text" name="Debit" value="0"></pre>
  <pre id="t1">Credit:                               <input type="text" name="Credit" value="0""></pre>
  <br><br>
  <input type="submit" value="Save">
</form> 



</body>
</html>
