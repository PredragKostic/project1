<html>
<head>
<title>Shareboard</title>
<link rel="stylesheet" href="http://localhost/project1/assets/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost/project1/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Shares</a>
      </li>
     
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
      </li>
    
    </ul>
    
  </div>
</nav>




  <div class="container">
    <div class="row">
    <?php require($view); ?>
    </div>
  </div>
</body>
</html>