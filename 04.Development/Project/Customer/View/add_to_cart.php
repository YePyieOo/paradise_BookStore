<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart List</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/add_to_cart.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body>
   <!-- nav -->
   <nav class="navbar navbar-expand-lg bg-light ">
      <div class="container-fluid">
         <a class="navbar-brand font-color-primary ps-3 " href="#">
            <img src="../resource/img/main-logoNew.png" alt="main-logo" class="d-inline-block align-text-top main-logo">
            <span class=" ms-4 fw-bolder fs-4 ">Paradise Book Store</span>
         </a>
         <button class="navbar-toggler font-color-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon class="font-color-primary fs-2" name="menu-outline"></ion-icon>
         </button>
         <button class="dropdown btn commom-bg ms-4 categories">
            <a class="text-decoration-none fs-6 dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <ion-icon class="pe-2 pt-2" name="apps-outline"></ion-icon>
               <span class=" d-inlineblock text-center">Categories </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#">Language</a></li>
               <li><a class="dropdown-item" href="#">Education</a></li>
               <li><a class="dropdown-item" href="#">Novels</a></li>
               <li><a class="dropdown-item" href="#">Technology</a></li>
               <li><a class="dropdown-item" href="#">Cartoons</a></li>
            </ul>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0 ">
               <li class="nav-item me-4">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6 border-bottom border-primary" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#">Search</a>
               </li>
               <li class="nav-item me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Authors</a>
               </li>
               <li class="nav-item me-4">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Shops</a>
               </li>

               <li class="nav-item dropdown me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Contact us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">View Profile</a></li>
                     <li><a class="dropdown-item" href="#">Guide</a></li>
                     <li><a class="dropdown-item" href="#">Servies</a></li>
                     <li><a class="dropdown-item" href="#">Privacy and Policy</a></li>
                     <li><a class="dropdown-item" href="#">FAQ's</a></li>
                  </ul>
               </li>
            </ul>
            <div class=" d-flex  justify-content-center align-items-center  font-color-primary ">
               <ion-icon class="me-4" name="cart-outline"></ion-icon>
               <ion-icon class="me-4" name="person-outline"></ion-icon>
               <ion-icon class="" name="moon-outline"></ion-icon>
            </div>
         </div>
      </div>
   </nav>
   <!-- nav -->
   <div class="container header d-flex justify-content-between align-items-center p-4 abd ">
      <h3 class="fw-bolder">Cart List</h3>
      <div>
         <b>Home</b> -> Detail Book -> Book Cart
      </div>
   </div>
   <!-- <h5 class="fw-bolder text-primary">Order History</h5> -->
   <div>
      <table class="table mt-5 ">
         <thead class="text-light itemsclass">
            <tr>
               <th scope="col">Items</th>
               <th scope="col"></th>
               <th scope="col">Price</th>
               <th scope="col">Quatity</th>
               <th scope="col">Total</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row"><img src="./education.jpg" alt="" class="images"></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>1000</td>
               <td>2</td>
               <td>2000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>4000</td>
               <td>1</td>
               <td>4000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>5000</td>
               <td>2</td>
               <td>10000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="container header d-flex justify-content-between align-items-center p-4 text-primary">
      <h3 class="fw-bolder"></h3>
      <div>
         <table class="table table-borderless text px-4">
            <thead>
               <tr>
                  <th colspan="2" class="text-primary">Total Price</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th scope="row">Java</th>
                  <td>1*1000</td>
               </tr>
               <tr>
                  <th scope="row">PHP</th>
                  <td>2*2000</td>
               </tr>
               <tr>
                  <th scope="row">Delivery Price</th>
                  <td>0</td>
               </tr>
               <tr>
                  <th scope="row">TOTAL COST</th>
                  <td>5000</td>
               </tr>
            </tbody>
            <tr>
            <tr>
            <td colspan="3" class="container d-flex justify-content-between align-items-center px-4 "><button class="btn btn-primary text-light text-align-center"><b>BUY NOW</b></button></td>
            </tr>
         </table>

      </div>
   </div>
    
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>