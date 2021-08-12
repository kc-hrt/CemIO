<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';


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

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);


    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    //
    // Main Content when logged in
    //


    if (!empty($_POST[qty2]) ){
        // Set variables
        $x = $_POST[qty2];
        $y = $_POST[qty2];
        $subtot = 0;
        $invoiceid = O . base_convert(rand(10,99).time(),10,36);
        $contactid = C . base_convert(rand(10,99).time(),10,36);
        
        //
        // Write data, insert data into tables
        //
        // Loop to create order table
        While ($x >=1) {
            // creates property number
            $propid = '0101-'. str_pad($_POST['block'.$x], 3,"0",STR_PAD_LEFT) . '-' . str_pad($_POST['lot'.$x], 2,"0",STR_PAD_LEFT);
            
            // Insert to invoice table
            $sql_inv = "INSERT INTO invoice (invoiceid
                    ,contactid
                    ,propid
                    ,product_code
                    ,adjustments)
                values ('$invoiceid'
                    ,'$contactid'
                    ,'$propid'
                    ,'Standard'
                    ,'$_POST[adj]')";
        
            $con->query($sql_inv);
            // loop counter
            $x--;
        }
        
        // Insert to contacts
        $sql_con = "insert into owner (contactid
                ,first_name
                ,middle_name
                ,last_name
                ,attn
                ,address1
                ,address2
                ,city
                ,state
                ,zip
                ,country
                ,phone1
                ,phone2
                ,email)
            values ('$contactid'
                ,'$_POST[fname]'
                ,'$_POST[mname]'
                ,'$_POST[lname]'
                ,'$_POST[attn]'
                ,'$_POST[addr1]'
                ,'$_POST[addr2]'
                ,'$_POST[city]'
                ,'$_POST[state]'
                ,'$_POST[zip]'
                ,'United States'
                ,'$_POST[phone]'
                ,'$_POST[phone2]'
                ,'$_POST[email]')";
            $con->query($sql_con);
        
        //
        // Create Order page
        //
        echo '
        <h1>Invoice - draft</h1>
        <div class="row show-grid">
            <div class="col-xs-6 col-sm-4">
                <h4>' . $site_name .'</h4><p>'.
                ((!empty($site_addr0)) ? $site_addr0.'<br>':'') .
                ((!empty($site_addr1)) ? $site_addr1.'<br>':'') .
                ((!empty($site_addr2)) ? $site_addr2.'<br>':'') . '</p>
            </div>
            <div class="col-xs-6 col-sm-4">
                <h4>Purchaser</h4>
                <p>'. $_POST[fname] . ' ' . $_POST[lname] . '<br>' . 
                ((!empty($_POST[attn])) ? $_POST[attn].'<br>':'') .
                $_POST[addr1] . '<br>' . 
                ((!empty($_POST[addr2])) ? $_POST[addr2].'<br>':'') .
                $_POST[city] . ', ' . $_POST[state] . ' ' . $_POST[zip] . '</p>
            </div>
            <div class="col-xs-6 col-sm-4">
                <h4>Purchase Info</h4>
                <p><b>Order #: </b>'. $invoiceid . '<br>
                <b>Date: </b>' . date("F, j Y") .
            '</div>
        </div>';

        
        
        // open table for order description
        echo '
        <table class="table">
            <thead><tr>
                <th>Property ID</th>
                <th>Descrption</th>
                <th>Price</th></tr>
            </thead>
            <tbody>';
        
        // Loop to create order table
        While ($y >=1) {
            // creates property number
            $prop = '0101-'. str_pad($_POST['block'.$y], 3,"0",STR_PAD_LEFT) . '-' . str_pad($_POST['lot'.$x], 2,"0",STR_PAD_LEFT);
            
            // actualtable creation
            echo '<tr><td>' . $prop . 
                '</td><td>Hart Cemetery Block ' . $_POST['block'.$y] . 
                ', Lot ' . $_POST['lot'.$y] . '</td><td>$400.00</td></tr>';
            
            // adds value to create subtotal
            $subtotal += 400;
                
            // loop counter
            $y--;
        }  
        
        // closes table
        echo '<tr><th colspan="2" class="text-right">Total:</th>
                <td class="price-value">' . money_format("%n", $subtotal) . '</td></tr>
            </tbody>
        </table>';
   

    } else {
        // If there is a problem will display to go back
        echo '<h3>Ooops</h3><br>
        Seomething went wrong.';
    }

}
include '../src/footer.php';
?>