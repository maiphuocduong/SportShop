@extends('share_admin.master')
@section('noi_dung')
    <div id="app" class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Sản Phẩm
                </div>
                <div class="card-body">
                    <div class="mb-1">
                        <label class="form-label">Tên Sản Phẩm</label>
                        <input v-on:blur="checkSlug()" v-model="add.ten_san_pham" v-on:keyup="slug()" type="text"
                            class="form-control" placeholder="Nhập tên chuyên mục">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Slug Sản Phẩm</label>
                        <input disabled v-model="add.slug_san_pham" type="text" class="form-control"
                            placeholder="Nhập slug sản phẩm">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Giá Bán</label>
                        <input v-model="add.gia_ban" type="text" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Hình Ảnh</label>
                        <input v-model="add.hinh_anh" type="text" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Tình Trạng</label>
                        <select v-model="add.tinh_trang" class="form-control">
                            <option value="0">Còn Hàng</option>
                            <option value="1">Hết Hàng</option>
                            <option value="2">Hàng Sắp Về</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button id="themMoi" v-on:click="themMoi()" class="btn btn-danger">THÊM MỚI </button>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    Danh Sách Sản Phẩm
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="input-group">
                                <button class="btn btn-outline-primary waves-effect" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                                <input v-model="key_search" v-on:keyup.enter="timkiem()" type="text" class="form-control"
                                    placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
                                <button v-on:click="timkiem()" class="btn btn-outline-primary waves-effect"
                                    type="button">Search !</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center text-nowrap">#</th>
                                        <th class="text-center text-nowrap">Tên Sản Phẩm</th>
                                        <th class="text-center text-nowrap">SLug Sản Phẩm</th>
                                        <th class="text-center text-nowrap">Hình Ảnh</th>
                                        <th class="text-center text-nowrap">Giá Bán</th>
                                        <th class="text-center text-nowrap">Tình Trạng</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(value, key) in list">
                                        <tr>
                                            <th class="text-center">@{{ key + 1 }}</th>
                                            <td>@{{ value.ten_san_pham }}</td>
                                            <td>@{{ value.slug_san_pham }}</td>
                                            <td>@{{ value.gia_ban }}</td>
                                            <td>
                                                <img style="width: 150px;" v-bind:src="value.hinh_anh"
                                                    class="img-thumbnail">
                                            </td>


                                            <td class="text-nowrap">

                                                <template v-if="value.tinh_trang == 0">
                                                    <button v-on:click="doitrangthai(value)" class="btn btn-primary">Còn
                                                        Hàng</button>

                                                </template>
                                                <template v-else-if="value.tinh_trang == 1">
                                                    <button v-on:click="doitrangthai(value)" class="btn btn-danger">Hết
                                                        Hàng</button>

                                                </template>
                                                <template v-else-if="value.tinh_trang == 2">
                                                    <button v-on:click="doitrangthai(value)" class="btn btn-warning">Hàng
                                                        Sắp về</button>

                                                </template>
                                            </td>
                                            <td class="text-nowrap">
                                                <button v-on:click=" edit = Object.assign({},value) " class="btn btn-info"
                                                    data-bs-toggle="modal" data-bs-target="#updateModal">Cập Nhật</button>
                                                <button v-on:click=" del = value " class="btn btn-danger"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal">Hủy Bỏ</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                        {{-- xóa  --}}
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hủy Bỏ</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Bạn có muốn xóa mặt hàng <b> @{{ del.ten_san_pham }}</b> này không ?</p>
                                        <p><b>Lưu ý:</b> Việc này không thể hoàn tác</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="destroy()" type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Xác Nhận
                                            Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- cập nhật --}}
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-1">
                                            <label class="form-label">Tên Sản Phẩm</label>
                                            <input v-on:blur="checkslugupdate()" v-on:keyup="slupupdate()"
                                                v-model="edit.ten_san_pham" type="text" class="form-control"
                                                placeholder="Nhập tên chuyên mục">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Slug Chuyên Mục</label>
                                            <input disabled v-model="edit.slug_san_pham" type="text"
                                                class="form-control" placeholder="Nhập slug chuyên mục">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Giá Bán</label>
                                            <input v-model="edit.gia_ban" type="text" class="form-control">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Hình Ảnh</label>
                                            <input v-model="edit.hinh_anh" type="text" class="form-control">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Tình Trạng</label>
                                            <select v-model="edit.tinh_trang" class="form-control">
                                                <option value="0">Còn Hàng</option>
                                                <option value="1">Hết Hàng</option>
                                                <option value="2">Hàng Sắp về</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="update()" type="button" class="btn btn-info"
                                            data-bs-dismiss="modal">Cập
                                            Nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {

            // Khai báo
            new Vue({
                el: '#app',
                data: {
                    list: [], // [], {}, '', number
                    key_search: '',
                    add: {
                        'ten_san_pham': '',
                        'slug_san_pham': '',
                        'gia_ban': 0,
                        'hinh_anh': '',
                        'tinh_trang': 0,
                    },

                    del: {},
                    edit: {},

                },
                // hàm khởi tạo
                created() {
                    this.getData();
                    this.mau_do();
                },
                // phương thức
                methods: {
                    getData() {
                        axios
                            .get('/admin/san-pham/data')
                            .then((res) => {
                                this.list = res.data.data;

                            });
                    },

                    // tìm
                    timkiem() {
                        var payload = {
                            'gia_tri': this.key_search,
                        };
                        axios
                            .post('/admin/san-pham/search', payload)
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                    // đổi trạng thái
                    doitrangthai(payload) {
                        axios
                            .post('/admin/san-pham/status', payload)
                            .then((res) => {
                                this.timkiem();
                                toastr.warning("Đã đổi trạng thái ", "thành công!")
                            });
                    },

                    // thêm mới
                    themMoi() {
                        axios
                            .post('/admin/san-pham/create', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success('Bạn đã thêm mới', 'Thành công!')
                                    this.timkiem();
                                }

                            }).catch((res) => {
                                var errror = res.response.data.error;
                                $.each(errror, function(k, v) {
                                    toastr.error(v[0], 'Có lỗi!');
                                })
                            });
                    },

                    // xóa
                    destroy() {

                        axios
                            .post('/admin/san-pham/delete', this.del)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "xoa thanh cong");
                                    this.timkiem();
                                } else {
                                    toastr.error(res.data.message, "xoa that bai !");
                                }
                            });
                    },

                    // cập nhật
                    update() {
                        axios
                            .post('/admin/san-pham/update', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");

                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                }
                                this.timkiem();

                            })
                            .catch((res) => {
                                var errror = res.response.data.error;
                                $.each(errror, function(k, v) {
                                    toastr.error(v[0], 'Có lỗi!');
                                    this.timkiem();
                                })
                            });
                    },
                    // tạo cái slug cho không trùng
                    toSlug(str) {
                        str = str.toLowerCase();
                        str = str
                            .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                            .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
                        str = str.replace(/[đĐ]/g, 'd');
                        str = str.replace(/([^0-9a-z-\s])/g, '');
                        str = str.replace(/(\s+)/g, '-');
                        str = str.replace(/-+/g, '-');
                        str = str.replace(/^-+|-+$/g, '');
                        return str;
                    },

                    mau_xanh() {
                        $("#themMoi").removeClass("btn-danger");
                        $("#themMoi").addClass("btn-primary");
                        $("#themMoi").removeAttr("disabled");
                        $("#themMoi").text("Thêm Mới Chuyên Mục")
                    },
                    mau_do() {
                        $("#themMoi").removeClass("btn-primary");
                        $("#themMoi").addClass("btn-danger");
                        $("#themMoi").attr("disabled", true);
                        $("#themMoi").text("Không được")
                    },
                    slug() {
                        this.add.slug_san_pham = this.toSlug(this.add.ten_san_pham);
                    },
                    checkSlug() {
                        axios
                            .post('/admin/san-pham/check-slug', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành Công!");
                                    this.mau_xanh();
                                } else {
                                    toastr.error(res.data.message, "Có Lỗi!");
                                    this.mau_do();
                                }
                            });
                    },
                    // tạo cái slug trong cái cập nhật
                    slupupdate() {
                        this.edit.slug_san_pham = this.toSlug(this.edit.ten_san_pham);
                    },
                    checkslugupdate() {
                        axios
                            .post('/admin/san-pham/check-slug-update', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành Công!");
                                    this.mau_xanh();
                                } else {
                                    toastr.error(res.data.message, "Có Lỗi!");
                                    this.mau_do();
                                }
                            });
                    },
                },
            });
        })
    </script>
@endsection
