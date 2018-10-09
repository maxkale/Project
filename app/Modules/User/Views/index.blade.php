<ol class="breadcrumb" >
    <li class="breadcrumb-item">
        <a ui-sref='home'>Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>
<div class="card-header">
    <i class="fas fa-table"></i>
    User Data
</div>
</div>
<div class='row'  ng-controller='userCntrl' ng-init='getData();'>
    <div class="card-body">
        <div class="row">

            <div class="col-sm-3"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add User
                </button>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>,850</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="userForm" ng-submit="userForm.$valid && addUser(userData);" novalidate>
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" minlength="3" maxlength="15" name="first_name" ng-model="userData.first_name" class="form-control" required>
                                    <span ng-if="sbtBtn" ng-messages="userForm.first_name.$error">
                                        <div class="text-danger" ng-message="required">This field is required</div>
                                        <div class="text-danger" ng-message="minlength">At least 3 character required</div>
                                    </span>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input minlength="3" maxlength="15" ng-model="userData.last_name" type="text" name="last_name" class="form-control" required>
                                    <span ng-if="sbtBtn" ng-messages="userForm.last_name.$error">
                                        <div class="text-danger" ng-message="required">This field is required</div>
                                        <div class="text-danger" ng-message="minlength">At least 3 character required</div>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input minlength="10" maxlength="10" ng-model="userData.mobile_number" type="text"oninput="this.value=this.value.replace(/[^0-9]/,'');" name="mobile_number" class="form-control" required>
                                    <span ng-if="sbtBtn" ng-messages="userForm.mobile_number.$error">
                                        <div class="text-danger" ng-message="required">This field is required</div>
                                        <div class="text-danger" ng-message="minlength">Mobile number required 10 digit</div>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button type="submit"ng-click="sbtBtn = true" class="btn btn-primary text-center">Add User</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

