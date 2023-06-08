<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Author;
use App\Models\Review;
use App\jobs\TestSendEmail;

class ReviewController extends Controller
{
    public function addReview(){
            $book=Book::get()->toArray();
            $author=Author::get()->toArray();
            return view('review/add_review',compact('book','author'));
    }
    public function saveReview(Request $request){
        if(Review::create($request->all())){
                
                    return redirect()->route('booklist');
                }
    }
     public function sendTestEmails()
    {
        $emailJobs = new TestSendEmail();
        $this->dispatch($emailJobs);
    }

}
