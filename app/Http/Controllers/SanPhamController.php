<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function SanPhamNew()
    {
        return view('admin.san_phams.san_pham');
    }
    // hiển thị
    public function data()
    {
        $data   = SanPham::get();

        return response()->json([
            'data'     => $data,
        ]);
    }
    // đổi tình trạng
    public function status(Request $request)
    {
        $sanPham  = SanPham::where('id', $request->id)->first();

        if ($sanPham->tinh_trang == 0) {
            $sanPham->tinh_trang = 1;
        } elseif ($sanPham->tinh_trang == 1) {
            $sanPham->tinh_trang = 2;
        } else {
            $sanPham->tinh_trang = 0;
        }
        $sanPham->save();
    }
    // tìm kiếm
    public function search(Request $request)
    {
        $gia_tri  = '%' . $request->gia_tri . '%';

        $data = SanPham::where('ten_san_pham', 'like', $gia_tri)
            ->orwhere('slug_san_pham', 'like', $gia_tri)
            ->orwhere('id', 'like', $gia_tri)
            ->orwhere('gia_ban', 'like', $gia_tri)
            ->get();

        return response()->json([
            'data'  => $data,
        ]);
    }

    // thêm mới
    public function store(Request $request)
    {
        $data['ten_san_pham']      = $request->ten_san_pham;
        $data['slug_san_pham']     = $request->slug_san_pham;
        $data['gia_ban']           = $request->gia_ban;
        $data['hinh_anh']          = $request->hinh_anh;
        $data['tinh_trang']        = $request->tinh_trang;

        SanPham::create($data);
        return response()->json([
            'status' => true

        ]);
    }
    // xóa
    public function destroy(Request $request)
    {

        $sanPham = SanPham::where('id', $request->id)->first();
        if ($sanPham) {
            $sanPham->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã xóa sản phẩm thành công',

            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Sản phẩm không tồn tại',

            ]);
        }
    }

    // cập nhật
    public function edit(Request $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();

        if ($sanPham) {
            return response()->json([
                'status'  => true,
                'data'  =>  $sanPham,

            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message'  =>  'Dữ liệu không chính xác!',
            ]);
        }
    }


    public function update(Request $request)
    {
        $sanPham = SanPham::where('id', $request->id)->first();

        if ($sanPham) {
            $sanPham->update([
                'ten_chuyen_muc'        => $request->ten_san_pham,
                'slug_san_pham'       => $request->slug_san_pham,
                'gia_ban'     => $request->gia_ban,
                'hinh_anh'     => $request->hinh_anh,
                'tinh_trang'            => $request->tinh_trang,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Đã cập nhật thành công',
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Chuyên mục không tồn tại!',
            ]);
        }
    }

    // check slug

    public function checkslug(Request $request)
    {
        $sanPham = SanPham::where('slug_san_pham', $request->slug_san_pham)
            ->first();

        if ($sanPham) {
            return response()->json([
                'status'  =>  false,
                'message' => 'Tên sản phẩm đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'  =>  true,
                'message' => 'Bạn có thể sử dụng tên sản phẩm này',
            ]);
        }
    }
    // check slug update
    public function checkSlugUpdate(Request $request)
    {
        $sanPham = SanPham::where('slug_san_pham', $request->slug_san_pham)
            ->where('id', '<>', $request->id)
            ->first();

        if ($sanPham) {
            return response()->json([
                'status'  =>  false,
                'message' => 'Tên Sản Phẩm đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'  =>  true,
                'message' => 'Có thể sử dụng tên Sản Phẩm này',
            ]);
        }
    }
}
