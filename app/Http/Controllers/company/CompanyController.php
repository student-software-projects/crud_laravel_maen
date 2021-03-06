<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Warning\ObsoleteDTEXT;
use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
{
public function index()
{
    $companies=company::all();
    return view('company.index',compact('companies'));
}
    public function create(){
        return view('company.create');
}
    public function store(Request $request){
            $company=company::create($request->all());
            return redirect()->route('company.index');
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
