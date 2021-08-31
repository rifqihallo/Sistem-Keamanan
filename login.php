<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
    <h2>Login</h2>
  
        <form method="post" action="login_action.php">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
        </div>
        <div class="form-group">
            <input type="submit"  class="button"  value="Login">
        </div>
        </form>
    </div>
</body>
</html>