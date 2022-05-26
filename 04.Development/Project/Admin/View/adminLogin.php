<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="../resource/css/style.css" />
<link rel="stylesheet" href="../resource/css/adminLogin.css" />
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
   <div class="container mt-3 bgcolor">
      <h2 class="text-center title">Admin Login</h2>
      <form action="/action_page.php">
         <div class="mb-5 mt-4">
            <input type="email" class="form-control" id=""placeholder="Enter username" name="username">
         </div>
         <div class="mb-5">
            <input type="password" class="form-control" id=""placeholder="Enter password" name="pswd">
         </div>
         
         <div class="d-grid">
         <button type="button" class="btn btn-primary btn-block btn-lg fw-bold mt-3">Login</button>
</div>
      </form>
   </div>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script src="../resource/js/admin_login.js"></script>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
</body>

</html>