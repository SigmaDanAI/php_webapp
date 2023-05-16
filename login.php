<?php
  $error_message ='';

  if($_POST){
    include('database/connection.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = 'SELECT * FROM user WHERE user.username ="'. $username .'" AND user.password="'. $password .'"';
    $stmt = $conn->prepare($query);
    
    $stmt->execute();

    if($stmt->rowCount() > 0){

    } else $error_message = 'Invalid username or password.';
      
  }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php if(!empty($error_message)) { ?>   
        <div id=errorMessage>
          <strong>Error: <?= $error_message ?> </strong>
        </div>
    <?php } ?>
  
  <div class="nav-bar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand fw-semibold" href="index.php">LogoThingy</a>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header fw-semibold ">Login</div>
          <div class="card-body">
            <form action="login.php" method="POST">
              <div class="form-group mb-3">
                <label for="username" class="mb-1">Username</label>
                <input type="username" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter username">
              </div>
              <div class="form-group mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input " id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <div class="mt-2">
                <a href="#">Forgot Password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>