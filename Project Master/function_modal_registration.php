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