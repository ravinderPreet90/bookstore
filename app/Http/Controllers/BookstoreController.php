<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Author;
use App\Models\Assign_author;

class BookstoreController extends Controller
{
    /* Function for showing booklist*/
    public function index(){
        try {
            $book=Book::with('category')->with('book_author')->with('review')->get()->toArray();
            //echo '<pre>';print_R($book);exit;


          return view('books/index',compact('book'));

        } catch (\Exception $e) {

            return $e->getMessage();
        }

    }

    /* Function for add author*/
    public function addBook(){
        try {

            $category=Category::get()->toArray();
            return view('books/add_book',compact('category'));

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    /* Function for save author*/
    public function saveBook(Request $request){
        try {

           if(Book::create($request->all())){
            return redirect()->route('booklist');
          }


        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    /* Function for assign book author*/
    public function bookAuthor(Request $request){
        try {

           $book=Book::get()->toArray();
           $author=Author::get()->toArray();
            return view('books/assign_author',compact('book','author'));


        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    /* Function for save book author*/
    public function savebookAuthor(Request $request){
        try {
            $book_id=$request->book_id;
            $author_id=$request->author_id;
            $check=Assign_author::where('book_id',$book_id)->where('author_id',$author_id)->get()->toArray();

            if(empty($check)){
                if(Assign_author::create($request->all())){
                    return redirect()->route('booklist');
                }
            }else{
                echo 'record already exist';exit;
            }

        


        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
    
    
}
