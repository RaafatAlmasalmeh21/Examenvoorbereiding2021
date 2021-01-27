<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <p>Flowerpoer</p><img src="goedkoop-rode-rozen-boeket.jpg" alt="logo" style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact1.php">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Registreren</a>
    </li>
  
  </ul>

  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li  class="nav-item" >
              <a class="nav-link" href="loginCustomer.php"> Inloggen AlS Klant </a>
            </li>
            <li  class="nav-item" >
             <a class="nav-link" href="loginEmployee.php"> Inloggen Medewerker </a>
            </li>
        </ul>
    </div>

</nav>

<form>

<div class="badge bg-success" text-wrap" style="width: 120rem;">
Inloggen als Klant
</div>

<div class="d-flex align-items-start">
  <div class="form-group">
  <div class="col-30">
  <br>
  <br>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
  </div>
  </div>
  </div>
  <div class="d-flex align-items-start">
  <div class="form-group">
  <div class="col-30">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
  </div>
  </div>
  </div>

  <button type="submit" class="btn btn-success ">Submit</button>
</form>


</body>
</html>