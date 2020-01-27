
<?php


if( isset($_POST['hobby']))
{
$array=$_POST['hobby'];

echo $array[0] ;
echo $array[1] ;


$array=$_POST['ho'];

echo $array[0] ;
echo $array[1] ;


}


?>



<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>
<script type="text/javascript">
$(function(){
var removeLink = ' <a class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';

$('a.add').relCopy({ append: removeLink}); 
 

});
</script>
//HTML code
<form method="post" action="ch.php">

<div class="clone">
<p > <input type="text" name="hobby[]" class='input'/></p>
<p > <input type="text" name="ho[]" class='input'/></p>
</div>

<p><a href="#" class="add" rel=".clone">Add More</a></p>

<input type="submit" value=" Submit " />

</form>



