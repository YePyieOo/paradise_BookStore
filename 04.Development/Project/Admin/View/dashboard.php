<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/dashboard.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <!-- Navbar Start -->
            <div class="col-xl-2 col-md-3 col-sm-4 col-5 buttonbox position-fixed" id="navbar">

            </div>

            <!-- Dashboard Start -->
            <div class="col-xl-8 col-md-7 col-sm-6 col-5 offset-xl-3 offset-md-4 offset-sm-5 offset-6 mt-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="admin-log me-md-2">
                        <ion-icon name="person" class="fs-3"></ion-icon>
                    </button>
                    <button class="" type="button">CustomerPage</button>
                </div>
                <div class="box">
                    <div class="box1">
                        <ion-icon name="person-circle-outline" class="iconic"></ion-icon>
                        <p class="number">User</p>
                        <p class="quantity">30k</p>
                    </div>
                    <div class="box1">
                    <ion-icon name="cart-outline" class="iconic  "></ion-icon>
                        <p class="number">Sale</p>
                        <p class="quantity">20k</p>
                    </div>
                    <div class="box1">
                        <ion-icon name="document-outline" class="iconic "></ion-icon>
                        <p class="number">Order</p>
                        <p class="quantity">10k</p>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <div class="div col-md-3 col-3  ">
                        <ion-icon name="person-circle-outline" class="iconic mt-2 "></ion-icon>
                        <span class="fs-4">User</span>
                        <p class="ps-5 fs-4">20k</p>
                    </div>
                    <div class="div col-md-3 col-3 offset-md-1 offset-1  ">
                        <ion-icon name="cart-outline" class="iconic mt-2 "></ion-icon>
                        <span class="fs-4">Sale</span>
                        <p class="ps-5 fs-4">5k</p>
                    </div>
                    <div class="div col-md-3 col-3 offset-md-1 offset-1   ">
                        <ion-icon name="document-outline" class="iconic mt-2 "></ion-icon>
                        <span class="fs-4">Order</span>
                        <p class="ps-5 fs-4">200</p>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
</body>
</html>