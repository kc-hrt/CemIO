<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
// session_start();

echo '<h3>New Order</h3>';

// Check for logged in
if(!isset($_SESSION['login_user']))
{
// ===============
// Content when logged out
//

$login_session=$_SESSION['login_user'];
	echo '<br><h4>
		You must be logged in for access to the Admin pages.</h4> 
		Click <a href="./login.php">here</a> to login.<br><br><br>';

} else {

//
// When Logged in

//
// Main Content when logged in
//



echo '
 
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2>  
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
';
 
 echo '
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $(\'#add\').click(function(){  
           i++;  
           $(\'#dynamic_field\').append(\'<tr id="row\'+i+\'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="\'+i+\'" class="btn btn-danger btn_remove">X</button></td></tr>\');  
      });  
      $(document).on(\'click\', \'.btn_remove\', function(){  
           var button_id = $(this).attr("id");   
           $(\'#row\'+button_id+\'\').remove();  
      });  
      $(\'#submit\').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$(\'#add_name\').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $(\'#add_name\')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
 ';
    
    
    
//
// Footer
//
}
include '../src/footer.php';
?>