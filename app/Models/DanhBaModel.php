<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DanhBaModel
{
    public $ma;
	public $so_may;
    public $doi_tuong;
    public $he_may;
    public $tram_bts;
    public $doi_so_tram;
    public $doi_so_hop;
    public $ghi_chu;

	static function get_all(){
		$array = DB::select('select * from danh_ba');
		return $array;
	}
	public function insert(){
		DB::insert("insert into danh_ba(so_may,doi_tuong,he_may,tram_bts,doi_so_tram,doi_so_hop,ghi_chu) values (?,?,?,?,?,?,?)",[
			$this->so_may,
            $this->doi_tuong,
            $this->he_may,
            $this->tram_bts,
            $this->doi_so_tram,
            $this->doi_so_hop,
            $this->ghi_chu
		]);
	}
	static function get_one($ma){
		$array = DB::select('select * from danh_ba where ma = ?',[
			$ma
		]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update danh_ba set 
			so_may = ?,
			doi_tuong = ?,
			he_may = ?,
			tram_bts = ?,
			doi_so_tram = ?,
			doi_so_hop = ?,
			ghi_chu = ?
			where ma= ?",[
			$this->so_may,
			$this->doi_tuong,
			$this->he_may,
			$this->tram_bts,
			$this->doi_so_tram,
			$this->doi_so_hop,
			$this->ghi_chu,
			$this->ma
		]);
	}

	public static function delete($ma){
		$array = DB::delete('delete from danh_ba where ma = ?',[
			$ma
		]);
	}
}
