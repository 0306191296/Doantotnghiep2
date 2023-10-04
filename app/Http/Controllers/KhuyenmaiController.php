<?php

namespace App\Http\Controllers;

use App\Models\Khuyenmai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class KhuyenmaiController extends Controller
{
    public function index()
    {
        $khuyenmai = Khuyenmai::all();
        return view('admin/indexkhuyenmai', compact('khuyenmai'));
    }
    public function create()
    {
        //
        return view('admin.formthemkhuyenmai',['title'=>'themkhuyenmai']);
    }
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $validator = Validator::make($request->all(),
            [
                'makm'=> 'required',
        
            ],
               
    );
    if ($validator->fails())
    {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }  
        $newkm= new Khuyenmai();
        $newkm->makm=$request->makm;
        $newkm->tenkm=$request->tenkm;
        $newkm->mota=$request->mota;
        $newkm->phantram=$request->phantram;
        $newkm->trangthai=1;

       
       
        $newkm->save();

        
        return redirect()->route('form-them-moi-khuyen-mai')->with('message','them khuyen mai thanh cong');        
}    
}
}
