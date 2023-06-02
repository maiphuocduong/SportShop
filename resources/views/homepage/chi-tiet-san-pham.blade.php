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


    <div class="row  ">
        <div style="margin-left : 50px" class="col-2 mt-5 ">

        </div>
        <div style="width: 565px;" class="col-4 mt-5 text-nowrap">
            <div class="card">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://thegioidotap.vn/wp-content/uploads/2023/03/195.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thegioidotap.vn/wp-content/uploads/2023/03/196.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thegioidotap.vn/wp-content/uploads/2023/03/197.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thegioidotap.vn/wp-content/uploads/2023/03/198.png" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-4 mt-5 ">

            <b> Set Đồ Tập Gym Yoga Nữ Tanktop ICADO AT2 Quần Dài ICADO AT3 (No Bra).</b>
            <b>555,000VNĐ <br><br></b>
            <span class="text-nowrap"><b>-Chất liệu: </b>88% Polyester, 12% spandex, co giãn 4 chiều. </span>
            <span class="text-nowrap"><b>-Kiểu dáng: </b>Quần áo tập gym yoga dành cho nữ. <br><br> </span>
            <b>Size S M L <br><br></b>
            <b>Hotline tư vấn miễn phí: 0902771186 <br><br></b>

            <div class=" ">
                <button class=" btn btn-info ">Thêm vào giỏ hàng</button>
                <button class=" btn btn-danger ">Mua Ngay</button>
            </div>
            <div class="  mt-3">
                <button class=" btn btn-outline-danger ">SHOP GẦN NHẤT</button>
            </div>

        </div>
    </div>


    <div class="container">
        <table class="table table-hover mt-4">
            <tbody>
                <th>Set Áo Tanktop & Quần Dài</th>
            </tbody>
            <td>  Chất liệu: 88% Polyester, 12% spandex, co giãn 4 chiều</td>
            <tbody>
                <td> Sợi vải coolmax. Làm mát và thoáng khí x2 lần</td>
            </tbody>
            <tbody>  <td> Đường may: 4 kim 6 chỉ tinh tế, sắc sảo</td></tbody>

          </table>

          <table class="table table-hover mt-4">
            <tbody>
                <th>Đặc điểm nổi bật:</th>
            </tbody>
            <td>  Thấm hút mồ hôi, thoáng mát và khử mùi tốt</td>
            <tbody>
                <td> Chống tia UV cực tốt, bảo vệ da, không bị kích ứng</td>
            </tbody>
            <tbody>  <td> Phong cách althei-sure năng động</td></tbody>

          </table>

          <table class="table table-hover mt-4">
            <tbody>
                <th>Lưu ý sử dụng và bảo quản:</th>
            </tbody>
            <td> Không sử dụng chất tẩy rửa trực tiếp lên sản phẩm hoặc giặt khô</td>
            <tbody>
                <td>Không giặt bằng nước nóng, không giặt sấy (giặt sấy ở nhiệt độ thấp)</td>
            </tbody>
            <tbody>  <td> Không phơi trực tiếp dưới ánh nắng</td></tbody>
            <tbody>  <td>Nên giặt sản phẩm bằng tay và xà phòng pha loãng</td></tbody>


          </table>

    </div>






    <div class="row  text-light bg-dark mt-5 mb-2">
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
