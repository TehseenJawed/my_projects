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
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left"> <img src="images/56.jpg" height="66-2" width="248"> </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php echo date("F j, Y, g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
             <!--  <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline"> -->
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
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
    </header>
    <div class="sidebar">
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- employee user -->
      <?php include_once('admin_emp.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- bank  menu -->
      <?php include_once('bank_manager.php');?>

      <?php elseif($user['user_level'] === '4'): ?>
        <!-- expense  menu -->
      <?php include_once('expense_manu.php');?>

      <?php elseif($user['user_level'] === '5'): ?>
        <!-- master  menu -->
      <?php include_once('master_menu.php');?>

      <?php elseif($user['user_level'] === '6'): ?>
        <!-- customer master  file -->
      <?php include_once('customer_master_file.php');?>
      
      <?php elseif($user['user_level'] === '7'): ?>
        
      <?php include_once('product_file.php');?>

      <?php elseif($user['user_level'] === '8'): ?>
            <?php include_once('finishes_good_rec.php');?>

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

<div class="page">
  <div class="container-fluid">