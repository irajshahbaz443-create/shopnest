<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-0 bg-transparent
">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png" alt="logoimgage"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarScroll">
      <ul class="navbar-nav mx-auto my-2 gap-4 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
       <a class="nav-link" href="#">Blog</a>

          
        </li>
        <li class="nav-item">
                 <a class="nav-link" href="#">About</a>

        </li>
         <li class="nav-item">
                 <a class="nav-link" href="#">Contact</a>

        </li>
      </ul>
      <div class="d-flex align-items-center gap-4">

        <!-- Login Icon -->
        <a href="signup.php" class="nav-link position-relative">
<i class="bi bi-person-circle"></i>        </a>

        <!-- Cart Icon -->
        <a href="#" class="nav-link position-relative">
          <i class="bi bi-cart icon"></i>

          <!-- Optional Badge -->
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            3
          </span>
        </a>

      </div>
    </div>
  </div>
</nav>
</body>
</html>