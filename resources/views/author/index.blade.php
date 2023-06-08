@extends('layouts.book')
@section('content')

<h1>Author list</h1>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
    @if(!empty($author))
    @foreach($author as $k=>$auth)
    <tr>
      <th scope="row">{{$k+1}}</th>
      <td>{{$auth['name']}}</td>
    </tr>
    @endforeach
    @endif
    
    
  </tbody>
</table>
@stop