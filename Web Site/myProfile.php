<?php
require_once("header.php");
?>
<script src="Scripts/profile.js"></script>

<div class="container">
    <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Personal Info</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Address</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Change Password</a></li>
                            <li><a href="#tab4default" data-toggle="tab">Orders</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            <div class="container">
                                <div class="row">
                                    <div id="Profile">
                                        <div class="col-sm-3 col-md-3">
                                            <img src="<?php echo "$_SESSION[ProfilePic]"?>"
                                                alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                   
                                          <?php
                                          
                                        echo "
                                        <blockquote>
                                            <h3>
                                        <p>$_SESSION[Fname] $_SESSION[Lname]</p> <small><cite title='Source Title'>$_SESSION[State], $_SESSION[Country]  <i class='glyphicon glyphicon-map-marker'></i></cite></small>
                                         </blockquote>
                                        <p> <i class='glyphicon glyphicon-envelope'></i> $_SESSION[Email]
                                            
                                            <br /> <i class='glyphicon glyphicon-phone'></i> $_SESSION[Phone]
                                            <br /> <i class='glyphicon glyphicon-gift'></i> $_SESSION[DOB]
                                            <br /> <i class='glyphicon glyphicon-user'></i> $_SESSION[Gender]
                                        </p>";
                                        ?>
                                            </h3>
                                        </div>
                                        <div class = "col-sm-3 col-md-3">
                                          <button id = "editProfile" class='btn btn-link btn-primary'><i class="glyphicon glyphicon-pencil"></i> Edit Profile</button>
                                        </div>
                                    </div>
                                    <div id = "ProfileForm" class="col-md-6 col-md-offset-3 hidden">
                               <form class="form-horizontal" role="form"  method = "post" action="updateProfile.php" >

                                <fieldset>

          
                                  <legend>Profile Details</legend>

                                    <div  class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="textinput">* First Name</label>
                                      <div id="Fname" class="col-sm-8" >
                                        <input name="Fname" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="textinput">* Last Name</label>
                                      <div id="Lname" class="col-sm-8">
                                        <input name="Lname" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <div class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="textinput">* Email</label>
                                      <div id ="Email" class="col-sm-8">
                                        <input name="Email" type="text" class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="date">* DOB</label>
                                      <div id="DOB" class="col-sm-8">
                                        <input name="DOB" type="date"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="textinput">* Gender</label>
                                      <div id="Gender" class="col-sm-4">
                                        <input name="Gender" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-4 control-label" for="textinput">* Phone</label>
                                      <div id="Phone" class="col-sm-5">
                                        <input name="Phone" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>  

                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <div class="pull-right">
                                          
                                          <button id="saveProfile" type = "submit" value="submit" class="btn btn-primary" disabled="disabled" >Save</button>
                                        </div>
                                      </div>
                                    </div>


                                 </fieldset>
                                </form>
                               <button id ="cancelProfile" class="btn btn-default pull-right">Cancel</button>
                             </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            <div class = "container">
                               <div class="row" >
                                    <div id="Address">
                    <div class="col-sm-3 col-md-3">
                    <img src="<?php echo $_SESSION['ProfilePic']?>"
                    alt="" class="img-rounded img-responsive" />
                    </div>
                     <div class="col-sm-6 col-md-6 ">
                    <blockquote>
                        <h3>
                          <?php
                  
                echo "<p>$_SESSION[Fname] $_SESSION[Lname]</p> <small><cite title='Source Title'>$_SESSION[State], $_SESSION[Country]  <i class='glyphicon glyphicon-map-marker'></i></cite></small>
            </blockquote>
            <h3><p> $_SESSION[Line1]<br>
                        $_SESSION[Line2],$_SESSION[Line3] <br>
                        $_SESSION[City]<br>
                        $_SESSION[Pincode]<br>

                    </p>
                </h3>
";
            ?>
                        
                                    </h3>
                </div>
                <div class = "col-sm-3 col-md-3">
                    <button id = "editAddress" class='btn btn-link btn-primary'><i class="glyphicon glyphicon-pencil"></i> Edit Address</button>
                 </div>
            </div>
            <div id = "AddressForm" class="col-md-6 col-md-offset-3 hidden">
      <form class="form-horizontal" role="form"  method = "post" action="updateAddress.php" >

        <fieldset>

          <!-- Form Name -->
          <legend>Address Details</legend>

          <!-- Text input-->
          <div  class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Line 1</label>
            <div id="AddressLine1" class="col-sm-10" >
              <input name="Line1" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Line 2</label>
            <div id="AddressLine2" class="col-sm-10">
              <input name="Line2" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group ">
            <label class="col-sm-2 control-label" for="textinput">Line 3</label>
            <div class="col-sm-10">
              <input name="Line3" type="text" id="Address Line 3" class="form-control">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* City</label>
            <div id="City" class="col-sm-10">
              <input name="City" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* State</label>
            <div id="State" class="col-sm-4">
              <input name="State" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* PIN</label>
            <div id="PostCode" class="col-sm-4">
              <input name="PIN" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Country</label>
            <div id="Country" class="col-sm-10">
              <input name="Country" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                
                <button id="saveAddress" type = "submit" value="submit" class="btn btn-primary" disabled="disabled" >Save</button>
              </div>
            </div>
          </div>


        </fieldset>
      </form>
      <button id ="cancelAddress" class="btn btn-default pull-right">Cancel</button>
    </div>
                               </div>
                            </div>
                        </div>
      <div class="tab-pane fade" id="tab3default"><div id = "PasswordForm" class="col-md-6 col-md-offset-3">
      <form class="form-horizontal" role="form"  method = "post" action="updatePassword.php" >

        <fieldset>

          <!-- Form Name -->
          <legend>Change Password</legend>

          <!-- Text input-->
          <div  class="form-group has-feedback">
            <label class="col-sm-5 control-label" for="password">* Old Password</label>
            <div id="OldPassword" class="col-sm-7" >
              <input name="OldPassword" type="password"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-5 control-label" for="password">* New Password</label>
            <div id="NewPassword" class="col-sm-7">
              <input name="NewPassword" type="password"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group has-feedback">
            <label class="col-sm-5 control-label" for="password">* Confirm Password</label>
            <div id = "ConfirmPassword" class="col-sm-7">
              <input name="ConfirmPassword" type="password"  class="form-control">
            <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                
                <button id="savePassword" type = "submit" value="submit" class="btn btn-primary" disabled="disabled" >Save</button>
              </div>
            </div>
          </div>

         

        </fieldset>
      </form>
      
    </div></div>
                        <div class="tab-pane fade" id="tab4default"><div class="container">
  <div class="row col-md-11">
    <legend>Order Details</legend>
    <div class="table-responsive">
      <table class="table table-bordered table-striped custab">
        <thead>
          <tr>
            <th></th>
            <th>Product Description</th>
            <th>Order No.</th>
            
            <th>Date</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $query = "SELECT Product.Name_PROD, Product.UnitPrice_PROD, Order2.ID_ORDR, Order2.DATE_ORDR , Order2.Status_ORDR from Product,Order2 where Product.ID_PROD = Order2.PRODUCT_ID AND Order2.CUSTOMER_USERNAME_CUST = '$_SESSION[user]'";
          $subject=mysql_query($query);
          while($row=mysql_fetch_row($subject))
          {
          $i++;
          echo "
          <tr>
            <td>$i</td>
            <td>$row[0]</td>
            <td>$row[2]</td>
          
            <td>$row[3]</td>
            <td>Rs $row[1]</td>
            ";
            switch ($row[4]) {
              case 'Processing':
                # code...
                $class = 'label-info';
                break;
              case 'Delivered':
                # code..
                $class = 'label-success';
                break;
              case 'Shipping':
                # code...
                $class = 'label-primary';
                break;
              
            }
            echo
            "
            <td><span class='label $class'>$row[4]</span></td>
          </tr>
          <tr>";
        }
          ?>
            
        </tbody>
      </table>
    </div>
  </div>
</div></div>

                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
	</div>
</div>

<br/>