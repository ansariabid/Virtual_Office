<html><head><title>Login</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="hover-min.css">
  <script src="jquery.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="log.css">

</head>
<body style='font-family:Century Gothic'>

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Manager</h3>
                    <form action='mng_log.php' method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" name='em' placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name='pswd' placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit" value="manager" name='utype'/>Login</button>
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login for Employee</h3>
                    <form action='emp_log.php' method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" name='email' placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name='pswd'  placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit" name='utype' value="employee" />Login</button>
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		<div class='container'><div class='row'><div class='col-lg-6'>
		<a href='registration.php'><button class='btn btn-default' style='font-size:18px;'>New User ? First Regsiter Yourself</button></a>
		</div><div class='col-lg-6'>
		<a href='index.php' class='pull-right'><button class='btn btn-default' style='font-size:18px;'>Index Page</button></a>
		</div></div></div>
		
		</body>
</html>