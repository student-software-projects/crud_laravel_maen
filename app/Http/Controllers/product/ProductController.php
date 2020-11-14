<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*public function index(){
        $companies=company::all();
        return view('company.index',compact('companies'));
    }
    */
    public function create(){
        $companies=company::all();
        return view('product.create',compact('companies'));
    }
    public function store(Request $request){
        $product=product::create($request->all());
        return redirect()->route('product.index');
    }
    public function show($id){
        $company=company::find($id);
        return view('company.show',compact('company'));
    }

    public function edit($id){
        $company=company::find($id);
        return view('company.edit',compact('company'));
    }

    public function update(Request  $request, $id){
        $compay=company::find($id)->update($request->all());
        return redirect()->route('company.index');

    }
    public function destroy($id){
        $company=company::find($id)->delete();
        return redirect()->route('company.index');
    }

}
