<?PHP
// loop for each plot

// Ask for block,lots and Product code for each plot

echo '
 <div class="input_fields_wrap">
    <button class="btn add_field_button">Add Another Plot</button>
    <br>
    <div>
        <input type="number" name="Block[]" class="form-control" placeholder="Block" required>
        <input type="number" name="Lot[]" class="form-control" placeholder="Lot" required>
    </div>
</div>';
 
 

// Price adjustment
echo '
<br>
<div class="form-group">
    <label class="sr-only" for="exampleInputName">Price Adjustments</label>
    <input type="number" class="form-control" name="adj" placeholder="Price Adjustments">
</div>';



// script to add new plots
echo '
<script type="text/javascript">
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append(\'<div><input type="number" name="Block[]" class="form-control" placeholder="Block" required/> <input type="number" name="Lot[]" class="form-control" placeholder="Lot" required/> <a href="#" class="remove_field"> Remove</a></div>\'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent(\'div\').remove(); x--;
	})
</script>';
?>