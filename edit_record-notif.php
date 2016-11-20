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
                    <a class="navbar-brand" href="#">DATABASE | UPDATED</a>
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

        <?php

            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

                //building permit
                $applicant_id = $_POST['bpApp_ID'];

                $bpNO = $_POST['bp_no'];
                $year = $_POST['year_approved'];
                $date_approved = $_POST['date_approved'];
                $initial = $_POST['ap_initial'];
                $brgy=$_POST['brgy'];
                $code = $_POST['code'];
                $orNO = $_POST['or_no'];
                $orDate = $_POST['or_datepaid'];

                //building
                $bcost = $_POST['building_cost'];
                $fees = $_POST['fees'];
                $storeys = $_POST['num_storeys'];
                $eng = $_POST['engineer'];

                //applicant
                $applicant = $_POST['applicant'];
                $location = $_POST['location'];

                //taxes
                $taxReceiptNO = $_POST['tax_receiptNo'];
                $geDate = $_POST['ge_datepaid'];
                $geTax = $_POST['tax_ge'];

                //fines
                $adminReceiptNO = $_POST['admin_receiptNo'];
                $adminDate = $_POST['admin_datepaid'];
                $adminFine = $_POST['admin_fine'];

                $query = " UPDATE bp_applicant SET bp_no = '$bpNO',year_approved = '$year',date_approved = '$date_approved',ap_initial = '$initial',ap_brgy = '$brgy',brgy_code = '$code',bp_orNo = '$orNO',or_datepaid = '$orDate',building_cost = '$bcost',building_fees = '$fees',building_noStoreys = '$storeys',building_engineer = '$eng',applicant = '$applicant',ap_location = '$location',tax_receiptNo = '$taxReceiptNO',ge_datepaid = '$geDate',tax_ge = '$geTax',admin_receiptNo = '$adminReceiptNO',admin_datepaid = '$adminDate',admin_fine = '$adminFine' WHERE bpApplicant_id = '$applicant_id'";

            $result = mysql_query($query); 
            mysql_close($connection);
        ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div class="header">
                                    <h4 class="title text-center">Record for <b><?php echo $applicant;?></b> has been updated<br>
                                </div>
                                <hr>
                                <p class="description text-center"> 
                                    Select where to proceed.
                                </p>    
                                <div class="places-buttons">
                                    <div class="row">
                                        <div class="col-md-2 col-md-offset-4">
                                            <a href="bp_details.php?id=<?php echo $applicant_id; ?>" class="btn btn-info btn-block"><i class="pe-7s-note2"></i>   DETAILS</a>
                                        </div>
                                        <div class="col-md-2 col-md-offset-0">
                                            <a href="database.php" class="btn btn-info btn-block"><i class="fa fa-database"></i>   RECORDS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>     
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

    <script type="text/javascript"> 
        $(document).ready(function(){
            demo.initChartist();
            $.notify({
                icon: 'fa fa-check',
                message: "Record has been edited successfully."
            },{
                type: 'info',
                timer: 4000
            });  
        });
    </script>
    
</html>

