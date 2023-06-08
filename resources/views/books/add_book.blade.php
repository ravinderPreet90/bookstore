@extends('layouts.book')
@section('content')


   <form method="post" action="{{ url('save-book')  }}" id="add_book">
    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Book Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" required>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Book Description</label>
        <input type="text" name="description" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Book price</label>
        <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter price" required>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Book Category</label>
       <select class="form-control" name="category_id" required>
        <option value="">Select category</option>
        @foreach($category as $cat)
          <option value="{{$cat['id']}}">{{$cat['name']}}</option>
        @endforeach
       </select>
       
      </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
  $("#add_book").validate();
  </script>
@stop