<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TinController extends Controller
{
    function index(){
        return view('index');
    }
    function chitiettin($id){
        $kq = DB::table("tb_news")->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC') ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')->where("idTin", $id)->where("tb_news.AnHien", 1)->first();
        
        $totalYK = DB::table("tb_ykien")->where("idTin", $id)->where("tb_ykien.AnHien", 1)->count();

       /* $tags=explode(",", $kq->tags);*/
        $getYK = DB::table("tb_ykien")->where("idTin", $id)->join('tb_users', 'tb_ykien.idUser', '=', 'tb_users.idUser')->where("tb_ykien.AnHien", 1)->get();
        if($kq!=null){
            $data=["tin"=>$kq,"totalyk"=>$totalYK, "ykien"=>$getYK];
            return view("chitiettin", $data);
        }
    }
}
