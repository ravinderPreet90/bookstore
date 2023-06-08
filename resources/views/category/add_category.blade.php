@extends('layouts.book')
@section('content')


   <form method="post" action="{{ url('save-category')  }}" id="add_category">
    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
       
      </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
  $("#add_category").validate();
  </script>
@stop