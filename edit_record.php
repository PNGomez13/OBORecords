<?php include('edit_fetch.php');?>
<?php include('session.php');?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | Database </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#2B2E33" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/title.png" alt="title" style="width:237px;height:61px;top:10px; padding:0; margin:0;">
            </div>

            <ul class="nav">
                <li>
                    
                    <a href="home.php">
                       <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="database.php">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <p>Database</p>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>Search</p>
                    </a>
                </li>
                <li>
                    <a href="add.php">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li>
                    <a href="archive.php">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Archive</p>
                    </a>
                </li>
                <li>
                    <a href="import.php">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <p>Import</p>
                    </a>
                </li>
                <li>
                    <a href="export.php">
                       <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <p>Export</p>
                    </a>
                </li>
                
                <li class="active-pro">
                    <a href="help.php">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>HELP</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DATABASE | EDIT RECORD</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $login_session; ?>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="view_prof.php">View Profile</a></li>
                                <li><a href="edit_prof.php">Edit Profile</a></li>
                                <li><a href="user_accts.php">User Accounts</a></li>
                                <li class="divider"></li>
                                <li><a href="add_user.php">Add User</a></li>
                              </ul>
                        </li>
                        <li class="dropdown">
                            <a href="login.php">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form name="submit" action="edit_record-notif.php" method="POST">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Building Permit</h4>
                            </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>BP #</label>
                                                <input type="text" class="form-control" placeholder="BP #" name="bp_no" id="bp_no" required value="<?php echo $bp_no; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year approved</label>
                                                <input type="text" class="form-control" placeholder="Year approved" name="year_approved" id="year_approved" required value="<?php echo $year; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date approved</label>
                                                <input type="text" class="form-control" placeholder="Date approved" name="date_approved" id="date_approved" required value="<?php echo $date; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Applicant's Initial</label>
                                                <input type="text" class="form-control" placeholder="Applicant's initial" name="ap_initial" id="ap_initial" required value="<?php echo $init; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Barangay</label>
                                                <input type="text" class="form-control" placeholder="Barangay" name="brgy" id="brgy" required value="<?php echo $brgy; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Code</label><select class="form-control" name="code" id="code" required>
                                                    <option value=""></option>
                                                    <option value="A1" <?php echo ($code == "A1") ? "selected" : ""; ?>>A1</option>
                                                    <option value="B1" <?php echo ($code == "B1") ? "selected" : ""; ?>>B1</option>
                                                    <option value="C1" <?php echo ($code == "C1") ? "selected" : ""; ?>>C1</option>
                                                    <option value="D1" <?php echo ($code == "D1") ? "selected" : ""; ?>>D1</option>
                                                    <option value="E1" <?php echo ($code == "E1") ? "selected" : ""; ?>>E1</option>
                                                    <option value="F1" <?php echo ($code == "F1") ? "selected" : ""; ?>>F1</option>
                                                    <option value="G1" <?php echo ($code == "G1") ? "selected" : ""; ?>>G1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>OR #</label>
                                                <input type="text" class="form-control" placeholder="OR #" name="or_no" id="or_no" value="<?php echo $or_no; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>OR Date Paid</label>
                                                <input type="text" class="form-control" placeholder="Date paid" name="or_datepaid" id="or_datepaid" value="<?php echo $or_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label></label>
                                        </div>    
                                    </div>                                 
                                </div>
                        </div>
                    </div>   

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Building</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Building Cost</label>
                                                <input type="text" class="form-control" placeholder="Building cost" name="building_cost" id="building_cost" value="<?php echo $cost; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fees</label>
                                                <input type="text" class="form-control" placeholder="Fees" name="fees" id="fees" value="<?php echo $fees; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No. of Storeys</label>
                                                <input type="text" class="form-control" placeholder="No. of Storeys"name="num_storeys" id="num_storeys" value="<?php echo $numStor; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Engineer</label>
                                                <input type="text" class="form-control" placeholder="Engineer" name="engineer" id="engineer" value="<?php echo $engineer; ?>">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Applicant</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Applicant</label>
                                                <input type="text" class="form-control" placeholder="Applicant" name="applicant" id="applicant" required value="<?php echo $applicant; ?>">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control" placeholder="Location" name="location" id="location" required value="<?php echo $location; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                        </div>    
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Taxes</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tax Receipt #</label>
                                                <input type="text" class="form-control" placeholder="Tax Receipt #" name="tax_receiptNo" id="tax_receiptNo" value="<?php echo $tax_rNo; ?>">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>GE Date Paid</label>
                                                <input type="text" class="form-control" placeholder="GE Date Paid" name="ge_datepaid" id="ge_datepaid" value="<?php echo $ge_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>General Engineering Tax</label>
                                                <input type="text" class="form-control" placeholder="General Engineering Tax" name="tax_ge" id="tax_ge" value="<?php echo $ge_tax; ?>">
                                            </div>
                                        </div>  
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fines</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Admin Fine Receipt #</label>
                                                <input type="text" class="form-control" placeholder="Admin Fine Receipt #" name="admin_receiptNo" id="admin_receiptNo" value="<?php echo $admin_rNo; ?>">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Admin Date Paid</label>
                                                <input type="text" class="form-control" placeholder="Admin Date Paid" name="admin_datepaid" id="admin_datepaid" value="<?php echo $admin_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Admin Fine</label>
                                                <input type="text" class="form-control" placeholder="Admin Fine" name="admin_fine" id="admin_fine" value="<?php echo $adminFine; ?>">
                                                <input type="hidden" class="form-control" name="bpApp_ID" value="<?php echo $bp_id; ?>">
                                            </div>
                                        </div>  
                                    </div> 
                            </div>
                        </div>
                    </div>

                    <!--BUTTON-->
                    <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-2 col-md-offset-5">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-info btn-block">UPDATE RECORD</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>    
            </div>                   
        </div>

   
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Meet the Developers
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Contact Us !
                            </a>
                        </li>
                       
                    </ul>
                </nav>
                <p class="copyright pull-right">
                <font size="1">
                    &copy; Office of the City Building Officials Record System 2016   | <a href="http://ccs.xu.edu.ph">Xavier University - Ateneo de Cagayan , College of Computer Studies</a> 
                </p>
                </font>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>   
    
</html>

