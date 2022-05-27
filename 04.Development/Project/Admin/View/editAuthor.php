<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Info</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
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
            <!-- Edit Author -->
            <div class="col-xl-8 col-md-7 col-sm-6 col-5 offset-xl-3 offset-md-4 offset-sm-5 offset-6 mt-3">
                <button class="mt-4 bg-warning col-1"><a href="../View/authorInfo.php">Back</a></button>
                <form>
                    <div class="row container col-md-7 mt-4 ">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="email" class="form-control" id="email" name="aut_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pwd" class="form-label">Image</label>
                            <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>

                        <label for="comment">Biography</label>
                        <textarea class="form-control" rows="8" id="comment" name="text"></textarea>
                        
                        <button type="submit" class="btn-warning fw-bold mt-4">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>