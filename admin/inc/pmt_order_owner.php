<?PHP
// Ask for owner/purchaser details
echo '
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Middle Name</label>
            <input type="text" class="form-control" name="mname" placeholder="Middle Name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
        </div><br>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Suffix</label>
            <input type="text" class="form-control" name="suffix" placeholder="Suffix">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Sex</label>
            <select type="text" class="form-control" name="sex">
            <option></option>
            <option>Male</option>
            <option>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Drivers License</label>
            <input type="text" class="form-control" name="dl" placeholder="Drivers Licesnse">
        </div> ex. TX-1234567
        
        <br><h5>Address</h5>

        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Attention</label>
            <input type="text" class="form-control" name="attn" placeholder="Attention">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Address 1</label>
            <input type="text" class="form-control" name="addr1" placeholder="Address 1" require>
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Address 2</label>
            <input type="text" class="form-control" name="addr2" placeholder="Address 2">
        </div><br>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">City</label>
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">State</label>
            <input type="text" class="form-control" name="state" placeholder="State">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Zip</label>
            <input type="text" class="form-control" name="zip" placeholder="Zip">
        </div>        
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Country">
        </div>
        
        <br><br>
    
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="Phone">
        </div>

        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Phone 2</label>
            <input type="tel" class="form-control" name="phone2" placeholder="Phone 2">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Phone 3</label>
            <input type="tel" class="form-control" name="phone3" placeholder="Phone 3">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail">
        </div>
        
        <br><br>
        
        
        
        <div class="form-group">
            <label class="sr-only" for="exampleInputName">Notes</label>
            <textarea class="form-control" name="notes" placeholder="Notes" rows="4" cols="50"></textarea>
        </div>

    ';

?>