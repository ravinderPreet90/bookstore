@extends('layouts.book')
@section('content')

<h1>Book list</h1>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Book Author</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
  	@if(!empty($book))
  	@foreach($book as $bk)
    <tr>
      <th scope="row">1</th>
      <td>{{$bk['title']}}</td>
      <td>{{$bk['description']}}</td>
      <td>{{$bk['price']}}</td>
      <td>{{$bk['category']['name']}}</td>
      <td>
      	@php
      	if(isset($bk['book_author']) && !empty($bk['book_author'])){
      		foreach($bk['book_author'] as $author){
      			echo $author['author_detail']['name'].' ';
      		}
      	}
      	@endphp
      </td>
      <td>
        @php
        if(isset($bk['review']) && !empty($bk['review'])){
          $new=[];
          foreach($bk['review'] as $review){
            $new[]=$review['rating'];
          }
          echo array_sum($new)/count($new);
        }
        @endphp
      </td>
    </tr>
    @endforeach
    @endif

    
  </tbody>
</table>
@stop