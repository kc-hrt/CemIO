<?php  
 
echo $_POST["mytext"][0];
echo $_POST["mytext"][1];

if(isset($_POST["mytext"]) && is_array($_POST["mytext"])){  
    $capture_field_vals ="";
    foreach($_POST["mytext"] as $key => $text_field){
        $capture_field_vals .= $text_field .", ";
    }
    echo $capture_field_vals;
}
 ?> 