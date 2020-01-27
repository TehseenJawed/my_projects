
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> -->
   <script src="jquery-ui-1.12.1/jquery.min.js">
</script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />








<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="assets/css/font.css" type="text/css"/>
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="assets/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="assets/js/jquery2.0.3.min.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/morris.js"></script>
</head>
<?php
$myVariable="majid";


 ?>
 <style type="text/css">
   .qqq
   {
 
    height: 100%;
    width: 100%;

   }
 </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 


<?php 

  $page_title = 'Voucher Transaction';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);include_once('layouts/header.php'); ?>

  
  </div>

<?php

$query="SELECT account_no FROM addaccount WHERE amount<0";
             $results= $db->query($query);
             
            $row= mysqli_num_rows($results);
           /* print_r(mysqli_num_rows($results));*/

            /*$acc_no=mysqli_fetch_array($results);*/
            
            
            if ($row>0) {
              while ($acc_no=mysqli_fetch_array($results)) {
                $zz=$acc_no['account_no'];
                

             $queryq="SELECT * FROM cm_addcheque WHERE account_id='$zz'";
             $resultq= $db->query($queryq);
             while ($acc=mysqli_fetch_array($resultq)) {
               /*echo '<pre>';*/
               $sys_date=date('y-m-d');
               /*echo $sys_date;*/ 
               $cheq_no=$acc[3];
               $db_date=$acc[9];
              $date1=date_create($sys_date);
              $date2=date_create($db_date);
              $diff=date_diff($date1,$date2);
              $diff_days=$diff->format("%a");
              echo '<pre>';
              print_r($diff_days);

              /*echo'<div class="qqq"><div class="alert alert-success alert-dismissable"> <button type="button"class="close" data-dismiss="alert">&times;</button><strong class="alert-danger">Defaulter..!</strong> <b> <?php echo $diff_days?>&nbspAre remaining on this cheque no<?php echo $cheq_no?>   </div>';
*/

             }
              

              }
             
            

           /*
            $hostname="localhost";
$username="root";
$password="";
$databaseName="soft";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);
$result4=mysqli_query($connect,$query);*/
/*$ww=mysqli_fetch_array($result4);*/
/*$acc_num=$ww[1];*/




}
 
exit;
            die;

?>
   <!--   <select name="bank_id" class="form-control nam">Bank Name
       

       <?php


       while($row1=mysqli_fetch_array($result4)):;?>
       <option value=<?php echo $row1[0]  ?>>
       <?php echo $row1[0];  
       ?> </option>

     <?php endwhile;?>


       </select> -->


<body>
  <!-- <div class="qqq">
    
 
  <span id="hh" style="display: none;">
  


  </span>
 
  </div> -->
</body>



<script type='text/javascript'>
   function vv()
   {
        var myVariable = <?php echo(json_encode($row)); ?>;
        if(myVariable>0)
        {
         //alert("cdcd",myVariable);
           $('#hh').html(' <div class="alert alert-success alert-dismissable"> <button type="button"class="close" data-dismiss="alert">&times;</button><strong class="alert-danger">Defaulter..!</strong> <b> <?php echo $row[1];?>&nbspj   </div>').css('display','block').css('color','green').css('margin-left','5%');
        
}
else
{
  alert("ther is no notificationss");
}
        }



function vvv()
   {
        var myVariable = <?php echo(json_encode($row)); ?>;
        if(myVariable>0)
        {
         //alert("cdcd",myVariable);
           $('#hh').html(' <div class="alert alert-success alert-dismissable"> <button type="button"class="close" data-dismiss="alert">&times;</button><strong class="alert-danger">Defaulter..!</strong> <b> <?php echo $acc_num;?>&nbspQuantity   </div>').css('display','block').css('color','green').css('margin-left','5%');
        
}
else
{
  alert("ther is no notificationss");
}
        }

    
</script>


<?php
  $page_title = 'Voucher Transaction';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
$vc= @$_GET["vc_id"];
echo '<h1>'.$vc.'</h1>';
if ($vc==2) {
    $query="SELECT * from newvendor_reg";
   $results= $db->query($query);
}
 if($vc==1)
{
  $query="SELECT * from customer_reg";
  $results= $db->query($query);
}

    
    $query1="SELECT * from customer_reg";

 @ $result1= $db->query($query);
  @$result2= $db->query($query1);
  
?>

<?php include_once('layouts/header.php'); ?>

  
  </div>
  




<!-- <div class="market-updates">
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <?php
          $query="SELECT * from addbank";
             $results= $db->query($query);
             
            $row= mysqli_num_rows($results);

             $query="SELECT * from add_employee";
             $result1= $db->query($query);
             
            $row1= mysqli_num_rows($result1);

            $query1="select * from products" ;
             $result2= $db->query($query1);
             
            $row2= mysqli_num_rows($result2);
            

          ?>
           <div class="col-md-8 market-update-left">
           <h4>Total Banks:<?php echo ($row);?></h4>
          <h3></h3>
          <p>Other hand, we denounce</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-4 market-update-right">
            <i class="fa fa-users" ></i>
          </div>
          <div class="col-md-8 market-update-left">
          <h4>Employe..</h4>
            <h3><?php echo ($row1);?></h3>
            <p>Other hand, we 
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
          <div class="col-md-4 market-update-right">
            <i class="fa fa-usd"></i>
          </div>
          <div class="col-md-8 market-update-left">
            <h4>Products..</h4>
            <h3><?php echo ($row2);?></h3>
            <p>Other hand, we </p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
          <div class="col-md-4 market-update-right">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </div>
          <div class="col-md-8 market-update-left">
            <h4>Orders</h4>
            <h3>1,500</h3>
            <p>Other hand, we denounce</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
       <div class="clearfix"> </div>
    </div>  

 -->
 
