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
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-left: 180px;
    border-radius: 20px;
    margin-top: -47px;
    border:solid; 
    border-color: #337ab7;
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
<!--bank-->

  
  
    
    
<li>
    <div class="er">
    <div class="dropdown">
        <div class="wh">
      <b><i>
        <button class="dropbtn"><span ><i class="glyphicon glyphicon-eye-open" style="color: white;"></i><strong> &nbsp Project&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
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