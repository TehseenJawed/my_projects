<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidebar {
  position: fixed;
  z-index: 10;
  left: 0;
  top: 0;
  padding: 65px 0 0;
  height: 100%;
  width: 250px;
  background: #337ab7;
  border-right: 1px solid #ddd;
  text-align: center;
} 









.dropbtn {
    background-color: #337ab7;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;


}



.dropdown {
    position: relative;
    display: inline-block;

}

.dropdown-content, .abc2,.abc3 ,.abc5{
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 190px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-left: 160px;
    border-radius: 20px;
    margin-top: -47px;
    border:solid; 
    border-color: #337ab7;
    height: 250px;
   overflow: auto;
}

.abc2{
  margin-left: 160px !important;
}
.abc3{
  margin-left: 160px !important;
}

.abc5{
  margin-left: 160px !important;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 40px;
    color: #337ab7;
   

}




.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content, .abc:hover .abc2 , .abc1:hover .abc3,.abc4:hover .abc5 {
    
    display: block;
}



.dropdown:hover .dropbtn {
    background-color: #337ab7;
}
.er
{
    background-color: #337ab7;
    height:54px;
}
.wh
{
  /*column-width: 244px;*/
      margin-right: 37px;

}

.href
{

}
li{
  list-style-type: none;
}
</style>
</head>


  
  

<ul>
  <br>

 <li>
    <div class="er">
    <div class="wh">
            <br>
            <b><i>
   <strong>  <a href="home.php" style="color: white;margin-left: 20px;"> <span style="color: white;" class="glyphicon glyphicon-home"></span> Deshboard</a></i></b></a></strong></i>

 </i>
</b>
</div>
</li>
  <li>
    <div class="er">
    <div class="dropdown">
        <div class="wh">
      <b><i>
        <button class="dropbtn"></i><strong> <span  class="glyphicon glyphicon-eye-open" style="color: white;"></span> Inventory </button>
      </i></b>
      <br> 

      <div class="dropdown-content">
             <ul> <a href="item_reg.php">
                  	<span>Add Product</span></a>
                    <a href="purchase_tab.php">
                      <span>Purchase</span>
                <a href="manage_product.php">
                	<span>Product Details</span></a>
                  
                  <a href="sup_reg.php">
                  	<span>Supplier</a>
                   <a href="categorie.php">
                   </i><span>Category </span></a>
                   <a href="m_vendor_supplierreg.php">
                   </i><span>Vendor Reports </span></a>
					<a href="Payment_Vendors.php">
                   </i><span>Payment to Vendors</span></a>
            </ul>
         

       </div>
     </div>
    </div>
  </div>
  </li>
 
<!--master-->
<li>
    <div class="er">
  <div class="dropdown" >
   <div class="wh">
      <b><i>
      <button class="dropbtn"><strong><i  style="color: white;" class="glyphicon glyphicon-edit"></i>  CRM  </strong></button>
      </i></b>
      <br> 
 
   <div  class="dropdown-content">

  <a href="cus.php"><span>Customer Registration</span></a>

    <a href="search_client.php"><span>Customer Records</span></a> 
  <a href="email.php"><span>Email</span></a>
  <a href="all_remind.php"><span>All Reminders</span></a> 

  
  </div>
   </div>
 </div>
  </li>
   <!--transaction-->
  <li>
     <div class="er">
    <div class="dropdown">
      <div class="wh">
      <b><i>
      <button class="dropbtn"><strong><i style="color: white;" class="glyphicon glyphicon-folder-open"></i> Accounts </strong></button>
      </i></b>
      <br> 
  
  
  
    
    <div  class="dropdown-content">
  
<a href="add_bank.php">
      <span>Add Bank</span></a>

      <a href="new_addaccount.php">
        <span>Add Account </span></a>
     <!--  <a href="#"><span> View or Print Voucher</span></a>
      <a href="jv_voucher.php"><span>Journal Voucher </span></a> -->
      <a href="bank_pmt_vch.php"><span>Bank payment Voucher </span></a>
      <a href="cash_ptm_vocher.php"><span>Cash payment Voucher </span></a>
       <a href="allbank.php"><span>ALl Bank </span></a>
      <a href="allaccount.php"><span>All Accounts  </span></a>
      <a href="bank_payment.php"><span>All Bank payment Voucher </span></a>
      <a href="cash_payment.php"><span>All Cash payment Voucher </span></a>
          
     
      <!-- <a href="chequemanagement.php"><span>Cheque Management</span></a>
 -->    </div>
</div>
</div>
</div>
</li>





<li>
    <div class="er">
    <div class="dropdown">
        <div class="wh">
      <b><i>
        <button class="dropbtn"><span ><strong><i class="glyphicon glyphicon-asterisk" style="color: white;"></i> Project </span></button>
      </i></b>
      <br> 

      <div class="dropdown-content">
        
              <ul> 
                <a href="add_project.php">
                    <span>Add Project</span></a>
                    <a href="pro_project.php">
                    <span>Process Project</span></a>
                    <a href="7list_project.php">
                    <span>list Project</span></a>
                 	   <a href="m_edit_supplierreg.php">
                   </i><span>Receive Money From Projects</span></a>
				     <a href="Pending_Projects.php">
                   </i><span>Pending Projects</span></a>
				    <a href="Completed_Projects.php">
                   </i><span>Completed Projects</span></a>
                
                  
                    
            </ul>
         

       </div>
     </div>
    </div>
  </div>
  </li>


<li>
    <div class="er">
    <div class="dropdown">
        <div class="wh">
      <b><i>
        <button class="dropbtn"><span ><strong><i class="glyphicon glyphicon-eye-open" style="color: white;"></i> Procurment </span></button>
      </i></b>
      <br> 

      <div class="dropdown-content">
        
              <ul> 
                <a href="7_finishe_goods.php">
                    <span>Make Requisition</span></a>
                       <a href="requisition_list.php"><span>List of Requisition </span></a>
      <a href="issue_stock.php"><span>Issue Stock </span></a>
      <a href="issue_notes.php"><span>List Issue Notes </span></a>
               
            </ul>
         

       </div>
     </div>
    </div>
  </div>
  </li>


















<!--Bank

<!--notifications-->
  
 <!--transaction-->



<!-- 
  <li>
    <div class="er">
    <div class="dropdown">
    <div class="wh">
      <b><i>
      <button class="dropbtn"><strong> <i style="color: white;" class="glyphicon glyphicon-pencil"></i> &nbsp Expense Manag&nbsp &nbsp &nbsp </strong></button>
      </i></b>
      <br> 
     
       <div  class="dropdown-content">
       <a href="expense.php"><<!-- span>Add Expense </span></a>
       <a href="expensedetail.php"> --><!-- <span>Check Expense Details </span></a> 
  
  
    </div>
  </div>
</div>
</li> -->
 <!--bank-->

  <li>
    <div class="er">
    <div class="dropdown">
      <div class="wh">
      <b><i>
      <button class="dropbtn"><strong><i style="color: white;" class="glyphicon glyphicon-user"></i> HRM </strong></button>
      </i></b>
      <br> 
  
  <div  class="dropdown-content">
  <a href="addemployee.php"><span>Add Employee </span></a>
  <a href="checkemployee.php"><span>Check Details </span></a> 
    <a href="aprrove_7_newpayroll.php"><span>Approve Salaries </span></a>
    <a href="generates_7_newpayroll.php"><span>Approved Salaries </span></a> 
       
  
  
    
  


  </div>	
   </div>
   </div>
 </div>
  </li>

  <li>
    <div class="er">
      <div class="dropdown">
        <div class="wh">
            <b><i>
            <button class="dropbtn"><strong><i style="color: white;" class=" glyphicon glyphicon-cd"></i> Administration </strong></button>
            </i></b>
             
           <div class="dropdown-content abc">
                <a href="7_createuser.php"><span>Create User </span></a>
               <!--  <a href="edit_account.php"><span>Manage User </span></a> --><a href="all_7_manage_admin.php"><span>Manage User </span></a>
                 <a href="7_userroles.php"><span>User Roles </span></a>
             

                       </div>
         </div>
       </div>

</li>






   
 
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>




</ul>