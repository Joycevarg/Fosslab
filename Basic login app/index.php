<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Lato');
  body{             
    font-family: 'Lato';
    <!--background: -->
  }
  .form{
    position:absolute;
    left:35%;
    top:12%;   
    padding: 40px;
  }
  .but{
    background-color: white;
    border-radius: 0px;  
    border-width: 0px;
    padding: 8px;
  }
</style>
<div class="form">
  <h2>Sign In</h2>

  <form action="login.php">
    
    <div class="container">
      <label for="uname"><b>Username</b></label>&nbsp&nbsp
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>&nbsp&nbsp
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <button type="submit" class="but">Login</button>
    </div>

  </form>

  <br>

  <h2>Sign Up</h2>

  <form action="createuser.php">
    
    <div class="container">
      <label for="uname"><b>Username</b></label>&nbsp&nbsp
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>&nbsp&nbsp
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <button type="submit" class="but">Sign Up</button>
    </div>

  </form> 
</div>
</body>
</html>