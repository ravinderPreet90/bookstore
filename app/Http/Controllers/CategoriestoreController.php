<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriestoreController extends Controller
{
    /* Function for showing category list*/
    public function index(){
        try {

            $category=Category::get()->toArray();

          return view('category/index',compact('category'));

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    public function addCategory(){
        try {


          return view('category/add_category');

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    public function saveCategory(Request $request){
        try {


          if(Category::create($request->all())){
            return redirect()->route('categorylist');
          }


        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

}
