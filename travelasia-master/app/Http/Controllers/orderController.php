<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\order;

class orderController extends Controller
{
    public function index(){
        return view('');
    }

    /**
     * ШИНЭ ЗАХИАЛГА ҮҮСГЭХ
     * @return $travel - Өгөгдлийн сангаас авсан travel хүснэгтийг массив хэлбэрээр буцаана
     * @exception Exception $e - Өгөгдлийн сантай холбогдоход алдаа гарвал барьж авна
     */
    public function create(){
        global $localTravel;
        try{
            $db = DB::connection()->getPdo();
            $travel = DB::table('travel')->get();
            $localTravel = $travel;
            return view('ordercreate', ['travel'=>$travel]);
                 
        } catch(\Exception $e){
            return view('ordercreate', ['travel'=>$localTravel]);
        }
    }

    /**
     * Өгөгдлийн санд хадгалах
     * @params $id - захиалгын id дугаар, $name - хэрэглэгчийн username, $travel - аялалын id дугаар, $fname - хэрэглэгчийн нэр, 
     * @params $lname - хэрэглэгчийн овог, $mail - хэрэглэгчийн mail хаяг, $phone - хэрэглэгчийн утасны дугаар, $gender - хүйс
     */
    public function storeToDB($id, $name, $travel, $fname, $lname, $mail, $phone, $gender){
        $status = DB::table('orders')->insert(
            ['id' => $id, 'user_username' => $name, 'travel_id' => $travel,
            'traveler_fname' => $fname,
            'traveler_lname' => $lname,
            'traveler_mail' => $mail,
            'traveler_phone' => $phone,
            'traveler_gender' => $gender
            ]
        );
    }
    /**
     * @params $request -> $id - захиалгын id дугаар, $name - хэрэглэгчийн username, $travel - аялалын id дугаар, $fname - хэрэглэгчийн нэр,
     * @params $request -> $lname - хэрэглэгчийн овог, $mail - хэрэглэгчийн mail хаяг, $phone - хэрэглэгчийн утасны дугаар, $gender - хүйс
     * @return admin/travel/show  -> views/ordershow.blade.php
     * @return admin/travel/create -> views/ordercreate.blade.php
     * @excetpion Exception $e - Өгөгдлийн сантай холбогдоход гарах алдааг барьж авна
     */
    public function store(Request $req){
        $orderQueue = new Queue();
        try {
            DB::connection()->getPdo();
            if(!$orderQueue->isEmpty()){
                for($i=0; $i<$orderQueue->count(); $i++){
                     $tmp = $orderQueue->pop();
                     storeToDB($tmp->id, $tmp->usernam, $tmp->travel_id, $tmp->fname, $tmp->lname, $tmp->mail, $tmp->phone, $tmp->gender);
                }
            }
            else{
                storeToDB($req->id, $req->name, $req->travel, $req->fname, $req->lname, $req->mail, $req->phone, $req->gender);
            }
            return redirect('admin/travel/show');
        } catch (\Exception $e) {
            $orderObj = new order();
            $orderObj->id = $req->id;
            $orderObj->username = $req->name;
            $orderObj->travel_id = $req->travel;
            $orderObj->fname = $req->fname;
            $orderObj->lname = $req->lname;
            $orderObj->mail = $req->mail;
            $orderObj->phone = $req->phone;
            $orderObj->gender = $req->gender;
            $orderQueue->push($orderObj);
            return redirect('admin/travel/create');
        }
    }  

    public function show(){
        $travel = DB::select(' select travel.id, travel.name from travel join orders on travel.id = orders.travel_id group by travel.name, travel.id;');
        // echo $travel;

        return view('ordershow', ['travel'=>$travel]);
    }

    public function edit($id){
        $travel = DB::table('orders')
                                    ->where('orders.id', $id)
                                    ->join('travel', 'orders.travel_id','=','travel.id')
                                    ->select('orders.*', 'travel.name')
                                    ->first();

        //echo $travel->category_id;
        return view('orderedit',['travel'=>$travel]);
    }

    public function update(Request $req, $id){
        $status = DB::table('orders')
                                    ->where('orders.id','=',$id)
                                    ->update(['traveler_number'=>$req->count]);
        
        return redirect('admin/order/show');
    }

    public function delete($id){
        $status = DB::table('orders')
                                    ->where('id','=',$id)
                                    ->delete();
                                    echo $status;
        return redirect('admin/order/show');
    }

    public function lista($id){
        $travel = DB::table('orders')
                                    ->join('travel', 'orders.travel_id','=','travel.id')
                                    ->where('travel.id', $id)
                                    ->select('orders.*','travel.id' ,'travel.name')
                                    ->get();
        return view('orderlist', ['travel'=>$travel]);
    }

}
