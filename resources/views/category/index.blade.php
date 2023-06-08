@extends('layouts.book')
@section('content')

<h1>Category list</h1>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
    @if(!empty($category))
    @foreach($category as $k=>$cat)
    <tr>
      <th scope="row">{{$k+1}}</th>
      <td>{{$cat['name']}}</td>
    </tr>
    @endforeach
    @endif
    
    
  </tbody>
</table>
@stop