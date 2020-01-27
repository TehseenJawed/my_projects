<?php
  $page_title = 'Edit Salesman Registration';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(5);
?>
<?php
$product = find_by_id('new_salesman',(int)$_GET['id']);
$all_categories = find_all('categories');
$all_photo = find_all('media');
if(!$product){
  $session->msg("d","Missing vendor id.");
  redirect('m_edit_supplierreg.php');
}
?>
<?php
 if(isset($_POST['product'])){
    $req_fields = array('sal_title','s_address','s_p_no', 's_mob_no' );
    validate_fields($req_fields);

   if(empty($errors)){
       $cus_name  = remove_junk($db->escape($_POST['sal_title']));
       $c_name   = remove_junk($db->escape($_POST['s_address']));
       $c_person   = remove_junk($db->escape($_POST['s_p_no']));
       $desig   = remove_junk($db->escape($_POST['s_mob_no']));


       $query   = "UPDATE new_salesman SET";
       $query  .=" sal_title ='{$cus_name}', ";
       $query  .=" s_address ='{$c_name}', s_p_no ='{$c_person}', s_mob_no ='{$desig}' ";
       

       $query  .=" WHERE id ='{$product['id']}'";
       $result = $db->query($query);
               if($result && $db->affected_rows() === 1){
                 $session->msg('s',"Salesman updated ");
                 redirect('m_edit_salesman.php', false);
               } else {
                 $session->msg('d',' Sorry failed to updated!');
                 redirect('n_edit_salesmanreg.php?id='.$product['id'], false);
               }

   } else{
       $session->msg("d", $errors);
       redirect('n_edit_salesmanreg.php?id='.$product['id'], false);
   }

 }

?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
   <div class="div_1">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Salesman Registration</span>
         </strong>
        </div>
    <div class="panel-body">
         <div class="col-md-7">
           <form method="post" action="n_edit_salesmanreg.php?id=<?php echo (int)$product['id'] ?>">
              <div class="form-group">

                  <span class="input-group-addon">
        
                   <i class="glyphicon glyphicon-th-large"></i>

                  </span> 
         
               <strong>
       <text style= 'margin-left:1px';> <span>Salesman Title</span></text>
       </strong>
       <input type="text" class="form-control nam" name="sal_title" value="<?php echo remove_junk($product['sal_title']);?>">
        <br>
       <strong>
       <text style= 'margin-left:1px';> <span>Address </span></text>
       </strong>
       <input type="text" class="form-control nam" name="s_address" value="<?php echo remove_junk($product['s_address']);?>">
       <br>
       <strong>
       <text style= 'margin-left:1px';> <span>Phone no. </span></text>
       </strong>
       <input type="text" class="form-control nam" name="s_p_no" value="<?php echo remove_junk($product['s_p_no']);?>">
       <br>
       
       <strong>
       <text style= 'margin-left:1px';> <span>Mobile no. </span></text>
       </strong>
       <input type="text" class="form-control nam" name="s_mob_no" value="<?php echo remove_junk($product['s_mob_no']);?>">
       <br>
       
               
                  </div>
                </div>
              </div>

              </div>
              <button type="submit" name="product" class="btn btn-danger">Update</button>
          </form>
         </div>
        </div>
      </div>
  </div>

<?php include_once('layouts/footer.php'); ?>




<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>
<script type="text/javascript" src= "mousetrap-master/mousetrap.js" ></script>
<script type="text/javascript" src="mousetrap-master/mousetrap.min.js"></script>
 
<script type="text/javascript">


function as() {
 $('.a').click() ;

  var search = $('.nam');

  search.focus();



}
function s() {


  var search = $('.nam');
  

  search.focus();



}


function rs() {
 $('.remove').click() ;



}

function sub() {
  $('.sub').click() ;



}







  
  function mg() {
window.location.assign("group.php")
}


function mu() {
window.location.assign("users.php")
}



function cat() {
window.location.assign("categorie.php")
}


  function mg() {
window.location.assign("group.php")
}


function mu() {
window.location.assign("users.php")
}



function cat() {
window.location.assign("categorie.php")
}



function p() {
window.location.assign("product.php")
}


function ap() {
window.location.assign("add_product.php")
}


function sale() {
window.location.assign("sales.php") ;
}



function add_sale() {
window.location.assign("add_sale.php")
}



function ms() {
window.location.assign("monthly_sales.php")
}




function ds() {
window.location.assign("daily_sales.php")
}


function g() {
window.location.assign("gen.php")
}



function ge() {
window.location.assign("gene.php")
}


function sp() {
window.location.assign("pproduct.php")
}



function spa() {
window.location.assign("add_pproduct.php")
}




function gsa() {
window.location.assign("add_ssales.php")
}




function gs() {
window.location.assign("ssales.php")
}




Mousetrap.bind('u',mu)
Mousetrap.bind('g',mg)
Mousetrap.bind('c',cat)
Mousetrap.bind('p',p)
Mousetrap.bind('+',ap)
Mousetrap.bind('s+i',sale)
Mousetrap.bind('s+a',add_sale)
Mousetrap.bind('s+m',ms)
Mousetrap.bind('s+d',ds)
Mousetrap.bind('r',g)
Mousetrap.bind('q',gs)
Mousetrap.bind('w',gsa)
Mousetrap.bind('-',spa)
Mousetrap.bind('o',sp)
Mousetrap.bind('e',ge)











Mousetrap.bind('z',as) 
Mousetrap.bind('x',rs) 
Mousetrap.bind('v',s) 
Mousetrap.bind('b',sub) 


/*

  $('.quantity').on('keyup',function(){
    var tot = $('.price').val() * this.value;
    $('.total').val(tot);
});

*/

  /*
  $(".quantity").on("keyup", function () {
    var $this = $(this);
    $tr = $this.closest('tr');
    qty_val = $this.val();
    unitprice_val = $tr.find('.price').val();
    amount = qty_val*unitprice_val;
    $(this).find('.total_discount').val(amount);
 
    //$('#total_amount').val(amount);
    //$(this).find('.total_amount').attr("value",amount);
    //$(this).find('.total_discount').val(amount);
 });
*/

$(function(){
var removeLink = ' <a  class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';

$('a.add').relCopy({ append: removeLink}); 
 

});



</script>
