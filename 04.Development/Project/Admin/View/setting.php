<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/setting.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/setting.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="navbar"></div>

            <div class="col-8 offset-3 ">
                <div class=" row mt-4">
                    <div class=" btn-group " role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class=" btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="changemaster btn btn-outline-primary " for="btnradio1">Site Master</label>

                        <input type="radio" class=" btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="changemaster btn btn-outline-primary" for="btnradio2">App Master</label>

                        <input type="radio" class=" btn-check " name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="changemaster btn btn-outline-primary" for="btnradio3">Login Master</label>
                    </div>
                </div>
                <!-- Select Button End -->

                <!-- site Master start -->
                <div class="stm">
                    <div class="input-group mb-3 mt-5">
                        <input type="file" class="form-control" id="inputGroupFile02">
                    </div>
                    <button class="custombutton btn btn-sm offset-10 mt-2 mb-3">Change Favicon</button>
                    <div class="input-group mb-3 mt-5">
                        <input type="file" class="form-control" id="inputGroupFile02">
                    </div>
                    <button class="custombutton btn btn-sm offset-10 mt-2 mb-3">Change Logo</button>
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write New Name</label>
                        <input type="email" class="customstyle form-control" id="exampleFormControlInput1">
                        <button class="custombutton btn btn-sm offset-10 mt-4">Change Name</button>
                    </div>
                    <div class="offset-2">
                        <img src="../../Customer/resource/img/main slider_1.png" alt="" class="slideimg" />
                        <img src="../../Customer/resource/img/main slider_1.png" alt="" class="slideimg" />
                        <img src="../../Customer/resource/img/main slider_1.png" alt="" class="slideimg" />
                        <img src="../../Customer/resource/img/main slider_1.png" alt="" class="slideimg" />
                        <button class="custombutton btn btn-sm offset-10 mt-4">Add Slider</button>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Change Welcome Text</label>
                        <textarea class="customstyle form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <textarea class="customstyle form-control mt-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button class="custombutton btn btn-sm offset-10 mt-4">Change Text</button>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Phone.No</label>
                        <input type="email" class="customstyle form-control" id="exampleFormControlInput1">
                        <button class="custombutton btn btn-sm offset-10 mt-4">Change Phone</button>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Email Address</label>
                        <input type="email" class="customstyle form-control" id="exampleFormControlInput1">
                        <button class="custombutton btn btn-sm offset-10 mt-4">Change Email</button>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Shop Address</label>
                        <input type="email" class="customstyle form-control" id="exampleFormControlInput1">
                        <button class="custombutton btn btn-sm offset-10 mt-4">Change Address</button>
                    </div>


                </div>
                <!-- site Master end -->

                <!-- App Master start -->
                <div class="custom closemaster">
                    <!-- Category Table start -->
                    <div class="mt-5 ">
                        <table class="table table-striped table-sm container">
                            <tr>
                                <th class="col-4">No</th>
                                <th class="col-6">Name</th>
                                <th class="col-2">Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Education</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Novels</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Programming</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Category</button>
                    </div>
                    <!-- Category Table end -->

                    <!-- Guide Table start -->
                    <div class="mt-5">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Guide Paragraph</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                                <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1 ">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                                <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1 ">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                                <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1 ">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Guide</button>
                    </div>
                    <!-- Guide Table end -->

                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th>No</th>
                                <th>City/Township</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Monywa</td>
                                <td>3000MMK</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Yangon</td>
                                <td>3000MMK</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Mandalay</td>
                                <td>3000MMK</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Delivery Fee</button>
                    </div>


                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Paragraph</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Delivery</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Delivery</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Delivery</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Service</button>
                    </div>



                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Paragraph</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Delivery &payment</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Buying</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Delivery</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Privacy Policy</button>
                    </div>


                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Questions</th>
                                <th>Answers</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Delivery</td>
                                <td> Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Delivery</td>
                                <td> Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Delivery</td>
                                <td> Fugit voluptate et dolores aliquam numquam minima illo qui, nulla inventore! Porro</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger mt-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD FAQs</button>
                    </div>
                </div>
                <!-- App Master End -->
                
                 <!-- Login Master Start -->
                <div class="lgm closemaster">

                <div class="mt-5 ">
                        <table class="table table-striped table-sm ">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>john</td>
                                <td>Jon@email.com</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>john</td>
                                <td>Jon@email.com</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>john</td>
                                <td>Jon@email.com</td>
                                <td><button class="btn btn-outline-primary ">
                                        <ion-icon name="create"></ion-icon>
                                    </button> <button class="btn btn-outline-danger ms-1">
                                        <ion-icon name="trash-sharp"></ion-icon>
                                    </button></td>
                            </tr>
                        </table>
                        <button class="btn btn-sm offset-10 custombutton">ADD Admin</button>
                    </div>

                </div>
                <!-- Login Master End -->

            </div>

        </div>
    </div>

</body>

</html>