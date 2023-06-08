<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>

<div class="container">
<div class="d-flex gap-5 p-2 align-items-center justify-content-center">
    @include('layouts.menu')
</div>

   <div id="main" class="formBox">


           @yield('content')

   </div>


</div>


</body>

</html>