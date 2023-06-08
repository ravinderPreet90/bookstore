@extends('layouts.book')
@section('content')


   <form method="post" action="{{ url('save-book-author')  }}" id="assign_author">
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
       <select class="form-control" name="author_id">
        <option value="">Select author</option>
        @foreach($author as $auth)
          <option value="{{$auth['id']}}">{{$auth['name']}}</option>
        @endforeach
       </select>
       
      </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
  $("#assign_author").validate();
  </script>
@stop