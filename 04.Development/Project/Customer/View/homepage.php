<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homepage</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
</head>

<body>
   <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">
            <img src="../resource/img/main-logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Paradise Book Store
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Search</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Contact Us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item fw-bold" href="#">View Profile</a></li>
                     <li><a class="dropdown-item fw-bold" href="#">Guide</a></li>
                     <li><a class="dropdown-item fw-bold" href="#">FAQ's</a></li>
                     <li><a class="dropdown-item fw-bold" href="#">Privacy Policy</a></li>
                     <li><a class="dropdown-item fw-bold" href="#">Cartoons</a></li>
                  </ul>
               </li>
            </ul>
            <!-- <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->

            <div class="d-flex">
               <div class="">
                  <ion-icon name="cart-outline"></ion-icon>
                  <ion-icon name="person-outline"></ion-icon>
                  <ion-icon name="moon-outline"></ion-icon>
               </div>
            </div>


         </div>
      </div>
   </nav>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>