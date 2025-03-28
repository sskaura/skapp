<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST[ 'login'])) {
	$email=$_POST[ 'email'];
	$password=md5($_POST['password']);
	$query=mysqli_query($con,"select ID from tbluser where  Email='$email' && Password='$password' ");
	$ret=mysqli_fetch_array($query); if($ret>0){
		$_SESSION['detsuid']=$ret['ID'];
		header('location:dashboard.php');
} else{ echo ""; } } ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daily Expense Tracker - Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    
    <body style="align-items:center"><div class="row">
            	<h2 style="text-align:center;width:100%;">Daily Expense Tracker | User Login</h2>
            <hr>
            <div class="col-10 offset-1 col-md-8 offset-sm-2 col-lg-4 offset-md-4">
                <div class="login-panel card" style="width:100%;text-align:center;">
                    <div class="card-header">Sign In</div>
                    <div class="card-body">
                        <form role="form" action="" method="post" id name="login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"
                                    autofocus required="true">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                    value required="true">
                                </div>
								<br>
                                <div class="form-group">
                                    <button type="submit" style="width:100%;" value="login" name="login" class="btn btn-primary">Login</button><span style="padding-left:250px">



							</span>
                                </div>
                                <p>Not Registered Yet?	<a href="register.php">Register here</a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row -->
		<div>
    </body>

</html>
