<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
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
            <!-- Navigation Bar -->
            <div id="navbar" class="my-nav"></div>
            <!--Input Box For Editting Book-->
            <div class="col-8 offset-3">
                <button class="custombutton btn btn-sm mt-4 ms-4"><a href="../View/bookInfo.php" class="text-dec col-1 text-dark fw-bold">Back</a></button>
                <form>
                    <div class="row container col-md-8 mt-2 ">
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Name</label>
                                <input type="text" class="customstyle form-control" id="pwd" name="">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="email" class="form-label">Category</label><br>
                                <select name="" id="" class="btn-drop">
                                    <option value="Yangon">Language</option>
                                    <option value="Mandalay">Education</option>
                                    <option value="Nay Pyi Taw">Cartoon</option>
                                    <option value="Mandalay">Novel</option>
                                    <option value="Nay Pyi Taw">Technology</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label ">Price</label>
                                <input type="email" class="customstyle form-control" id="email" name="">
                            </div>
                            <div class="col mb-3 mt-3">
                                <!-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div> -->
                                <label for="email" class="form-label">Author</label><br>
                                <select name="" id="" class="btn-drop">
                                    <option value="Yangon">MinLu</option>
                                    <option value="Mandalay" >MinTheinkha</option>
                                    <option value="Nay Pyi Taw" >ThetKaThoPhoneNaing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Pages</label>
                                <input type="text" class="customstyle form-control" id="pwd" name="">
                            </div>
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Size</label>
                                <input type="text" class="customstyle form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Established</label>
                                <input type="text" class="form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Image</label>
                                <input type="file" class="form-control" id="email" name="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="comment" class="mt-3">Description</label>
                            <textarea class="customstyle form-control ms-2" rows="8" id="comment" name="text" ></textarea>
                        </div>
                        <button type="submit" class="custombutton btn fw-bold mt-4 mb-4">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>