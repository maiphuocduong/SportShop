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

                    <button style="margin-right: 5px" class="btn btn-outline-primary text-nowrap " type="submit">Đăng
                        Nhập</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dang-ky" class="nav-link text-light  mb-3">

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
            <span> <b>PHỤ KIỆN <br></b></span>
            <span><b> Xem Tất Cả</b> <br></span>
            <span> Belt, đai chạy bộ <br> </span>
            <span>Mũ thể thao <br></span>
            <span> Tất thể thao <br></span>
            <span> Dây nhảy thể lực <br></span>
            <span>Giày thể thao <br></span>
            <span>Băng quấn dây chèn <br> </span>
            <span> Bóng thể thao <br></span>
            <span>Phụ kiện thể thao khác<br></span>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2023/03/211.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Dây Nhảy ADIDAS ADRP-11017
                </b>
                <p class="text-danger"><b>199,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2022/06/z3479328840300_ad81825a42a8137d55b20fe52f37d5e0-400x500.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">BĂNG CỔ TAY ADIDAS Chính hãng
                </b>
                <p class="text-danger"><b>253,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2022/05/57d30abe1989d8d78198-400x500.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Dây Nhảy Tập Thể Dục SKIPPING-ROPE
                </b>
                <p class="text-danger"><b>100,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2022/04/day-khang-luc-power-8.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Dây Kháng Lực Power Band
                </b>
                <p class="text-danger"><b>280,000VNĐ</b> </p>
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
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/06/THAM-TAP-YOGA-10-LI-PAVO-MAU-XANH-DUONG-2.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Thảm tập yoga 10 li PAVO TYG014 – Xanh Coban

                </b>
                <p class="text-danger"><b>650,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/06/THAM-TAP-YOGA-10-LI-PAVO-MAU-DO-4.png"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Thảm tập yoga 10 li PAVO TYG014 – Đỏ Tươi

                </b>
                <p class="text-danger"><b>650,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2022/05/z3437816288817_eddcf18aa110ab7315346f8ff46ce6eb-400x500.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Găng Tay Thể Thao Phụ Kiện Tập Gym MOREOK HN1 – Đen

                </b>
                <p class="text-danger"><b>240,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/05/Artboard-1-3.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Băng bảo vệ khỏi chấn thương tập gym PAVO AV
                </b>
                <p class="text-danger"><b>270,000VNĐ</b> </p>
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
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/05/CNS8186.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Băng cổ tay tập gym PAVO AV


                </b>
                <p class="text-danger"><b>150,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/05/Artboard-2.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Băng xỏ ngón tập gym PAVO AV


                </b>
                <p class="text-danger"><b>120,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/05/Artboard-1-1.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Băng khuỷu tay tập gym PAVO AV
                </b>
                <p class="text-danger"><b>180,000VNĐ</b> </p>
                <div class="card-footer">
                    <button class=" btn btn-success ">Xem Chi Tiết</button>

                </div>

            </div>
        </div>
        <div style=" width: 350px;" class="col-3">
            <div class="card text-center">
                <img style="height: 400px;" src="https://thegioidotap.vn/wp-content/uploads/2021/05/Artboard-5-4.jpg"
                    class="img-thumbnail" alt="...">
                <b class="mt-2">Túi Trống Thể Thao PAVO HN7

                </b>
                <p class="text-danger"><b>320,000VNĐ</b> </p>
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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
