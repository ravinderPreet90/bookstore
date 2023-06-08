@extends('layouts.book')
@section('content')


   <form method="post" action="{{ url('save-review')  }}" id="assign_author">
    @csrf
      
      <div class="form-group">
        <label for="exampleInputEmail1">Book </label>
       <select class="form-control" name="book_id">
        <option value="">Select book</option>
        @foreach($book as $bk)
          <option value="{{$bk['id']}}">{{$bk['title']}}</option>
        @endforeach
       </select>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Author</label>
       <select class="form-control" name="rating">
        <option value="">Select rating</option>
        @for($i=1;$i<=5;$i++)
          <option value="{{$i}}">{{$i}}</option>
        @endfor
       </select>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Review</label>
        <input type="text" name="review" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter review" required>
       
      </div>
      <input type="hidden" name="user_id" value="{{Auth::id()}}">
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
  $("#assign_author").validate();
  </script>
@stop