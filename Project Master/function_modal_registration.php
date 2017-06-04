<!--Registration Form-->
<form action="index.php" method="post">  
    <div class="modal fade" id="myModalReg" role="dialog">
    
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>REGISTRATION</h4>             
                </div>
                <!--End Modal Header-->

                <div class="modal-body">
                    <form role="form">
                        <!--First Name-->
                        <div class="form-group">
                            <input type="text" class="form-control" id="fNameEntry" name="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="sNameEntry" name="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="emailEntry" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="confEmailEntry" placeholder="Confirm Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="contactNoEntry" name="phoneNum" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="passwordEntry" name="pwd" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confPasswordEntry" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="priv" id="custTypeRenter" value="1" checked="checked"> Renter
                        </div>
                        <div class="form-group">
                            <input type="radio" name="priv" id="custTypeOwner" value="2"> Property Owner
                        </div>
                        <button type="submit" class="btn btn-default btn-block" name="submit" value="submit">Register</button>
                    </form>
                </div>
                <!--End Modal Body-->
            </div>
            <!--End Modal Content-->
        </div>
        <!--End Modal Dialog-->
    </div>
    <!--End Modal-->
</form>

<!--Search Form-->
<div class="modal fade" id="myModalSearch" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>SEARCH</h4>             
            </div>
            <!--End Modal Header-->

            <div class="modal-body">
                <form role="form">
                    <!--First Name-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="suburb" name="suburb" placeholder="Suburb">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode">
                    </div>
                    <div class="form-group">
                        <input list="states" name="state" placeholder="State">
                        <datalist id="states" >
                            <option value="All">
                            <option value="QLD">
                            <option value="NSW">
                            <option value="ACT">
                            <option value="VIC">
                            <option value="TAS">
                            <option value="SA">
                            <option value="NT">
                            <option value="WA">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="property" name="prop" placeholder="Property Type">
                        <datalist id="property" >
                            <option value="All">
                            <option value="House">
                            <option value="Apartment">
                            <option value="Rural">
                            <option value="New Apartment">
                            <option value="Land">
                            <option value="New">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="priceMin" name="price" placeholder="Price Min">
                        <datalist id="priceMin" >
                            <option value="Any">
                            <option value="$250/wk">
                            <option value="$350/wk">
                            <option value="$400/wk">
                            <option value="$500/wk">
                            <option value="$750/wk">
                            <option value="$1000/wk">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="priceMax" name="price" placeholder="Price Max">
                        <datalist id="priceMax" >
                            <option value="Any">
                            <option value="$250/wk">
                            <option value="$350/wk">
                            <option value="$400/wk">
                            <option value="$500/wk">
                            <option value="$750/wk">
                            <option value="$1000/wk">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="baths" name="bathrooms" placeholder="Bathrooms">
                        <datalist id="baths" >
                            <option value="Any">
                            <option value="1+">
                            <option value="2+">
                            <option value="3+">
                            <option value="4+">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="beds" name="bedrooms" placeholder="Bedrooms">
                        <datalist id="beds" >
                            <option value="Any">
                            <option value="1+">
                            <option value="2+">
                            <option value="3+">
                            <option value="4+">
                        </datalist>
                        <br>
                    </div>
                    <div class="form-group">
                        <input list="parks" name="parking" placeholder="Carparks">
                        <datalist id="parks" >
                            <option value="Any">
                            <option value="1+">
                            <option value="2+">
                        </datalist>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-default btn-block" name="submit" value="submit">Search</button>
                </form>
            </div>
            <!--End Modal Body-->
        </div>
        <!--End Modal Content-->
    </div>
    <!--End Modal Dialog-->
</div>
<!--End Modal-->