<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Simple inventory System";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="libs/js/functions.js"></script>
  </head>
  <style type="text/css">
.ma
{
  background-color: #337ab7;
}
  </style>
<body>  
  <?php  if ($session->isUserLoggedIn(true)): ?>
    

<nav class="navbar navbar-inverse ma">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: white;">UBBA-SOFT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#" style="color: white;"><?php echo date('M-Y-D')?></a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;"><?php echo remove_junk(ucfirst($user['name'])); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <?php if($user['user_level'] === '1')
             { ?>
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <?php
             } ?>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="col-md-3 ">
  
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- employee user -->
      <?php include_once('inventory.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- bank  menu -->
      <?php include_once('crm.php');?>

      <?php elseif($user['user_level'] === '4'): ?>
        <!-- expense  menu -->
      <?php include_once('account.php');?>

      <?php elseif($user['user_level'] === '5'): ?>
        <!-- master  menu -->
      <?php include_once('project.php');?>

      <?php elseif($user['user_level'] === '6'): ?>
        <!-- customer master  file -->
      <?php include_once('procurment.php');?>
      
      <?php elseif($user['user_level'] === '7'): ?>
        
      <?php include_once('hrm.php');?>

      <?php elseif($user['user_level'] === '8'): ?>
             <?php include_once('sub.php');?>

      <?php elseif($user['user_level'] === '9'): ?>
      
      <?php include_once('invoice_transaction.php');?>

      <?php elseif($user['user_level'] === '10'): ?>
      
      <?php include_once('invoice_return.php');?>

      <?php elseif($user['user_level'] === '11'): ?>
            <?php include_once('voucher_transaction.php');?>

       <?php elseif($user['user_level'] === '12'): ?>
      <?php include_once('lc_transaction.php');?>   

      <?php elseif($user['user_level'] === '13'): ?>
        
      <?php include_once('group_invoice.php');?>   

  
      <?php endif;?>

      
   </div>
<?php endif;?>

</div>
<div class="col-md-9">
  <br>