<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.png" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
    <!-- menu  -->
    <nav class="navbar navbar-expand-lg  bg-dark  ">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mt-3">
                <!-- Trang chủ -->

                <li class="nav-item">
                    <a href="/" class="nav-link text-danger">
                        <p> <b> TRANG CHỦ</b></p>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-3 ">
                    <!-- //đồ nam -->
                    <li class="nav-item">
                        <a href="/do-tap-nam" class="nav-link text-light">
                            <p> NAM</p>
                        </a>


                    </li>
                    <!-- đồ nữ -->
                    <li class="nav-item">
                        <a href="/do-nu" class="nav-link text-light">
                            <p> NỮ</p>
                        </a>


                    </li>
                    <!-- phụ kiện -->
                    <li class="nav-item">
                        <a href="/phu-kien" class="nav-link text-light">
                            <p> PHỤ KIỆN</p>
                        </a>


                    </li>
                    <!-- hệ thống đại lý -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle active  text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            HỆ THỐNG CỬA HÀNG
                        </a>
                        <ul class="dropdown-menu  text-light">
                            <li><a class="dropdown-item " href="#">HỆ THỐNG ĐẠI LÝ</a></li>


                        </ul>
                    </li>
                </ul>

                <form class="d-flex mt-2 " role="search">

                    <input class="form-control me-2  " type="search" placeholder="Search" aria-label="Search">
                    <button style="margin-right: 10px" class="btn btn-outline-warning text-nowrap " type="submit">Tìm
                        Kiếm</button>


                </form>
                <li style="margin-right: 2px;" class="nav-item mb-3">
                    <a href="/dang-nhap" class="nav-link text-light">

                        <button style="margin-right: 5px" class="btn btn-outline-primary text-nowrap "
                            type="submit">Đăng
                            Nhập</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dang-ky" class="nav-link text-light  mb-3">

                        <button style="margin-right: 5px" class="btn btn-outline-primary text-nowrap "
                            type="submit">Đăng
                            Ký</button>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <!-- slide -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="2.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="3.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="4.png" class="d-block w-100" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- kết thúc slide -->

    <!-- mấy cái card -->
    <!-- Đá bóng -->

    <div class="row mt-4  ">
        <div style="margin-left: 15px ;" class="col-2  ">
            {{-- <div class="table-responsive ">
                <table class="table table-bordered ">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <th> --}}
                                <a href=""class="text-dark "><b>Quần Áo</b> <br></a>
                                <a href=""class="text-dark "><b> Xem Tất Cả</b><br></a>
                                <a href=""class="text-dark "><b>Áo tập yoga nữ</b> <br></a>
                                <a href=""class="text-dark "><b>Bra </b><br></a>
                                <a href=""class="text-dark "><b>Áo Thun </b><br> </a>
                                <a href=""class="text-dark "><b>CropTop</b><br> </a>
                                <a href="/chi-tiet-san-pham" class="text-dark "><b>Áo TankTop</b></a>
                            {{-- </th>

                        </tr>

                    </tbody>
                </table>
            </div> --}}






        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/03/195.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Set Đồ Tập Gym Yoga Nữ Tanktop ICADO AT2 Quần Dài ICADO AT3 (No Bra)</b>
                <p class="text-danger"><b>550,000VNĐ</b> </p>
                <div class="card-footer">

                    <a href="/chi-tiet-san-pham" class=" text-light  mb-3">

                        <button style="margin-right: 5px" class="btn btn-success text-nowrap " type="submit">
                            Xem Chi Tiết</button>
                    </a>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/02/122.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Set Đồ Tập Gym Yoga Nữ Croptop ICADO AT7 Quần Lửng ICADO QL30 </b>
                <p class="text-danger"><b>500,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/02/63.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Set Đồ Tập Gym Yoga Nữ Bra ICADO AT6 Quần Đùi 2 Lớp ICADO AT1
                </b>
                <p class="text-danger"><b>650,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/02/98.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Set Đồ Tập Gym Yoga Nữ Bra ICADO AT6 Quần Đùi 2 Lớp ICADO AT1
                </b>
                <p class="text-danger"><b>650,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
    </div>

    <!-- row thứ 2 -->
    <div class="row mt-4  ">
        <div style="margin-left: 15px ;" class="col-2  ">
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/05/57.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Bra Tập Gym Yoga Nữ Dệt HN47</b>
                <p class="text-danger"><b>150,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2022/06/bra-cai-khuy-hn40-2.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Bra Tập Gym Yoga Nữ Cài Khuy HN40</b>
                <p class="text-danger"><b>350,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2022/06/bra-cai-khuy-hn41-3.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Bra Tập Gym Yoga Nữ Cài Khuy HN41

                </b>
                <p class="text-danger"><b>350,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2021/11/ao-bra-tap-gym-yoga-nu-det-hn336.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Bra Tập Gym Yoga Nữ Dệt HN33
                </b>
                <p class="text-danger"><b>200,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
    </div>



    <!-- row thứ 3 -->
    <div class="row mt-4  ">
        <div style="margin-left: 15px ;" class="col-2  ">
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/02/108-1.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Croptop Nữ Tập Gym Yoga ICADO AT9
                </b>
                <p class="text-danger"><b>235,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2022/12/ao-croptop-tap-gym-yoga-nu-icado-sg2-6.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Croptop Tập Gym Yoga Nữ ICADO SG2
                </b>
                <p class="text-danger"><b>180,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2022/12/ao-croptop-tap-gym-yoga-nu-icado-sg1-4.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Croptop Tập Gym Yoga Nữ ICADO SG1

                </b>
                <p class="text-danger"><b>180,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;"
                    src="https://thegioidotap.vn/wp-content/uploads/2021/10/set-do-tap-nu-ao-bra-ch14-quan-dai-icado-qd321.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Áo Croptop Tập Gym Yoga Nữ PAVO AT2

                </b>
                <p class="text-danger"><b>250,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">

                <button class="btn btn-dark">
                    XEM THÊM SẢN PHẨM
                </button>
            </div>

        </div>
    </div>



    <div class="row  text-light bg-dark mt-3 mb-2">
        <div style="margin-left: 10px;" class="col-5 ">
            <span> <b> Mua Sắm</b> <br></span>
            <a href="">Giao Hàng <br></a>
            <a href="">Thanh Toán <br></a>
            <a href="">Trả Hàng <br></a>
        </div>

        <div class="col-4">


            <span> <b> Trợ Giúp</b> <br></span>
            <a href="">Dịch Vụ Khách Hàng <br></a>
            <a href="">Tài Khoản Của Tôi <br></a>
            <a href=""> Liên Hệ <br></a>
            <a href=""> Thông Báo <br></a>

        </div>
        <div class="col-2 ">


            <span> <b>Tham Gia Ngay</b> <br></span>
            <span>Trở thành thành viên của <b class="text-danger"> SPORT SHOP</b> và tận hưởng ưu đãi 15% cho lần mua
                hàng tiếp theo!</span>

        </div>


    </div>





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
