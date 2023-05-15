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
  <div class="nav-bar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand fw-semibold" href="#">LogoThingy</a>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header fw-semibold ">Login</div>
          <div class="card-body">
            <form>
              <div class="form-group mb-3">
                <label for="email" class="mb-1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
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