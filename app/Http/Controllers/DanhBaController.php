<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhBaModel;
use Illuminate\Support\Facades\DB;

class DanhBaController 
{
    function getview_all(){
		$danh_ba = DanhBaModel::get_all();

		return view('admin/danh_ba.view_all',['danh_ba'=>$danh_ba]);
	}
	public function getview_insert()
	{
		return view('admin/danh_ba.view_insert');

	}

	public function postview_insert(Request $Request)
	{

		$danh_ba = new DanhBaModel;
		$danh_ba->so_may = $Request->so_may;
        $danh_ba->doi_tuong = $Request->doi_tuong;
        $danh_ba->he_may = $Request->he_may;
        $danh_ba->tram_bts = $Request->tram_bts;
        $danh_ba->doi_so_tram = $Request->doi_so_tram;
        $danh_ba->doi_so_hop = $Request->doi_so_hop;
        $danh_ba->ghi_chu = $Request->ghi_chu;
		$danh_ba->insert();
		
		return redirect('view_insert')->with('thong_bao','Thêm thành công');

	}


		public function getview_update($ma)
	{
		$danh_ba = DanhBaModel::get_one($ma);
		return view('admin/danh_ba.view_update', ['danh_ba'=>$danh_ba]);

	}

		public function postview_update(Request $Request, $ma)
	{

		$danh_ba = new DanhBaModel;
		$danh_ba->ma = $ma;
		$danh_ba->so_may = $Request->so_may;
        $danh_ba->doi_tuong = $Request->doi_tuong;
        $danh_ba->he_may = $Request->he_may;
        $danh_ba->tram_bts = $Request->tram_bts;
        $danh_ba->doi_so_tram = $Request->doi_so_tram;
        $danh_ba->doi_so_hop = $Request->doi_so_hop;
        $danh_ba->ghi_chu = $Request->ghi_chu;
        $danh_ba->update();

		return redirect('view_all')->with('thong_bao','Sửa thành công');

	}

	   	public function index()
	{
		$data = DB::table('danh_ba')->orderBy('ma', 'DESC')->get();
		return view('admin/danh_ba.view_all', compact('data'));
	}

	public function delete(Request $Request, $ma)
	{
		DanhBaModel::delete($ma);

		return redirect('view_all')->with('thong_bao','Xóa thành công');
	}


}