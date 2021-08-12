<?php
// Create variables for IDs
$prop = '0101-'. str_pad($_POST[block], 3,"0",STR_PAD_LEFT) . '-' . str_pad($_POST[lot], 2,"0",STR_PAD_LEFT);
$ownID = "Own-" . uniqid();

// Insert to Owner table
	$sql1 = "INSERT INTO owner (contactid
				,firstname
				,middlename
				,lastname
				,suffix
				,gender
				,attn
				,address1
				,address2
				,city
                ,state
                ,zip
                ,country
                ,phone1
                ,phone1_type
                ,phone2
                ,phone2_type
                ,phone3
                ,phone3_type
                ,email
                ,dl_num
				,notes)
			values ('$ownID'
				,'$_POST[fname]'
				,'$_POST[mname]'
				,'$_POST[lname]'
				,'$_POST[suffix]'
				,'$_POST[sex]'
				,'$_POST[dl]'
				,'$_POST[attn]'
				,'$_POST[addr1]'
				,'$_POST[addr2]'
                ,'$_POST[city]'
                ,'$_POST[state]'
                ,'$_POST[zip]'
                ,'$_POST[country]'
                ,'$_POST[phone]'
                ,null
                ,'$_POST[phone2]'
                ,null
                ,'$_POST[phone3]'
                ,null
                ,'$_POST[email]')";

// Insert to invoice table
	$sql1 = "INSERT INTO invoice (invoicenum
				,ownerid
				,adjustment
				,note
                ,paid)
			values (uniqid()
                ,'$ownID'
				,'$_POST[adj]'
				,'$_POST[notes]'
				,'0')";

// Loop to each item

// Insert to invoice item table
    $sql = "INSERT INTO invoiceitem (id
                ,invoicenum
                ,propid
                ,propcode
                ,value)"

// update property with contact ID 

?>