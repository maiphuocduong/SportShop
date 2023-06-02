<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            <ul class="navbar-nav me-auto mt-3 ">
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
                        <a class="nav-link  active  text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            HỆ THỐNG CỬA HÀNG
                        </a>
                        <ul class="dropdown-menu  text-light">
                            <li><a class="dropdown-item " href="#">HỆ THỐNG ĐẠI LÝ</a></li>


                        </ul>
                    </li>
                </ul>

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
    <!-- nội dung 1 -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-3 ">
                <i class="fa-solid fa-truck-fast fa-2x " style="color: #248967;"></i>
                <b>MIỄN PHÍ GIAO HÀNG <br></b>
                <a>Miễn phí giao hàng trong thành phố</a>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-rotate-left fa-2x " style="color: #248967;"></i>
                <b>HỖ TRỢ ĐỔI TRẢ <br></b>
                <a>Hỗ trợ đổi trả trong vòng 7 ngày</a>

            </div>
            <div class="col-3">
                <i class="fa-solid fa-gift fa-2x" style="color: #248967;"></i>

                <b>ƯU ĐÃI COMBO <br></b>
                <a>Mua 3 sản phẩm tặng 1 sản phẩm</a>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-shop fa-2x" style="color: #248967;"></i>
                <b>HỆ THỐNG CỬA HÀNG <br></b>
                <a>Có 20 chi nhánh tại thành phố Đà Nẵng</a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center text-success">
            <b> SẢN PHẨM BÁN CHẠY</b>
        </div>
    </div>
    <!-- nội dung 2 -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- slide 1 -->
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/080618095555809/qabd-mu-2022-do-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quần Áo MU</b>
                                            <p class="text-danger"><b> 120,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/080618105429988/qabd-real-madrid-2022-trang-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quần Áo Real Madrid</b>
                                            <p class="text-danger"><b> 120,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/080618112856726/qabd-dortmund2022-vang-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quần Áo Dortmund</b>
                                            <p class="text-danger"><b> 120,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/080618112029772/qabd-bayern-2022-do-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quần Áo Bayern Munich</b>
                                            <p class="text-danger"><b> 120,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/230522120021029/mira-galaxy-s1-den-xanh-1b.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b class="mt-3">Giày Mira Galaxy S1</b>
                                            <p class="text-danger"><b> 449,000 ₫</b> </p>
                                            <p><b>TẶNG KÈM TẤT THỂ THAO LỬNG</b></p>

                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/160922023608606/giay-bong-da-san-co-nhan-tao-chan-be-mira-ultra-ptt-12-yousport-xam-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b class="mt-3">Giày Mira Galaxy S1</b>
                                            <p class="text-danger"><b> 449,000 ₫</b> </p>
                                            <p><b>TẶNG KÈM TẤT THỂ THAO LỬNG</b></p>

                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/160922023608606/giay-bong-da-san-co-nhan-tao-chan-be-mira-ultra-ptt-12-yousport-do-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b class="mt-3">Giày bóng đá Mira Gavin TF</b>
                                            <p class="text-danger"><b> 399,000 ₫</b> </p>
                                            <p><b>TẶNG KÈM TẤT THỂ THAO LỬNG</b></p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/130922054125021/giay-da-bong-san-co-tu-nhien-chan-be-mira-galaxy-s1-fg-yousport-den-xanh-1.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b class="mt-3">Giày bóng đá Mira Gavin TF</b>
                                            <p class="text-danger"><b> 399,000₫</b></p>
                                            <p><b>TẶNG KÈM TẤT THỂ THAO LỬNG</b></p>

                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slide 3 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/170322100406310/qua-bong-da-size-4-zocker-procter-zk4-p204.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quả bóng đá size 4 Zocker ZK4-P204</b>
                                            <p class="text-danger"><b> 450,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/231216102424/qua-bong-da-so-4-ucv-3-05.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quả Bóng Số 4 UCV 3.05</b>
                                            <p class="text-danger"><b> 290,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/250323100037408/qua-bong-da-so-4-akpro-af2000.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quả bóng đá số 4 Akpro AF2000</b>
                                            <p class="text-danger"><b>169,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="card">

                                            <img src="https://cdn.yousport.vn/Media/Products/231216100904/qua-bong-da-so-4-uhv-2-05.jpg"
                                                class="img-thumbnail" alt="...">
                                            <b>Quả Bóng Số 4 UHV 2.05</b>
                                            <p class="text-danger"><b>498,000 ₫</b> </p>
                                            <div class="card-footer">
                                                <button class=" btn btn-danger ">Mua Ngay</button>
                                                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- noidung 3 -->
    <div class="container">
        <div class="row mt-5">
            <div class="col text-success">
                <b>PHỤ KIỆN </b>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2021/06/THAM-TAP-YOGA-10-LI-PAVO-MAU-XANH-DUONG.png"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">Thảm tập yoga 10 li PAVO TYG014 – Xanh Coban</b>
                    <p class="text-danger"><b>650,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2021/06/THAM-TAP-YOGA-10-LI-PAVO-MAU-DO.png"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">Thảm tập yoga 10 li PAVO TYG014 - Đỏ Tươi
                    </b>
                    <p class="text-danger"><b>650,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2020/12/Tham-Tap-Yoga-Pavo-Dinh-Tuyen-TYG013.jpg"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">

                        Thảm Tập Yoga PAVO Định Tuyến PU 8 li

                    </b>
                    <p class="text-danger"><b>1,395,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>

            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2020/12/Tham-Tap-Yoga-Pavo-Dinh-Tuyen-TYG013-Mau-Xanh.jpg"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">

                        Thảm tập yoga Pavo Định Tuyến TYG013 – Màu Xanh

                    </b>
                    <p class="text-danger"><b>570,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>



        </div>

        <div class="row mt-4">
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2023/03/209.png" class="img-thumbnail"
                        alt="...">
                    <b class="mt-2">

                        Dây Nhảy Tập Thể Dục ADIDAS ADRP-11017</b>
                    <p class="text-danger"><b>199,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2020/12/tui-trong-the-thao-icado-hn2-3.png"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">BĂNG CỔ TAY ADIDAS Chính hãng ADSU-12443RD
                    </b>
                    <p class="text-danger"><b>253,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2021/05/Artboard-6-4.jpg" class="img-thumbnail"
                        alt="...">
                    <b class="mt-2">
                        Túi Trống Thể Thao CHÍNH HÃNG PAVO HN7

                    </b>
                    <p class="text-danger"><b>320,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>

            <div class="col-3">
                <div class="card text-center">
                    <img src="https://thegioidotap.vn/wp-content/uploads/2020/12/Tham-Tap-Yoga-Pavo-Dinh-Tuyen-TYG013-Mau-Xanh.jpg"
                        class="img-thumbnail" alt="...">
                    <b class="mt-2">

                        Thảm tập yoga Pavo Định Tuyến TYG013 – Màu Xanh

                    </b>
                    <p class="text-danger"><b>570,000VNĐ</b> </p>
                    <div class="card-footer">
                        <button class=" btn btn-danger ">Mua Ngay</button>
                        <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>



        </div>
        <div class="row mt-3">
            <div class="col text-center">

                <button class="btn btn-dark">
                    XEM THÊM SẢN PHẨM
                </button>
            </div>

        </div>
    </div>

    <!-- <footer> -->
    <!-- <div class="container "> -->
    <div class="row  mt-5 text-light bg-dark    ">

        <div class="col-4 ">

            <b>HỖ TRỢ KHÁCH HÀNG </b>
            <p>
                <a href="#">Chính Sách Thanh Toán <br></a>
                <a href="#">Giao Hàng Tận Nơi <br></a>
                <a href="#">Bảo Hành & Đổi Trả <br></a>
                <!-- <a href="#">Khách Hàng Thân Thiết</a> -->
            </p>

        </div>
        <div class="col-4">

            <b>HỆ THỐNG CỬA HÀNG</b>
            <p>
                <b class="text-danger">Quận Cẩm Lệ: </b>06 Hòa Nam 1, Hòa An, Cẩm Lệ, Đà Nẵng. <br>
                <b class="text-danger">Quận Hải Châu: </b>149/43/18 Lê Đình Lý, Hòa Thuận Đông, Hải Châu, Đà Nẵng. <br>
                <b class="text-danger">Quảng Nam: </b>Số Nhà 23, Đường Số 5, Thị Xã Điện Bàn, Tỉnh Quảng Nam. <br>

            </p>

        </div>
        <div class="col-4 text-center">
            <b>Hotline</b>
            <p>
                <b class="text-danger">SĐT: </b>0879328257 <br>
                <b class="text-danger">SĐT: </b>0375363885
            </p>
        </div>

    </div>
    <!-- </div> -->
    <!-- </footer> -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
