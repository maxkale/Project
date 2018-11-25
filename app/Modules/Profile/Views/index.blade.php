<ol class="breadcrumb" >
    <li class="breadcrumb-item">
        <a href="javascript:void(0)"><i class="fa fa-user"></i> User Profile</a>
    </li>
</ol>
<div class='row'  ng-controller='profileCntl'>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-4 text-center"><h4>@{{employeeData.first_name + ' ' + employeeData.last_name}}</h4></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><!--left col-->


                <div class="text-center">
                    <img style="border-radius: 92px;" src="https://lh3.googleusercontent.com/-ZnMNrm3Odfs/W2NCZeKSO1I/AAAAAAAABMg/XbCTqkyU6-0auxTqqXdsFLTlEi_NYYU2wCEwYBhgL/w139-h140-p/IMG_20161204_103545.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
                   <br> <strong>Upload a new photo...</strong>
                    <input type="file" class="form-control">
                </div>
                <div class="row">
                    <div class="col-sm-12" style="font-size: 15px;font-weight: 600">
                        <hr>
                        <h5> <i class="fa fa-address-card"></i> Overview</h5>
                        <hr>
                        <div><i class='fa fa-mobile-alt'></i> Mobile  : @{{employeeData.mobile_number}}</div>
                        <hr>                       
                        <div><i class='fa fa-envelope'></i> Email : @{{employeeData.email}}</div>
                        <hr>
                        <div>
                            <i class="fa fa-location-arrow"></i> Address :  @{{employeeData.address}} <br>Pin Code: @{{employeeData.pin_code}} 
                        </div>
                        <hr>
                    </div>
                </div>


            </div><!--/col-3-->
            <div class="col-sm-8" ng-controller=    "profileCntl">
                <form class="form" novalidate name="userUpdate" ng-submit="userUpdate.$valid && updateUser(userData)">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name"><h6>First name</h6></label>
                                <span>
                                    <input type="text" required class="form-control" name="first_name" ng-model="userData.first_name" placeholder="first name" title="enter your first name if any.">
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.first_name.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class=    "form-group">
                                <label for="last_name"><h6>Last name</h6></label>
                                <span>
                                    <input type="text" class="form-control" required name="last_name" ng-model="userData.last_name" placeholder="last name" title="enter your last name if any.">
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.last_name.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Mobile"><h6>Mobile Number</h6></label>
                                <span>
                                    <input type="text"required="" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/,'');" class="form-control" name="mobile" ng-model="userData.mobile_number"  placeholder="Enter Mobile Number">
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.mobile.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                    <div ng-message='minlength'>Minimum 10 digit required</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Email"><h6>Email Id</h6></label>
                                <span>
                                    <input type="email" required class="form-control" name="email_id" ng-model="userData.email" placeholder="Enter Email" >
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.email_id.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="country"><h6>Country</h6></label>
                                <span>
                                    <select ng-model="userData.country_id" ng-options="country.id as country.name for country in countryList"  ng-change="getState(userData.country_id); userData.city_id = ''; userData.state_id = '';" class="form-control" name="country" required>
                                        <option value="">Select Country </option>
                                    </select>
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.country.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><h6>State</h6></label>
                                <span>
                                    <select ng-model="userData.state_id" required ng-options="state.id as state.name for state in stateList" ng-change="getCity(userData.state_id); userData.city_id = '';" class ="form-control" name="state_id">
                                        <option value="">Select State </option>
                                    </select>
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.state_id.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="city"><h6>City</h6></label>
                                <span>
                                    <select ng-model="userData.city_id" ng-options="city.id as city.name for city in cityList" required class="form-control" name="city_id">
                                        <option value="">Select City </option>
                                    </select>                    
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.city_id.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Email"><h6>Pin Code</h6></label>
                                <span>
                                    <input type="text" ng-model="userData.pin_code" oninput="this.value = this.value.replace(/[^0-9]/,'');" minlength="6" maxlength="6" class="form-control" name="pin"  required placeholder="Enter Pin" >
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.pin.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                    <div ng-message='minlength'>Minimum 6 digit  required</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Mobile"><h6>Address</h6></label>
                                <span>
                                    <textarea  ng-model="userData.address" rows='3'minlength="5" maxlength="60" type="text" class="form-control" name="address" required  placeholder="Enter Country Number"></textarea>
                                </span>
                                <div ng-if="sbBtn" ng-messages='userUpdate.address.$error' class="text-danger">
                                    <div ng-message='required'>This field is required</div>
                                    <div ng-message='minlength'>Minimum 5 character required</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success" ng-click="sbBtn = true" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>