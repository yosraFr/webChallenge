<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>project web</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/login.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

  </head>

  <body>

  <form   method="post" action="controller/controller2.php">
  <div class="imgcontainer">
    <img src="vendor/bootstrap/css/user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname" ><b>email </b></label>
    <input type="text" placeholder="Enter Username" name="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <button type="submit" name="login">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw"><a href="views/register.html">Register</a></span>
  </div>
</form>

    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
