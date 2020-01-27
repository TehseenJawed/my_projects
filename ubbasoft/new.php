 


<!-- TABLE starts here -->
    <table id="my_table_id" name="billitems">
        <tr>
            <td>Sr. No.</td>
            <td>Category</td>
            <td>Product</td>
            <td>Quantity</td>
            <td>Unit Price</td>
            <td>Amount</td>
        </tr>

        <tr class="clone_this">
            <td>1.</td>
            <td>
            <select style="width:150px;" class="gr" name="categories[]">
                <option value="Select Category">Select Category</option>        
                     </td>
            <td class="sub_item"><select style="width:150px;" class="it_id" name="products[]">
                <option value="Select Product">Select Product</option>
            </td>
            <td><input class="qty" type="number" step="0.01" placeholder="ex: 12.50" name="qty[]" value="0.00" required onkeyup="updatePrice(this.value)"></td>
            <td><input class="unit_price" type="number" step="0.01" placeholder="ex: 56.50" name="unitprice[]" value="0.00" required onkeyup="updatePrice(this.value)"></td>
            <td><input class="pricecalc" type="number" step="0.01" placeholder="will be calculated" name="calculatedprice[]" value="0.00" required readonly="readonly"></td>
        </tr>


    </table>
    <input type="button" value="Add more items" id="more_items" style="margin-top:10px; margin-bottom:20px"/><br>

    <span class="sameline">
            <label class="smalllabel" style="width:100px;">Total Amount</label>
            <input class="total_amount" id="total_amount "type="number" step="0.01" placeholder="will be calculated" name="total_amount" value="0.00" required readonly="readonly"></td>
    </span><br><br>


<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>
<script type="text/javascript" src= "mousetrap-master/mousetrap.js" ></script>
<script type="text/javascript" src="mousetrap-master/mousetrap.min.js"></script>

<script>

 $(".qty").on("keyup", function () {
    var $this = $(this);
    $tr = $this.closest('tr');
    qty_val = $this.val();
    unitprice_val = $tr.find('.unit_price').val();
    amount = qty_val*unitprice_val;
    $(this).closest('tr').find('.pricecalc').attr("value", amount);
    //$('#total_amount').val(amount);
    //$(this).find('.total_amount').attr("value",amount);
    //$(this).find('.total_discount').val(amount);
 });

</script>




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
