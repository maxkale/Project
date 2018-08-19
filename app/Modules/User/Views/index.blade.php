<ol class="breadcrumb" >
            <li class="breadcrumb-item">
              <a ui-sref='home'>Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
 </ol>

<div class="card-header" ng-controller='userController'>
    <i class="fas fa-table"></i>
    User Data</div>
	 <div class='row' >
    <div class="card-body">
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
 <script src="controller/userController.js"></script>