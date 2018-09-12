<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   public function getController($stn,$sth){
   	$tong = $stn+$sth;
   	return $tong;
   }
   public function tesst($ten){
   		echo "".$ten;
   }
   // public function getURL(Request $request){
   // 		return $request->path();
   // }
    public function getURL(Request $request){
   		// return $request->url();
   		// if($request->isMethod('GET'))
   		// 	echo "GET";
   		// else
   		// 	echo "#";
   		if($request->is('my*'))
   			echo "co my";
   		else
   			echo "ko";
   }
   public function postForm(Request $request){
   		// echo "ten cua ban la:";
   		// echo $request->HoTen;
   	if($request->has("tuoi"))
   		echo "co lun ne";
   	else
   		echo "co cl y";
   }
}
