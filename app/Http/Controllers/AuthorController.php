<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /* Function for showing Author list*/
    public function index(){
        try {

            $author=Author::get()->toArray();

          return view('author/index',compact('author'));

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    /* Function for add author*/
    public function addAuthor(){
        try {


          return view('author/add_author');

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    /* Function for save author*/
    public function saveAuthor(Request $request){
        try {


          if(Author::create($request->all())){
            return redirect()->route('authorlist');
          }


        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
