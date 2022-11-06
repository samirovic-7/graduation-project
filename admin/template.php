<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/venobox.min.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/template.css">


    <link rel="stylesheet" href="assets/css/table.css">
</head>

<body>

    <div class="view">
        <div class="row">
            <div class="col-lg-2">
                sdsfvsvsv
            </div>
            <div class="col-lg-10">
                <div class="side-right">
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1"> Customer Details </h2>
                            </div>


                            <div class="template-search">

                                <div class="pos">
                                    <input type="text" class="form-control" placeholder="search">

                                    <div class="icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="add">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Add Template </button>

                            </div>





                        </div>

                        <br>
                        <div class="table-template">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>التاریخ</th>
                                        <th>الحاله</th>
                                        <th>الصور</th>
                                        <th>حذف</th>
                                        <th>تعدیل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1</a></td>
                                        <td>Paragon</td>
                                        <td>1/5/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>

                                        <td class="amount">
                                            <a class="venobox" href="assets/images/boy-60710_640.jpg">
                                                <img src="assets/images/boy-60710_640.jpg" alt="">
                                            </a>

                                        </td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">2</a></td>
                                        <td>Sonic</td>
                                        <td>1/4/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">
                                        <a class="venobox"  href="assets/images/boy-60710_640.jpg">
                                                <img src="assets/images/boy-60710_640.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">3</a></td>
                                        <td>Innercircle</td>
                                        <td>1/2/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">24</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">4</a></td>
                                        <td>Varsity Plus</td>
                                        <td>12/30/2020</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">12</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">5</a></td>
                                        <td>Highlander</td>
                                        <td>12/18/2020</td>
                                        <td>
                                            <p class="status status-paid">تم العثور علیه</p>
                                        </td>
                                        <td class="amount">31</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Template</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form">

                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Governorate Name</label>
                                        <div class="pos">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Governorate Name">

                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>

                                    </div>




                                    <button type="button" class="btn btn-primary"> Edit Governorate </button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>







        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Governorate Name</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Governorate Name">

                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>

                                </div>




                                <button type="button" class="btn btn-primary"> Create Governorate </button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>






    <script src="assets/js/jquery-1.4.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <script src="assets/js/venobox.min.js"></script>

    <script>
   $('.venobox').venobox(); 

    </script>

</body>

</html>