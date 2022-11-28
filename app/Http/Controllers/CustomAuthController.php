<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Seller;

use Session;
use Hash;

class CustomAuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('signin');
    }
    public function registrationUser(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'mobilNo'=>'required|min:9',
            'address'=>'required',
            'course'=>'required',
            'college'=>'required',
            'year'=>'required',
            'password'=>'required|min:4|max:50'
        ]);
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->mobilNo = $request->mobilNo;
        $user->address = $request->address;
        $user->course = $request->course;
        $user->college = $request->college;
        $user->year = $request->year;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            $request->Session()->put('loginId',$user->id);
            return redirect('index')->with('success','You are a part of our team');
        }else{
            return back()->with('fail','There are some problem to insert your data in my database');
        }


    }
    public function myIndex(){
        $data = array();
        if(Session::has('loginId')){
            return view('newIndex',['all'=>Seller::get()]);
        }
        else{
            return redirect('');

        }
    }
    public function newIndex(){
        if(Session::has('loginId')){
        return view('newIndex',['all'=>Seller::get()]);
        }
        else{
            return view('starter');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'mobilNo'=>'required|min:9',
            'password'=>'required|min:4|max:50'
        ]); 
        $user = User::where('mobilNo','=',$request->mobilNo)->first();
        if($user){
                if(Hash::check($request->password,$user->password)){
                    $request->Session()->put('loginId',$user->id);
                    return redirect('index');
                }else{
                    return back()->with('fail','password does not match');
                }
            }else{
                return back()->with('fail','Your new here register your-self');
            }
        
    }
    public function merchant(){
        return view('myMerchant');
    }
    public function logOut(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function merchantUser(Request $request){
        $request->validate([
            'title'=>'required',
            'dirciption'=>'required|min:100',
            'course'=>'required',
            'year'=>'required',
            'price'=>'required',
            'minimum'=>'required',
            'address'=>'required',
            'img'=>'required'
        ]);
        $value = Session::get('loginId');
        $seller = new Seller();
        $seller->title = $request->title;
        $seller->dirciption = $request->dirciption;
        $seller->course = $request->course;
        $seller->year = $request->year;
        $seller->price = $request->price;
        $seller->minimum = $request->minimum;
        $seller->address = $request->address;
        $seller->myId = $value;
        if($request->hasfile('img')){
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/product', $filename);
            $seller->img = $filename;
        }
        $seller->save();
        return redirect('index')->with('status','product is added successfully');

        $res = $user->save();
    }
    public function myProducts()
    {
        $myval = Session::get('loginId');
        $allProducts = DB::table('sellers')->where('myId', $myval)->get();
        return view('products',['products'=> $allProducts]);
    }
    public function deleteCard($title){
        DB::table('sellers')->where('title', '=', $title)->delete();;
        return redirect("myProducts")->with('status',"data deleted successfully");
    }
}