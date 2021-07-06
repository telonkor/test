<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Category1;
use App\Models\Category2;

class HomeController extends Controller
{
    public function index(){

        $data=Category::all();
        $data1=Category1::all();
        $data2=Category2::all();
        
        return view('home',compact(['data','data1','data2']));
    }
    public function store(Request $request){
        $this->validate($request,['name'=>'required']);
        Category::updateOrInsert(['name'=>$request->name],['name'=>$request->name,'created_at'=>now(),'updated_at'=>now()]);
        return redirect()->route('home')->with('success_message','Ați inserat o categorie!');
    }
    public function update(Request $request){
        $data=Category::where(['name'=>$request->name])->first();
        Category::where(['id'=>$data->id])->update(['name'=>$request->newCat,'updated_at'=>now()]);    
        return redirect()->route('home')->with('success_message','Ați modificat o categorie!');
    }
    public function updateSub(Request $request){
        $data=Category1::where(['name'=>$request->name])->first();
        Category1::where(['id'=>$data->id])->update(['name'=>$request->newCat,'updated_at'=>now()]);    
        return redirect()->route('home')->with('success_message','Ați modificat o subcategorie!');
    }
    public function updateSsub(Request $request){
        $data=Category2::where(['name'=>$request->name])->first();
        Category2::where(['id'=>$data->id])->update(['name'=>$request->newCat,'updated_at'=>now()]);    
        return redirect()->route('home')->with('success_message','Ați modificat o subcategorie!');
    }
    public function destroy(Request $request){
        $data=Category::where(['name'=>$request->name])->first();
        Category::where(['id'=>$data->id])->delete();  
        return redirect()->route('home')->with('success_message','Ați sters o categorie!');
    }
    public function destroySub(Request $request){
        $data=Category1::where(['name'=>$request->name])->first();
        Category1::where(['id'=>$data->id])->delete();  
        return redirect()->route('home')->with('success_message','Ați sters o subcategorie!');
    }
    public function destroySsub(Request $request){
        $data=Category2::where(['name'=>$request->name])->first();
        Category2::where(['id'=>$data->id])->delete();  
        return redirect()->route('home')->with('success_message','Ați sters o subcategorie!');
    }

    public function storeSub(Request $request){
        $this->validate($request,['name'=>'required','subCat'=>'required']);
        $data=Category::where(['name'=>$request->name])->first();
        Category1::updateOrInsert(['name'=>$request->subCat,'category_id'=>$data->id],['name'=>$request->subCat,'category_id'=>$data->id,'created_at'=>now(),'updated_at'=>now()]);
        return redirect()->route('home')->with('success_message','Ați inserat o subcategorie!');
    }
    public function storeSSub(Request $request){
        $this->validate($request,['name'=>'required','subCat'=>'required']);
        $data=Category1::where(['name'=>$request->name])->first();
        Category2::updateOrInsert(['name'=>$request->subCat,'subcategory_id'=>$data->id],['name'=>$request->subCat,'subcategory_id'=>$data->id,'created_at'=>now(),'updated_at'=>now()]);
        return redirect()->route('home')->with('success_message','Ați inserat o subcategorie!');
    }
    public function test(){
        $data=Category::all();
        foreach($data->category as $c){
            echo $c->name;
        }
        
    }
}
