<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Car Showroom</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container">
       <div class="login_box"> 
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login</h2>
                <form action="validation.php" method="post">
                    <div class="form_group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required />
                    </div>
                    <div class="form_group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required />
                    </div>
                          <br>        
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="submit" class="btn btn-primary">Login as Administartor</button>
                </form>
            </div>
 
             <div class="col-md-6 login-right">
           
                <h2>Register</h2>
                <form action="registration.php" method="post">
                    <div class="form_group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required />
                    </div>
                    <div class="form_group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required />
                    </div>
                          <br>        
                    <button type="submit" class="btn btn-primary">Register</button>
                    
                </form>
            </div>

        </div>
    </div>
    </div>
       
</body>
</html>