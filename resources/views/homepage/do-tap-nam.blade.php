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
                <img src="/1.png" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
    <!-- menu  -->
    <nav class="navbar navbar-expand-lg  bg-dark  ">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto  mt-3 ">
                <!-- Trang chủ -->

                <li class="nav-item">
                    <a href="/" class="nav-link text-danger">
                        <p> <b>TRANG CHỦ</b> </p>
                    </a>


                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-3">
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
                    <a href="/dang-nhap.html" class="nav-link text-light">

                    <button style="margin-right: 5px" class="btn btn-outline-primary text-nowrap " type="submit">Đăng
                        Nhập</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dang-ky.html" class="nav-link text-light  mb-3">

                    <button style="margin-right: 5px" class="btn btn-outline-primary text-nowrap " type="submit">Đăng
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
                <img src="/2.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="/3.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="/4.png" class="d-block w-100" alt="...">

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
    <div class="row  ">
        <div style="margin-left : 50px" class="col-2 mt-3 ">
            <a href=""></a>
            <span> <b>Sản Phẩm Mới Về <br></b></span>
            <span> Xem Tất Cả <br></span>
            <span> Quần Áo <br> <br></span>
            <span> <b>Xu Hướng <br></b></span>
            <span> Áo Thi Đấu Các CLB <br></span>
            <span> Đồ Tập Gym Nam <br></span>
            <span>Phụ Kiện Đá Bóng <br></span>
            <span>Phụ Kiện Tập Gym <br><br> </span>
            <span> <b>Mua Sắm Theo Sản Phẩm <br> </b></span>
            <span> Xem Tất Cả <br></span>
            <span>Giảm Giá <br></span>
            <span> Quần Áo Bóng Đá <br></span>
            <span> Áo Tập Gym Nam <br></span>
            <span> Đồ Bộ Tập Gym Nam <br></span>
            <span>Áo Thun <br></span>
            <span>Áo Ba Lỗ/ Tank Top <br></span>
            <span>Áo Khoác Nam<br></span>
            <span>Áo Khoác Nam<br></span>
            <span>Quần short Tập Gym <br></span>
            <span>Quần Dài Tập Gym <br></span>
            <span>Quần Lót Nam<br></span>
        </div>
        <div class="col-4 mt-3 text-nowrap">
            <img style="width: 1000px; height: 600px;" src="5.png" class="img-thumbnail" alt="...">
            <img style="width: 1000px; height: 600px;" src="6.png" class="img-thumbnail" alt="...">
        </div>



    </div>

    <div class="row ">
        <div style="margin-left : 40px" class="col-2 mt-3">

        </div>
        <div class="col-4 mt-3">
            <div style="width: 1115px;" class="container">
                <img src="7.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
    <!-- sản phẩm -->
    <div class="row  mt-3">
        <div style="margin-left : 60px" class="col-2 ">

        </div>
        <!-- <div class="col-4 mt-5 text-nowrap"> -->
        <img style="width: 1096px; height: 500px;" src="8.png" class="img-thumbnail" alt="...">
        <!-- </div> -->



    </div>

    <!-- Gym -->
    <div class="row mt-3 ">
        <div style="margin-left : 40px" class="col-2  ">

        </div>
        <div class="col-4 ">
            <div style="width: 1150px;" class="container">
                <img src="9.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
    <div class="row  ">
        <div style="margin-left : 50px" class="col-2 mt-3 ">

        </div>
        <div style="width: 565px;" class="col-4 mt-3 text-nowrap">
            <div class="card">

                <img src="https://thegioidotap.vn/wp-content/uploads/2023/05/92.png" class="img-thumbnail" alt="...">

                <div class="card-footer text-center">
                    <button class=" btn btn-danger ">Mua Ngay</button>
                    <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
        <div style="width: 565px;" class="col-4 mt-3 text-nowrap">
            <div class="card">

                <img src="https://thegioidotap.vn/wp-content/uploads/2023/02/78.png" class="img-thumbnail" alt="...">

                <div class="card-footer text-center">
                    <button class=" btn btn-danger ">Mua Ngay</button>
                    <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
