<?php include_once('includes/load.php'); ?>
<?php $req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);
if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id){
    //create session with id
     $session->login($user_id);
    //Update Sign in time
     updateLastLogIn($user_id);
     $session->msg("s", "Welcome to OSWA-INV.");
     echo '<script>window.location.href="home.php"</script>';
    //  header("Location: home.php");
    //  redirect('home.php',true); 
  } else { 
    $session->msg("d", "Sorry Username/Password incorrect.");
     echo '<script>window.location.href="index.php"</script>';
    // redirect('index.php',false);
  }

} else { 
     echo '<script>window.location.href="index.php"</script>';
   $session->msg("d", $errors);
//   redirect('index.php',false);
}

?>
