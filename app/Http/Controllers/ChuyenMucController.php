<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{

    public function indexNew()
    {
        return view('admin.chuyen_mucs.new_index');
    }



    public function data()
    {
        $data   = ChuyenMuc::get();

        return response()->json([
            'data'     => $data,
        ]);
    }

    public function status(Request $request)
    {
        // dd($request->all());
        //Tìm chuyên mục có id bằng $request->id (id mà ở client gửi lên)
        //Nếu như nó đang là trang_thai = 1 thì ta đổi trang_thai = 0
        //Nếu như nó đang là trang_thai = 0 thì ta đổi trang_thai = 1
        $chuyenMuc  = ChuyenMuc::where('id', $request->id)->first();
        if ($chuyenMuc) {
            if ($chuyenMuc->tinh_trang == 1) {
                $chuyenMuc->tinh_trang = 0;
            } else {
                $chuyenMuc->tinh_trang = 1;
            }
            // $chuyenMuc->tinh_trang = !$chuyenMuc->tinh_trang;
            $chuyenMuc->save();
        }
    }

    // thêm mới
    public function store(Request $request)
    {
        // dd($request->all());
        $data['ten_chuyen_muc']      = $request->ten_chuyen_muc;
        $data['slug_chuyen_muc']     = $request->slug_chuyen_muc;
        $data['id_chuyen_muc_cha']   = $request->id_chuyen_muc_cha;
        $data['tinh_trang']          = $request->tinh_trang;

        ChuyenMuc::create($data);
        return response()->json([
            'status' => true

        ]);
    }

    // xóa
    public function destroy(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('id', $request->id)->first();
        if ($chuyenMuc) {
            $chuyenMuc->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã xóa chuyên mục thành công',

            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Chuyên mục không tồn tại',

            ]);
        }
    }
    // cập nhật
    public function edit(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('id', $request->id)->first();

        if ($chuyenMuc) {
            return response()->json([
                'status'  => true,
                'data'  =>  $chuyenMuc,

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
        $chuyenMuc = ChuyenMuc::where('id', $request->id)->first();
        // dd($chuyenMuc);
        if ($chuyenMuc) {
            $chuyenMuc->update([
                'ten_chuyen_muc'        => $request->ten_chuyen_muc,
                'slug_chuyen_muc'       => $request->slug_chuyen_muc,
                'id_chuyen_muc_cha'     => $request->id_chuyen_muc_cha,
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

    public function checkslug(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)
            ->first();

        if ($chuyenMuc) {
            return response()->json([
                'status'  =>  false,
                'message' => 'Tên chuyên mục đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'  =>  true,
                'message' => 'Có thể sử dụng tên chuyên mục này',
            ]);
        }
    }

    public function checkslugupdate(Request $request){
        $chuyenMuc = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)
                               -> where ('id', '<>', $request->id)
            ->first();

        if ($chuyenMuc) {
            return response()->json([
                'status'  =>  false,
                'message' => 'Tên chuyên mục đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'  =>  true,
                'message' => 'Có thể sử dụng tên chuyên mục này',
            ]);
        }
    }

    //  tìm kiếm
    public function search(Request $request)
    {
        $gia_tri  = '%' . $request->gia_tri . '%';

        $data = ChuyenMuc::where('ten_chuyen_muc', 'like', $gia_tri)
            ->orwhere('slug_chuyen_muc', 'like', $gia_tri)
            ->orwhere('id', 'like', $gia_tri)
            ->orwhere('id_chuyen_muc_cha', 'like', $gia_tri)
            ->get();

        return response()->json([
            'data'  => $data,
        ]);
    }
}
