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
    margin-left: 180px;
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
}
.wh
{
  /*column-width: 244px;*/
      margin-right: 37px;

}
.href
{

}
</style>
</head>


  
  

<ul>
  <br>

 <li>
    <div class="er">
    <div class="wh">
            <b><i>
   <strong>  <a href="home.php" style="color: white;margin-left: 20px;"><span style="color: white;" class="glyphicon glyphicon-home"></span> &nbspDeshboard</a></i></b></a></strong></i>

 </i>
</b>
</div>
</li>
  <li>
    <div class="er">
    <div class="dropdown">
        <div class="wh">
      <b><i>
        <button class="dropbtn"><span ><i class="glyphicon glyphicon-eye-open" style="color: white;"></i><strong> &nbspRegister&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span></button>
      </i></b>
      <br> 

      <div class="dropdown-content">
        
              <ul>
                <a href="company.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Company Code</span></a>
                <a href="item_code_reg.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Item Code </span></a>
                <a href="sup_reg.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Supplier Code </span></a>
                <a href="city.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Area </span></a>
              
                <a href="sales_man.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Sales Man</span></a>

                <a href="customer_code.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Customer Code</span></a>

               <!-- <a href="costing.php"><i class="glyphicon glyphicon-user"></i><span>Costing File</span></a>-->
                <!--<a href="formula.php"><i class="glyphicon glyphicon-user"></i><span>Ingredient File</span></a>-->
                  <!--<a href="cus.php"><i class="glyphicon glyphicon-user"></i><span>Customer Master File</span></a>-->
                  <!--<a href="item_reg.php"><i class="glyphicon glyphicon-user"></i><span>Product Master File </span></a>-->
                  
                  
                  
                  
                  <!--<a href="comp_reg.php"><i class="glyphicon glyphicon-user"></i><span>City Master File </span></a>-->
                  <!-- <a href="showreg1.php"><i class="glyphicon glyphicon-user"></i><span>Show Registration </span></a>-->
                   <!--<a href="formula_product.php"><i class="glyphicon glyphicon-user"></i><span>Print requisition </span></a>-->
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
      <button class="dropbtn"><strong><i  style="color: white;" class="glyphicon glyphicon-edit"></i> &nbsp Tranaction&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </strong></button>
      </i></b>
      <br> 
 
   <div  class="dropdown-content">

  <a href="purchase_trans.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Purchase Invoice </span></a>

  <!--<a href="production_trans.php"> <i class="glyphicon glyphicon-user"></i><span>Production File</span></a> -->
  
 <!-- <a href="Finished_Goods_Rec_note.php"><i class="glyphicon glyphicon-user"></i>
    <span>Finished Goods Received Note Transaction </span></a>-->
  
  <a href="newinvoice.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Sales Invoice</span></a>
 <!-- <a href="nninvoiceret.php"><i class="glyphicon glyphicon-user"></i><span>Invoice Return </span></a>-->
  <a href="receieve_from_customer.php"><!--<i class="glyphicon glyphicon-user">--></i><span>Customer Recipt </span></a>
  <a href="payment_to_vendor.php"><!--<i class="glyphicon glyphicon-user">--></i><span>Supplier Payment </span></a>
  <!--<a href="voucher_trans.php"><i class="glyphicon glyphicon-user"></i><span>Voucher Transaction</span></a>-->
  <!--<a href="newlc.php"><i class="glyphicon glyphicon-user"></i><span>LC Transaction</span></a>-->
 <!-- <a href="Grouped_Invoice.php"><!-- </i><span>Grouped Invoice Transaction</span></a>-->
 <!-- <a href="raw_material.php"><i class="glyphicon glyphicon-user"></i>

  <span>Accept Raw material and Packaging</span></a>-->

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
      <button class="dropbtn"><strong> <i style="color: white;" class="glyphicon glyphicon-folder-open"></i> &nbsp Bank Management</strong></button>
      </i></b>
      <br> 
  
  
  
    
    <div  class="dropdown-content">
  
     <a href="add_bank.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Add Bank</span></a>
      <a href="new_addaccount.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Add Account </span></a> 
      <a href="add_amount.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Add Amount </span></a>  
      <a href="allaccount.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>All Account </span></a> 
      <a href="allbank.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>All Bank </span></a>  
      <a href="chequemanagement.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Cheque Management</span></a>
    </div>
</div>
</div>
</div>
</li>



<!--Bank-->


  
 <!--transaction-->




  <li>
    <div class="er">
    <div class="dropdown">
    <div class="wh">
      <b><i>
      <button class="dropbtn"><strong> <i style="color: white;" class="glyphicon glyphicon-pencil"></i> &nbsp Expense Manag&nbsp &nbsp &nbsp </strong></button>
      </i></b>
      <br> 
     
       <div  class="dropdown-content">
       <a href="expense.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Add Expense </span></a>
       <a href="expensedetail.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Check Expense Details </span></a> 
  
  
    </div>
  </div>
</div>
</li>
<!--bank-->

  <li>
    <div class="er">
    <div class="dropdown">
      <div class="wh">
      <b><i>
      <button class="dropbtn"><strong><i style="color: white;" class="glyphicon glyphicon-user"></i> &nbsp Employees &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></button>
      </i></b>
      <br> 
  
  <div  class="dropdown-content">
  <a href="addemployee.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Add Employee </span></a>
  <a href="checkemployee.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Check Details </span></a> 
  <a href="loanamount.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Give Amount </span></a> 
    <a href="checkloan.php"><!--<i class="glyphicon glyphicon-user"></i>--><span>Check Given Amount </span></a> 
    
  


  </div>
   </div>
   </div>
 </div>
  </li>
<!--expense-->

   <li>
    <div class="er">
      <div class="dropdown">
        <div class="wh">
            <b><i>
            <button class="dropbtn"><strong><i style="color: white;" class=" glyphicon glyphicon-cd"></i> &nbsp Reports&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></button>
            </i></b>
             <br>
           <div class="dropdown-content abc">
                   
                   <a href="datewise_details.php"><span>Date Wise Customer Recipt Details</span></a>
                   <a href="customer_receive.php"><span>Customer Receivable Summary</span></a>
                   <a href="sales_invoice.php"><span>Sales Invoice</span></a>
                   <a href="purchase_invoice.php"><span>Purchase Invoice</span></a>
                   <a href="invoice_report.php"><span>Invoice Report</span></a>



               <!-- <a href="opb_products.php"><span>OPB Report </span></a>
                <a href="allproducts.php"><span>All Products Report </span></a>
                 <a href="overallsale.php"><span>Over All </span></a>-->
                <!--  <a href="personwise.php"><span>Person wise Report </span></a> -->
               <!--<a href="Batch_Wise_production_detail_report.php"><span>Batch Wise Report </span></a>-->
               <!-- <a href="Purchase_report.php"><span>Purchase Report </span></a>
                <a href="p.no.php"><span>P.No Report </span></a>-->
                  <!-- <a href="production_in_progress.php"><span>Production Progress Report </span></a>  -->
              
              <!-- <a href="citywise.php"><span>city  wise</span></a>
              <a href="provincewise.php"><span>Province  wise</span></a>
                <a href="stockreport.php"><span>Stock Report </span></a>-->
                  <!--<a href="stoc_raw.php"><span>Raw material Report </span></a>-->
              <!--  <a href="stock_finsihgood.php"><span>Finish good Report </span></a>-->
                <!--<a href="stock_packaging.php"><span>Packaging Report </span></a>-->
               <!--  <a href="re_order_report.php"><span>Re Order Report </span></a> -->
                
            <!-- <div class="abc2">
            </div> -->
    
            <!--  <div class="dropdown-content abc1">
              <a href="#"><span>Sales Report &nbsp&nbsp</span></a>
                  <div class="abc3">     
                  <a href="overallsale.php"><span>Over All Sales </span></a>
                  <a href="personwise.php"> <span>Person Wise Sales </span></a>
                  <a href="provincewise.php"> <span>Province Wise Sales </span></a>
                  <a href="citywise.php"><span>City Wise Sales </span></a>
                  
                 </div>
            
             </div>

               </div>
                <div class="dropdown-content abc4">
                 <a href="personwise.php"><span>Stocks Report &nbsp</span> </a>
                 </div> -->
             










































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
            <button class="dropbtn"><strong><i style="color: white;" class=" glyphicon glyphicon-cd"></i> Ledger Reports&nbsp&nbsp&nbsp&nbsp&nbsp</strong></button>
            </i></b>
             <br>
           <div class="dropdown-content abc">
               <a href="customer_ledger.php"><span>Customer Ledger Summary</span></a>
          <!--  <a href="item_ledger.php"><span>Item Ledger </span></a> -->
           <a href="vendor_legder.php"><span>Vendor Ledger Summary </span></a>
           <!--  <a href="Production_sum_report.php"><span>Production Summary </span></a>  -->
              
             </div>
           
           </div>
         </div>
       </div>

</li>















<br>

<li>
    <div class="er">
    <div class="wh">
            <b><i>
   <strong>  <a href="quantiy_noti.php" style="color: white;margin-left: 25px;"><span style="color: white;" class="glyphicon glyphicon-certificate"></span> &nbsp Item Notifications</a></i></b></a></strong></i>
     <!--  <b><i>
      <button class="dropbtn"><strong> <i class="glyphicon glyphicon-th"></i>  Notifications</a></strong></button> -->
 </i>
</b>
</div>
</li>

<br>

<li>
    <div class="er">
    <div class="wh">
            <b><i>
   <strong>  <a href="banknotif.php" style="color: white;margin-left: 25px;"><span style="color: white;" class="glyphicon glyphicon-certificate"></span> &nbspBank Notifications</a></i></b></a></strong></i>
     <!--  <b><i>
      <button class="dropbtn"><strong> <i class="glyphicon glyphicon-th"></i>  Notifications</a></strong></button> -->
 </i>
</b>
</div>
</li>






<br>

   
 
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